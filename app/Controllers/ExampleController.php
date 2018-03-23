<?php

namespace App\Controllers;

class ExampleController extends Controller
{

    public function welcome()
    {
        return view('welcome', ['hello' => 'FYLite']);
    }

}