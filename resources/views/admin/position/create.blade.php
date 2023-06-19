@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-4  px-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h4 class="mb-4">Создание новой должности</h4>
                <form action="{{route('admin.position.store')}}" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input name="title" type="text" class="form-control" id="floatingInput" >
                        <label for="floatingInput">Название должности</label>
                    </div>

                    <div class="form-floating mb-3">
                        <select name="department_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->title}}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Выберите отдел</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="salary" type="number" class="form-control" id="floatingInput" >
                        <label for="floatingInput">Почасовая зарплата руб.</label>
                    </div>
                    <button type="submit" class="btn btn-success m-2">Создать</button>
                </form>
            </div>
        </div>
    </div>
@endsection
