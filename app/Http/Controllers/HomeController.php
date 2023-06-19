<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Position;
use App\Models\Task;
use App\Models\User;
use App\Services\StatisticService;
use Illuminate\Http\Request;

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
        $departments = Department::all();

        $wigetsData['departments'] = count(Department::all());
        $wigetsData['positions'] = count(Position::all());
        $wigetsData['workers'] = count(User::where('role', 'user')->get());
        $wigetsData['tasks'] = count(Task::all());

        return view('admin.main' , compact('wigetsData'));
    }
}
