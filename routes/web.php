<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
// Маршруты администратора
Route::group(['middleware' => 'admin'], function (){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Маршруты для работы с отделами
    Route::get('/admin/department/view', [App\Http\Controllers\Admin\DepartmentController::class, 'index'])
        ->name('admin.department.index');
    Route::post('/admin/department/store', [App\Http\Controllers\Admin\DepartmentController::class, 'store'])
        ->name('admin.department.store');
    Route::get('/admin/department/{department}', [App\Http\Controllers\Admin\DepartmentController::class, 'show'])
        ->name('admin.department.show');

// Маршруты для работы с должностями
    Route::get('/admin/position/view', [App\Http\Controllers\Admin\PositionController::class, 'index'])
        ->name('admin.position.index');
    Route::get('admin/position/create', [App\Http\Controllers\Admin\PositionController::class, 'create'])
        ->name('admin.position.create');
    Route::post('/admin/position/store', [App\Http\Controllers\Admin\PositionController::class, 'store'])
        ->name('admin.position.store');

// Маршруты для работы с аккаунтами/сотрудниками
    Route::get('admin/employees/view', [App\Http\Controllers\Admin\EmployeeController::class, 'index'])
        ->name('admin.employee.index');
    Route::get('admin/employee/register', [App\Http\Controllers\Admin\EmployeeController::class, 'showRegistrationForm'])
        ->name('admin.employee.register');
    Route::get('admin/employee/{employee}',[App\Http\Controllers\Admin\EmployeeController::class, 'show'])
        ->name('admin.employee.show');
    Route::get('admin/employee/edit/{employee}', [App\Http\Controllers\Admin\EmployeeController::class, 'edit'])
        ->name('admin.employee.edit');
    Route::patch('admin/employee/update/{employee}', [App\Http\Controllers\Admin\EmployeeController::class, 'update'])
        ->name('admin.employee.update');


    //Маршруты для работы с задачами
    Route::get('admin/task/create/{employee}', [App\Http\Controllers\Admin\TaskController::class, 'create'])
        ->name('admin.task.create');
    Route::post('admin/task/store', [App\Http\Controllers\Admin\TaskController::class, 'store'])
        ->name('admin.task.store');
    Route::get('admin/tasks/all/view', [App\Http\Controllers\Admin\TaskController::class,'index'])
        ->name('admin.tasks.view');
    Route::get('admin/task/show/{task}', [App\Http\Controllers\Admin\TaskController::class, 'show'])
        ->name('admin.task.show');

    Route::get('admin/salary', [App\Http\Controllers\Admin\SalaryController::class, 'index'])
        ->name('admin.salary');
    Route::get('admin/salary/filtered',[App\Http\Controllers\Admin\SalaryController::class, 'indexFilterable'])
        ->name('admin.salary.filterable');


    Route::get('admin/efficiency/create/{employee}', [App\Http\Controllers\Admin\EfficiencyController::class, 'create'])
        ->name('admin.efficiency.create');
    Route::post('admin/efficiency/store',[App\Http\Controllers\Admin\EfficiencyController::class, 'store'])
        ->name('admin.efficiency.store');

    //маршруты для работы со статистикой
    Route::get('admin/statistic/index', [App\Http\Controllers\Admin\StatisticController::class, 'index'])
        ->name('admin.statistic.index');

});



// Маршруты работника
Route::get('user/profile',[App\Http\Controllers\User\ProfileController::class, 'index'])
    ->name('user.profile');
Route::get('user/task/update/{task}', [App\Http\Controllers\Admin\TaskController::class, 'completeTask'])
    ->name('complete.task');






//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
