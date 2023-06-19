@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded h-100 p-4">
            <h4 class="mb-4">Редактирование сотрудника</h4>
            <form method="POST" action="{{ route('admin.employee.update' ,$employee->id) }}">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Имя</label>
                    <input value="{{$employee->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Фамилия</label>
                    <input value="{{$employee->surname}}" name="surname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Фото</label>
                    <input value="{{$employee->avatar}}" name="avatar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Телефон</label>
                    <input value="{{$employee->phone}}" name="phone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Должность и отдел</label>
                    <select name="position_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        @foreach($positions as $position)
                            @if($position->id == $employee->position->id)
                                <option selected value="{{$position->id}}">{{$position->title}} (отдел: {{$position->department->title}} )</option>
                            @endif
                            @if($position->id != $employee->position->id)
                                    <option value="{{$position->id}}">{{$position->title}} (отдел: {{$position->department->title}} )</option>
                                @endif
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Сохранить изменения</button>
            </form>
        </div>
    </div>
@endsection
