@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded h-100 p-4">

            <div class="mb-4">
                <h4>Список сотрудников</h4>
                <a class="text-success"  href="{{ route('admin.employee.register') }}">зарегистрировать сотрудника</a>
            </div>

            <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Поиск сотрудника">

            <div class="table-responsive" >
                <table class="table" id="employeeTable">
                    <thead>
                    <tr>
                        <th scope="col">Номер</th>
                        <th scope="col">Фото</th>
                        <th scope="col">Фамилия Имя</th>
                        <th scope="col">Отдел</th>
                        <th scope="col">Должность</th>
                        <th scope="col">Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($employees as $employee)
                        <tr>
                            <th>{{$employee->id}}</th>
                            <th><img src="{{$employee->avatar}}" width="40px" height="40px" style="border-radius: 100px"></th>
                            <td>{{$employee->name . " " . $employee->surname}}</td>
                            <td>{{$employee->department->title}}</td>
                            <td>{{$employee->position->title}}</td>
                            <td><a href="{{route('admin.employee.show', $employee->id)}}" type="button" class="btn btn-info m-2">просмотр</a></td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-3">
{{--            {{$departments->withQueryString()->links()}}--}}
        </div>
    </div>
<script>
    function searchTable() {
    // Получаем значение из поля ввода
    var searchText = document.getElementById("searchInput").value.toLowerCase();
    var table = document.getElementById("employeeTable");
    var rows = table.getElementsByTagName("tr");

    // Проходим по каждой строке таблицы
    for (var i = 0; i < rows.length; i++) {
        var nameColumn = rows[i].getElementsByTagName("td")[0];
        if (nameColumn) {
            var name = nameColumn.innerText.toLowerCase();
            // Показываем или скрываем строку в зависимости от совпадения имени
            rows[i].style.display = name.includes(searchText) ? "" : "none";
        }
    }
}
</script>
@endsection
