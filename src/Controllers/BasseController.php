<?php
namespace name\Controllers;

use name\Validator;

class BasseController
{
    protected $validator;
    public function __construct()
    {
        $this->validator = new Validator();
    }
}

