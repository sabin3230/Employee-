<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Models\User;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function applyleave(){

        $data=Leave::all();
        return view('admin.leave', compact('data'));
    }

      public function approved($id){

        
        $data=Leave::findOrFail($id);
        $data->status='approved';
        $data->save();
        return redirect()->back();

    }

      public function rejected($id){

        $data=Leave::findOrFail($id);
        $data->status='rejected';
        $data->save();
        
        return redirect()->back();
    }


    public function index()
    {
      $user = User::orderBy('id','desc')->paginate(5);
        $leave=Leave::all()->count();
        // $user=User::all()->count();
        $department=Department::all()->count();
        return view('admin.maindashboard', compact('leave', 'department', 'user'));
    }
        
    
    // public function profiledetail(){

    //     $user = User::orderBy('id','desc')->paginate(5);
    //     return view('admin.maindashboard', compact('user'));
    // // }
}
