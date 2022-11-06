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
        
            $user  = User::create([
                'name'=> request('name'),
                'address'=>request('address'),
                'contact' => request('contact'),
                'email'=>request('email'),
                'password'=>Hash::make($request['password']),
                'department_id' => request('department_id'),
                'join_date'=> request('join_date'),
                'dob' =>request('dob'),
                'role'=> request('role'),
                'is_active'=> request('is_active'),

            ]);
            
        return redirect()->route('employee.index')->with('success','Employee has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Employee  $employee
    * @return \Illuminate\Http\Response
    */
    public function show(User $user)
    {
       //
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
    public function update(Request $request, User $user)
    {
        $request->validate([

           
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'password' => 'required',
            'department_id' => 'required',
            'join_date'=> 'required',
            'dob' =>'required',
            'role'=> 'required',
            'is_active'=> 'required',
        ]);

        // 
        
        $user->fill($request->post())->save();

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
