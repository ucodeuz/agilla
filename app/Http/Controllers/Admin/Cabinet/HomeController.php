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
            'password' => 'required|min:6',
            'password_confirm' => 'required_with:password|same:password|min:6'
        ]);
        $credentials = $request->only('password');
        $employee = Auth::user();
        $employee->password = bcrypt($credentials['password']);
        $employee->save();
        return redirect()->back()->with('success', "успешно отредактирована!");
    }
}
