<?php

namespace App\Controllers;

use FYLite\Controller;

class ExampleController extends Controller
{

    public function welcome()
    {
        return view('welcome', ['hello' => 'FYLite']);
    }

}