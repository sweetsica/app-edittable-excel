@if(session()->get('access_key')=='allowed'||session()->get('access_key')=='allowed-part')
<!DOCTYPE html>
<html>
<head>
    <title>S-HRM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<div style="text-align: center; margin-top:1%">
    <form method="post" action="{{route('task.add')}}" style="width: 70%; margin:0% auto">
        @csrf
        <table>
            <tr>
                <th>Tên task</th>
                <th>Mô tả</th>
                <th>Vị trí</th>
                <th>Phòng ban</th>
                <th>Kpi</th>
                <th>Manday</th>
                <th>Thuộc task</th>
            </tr>
            <tr>
                <td>
                    <input type="text" name="name">
                </td>
                <td>
                    <input type="text" name="description">
                </td>
                <td>
                    <input type="text" name="idPosition">
                </td>
                <td>
                    <input type="text" name="idDepartment">
                </td>
                <td>
                    <input type="text" name="kpiValue">
                </td>
                <td>
                    <input type="text" name="mandayValue">
                </td>
                <td>
                    <input type="text" name="idParentTask">
                </td>
                <td><button type="submit">Nhập</button></td>
            </tr>
        </table>

    </form>
</div>
<div class="container">
    <br />

    <div style="width:100%; float:left; display: flex">
        <h2 style="width:70%"><a href="{{route('task.export')}}">Danh sách nhiệm vụ</a></h2>
        <h3 style="width:30%; float:right"><a href="{{route('logout')}}">Đăng xuất</a></h3>
    </div>
    <table class="table table-bordered" id="edit_task_datable" data-update-url="{{route('task.update')}}">
        <thead>
        <tr>
            <th style="width:4%;">@sortablelink('id')</th>
            <th>@sortablelink('name')</th>
            <th style="width: 19%;">Mô tả</th>
            <th style="width: 10%;">@sortablelink('idPosition','Vị trí')</th>
            <th style="width: 10%;">@sortablelink('idDepartment', 'Phòng ban')</th>
            <th style="width: 5%;">@sortablelink('kpiValue', 'Kpi')</th>
            <th style="width: 8%;">@sortablelink('mandayValue', 'Manday')</th>
            <th style="width: 10%;">@sortablelink('idParentTask', 'Thuộc task')</th>
        </tr>
        </thead>
        <tbody>

        @foreach($data as $info)
            <tr>
                <td data-id="{{$info->id}}" data-name="id">{{$info->id}}</td>
                <td data-id="{{$info->id}}" data-name="name">{{$info->name}}</td>
                <td data-id="{{$info->id}}" data-name="description">{{$info->description}}</td>
                <td data-id="{{$info->id}}" data-name="idPosition">{{$info->idPosition}}</td>
                <td data-id="{{$info->id}}" data-name="idDepartment">{{$info->idDepartment}}</td>
                <td data-id="{{$info->id}}" data-name="kpiValue">{{$info->kpiValue}}</td>
                <td data-id="{{$info->id}}" data-name="mandayValue">{{$info->mandayValue}}</td>
                <td data-id="{{$info->id}}" data-name="idParentTask">{{$info->idParentTask}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $data->appends(\Request::except('page'))->render() !!}
</div>
<!-- jQuery -->
<script src="{{asset('js/edit-table/jquery.min.js')}}"></script>

<script src="{{asset('js/edit-table/jquery.slimscroll.js')}}"></script>
<script src="{{asset('js/edit-table/edit-task-table-data.js')}}"></script>
</body>
</html>
@else
    <script>
        window.location.href = "https://soundcloud.com/iamkanjo/thang-da-xem-live-at-montauk";
    </script>
@endif
