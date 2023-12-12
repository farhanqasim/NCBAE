<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\imageUploadTrait;
use App\Models\Course;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
     use imageUploadTrait;
    public function add_student(){
        return view('admin.pages.add-student');
    }

    public function addStudents(Request $request)
{
    // Validation rules
    $rules = [
    
        'contact' => 'required|string|max:15',
        'email' => 'required|email|unique:users',
        
        
    ];

    // Validation messages
    $messages = [
        'cnic.unique' => 'The CNIC has already been taken.',
        'email.unique' => 'The email address has already been taken.',
    ];

    $validator = Validator::make($request->all(), $rules, $messages);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    if ($request->profile) {
        $profile = self::uploadFile($request, fileName: 'profile', folderName: 'student_images');
    }

    $residential = User::create([
        'name' => $request->name,
        'father_name' => $request->father_name,
        'cnic' => $request->cnic,
        'qualification' => $request->qualification,
        'total_marks' => $request->total_marks,
        'obtain_marks' => $request->obtain_marks,
        'program' => $request->program,
        'duration' => $request->duration,
        'contact' => $request->contact,
        'profile' => @$profile,
        'email' => $request->email,
        'password' => Hash::make($request['password']),
        'gender' => $request->gender,
    ]);

    return redirect()->back()->with('success', 'Student Details Submitted Successfully!');
}


    public function view_student(){
        $student = User::where('role', 'STUDENT')->where('alumni', NULL)->orWhere('alumni', 'No')->get();
        return view('admin.pages.view-students', compact('student'));
    }

    public function student_delete(User $user){
         User::destroy($user->id);
        return redirect()->back()->with('success','Record Deleted Successfully');     

     }

     public function edit_student(User $user){
        return view('admin.pages.edit-student', compact('user'));
    }

    public function update_student(Request $request, User $user) {
    // Check if a new profile picture was uploaded
    if ($request->hasFile('profile')) {
        $profile = self::uploadFile($request, fileName: 'profile', folderName: 'student_images');
        $user->update(['profile' => $profile]);
    }

    $user->update([
        'name' =>     $request->name,
        'father_name' =>     $request->father_name,
        'cnic' =>        $request->cnic,
        'qualification' =>        $request->qualification,
        'total_marks' =>     $request->total_marks,        
        'obtain_marks' =>      $request->obtain_marks,       
        'program' =>    $request->program,
        'duration' =>      $request->duration,
        'contact' =>    $request->contact,
        'email' =>   $request->email,
        'alumni' =>   $request->alumni,
        'company_name' =>   $request->company_name,
       
    ]);

    return redirect()->route('view-student')->with('success', 'Record Updated Successfully!');
  }

  public function view_studentinfo(User $user){
        return view('admin.pages.view-studentinfo', compact('user'));
    }

    public function alumni_student(){
        $student = User::where('role', 'STUDENT')->where('alumni', 'Yes')->get();
        return view('admin.pages.alumni-students', compact('student'));
    }
}
