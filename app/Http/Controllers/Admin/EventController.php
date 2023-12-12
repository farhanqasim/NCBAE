<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Validator;
use App\Traits\imageUploadTrait;

class EventController extends Controller
{
     use imageUploadTrait;

    public function add_events(){
        return view('admin.pages.add-events');
    }

    public function addevents(Request $request){

    if ($request->profile) {
        $profile = self::uploadFile($request, fileName: 'profile', folderName: 'Events');
    }

    $residential = Event::create([
        'title' => $request->title,
        'describe' => $request->describe,
        'date' => $request->date,
        'time' => $request->time,
        'profile' => @$profile,
        
    ]);

    return redirect()->back()->with('success', 'Event Details Submitted Successfully!');
   }

   public function view_events(){
    $events =Event::all();
        return view('admin.pages.view-events', compact('events'));
    }

    public function event_delete(Event $event){
         Event::destroy($event->id);
        return redirect()->back()->with('success','Record Deleted Successfully');     

     }

     public function edit_event(Event $event){
        return view('admin.pages.edit-event', compact('event'));
    }

    public function update_event(Request $request, Event $event) {

    if ($request->hasFile('profile')) {
        $profile = self::uploadFile($request, fileName: 'profile', folderName: 'Events');
        $event->update(['profile' => $profile]);
    }

    $event->update([
        'title' => $request->title,
        'describe' => $request->describe,
        'date' => $request->date,
        'time' => $request->time,
       
    ]);

    return redirect()->route('view-events')->with('success', 'Record Updated Successfully!');
  }
}
