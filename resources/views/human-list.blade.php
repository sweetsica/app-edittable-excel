<!-- index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>S-HRM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <br />
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    <h2>Danh sách nhân sự</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>@sortablelink('id')</th>
            <th>@sortablelink('code','Mã nhân viên')</th>
            <th>@sortablelink('surName','Tên đầy đủ')</th>
            <th>@sortablelink('phone', 'Số điện thoại')</th>
            <th>@sortablelink('emailAccount', 'Email tài khoản')</th>
            <th>@sortablelink('idDepartment', 'Phòng ban')</th>
            <th>@sortablelink('idPosition', 'Vai trò')</th>
            <th>@sortablelink('idTitle', 'Chức vụ')</th>
        </tr>
        </thead>
        <tbody>

        @foreach($data as $info)
            <tr>
                <td>{{$info->id}}</td>
                <td>{{$info->code}}</td>
                <td>{{$info->surName}}</td>
                <td>{{$info->phone}}</td>
                <td>{{$info->emailAccount}}</td>
                <td>{{$info->idDepartment}}</td>
                <td>{{$info->idPosition}}</td>
                <td>{{$info->idTitle}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $data->appends(\Request::except('page'))->render() !!}
</div>
</body>
</html>
