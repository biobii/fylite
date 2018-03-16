<?php

namespace App\Controllers;

use App\Core\Validation;

class Controller
{

    protected $model, $validation, $auth;

    public function __construct()
    {
        $this->validation = new Validation;
    }

}