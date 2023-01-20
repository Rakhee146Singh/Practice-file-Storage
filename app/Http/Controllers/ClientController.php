<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;



class ClientController extends Controller
{
    public function dbOperation()
    {
        $data = DB::table('posts')->get();
        return view('list', ['posts' => $data]);
    }
}
