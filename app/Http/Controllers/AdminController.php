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
        $users=User::all()->count();
        $department=Department::all()->count();
        return view('admin.maindashboard', compact('leave', 'department', 'user','users'));
    }
        
    
    // public function profiledetail(){

    //     $user = User::orderBy('id','desc')->paginate(5);
    //     return view('admin.maindashboard', compact('user'));
    // // }

     public function profile(){
        return view('employee.profile');
    }

    public function profileupdate($id){
        $user = User::find($id);
        return view('employee.employeeupdate',compact('user'));
    }

    public function update(Request $request, User $user, $id)
    {
            $request->validate([
              'image' =>'required',
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'contact' => 'required',
            'dob' => 'required', 
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $userImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $userImage);
            $input['image'] = $userImage;
        }

        $user = user::find($id);
        $user->update([
                'name'=> $input['name'],
                'image'=> $input['image'],
                'address'=>$input['address'],
                'contact' => $input['contact'],
                'email'=>$input['email'],
                'dob' =>$input['dob'],
        ]);
        

        return redirect()->route('profile')->with('success','Employee Has Been updated successfully');
  }
}