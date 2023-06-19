@extends('layouts.admin')
@section('content')
    <div class=" container-fluid pt-4 px-4">
        <div class="container bg-secondary pt-4">

            <div class="table-responsive">
                <h6 class="mb-4">Задачи</h6>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Задача</th>
                        <th scope="col">Работник</th>
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
                            <td><a href="{{route('admin.task.show', $task->id)}}">{{$task->title}}</a></td>
                            <td>{{$task->employee->surname . " " . $task->employee->name}}</td>
                            <td>{{$task->director->surname . " " . $task->director->name}}</td>
                            @if($task->status == 1)
                                <td>В работе</td>
                            @endif
                            @if($task->status != 1)
                                <td>Выполнена</td>
                            @endif
                            <td>{{$task->work_time}} ч.</td>
                            <td>{{$task->month . "/" . $task->year}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
