@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="container">
            <div class="main-body">

                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb" class="main-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.employee.index')}}">Сотрудники</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$employee->surname . " " . $employee->name}}</li>
                    </ol>
                </nav>
                <!-- /Breadcrumb -->

                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card bg-secondary">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{$employee->avatar}}" alt="Admin" class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4 class="">{{$employee->surname . " " . $employee->name}}</h4>
                                        <p class=" mb-1">{{$employee->position->title}}</p>
                                        <p class="text-muted font-size-sm mb-1"> Отдел: {{$employee->department->title}}</p>
                                        <p class="text-muted font-size-sm mb-1"> Выполненных работ: {{$finishedTasksCount}}</p>
                                        <p class="text-muted font-size-sm mb-3"> Всего часов: {{$allHour}}</p>
                                        <a type="button" href="{{route('admin.task.create',$employee->id)}}" class="btn btn-outline-success">Поставить задачу</a>
                                        <a type="button" href="{{route('admin.efficiency.create',$employee->id)}}" class="btn btn-outline-success"> Оценить работу</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="card bg-secondary mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">ФИО</h6>
                                    </div>
                                    <div class="col-sm-9 ">
                                        {{$employee->surname . " ". $employee->name}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0 ">Почта</h6>
                                    </div>
                                    <div class="col-sm-9 ">
                                        {{$employee->email}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0 ">Телефон</h6>
                                    </div>
                                    <div class="col-sm-9 ">
                                        {{$employee->phone}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0 ">Отдел</h6>
                                    </div>
                                    <div class="col-sm-9 ">
                                        {{$employee->department->title}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0 ">Должность</h6>
                                    </div>
                                    <div class="col-sm-9 ">
                                        {{$employee->position->title}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <a class="btn btn-info " target="__blank" href="{{route('admin.employee.edit', $employee->id)}}">Редактировать</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4 ">Задачи</h6>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Задача</th>
                        <th scope="col">Постановщик</th>
                        <th scope="col">Статус</th>
                        <th scope="col">Время</th>
                        <th scope="col">Дата</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <th>{{$task->id}}</th>
                            <td>{{$task->title}}</td>
                            <td>{{$task->director->surname . " " . $task->director->name}}</td>
                            @if($task->status == 1)
                                <td>В работе</td>
                            @endif
                            @if($task->status != 1)
                                <td>Выполнена</td>
                            @endif
                            <td>{{$task->work_time}} часов</td>
                            <td>{{$task->month . "/" . $task->year}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
