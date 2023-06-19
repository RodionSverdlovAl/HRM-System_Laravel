<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\FilterRequest;
use App\Http\Filters\TaskFilter;
use App\Models\Efficiency;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function index()
    {
        return view('admin.salary.index');
    }
    public function indexFilterable(FilterRequest $request)
    {
        $employees = User::where('role', 'user')->get();
        $dataArr=[];
        $data = $request->validated();
        foreach ($employees as $employee)
        {
            $efficiency = Efficiency::where('year', $data['year'])
                ->where('month', $data['month'])->where('employee_id',$employee->id)->get();

            $filter = app()->make(TaskFilter::class, ['queryParams'=>array_filter($data)]);
            $tasks = Task::where('employee_id', $employee->id)->where('status', 2)->filter($filter)->get();
            $allHours = 0;
            foreach ($tasks as $task){
                $allHours+=$task->work_time;
            }
            $salary = $allHours * $employee->position->salary;
            $dataItem['assessment'] = 'не оценено';
            if(count($efficiency)>0)
            {
                if($efficiency[0]->assessment == 1){
                    $salary = $salary * 0.8;
                    $dataItem['assessment'] = 'низнкая';
                }
                if($efficiency[0]->assessment == 2){
                    $salary = $salary * 0.9;
                    $dataItem['assessment'] = 'плохая';
                }
                if($efficiency[0]->assessment == 3){
                    $salary = $salary * 1.1;
                    $dataItem['assessment'] = 'хорошая';
                }
                if($efficiency[0]->assessment == 4){
                    $salary = $salary * 1.2;
                    $dataItem['assessment'] = 'высокая';
                }
            }
            $dataItem['employee'] = $employee;
            $dataItem['hours'] = $allHours;
            $dataItem['salary'] = $salary;
            $dataArr[] = $dataItem;
        }

        return view('admin.salary.index', compact('dataArr'));

    }
}
