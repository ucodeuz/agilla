<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class DashboardController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth:admin');
    }

    public function index(){
        if(Auth::guard('admin')->check()){
            return view('admin.dashboard');
        }else{
            return redirect()->route('admin.login');
        }
        
    }
}
