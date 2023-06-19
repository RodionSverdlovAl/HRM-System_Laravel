<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreRequest;
use App\Http\Requests\Task\UpdateRequest;
use App\Models\Task;
use App\Models\User;
use App\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public $service;

    public function __construct(TaskService $service)
    {
        $this->service = $service;
    }

    public function create(User $employee)
    {
        return view('admin.task.create', compact('employee'));
    }
    public function index()
    {
        $tasks = Task::all();
        return view('admin.task.index', compact('tasks'));
    }
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('admin.employee.show',$data['employee_id']);
    }

    public function completeTask(Task $task)
    {
        $task->update(['status' => 2]);
        return redirect()->route('user.profile');
    }

    public function show(Task $task)
    {
        return view('admin.task.show', compact('task'));
    }
}
