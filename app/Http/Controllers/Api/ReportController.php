<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class ReportController extends Controller
{
    public function store(Request $request)
    {
        $file = $request->file('files');
        $name_file = $file->getClientOriginalName();
        $date = Carbon::today()->format('d-m-Y');
        $path = Storage::putFileAs("public/report/".$date,$request->file('files'),$name_file);
        $link_file = URL::to('/').Storage::url('report/'.$date.'/'.$name_file);
        return response()->json(['path'=>$path,'downloadLink'=>$link_file]);
    }
    public function store2(Request $request)
    {
        $file = $request->file('files');
        $name_file = $file->getClientOriginalName();
        $date = Carbon::today()->format('d-m-Y');
        $path = Storage::putFileAs("public/report/".'09-09-09-09',$request->file('files'),$name_file);
        Storage::makeDirectory($path);
        Storage::setVisibility($path, 'public');
//        $link_file = URL::to('/').Storage::url('report/'.$date.'/'.$name_file);
        Storage::setVisibility($path, 'public');// Đặt quyền truy cập cho file trong hệ thống tệp tin Laravel
        $link_file = Storage::url($path); // Lấy đường dẫn truy cập tới file
        shell_exec('chmod -R 775 storage/app/public/report');

        return response()->json(['path'=>$path,'downloadLink'=>$link_file]);
    }

    public function getFile(Request $request)
    {
        $link = asset('storage/report/'.$request->path);
        return response()->json($link);
    }
}
