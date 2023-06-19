<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\UpdateRequest;
use App\Models\Position;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function showRegistrationForm()
    {
        $positions = Position::all();
        return view('admin.employee.register',compact('positions'));
    }

    public function index()
    {
        $employees = User::where('role', 'user')->get();
        //dd($employees);
        return view('admin.employee.index',compact('employees'));
    }
    public function show(User $employee)
    {
        $tasks = Task::where('employee_id', $employee->id)->get();
        $finishedTasks = Task::where('employee_id', $employee->id)->where('status', 2)->get();
        $allHour = 0;
        foreach ($finishedTasks as $task){
            $allHour+=$task->work_time;
        }
        $finishedTasksCount = count($finishedTasks);


        return view('admin.employee.show',
            compact('employee' , 'tasks', 'finishedTasksCount', 'allHour'));
    }

    public function edit(User $employee)
    {
        $positions = Position::all();
        return view('admin.employee.edit', compact('employee','positions'));
    }
    public function update(UpdateRequest $request, User $employee){
        $data = $request->validated();
        $departmentId = Position::where('id', $data['position_id'])->firstOrFail()->department_id;
        $data['department_id'] = $departmentId;
        $employee->update($data);
        return redirect()->route('admin.employee.show',$employee->id);
    }
}
