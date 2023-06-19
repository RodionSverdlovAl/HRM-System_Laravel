@extends('layouts.user')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="container">
            <div class="main-body">

                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb" class="main-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">{{$employee->surname . " " . $employee->name}}</li>
                    </ol>
                </nav>
                <!-- /Breadcrumb -->

                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{$employee->avatar}}" alt="Admin" class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4 class="text-black-50">{{$employee->surname . " " . $employee->name}}</h4>
                                        <p class="text-secondary mb-1">{{$employee->position->title}}</p>
                                        <p class="text-muted font-size-sm mb-1"> Отдел: {{$employee->department->title}}</p>
                                        <p class="text-muted font-size-sm mb-1"> Выполненных работ: {{$finishedTasksCount}}</p>
                                        <p class="text-muted font-size-sm mb-3"> Всего часов: {{$allHour}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0 text-black-50">ФИО</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$employee->surname . " ". $employee->name}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0 text-black-50">Почта</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$employee->email}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0 text-black-50">Телефон</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$employee->phone}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0 text-black-50">Отдел</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$employee->department->title}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0 text-black-50">Должность</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$employee->position->title}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <a class="btn btn-info " target="__blank" href="#">Редактировать</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4 ">Задачи требующие выполнения</h6>
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
                        <th scope="col">Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($inWorkTasks as $task)
                        <tr>
                            <th>{{$task->id}}</th>
                            <td class="text-info">{{$task->title}}</td>
                            <td>{{$task->director->surname . " " . $task->director->name}}</td>
                            @if($task->status == 1)
                                <td>В работе</td>
                            @endif
                            @if($task->status != 1)
                                <td>Выполнена</td>
                            @endif
                            <td>{{$task->work_time}} часов</td>
                            <td>{{$task->month . "/" . $task->year}}</td>
                            <td><a href="{{route('complete.task', $task->id)}}" class="btn btn-outline-info">Выполнить</a></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4 ">Выполенные задачи</h6>
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
                @foreach($finishedTasks as $task)
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
