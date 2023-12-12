<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Traits\imageUploadTrait;
use Auth;
use App\Models\ApplyPost;

class PostController extends Controller
{
    use imageUploadTrait;
    public function add_post()
    {
        return view('student.pages.add-post');
    }

    public function submit_post(Request $request){

    if ($request->post_image) {
        $post_image = self::uploadFile($request, fileName: 'post_image', folderName: 'Posts');
    }

    $residential = Post::create([
        'user_id'=> Auth::user()->id,
        'title' => $request->title,
        'describe' => $request->describe,
        'contact' => $request->contact,
        'post_image' => @$post_image,
        
    ]);

    return redirect()->back()->with('success', 'Post Submitted Successfully!');
   }

   public function view_posts(){
    $post = Post::where('user_id', Auth::user()->id)->get();
        return view('student.pages.view-posts', compact('post'));
    }

    public function post_delete(Post $post){
         Post::destroy($post->id);
        return redirect()->back()->with('success','Record Deleted Successfully');     

     }

     public function edit_post(Post $post){
        return view('student.pages.edit-post', compact('post'));
    }

    public function update_post(Request $request, Post $post) {

    if ($request->hasFile('post_image')) {
        $profile = self::uploadFile($request, fileName: 'post_image', folderName: 'Posts');
        $post->update(['post_image' => $profile]);
    }

    $post->update([
        'title' => $request->title,
        'describe' => $request->describe,
        'contact' => $request->contact,
        
    ]);

    return redirect()->route('view-posts')->with('success', 'Record Updated Successfully!');
  }

  public function apply_post(Post $post){
        return view('apply-post', compact('post'));
    }


    public function apply_savepost(Request $request){
    $request->validate([
        'full_name' => 'required',
        'email' => 'required|email|unique:apply_posts', 
        
        'contact' => 'required',
        'qualification' => 'required',
        'experience' => 'required',
    ]);

    $residential = ApplyPost::create([
        'post_id' => $request->post_id,
        'full_name' => $request->full_name,
        'email' => $request->email,
        'contact' => $request->contact,
        'qualification' => $request->qualification,
        'experience' => $request->experience,
    ]);

    return redirect()->back()->with('success', 'Record Submitted Successfully!');
}

public function cv_posts(){
    $cv = ApplyPost::all();
    return view('student.pages.cv-post', compact('cv'));
    }

    public function cv_delete(ApplyPost $applyPost){
         ApplyPost::destroy($applyPost->id);
        return redirect()->back()->with('success','Record Deleted Successfully');     

     }

}
