<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class ReportController extends Controller
{
    public function store2(Request $request)
    {
        $file = $request->file('files');
        $name_file = $file->getClientOriginalName();
        $date = Carbon::today()->format('d-m-Y');
        $path = Storage::putFileAs("public/report/".$date,$request->file('files'),$name_file);
        $link_file = URL::to('/').Storage::url('report/'.$date.'/'.$name_file);
        return response()->json(['path'=>$path,'downloadLink'=>$link_file]);
    }
    public function store(Request $request)
    {
        $file = $request->file('files');
        $name_file = $file->getClientOriginalName();
        $date = Carbon::today()->format('d-m-Y');
        $path = Storage::putFileAs("public/report/".$date,$request->file('files'),$name_file);
        $link_file = URL::to('/').Storage::url('report/'.$date.'/'.$name_file);
        exec('cd .. && chmod -R 775 storage/app/public/report', $output, $return_var);
        return response()->json(['path'=>$path,'downloadLink'=>$link_file, 'output' => $output]);
    }

    public function getFile(Request $request)
    {
        $link = asset('storage/report/'.$request->path);
        return response()->json($link);
    }
}
