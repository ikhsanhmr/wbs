<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data;

class ArchieveController extends Controller
{
    public function index()
    {
        
        return view('archieve',[
            'title' => 'archieve',
            'datas' => data::all()
            
        ]);

        
    }

    public function show(data $data)
    {
        return view('archievedata',[
            "title" => "single data",
            "data" => $data
        ]);
    }
}
