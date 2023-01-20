<?php

use Illuminate\Support\Facades\DB;
use App\Models\File;

//important Functions
// echo 'Hello...';

if (!function_exists('p')) {
    function p($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
if (!function_exists('get_formatted_date')) {
    function get_formatted_date($date, $format)
    {
        $formattedDate = date($format, strtotime($date));
        return $formattedDate;
    }
}
if (!function_exists('getData')) {
    function getData()
    {
        //getting data through table
        // $register = DB::table('registers')->get();
        // return $register;

        //getting data using model
        $register = File::get();
        return $register;
    }
}
