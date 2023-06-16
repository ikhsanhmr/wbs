<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Http\Controllers\Controller;



class DashboardController extends Controller
{
    public function index()
    {
        
        return view('dashboard.index',[
            'title' => 'dashboard',
            'datas' => data::all()->where('status',1)
            
        ]);

        
    }

    public function show(data $data)
    {
        return view('data',[
            "title" => "single data",
            "data" => $data
        ]);
    }

    public function changestatus(request $request)
    {
        $datas = Data::find($request->id);
        $datas->status = $request->status;
        $datas->save();
    }
}
