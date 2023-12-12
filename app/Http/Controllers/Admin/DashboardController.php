<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;

class DashboardController extends Controller
{
    public function admin_dashboard(){

        $students= User::where('role', 'STUDENT')->where('alumni', NULL)->count();
        $alumni= User::where('role', 'STUDENT')->where('alumni', 'Yes')->count();
        $events= Event::all()->count();
        
        return view('admin.dashboard', compact('students','alumni', 'events'));
     }
}
