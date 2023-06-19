@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <h4 class="mb-0">Детальный просмотр отдела {{$department->title}}</h4>
            <div class="mt-1">
                <p class="mb-0">Всего должностей: {{count($positions)}}</p>
                <p class="mb-0">Всего сотрудников: {{count($employees)}}</p>
                <a href="{{route('admin.department.index')}}">к списку отделов</a>
            </div>

            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Список должностей</h6>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">№</th>
                            <th scope="col">Название</th>
                            <th scope="col">сотрудников</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($positions as $position)
                            <tr>
                                <th>{{$position ->id}}</th>
                                <td>{{$position ->title}}</td>
                                <td>{{count($position->users)}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Список сотрудников</h6>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">№</th>
                            <th scope="col">Фамилия Имя</th>
                            <th scope="col">Должность</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <th>{{$employee->id}}</th>
                                    <td>{{$employee->surname . " " . $employee->name}}</td>
                                    <td>{{$employee->position->title}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
