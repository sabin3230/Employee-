<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $leave = Leave::orderBy('id','desc')->paginate(5);
        return view('employee.leave', compact('leave'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Leave $leave)
    {
        //     $leave  = Leave::create([
        //     'from'=> request('from'),
        //     'to'=>request('to'),
        //     'reason' => request('reason'),
        //      'user_id' => auth()->id() 
        //     ]);
            
        // return redirect()->route('leave.store')->with('success','Apply Leave has been successfully send.');

         $request->validate([
            'from'=> request('from'),
            'to'=> request('to'),
            'reason' => request('reason'),
            'status' => request('status'),
            'user_id' => auth::user()->id,
        
        
        ]);  
          dd($request->all());
            $leave->fill($request->post())->save();

        return redirect()->route('leave.index')->with('success','Department has been created successfully.');

    }   


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function show(Leave $leave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function edit(Leave $leave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leave $leave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leave $leave)
    {
        //
    }
}
