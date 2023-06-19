@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded h-100 p-4">
            <h4 class="mb-4">Создание отдела</h4>
            <form action="{{route('admin.department.store')}}" method="post">
                @csrf
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Название отдела</label>
                    <div class="col-sm-10">
                        <input name="title" type="text" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Создать отдел</button>
            </form>
        </div>
    </div>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded h-100 p-4">
            <h4 class="mb-4">Список отделов</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Номер</th>
                        <th scope="col">Название</th>
                        <th scope="col">Сотрудников</th>
                        <th scope="col">Должностей</th>
                        <th scope="col">Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($departments as $department)
                            <tr>
                                <th scope="row">{{$department->id}}</th>
                                <td>{{$department->title}}</td>
                                <td>{{count($department->users)}}</td>
                                <td>{{count($department->positions)}}</td>
                                <td><a href="{{route('admin.department.show', $department->id)}}" type="button" class="btn btn-info m-2">просмотр</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-3">
            {{$departments->withQueryString()->links()}}
        </div>
    </div>

    <div class="container-fluid pt-4 px-4">
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {

                        var data = google.visualization.arrayToDataTable([
                            ['Task', 'Hours per Day'],
                            <?php echo $dataStr ?>

                        ]);

                        var options = {
                            title: 'Соотношение отделов по колличеству сотрудников'
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                        chart.draw(data, options);
                    }
                </script>
                <div class="mb-3" id="piechart" style=" width: 900px; height: 500px;"></div>
    </div>

@endsection
