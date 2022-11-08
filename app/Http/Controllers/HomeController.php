<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard(){
        $bd_container = 0;
            if(Auth::user()->dob == \Carbon\Carbon::now()->toDateString()){
                if (Session::get('bd_shown') == 0){
                $bd_container = 1;
                Session::put('bd_shown', 1);
                }
            }
        return view('employee.dashboard');
    }

    public function main(){
        return view('main');
    }

   
}
