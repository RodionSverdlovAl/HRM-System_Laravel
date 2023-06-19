@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded h-100 p-4">
            <form action="{{route('admin.task.store')}}" method="post">
                @csrf
                <h4 class="mb-4">Постановка задачи</h4>
                <div class="form-floating mb-3">
                    <input style="display: none" name="director_id" value="{{auth()->user()->id}}" type="number" class="form-control" id="floatingInput" placeholder="name@example.com">

                </div>
                <div class="form-floating mb-3">
                    <input style="display: none" name="employee_id" value="{{$employee->id}}" type="number"  class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Идентификационный номер работника {{$employee->surname . " " . $employee->name}}</label>

                </div>
                <div class="form-floating mb-3">
                    <input name="title" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Название задачи</label>
                    @error('title')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <textarea name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px;"></textarea>
                    <label for="floatingTextarea">Описание задачи</label>
                    @error('description')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <select name="status" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option value="1">Требуется выполнить</option>
                        <option value="2">Уже выполнена работником</option>
                    </select>
                    <label for="floatingSelect">Поставте статус задачи</label>
                    @error('status')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input name="work_time" type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Укажите время в часах которое требуется на выполнение</label>
                    @error('work_time')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <h6>Укажите дату выполнения задачи</h6>
                <div class="form-floating mb-3">
                    <select name="month" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option value="1">Январь</option>
                        <option value="2">Февраль</option>
                        <option value="3">Март</option>
                        <option value="4">Апрель</option>
                        <option value="5">Май</option>
                        <option value="6">Июнь</option>
                        <option value="7">Июль</option>
                        <option value="8">Август</option>
                        <option value="9">Сентябрь</option>
                        <option value="10">Октябрь</option>
                        <option value="11">Ноябрь</option>
                        <option value="12">Декабрь</option>
                    </select>
                    <label for="floatingSelect">Месяц</label>
                    @error('month')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <select name = "year" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                    </select>
                    <label for="floatingSelect">Год</label>
                    @error('year')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success m-2">Поставить задачу</button>
            </form>

        </div>
    </div>
@endsection
