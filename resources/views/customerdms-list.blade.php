@if(session()->has('access_key')==false)
    <script>
        window.location.href = "https://soundcloud.com/iamkanjo/thang-da-xem-live-at-montauk";
    </script>
@else
<!DOCTYPE html>
<html>
<head>
    <title>S-CRM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <br />
    <h2>Danh sách khách hàng DMS bán buôn</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>@sortablelink('id')</th>
            <th>@sortablelink('ma_khach_hang','Mã khách')</th>
            <th>@sortablelink('khach_hang', 'Tên khách')</th>
            <th>@sortablelink('sdt', 'SDT')</th>
            <th>@sortablelink('kenh', 'Kênh')</th>
            <th>@sortablelink('dia_chi', 'Địa chỉ')</th>
        </tr>
        </thead>
        <tbody>

        @foreach($data['buon'] as $info)
            <tr>
                <td style="width: 4%;">{{$info->id}}</td>
                <td style="width: 12%;">{{$info->ma_khach_hang}}</td>
                <td>{{$info->khach_hang}}</td>
                <td>{{$info->sdt}}</td>
                <td style="width: 6%;">{{$info->kenh}}</td>
                <td>{{$info->dia_chi}}</td>
                </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $data['buon']->appends(\Request::except('page'))->render() !!}
</div>

<div class="container">
    <br />
    <h2>Danh sách khách hàng DMS bán lẻ</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>@sortablelink('id')</th>
            <th>@sortablelink('ma_khach_hang','Mã khách')</th>
            <th>@sortablelink('khach_hang', 'Tên khách')</th>
            <th>@sortablelink('sdt', 'SDT')</th>
            <th>@sortablelink('kenh', 'Kênh')</th>
            <th>@sortablelink('dia_chi', 'Địa chỉ')</th>
        </tr>
        </thead>
        <tbody>

        @foreach($data['le'] as $info)
            <tr>
                <td style="width: 4%;">{{$info->id}}</td>
                <td style="width: 12%;">{{$info->ma_khach_hang}}</td>
                <td>{{$info->khach_hang}}</td>
                <td>{{$info->sdt}}</td>
                <td style="width: 6%;">{{$info->kenh}}</td>
                <td>{{$info->dia_chi}}</td>
                </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $data['le']->appends(\Request::except('page'))->render() !!}
</div>

</body>
</html>
@endif
