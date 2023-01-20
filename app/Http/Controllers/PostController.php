<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Services\PaymentService;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function display()
    { //for data passing
        //return "Post Controller Page";
        //return "ID is:" . $id;
        //*return view('contact', ['name1' => 'Rakhee', 'name2' => 'Neha', 'name3' => 'Akankshya']);
        //return view('contact', compact('id', 'name', 'password'));
        //return view('contact');
    }

    //for database
    // public function show(PaymentService $payment)
    // {
    //     //$payment = new PaymentService();
    //     dd(app());
    // }
    // public function index()
    // {
    //     return "Basic Controller";
    // }

    //dependency injection
    public function checkAge($age)
    {
        if ($age >= 18) {
            return view('list', compact('age'));
        } else {
            return "Not Eligible";
        }
    }
}
