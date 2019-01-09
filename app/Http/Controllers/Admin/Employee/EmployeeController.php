<?php

namespace App\Http\Controllers\Admin\Employee;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Http\Controllers\Controller;
use Gate;
class EmployeeController extends Controller
{
    public function index()
    {
        if(!Gate::allows('isAdministrator')){
            abort(404);
        }
        $employees = Employee::all();
        return view('admin.employees.index', compact('employees'));
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
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:25',
            'email' => 'required|string|unique:employees',
            'employee_type_id' => 'required',
            'password' => 'required|min:6',
        ]);
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        if($input['employee_type_id'] == '1'){
            $input = array_merge($input, ['employee_type' => 'Administrator']);
        }elseif($input['employee_type_id'] == '2'){
            $input = array_merge($input, ['employee_type' => 'Moderator']);
        }else{
            $input = array_merge($input, ['employee_type' => 'User']);
        }
        $employee = Employee::create($input);
        return redirect()->route('employees.index')
            ->with('success', 'Employee created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return response()->json($employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!Gate::allows('isAdministrator')){
            abort(404);
        }
        $employee = Employee::findOrFail($id);
        return view('admin.employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|string|max:25',
            'email' => 'required|string',
            'employee_type_id' => 'required',
            'password' => 'required|min:6'
        ]);
        $employee = Employee::find($id);
        $data = $request->all();
        $data['password'] = bcrypt($request->input('password'));
        if($data['employee_type_id'] == '1'){
            $employee->update(array_merge($data, ['employee_type' => 'Administrator']));
        }elseif($data['employee_type_id'] == '2'){
            $employee->update(array_merge($data, ['employee_type' => 'Moderator']));
         }else{
            $employee->update(array_merge($data, ['employee_type' => 'User']));
        }
        return redirect()->route('employees.index')
        ->with('success', 'Employee updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
