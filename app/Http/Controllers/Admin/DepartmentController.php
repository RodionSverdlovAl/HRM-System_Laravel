<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Department\StoreRequest;
use App\Models\Department;
use App\Models\Position;
use App\Models\User;
use App\Services\DepartmentService;
use App\Services\StatisticService;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public $service;

    public function __construct(DepartmentService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $departments = Department::paginate(10);
        $dataStr = StatisticService::departmentsByEmployees($departments);
        return view('admin.department.index', compact('departments', 'dataStr'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('admin.department.index');
    }

    public function show(Department $department)
    {
        $positions = Position::where('department_id', $department->id)->get();
        $employees = User::where('department_id', $department->id)->get();
        return view('admin.department.show', compact('department', 'positions', 'employees'));
    }

}
