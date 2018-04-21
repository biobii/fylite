<?php

namespace App\Controllers;

use App\Models\User;
use FYLite\Controller;

class UserController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->model = new User;
    }

}