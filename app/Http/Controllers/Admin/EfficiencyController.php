<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Efficiency\StoreRequest;
use App\Models\Efficiency;
use App\Models\User;
use Illuminate\Http\Request;

class EfficiencyController extends Controller
{
    public function create(User $employee)
    {
        return view('admin.efficiency.create', compact('employee'));
    }
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $efficiencies = Efficiency::where('employee_id', $data['employee_id'])->get();
        foreach ($efficiencies as $efficiency)
        {
            if($efficiency->year == $data['year'] && $efficiency->month == $data['month'])
            {
                $efficiency->delete();
            }
        }
        Efficiency::create($data);
        return redirect()->route('admin.employee.show',$data['employee_id']);
    }
}
