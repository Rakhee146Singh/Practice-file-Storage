<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function show(Request $request)
    {
        $request->collect();
        dd($request);
        //return view('report');
    }
}
