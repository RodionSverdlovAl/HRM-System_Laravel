<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Position\StoreRequest;
use App\Models\Department;
use App\Models\Position;
use App\Services\PositionService;

class PositionController extends Controller
{
    public $service;

    public function __construct(PositionService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $departments = Department::all();
        $positions = Position::paginate(10);
        return view('admin.position.index', compact('positions', 'departments'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('admin.position.create', compact('departments'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('admin.position.index');
    }
}
