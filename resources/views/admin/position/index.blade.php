@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded h-100 p-4">
            <div class="mb-4">
                <h4 >Список должностей</h4>
                <a class="text-success"  href="{{ route('admin.position.create') }}">создать должность</a>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Номер</th>
                        <th scope="col">Название</th>
                        <th scope="col">Сотрудники</th>
                        <th scope="col">Отдел</th>
                        <th scope="col">руб./час</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($positions as $position)
                        <tr>
                            <th scope="row">{{$position->id}}</th>
                            <td>{{$position->title}}</td>
                            <td>{{count($position->users)}}</td>
                            <td>{{$position->department->title}}</td>
                            <td>{{$position->salary}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-3">
            {{$positions->withQueryString()->links()}}
        </div>
    </div>

@endsection
