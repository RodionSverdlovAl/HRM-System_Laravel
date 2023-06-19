<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function index()
    {

        $departmentsStatistic = $this->departmentHours();
        return view('admin.statistic.department-hours', compact('departmentsStatistic'));
    }

    private function departmentCountTasks()
    {

    }
    private function departmentHours()
    {
        $departments = Department::all();
        $statisticStrHours = '';
        $statisticStrCountsTasks = '';
        foreach ($departments as $department){
              $users = User::where('department_id', $department->id)->get();
              $tasks = [];
              foreach ($users as $user){
                  $tasksArray = $user->tasks;
                  foreach ($tasksArray as $task)
                  {
                      if($task->status == 2){
                          $tasks[] = $task;
                      }
                  }
              }
              $countHours =0;
              foreach ($tasks as $task)
              {
                  $countHours += $task->work_time;
              }

              $itemDepHour = '["'.$department->title .'", '.$countHours .',"silver"],';
              $itemDepCountTasks = '["'.$department->title .'", '.count($tasks) .',"silver"],';

              $statisticStrHours .=$itemDepHour;
              $statisticStrCountsTasks .= $itemDepCountTasks;
              $statisticArray['hours'] =  $statisticStrHours;
              $statisticArray['tasks'] = $statisticStrCountsTasks;

        }
       return $statisticArray;
    }
}
