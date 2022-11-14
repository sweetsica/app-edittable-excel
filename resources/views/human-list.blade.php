@if(session()->has('access_key')==false)
    <script>
        window.location.href = "https://soundcloud.com/iamkanjo/thang-da-xem-live-at-montauk";
    </script>
@else
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
    <table class="table table-bordered" id="edit_datable_1" data-update-url="{{route('human.update')}}">
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
                <td data-id="{{$info->id}}" data-name="id">{{$info->id}}</td>
                <td data-id="{{$info->id}}" data-name="code">{{$info->code}}</td>
                <td data-id="{{$info->id}}" data-name="surName">{{$info->surName}}</td>
                <td data-id="{{$info->id}}" data-name="phone">{{$info->phone}}</td>
                <td data-id="{{$info->id}}" data-name="emailAccount">{{$info->emailAccount}}</td>
                <td data-id="{{$info->id}}" data-name="idDepartment">{{$info->idDepartment}}</td>
                <td data-id="{{$info->id}}" data-name="idPosition">{{$info->idPosition}}</td>
                <td data-id="{{$info->id}}" data-name="idTitle">{{$info->idTitle}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $data->appends(\Request::except('page'))->render() !!}
</div>
<!-- jQuery -->
<script src="{{asset('js/edit-table/jquery.min.js')}}"></script>

<script src="{{asset('js/edit-table/jquery.slimscroll.js')}}"></script>
<script src="{{asset('js/edit-table/editable-table-data.js')}}"></script>
</body>
</html>
@endif
