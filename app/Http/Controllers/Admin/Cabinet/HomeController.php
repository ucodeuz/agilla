<?php

namespace App\Http\Controllers\Admin\Cabinet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Auth;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(){
        $employeeId = Auth::user()->id;
        $employee = Employee::with('department')->whereId($employeeId)->first();
        return view("admin.employees.profile", compact('employee'));
    }

    public function update(Request $request){
        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
        ]);
        return redirect()->back()->with('success', "успешно отредактирована!");
    }
}
