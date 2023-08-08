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
        $link_file = URL::to('/').Storage::url('report/'.$date.'/'.$name_file);
//        if (file_exists($path)) {
//            chmod('$path', 755);
//        } else {
//            // handle the error
//        }
//        exec('pwd', $output, $return_var);
        exec('cd .. && pwd', $output, $return_var);
//        exec('chmod -R 775 /home4/sweetsic/public_html/supapp7/public/storage', $output, $return_var);
//            exec('cd ', $output, $return_var);
//        shell_exec('chmod -R 775 storage/app/public/report');

        return response()->json(['path'=>$path,'downloadLink'=>$link_file, 'output' => $output]);
    }

    public function getFile(Request $request)
    {
        $link = asset('storage/report/'.$request->path);
        return response()->json($link);
    }
}
