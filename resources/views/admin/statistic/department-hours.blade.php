@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <h3>Статистика сравнения отделов</h3>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load("current", {packages:['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ["Element", "часов", { role: "style" } ],
                    <?php echo $departmentsStatistic['hours'] ?>
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                    { calc: "stringify",
                        sourceColumn: 1,
                        type: "string",
                        role: "annotation" },
                    2]);

                var options = {
                    title: "Сравнение отделов по колличеству отработанных часов",
                    width: 700,
                    height: 400,
                    bar: {groupWidth: "95%"},
                    legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                chart.draw(view, options);
            }
        </script>
        <div class="mb-4" id="columnchart_values" style="width: 1000px; height: 300px;"></div>

        <br>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load("current", {packages:['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ["Element", "часов", { role: "style" } ],
                    <?php echo $departmentsStatistic['tasks'] ?>
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                    { calc: "stringify",
                        sourceColumn: 1,
                        type: "string",
                        role: "annotation" },
                    2]);

                var options = {
                    title: "Сравнение отделов по колличеству выполненных задач",
                    width: 700,
                    height: 400,
                    bar: {groupWidth: "95%"},
                    legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values2"));
                chart.draw(view, options);
            }
        </script>
        <div class="mt-4" id="columnchart_values2" style="width: 1000px; height: 300px;"></div>

    </div>

@endsection
