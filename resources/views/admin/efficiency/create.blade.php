@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded h-100 p-4">
            <form action="{{route('admin.efficiency.store')}}" method="post">
                @csrf
                <h4 class="mb-4">Оценка эффективности сотрудника {{$employee->name ." " . $employee->surname}}</h4>
                <div class="form-floating mb-3">
                    <input style="display: none" name="employee_id" value="{{$employee->id}}" type="number"  class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Идентификационный номер работника {{$employee->surname . " " . $employee->name}}</label>
                </div>

                <div class="form-floating mb-3">
                    <select name="assessment" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option value="1">Низкая эффективность (-20% к начислениям за месяц)</option>
                        <option value="2">Плохая эффективность (-10% к начислениям за месяц)</option>
                        <option value="3">Хорошая эффективность (+10% к начислениям за месяц)</option>
                        <option value="4">Высокая эффективность (+20% к начислениям за месяц)</option>
                    </select>
                    <label for="floatingSelect">Эффективность работы</label>
                </div>

                <h6>Укажите год и месяц за который будет оценена работа</h6>
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
                <button type="submit" class="btn btn-success m-2">Оценить эффективность</button>
            </form>

        </div>
    </div>
@endsection
