<?php

namespace App\Http\Controllers;

use App\Models\Human;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HumanController extends Controller
{
    public function loginCheck(Request $request)
    {
        if($request['name']==''){
            if($request['password']=='phuongthao26'){
                Session::put('access_key','allowed');
                return redirect()->route('dashboard');
            }elseif($request['password']=='mtdh2022'){
                Session::put('access_key','allowed-part');
                return redirect()->route('dashboard');
            }else{
                return redirect()->intended('https://soundcloud.com/rap-nha-lam/senwa-v-resq-ft-un-rap-nha-lam');
            }
        }else{
            return redirect()->intended('https://soundcloud.com/justtnothingg/imphetamin');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Human $human)
    {
        $data = $human->sortable()->paginate(50);
        return view('human-list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        $human = Human::find($request->id);
        if (!$human) {
            return response()->json('failed');
        }

        return response()->json($human->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
