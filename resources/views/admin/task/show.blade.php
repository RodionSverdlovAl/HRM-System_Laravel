@extends('layouts.admin')
@section('content')
    <div class=" container-fluid pt-4 px-4">
        <h3>Задача: {{$task->title}}</h3>
        <p>Исполнитель: {{$task->employee->surname . " " . $task->employee->name}}</p>
        <p>Постановщик: {{$task->director->surname . " " . $task->director->name}}</p>
        <p>Описание задачи: {{$task->description}}</p>
        @if($task->status == 1)
            <p>Статус: В работе</p>
        @endif
        @if($task->status != 1)
            <p> Статус: Выполнена</p>
        @endif
        <p>Дата: {{$task->month}}/{{$task->year}}</p>
    </div>
@endsection
