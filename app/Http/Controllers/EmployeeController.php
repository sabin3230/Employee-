<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(5);
        return view('admin.employee.index', compact('users'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('admin.employee.create')->with('departments', Department::all());
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request, User $user)
    {

            
        $input = $request->all();

            if ($image = $request->file('image')) {
                    $destinationPath = 'images/';
                    $employeeImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                    $image->move($destinationPath, $employeeImage);
                    $input['image'] = $employeeImage;
                }
        
            $user  = User::create([
                'name'=> $input['name'],
                'image'=> $input['image'],
                'address'=>$input['address'],
                'contact' => $input['contact'],
                'email'=>$input['email'],
                'password'=>Hash::make($input['password']),
                'department_id' => $input['department_id'],
                'join_date'=> $input['join_date'],
                'dob' =>$input['dob'],
                'role'=> $input['role'],
                'is_active'=> $input['is_active'],

            ]);

            
        return redirect()->route('employee.index')->with('success','Employee has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Employee  $employee
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.detaile',compact('user'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Employee  $employee    
    * @return \Illuminate\Http\Response
    */
    public function edit(User $user, $id)
    {
         $user = User::find($id);
        return view('admin.employee.edit')->with('departments', Department::all())->with('user', $user);
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Employee  $employee
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, User $user, $id)
    {
            $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'join_date' => ' required',
            'dob' => 'required', 
            'role' => 'required',
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
                'password'=>Hash::make($input['password']),
                'department_id' => $input['department_id'],
                'join_date'=> $input['join_date'],
                'dob' =>$input['dob'],
                'role'=> $input['role'],
                'is_active'=> $input['is_active'],
        ]);
        

        return redirect()->route('employee.index')->with('success','Employee Has Been updated successfully');


    }

    

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Employee  $employee
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {

        User::find($id)->delete();
        return redirect()->route('employee.index')->with('success','Department has been deleted successfully');
    }
}
