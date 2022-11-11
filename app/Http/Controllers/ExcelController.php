<?php

namespace App\Http\Controllers;

use App\Imports\CustomersDMSImport;
use App\Imports\HumansImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function getImportView()
    {
        return view('welcome');
    }

    public function setImport(Request $request)
    {
//        dd($request);
        $url = $request->file('file');
        Excel::import(new HumansImport,$url,null,\Maatwebsite\Excel\Excel::XLSX);

        dd('Thành công!');
    }

    public function setImportDMS(Request $request)
    {
        $url = $request->file('file');
        Excel::import(new CustomersDMSImport,$url,null,\Maatwebsite\Excel\Excel::XLSX);

        dd('Thành công!');
    }
}
