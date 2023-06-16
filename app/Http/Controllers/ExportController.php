<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\DataExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{

    public function dataexport()
	{
		return Excel::download(new DataExport(), 'wbs.xlsx');
	}

}
