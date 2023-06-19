@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <h4>Выбор даты</h4>
        <div style="display:flex" class="mb-3 bg-secondary">
            <div style="margin-right: 8px"><a  href="#">2020</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2020', 'month'=>'1'])}}">Янв</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2020', 'month'=>'2'])}}">Фев</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2020', 'month'=>'3'])}}">Мар</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2020', 'month'=>'4'])}}">Апр</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2020', 'month'=>'5'])}}">Май</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2020', 'month'=>'6'])}}">Июн</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2020', 'month'=>'7'])}}">Июл</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2020', 'month'=>'8'])}}">Авг</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2020', 'month'=>'9'])}}">Сен</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2020', 'month'=>'10'])}}">Окт</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2020', 'month'=>'11'])}}">Ноя</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2020', 'month'=>'12'])}}">Дек</a></div>
        </div>
        <div style="display:flex" class="mb-3 bg-secondary">
            <div style="margin-right: 8px"><a  href="#">2021</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2021', 'month'=>'1'])}}">Янв</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2021', 'month'=>'2'])}}">Фев</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2021', 'month'=>'3'])}}">Мар</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2021', 'month'=>'4'])}}">Апр</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2021', 'month'=>'5'])}}">Май</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2021', 'month'=>'6'])}}">Июн</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2021', 'month'=>'7'])}}">Июл</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2021', 'month'=>'8'])}}">Авг</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2021', 'month'=>'9'])}}">Сен</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2021', 'month'=>'10'])}}">Окт</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2021', 'month'=>'11'])}}">Ноя</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2021', 'month'=>'12'])}}">Дек</a></div>
        </div>
        <div style="display:flex" class="mb-3 bg-secondary">
            <div style="margin-right: 8px"><a  href="#">2022</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2022', 'month'=>'1'])}}">Янв</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2022', 'month'=>'2'])}}">Фев</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2022', 'month'=>'3'])}}">Мар</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2022', 'month'=>'4'])}}">Апр</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2022', 'month'=>'5'])}}">Май</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2022', 'month'=>'6'])}}">Июн</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2022', 'month'=>'7'])}}">Июл</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2022', 'month'=>'8'])}}">Авг</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2022', 'month'=>'9'])}}">Сен</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2022', 'month'=>'10'])}}">Окт</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2022', 'month'=>'11'])}}">Ноя</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2022', 'month'=>'12'])}}">Дек</a></div>
        </div>
        <div style="display:flex" class="mb-3 bg-secondary">
            <div style="margin-right: 8px"><a  href="#">2023</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2023', 'month'=>'1'])}}">Янв</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2023', 'month'=>'2'])}}">Фев</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2023', 'month'=>'3'])}}">Мар</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2023', 'month'=>'4'])}}">Апр</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2023', 'month'=>'5'])}}">Май</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2023', 'month'=>'6'])}}">Июн</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2023', 'month'=>'7'])}}">Июл</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2023', 'month'=>'8'])}}">Авг</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2023', 'month'=>'9'])}}">Сен</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2023', 'month'=>'10'])}}">Окт</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2023', 'month'=>'11'])}}">Ноя</a></div>
            <div style="margin-right: 8px"><a  href="{{route('admin.salary.filterable', ['year' => '2023', 'month'=>'12'])}}">Дек</a></div>
        </div>
    </div>
    @if(isset($dataArr))
        <div class="container-fluid pt-4 px-4">
            <div class="table-responsive bg-secondary">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Фото</th>
                        <th scope="col">Фамилия Имя</th>
                        <th scope="col">Отдел</th>
                        <th scope="col">Должность</th>
                        <th scope="col">Время</th>
                        <th scope="col">Начисленно</th>
                        <th scope="col">Эффективность</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dataArr as $item)
                        <tr>
                            <td>{{$item['employee']->id}}</td>
                            <td><img src="{{$item['employee']->avatar}}" width="40px" height="40px" style="border-radius: 100px"></td>
                            <td>{{$item['employee']->name . " " . $item['employee']->surname}}</td>
                            <td>{{$item['employee']->department->title}}</td>
                            <td>{{$item['employee']->position->title}}</td>
                            <td>{{$item['hours']}} ч.</td>
                            <td>{{$item['salary']}} BYN</td>
                            <td>{{$item['assessment']}}</td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    @endif


@endsection
