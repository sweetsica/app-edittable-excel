<?php

namespace App\Http\Controllers;

use App\Models\Ladi;
use Illuminate\Http\Request;

class LadiController extends Controller
{
    public function store(Request $request)
    {
        Ladi::create(
            ['data' => $request->all()]
        );
        return response()->json('Thành công',200);
    }

    public function index()
    {
        $data = Ladi::all()->get();
        return view ('listLadi',compact('data'));
    }
}
