<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $tasks = Task::where('employee_id', auth()->user()->id)->get();
        $employee = User::where('id', auth()->user()->id)->firstOrFail();

        $tasks = Task::where('employee_id', $employee->id)->get();
        $finishedTasks = Task::where('employee_id', $employee->id)->where('status', 2)->get();
        $inWorkTasks = Task::where('employee_id', $employee->id)->where('status', 1)->get();
        $allHour = 0;
        foreach ($finishedTasks as $task){
            $allHour+=$task->work_time;
        }
        $finishedTasksCount = count($finishedTasks);

        return view('user.profile', compact('tasks', 'employee', 'finishedTasksCount', 'finishedTasks', 'allHour', 'inWorkTasks'));
    }
}
