<?php

namespace FYLite;

class Controller
{

    protected $model, $validation, $auth;

    public function __construct()
    {
        $this->validation = new Validation;
    }

}