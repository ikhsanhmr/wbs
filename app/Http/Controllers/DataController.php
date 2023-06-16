<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DataController extends Controller
{
    public function index()
    {
        return view('dashboard.index',[
            "title" => "Data",
            "dataform" => Data::latest()->filter(request(['search', 'category']))->paginate(10)
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'penjelasan' => 'required|max:255',
            'laporan_kejadian' => 'required|max:255',
            'waktu_kejadian' => 'required|max:255',
            'lokasi_kejadian' => 'required|max:255',
            'nama_terlapor' => 'required|max:255',
            'status_terlapor' => 'required|max:255',
            'nama_pihak_lain' => 'required|max:255',
            'status_pihak_lain' => 'required|max:255',
            'saksi' => 'max:255',
            'status_saksi' => 'max:255',
            'kronologi' => 'required|max:255',
            'kerugian' => 'required|max:255',
            'dokumentasi' => 'image|file|max:2048',
            'informasi' => 'required|max:255',
            'captcha' => ['required','captcha']
        ]);

        $validatedData['dokumentasi'] =  $request->file('dokumentasi')->store('dokumentasi');

        // dd($request->all());

        data::create($validatedData);

        return redirect('/')->with('success', 'Data Pengaduan Sudah Dikirim.');
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
 
    
}
