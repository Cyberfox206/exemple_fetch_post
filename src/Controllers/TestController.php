<?php
namespace name\Controllers;

use name\Controllers\BasseController;

class TestController extends BasseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function showtest(): void
    {
        require VIEWS . '404.php';
    }

    public function showHommePage(): void
    {
        require VIEWS . 'HomePage.php';
    }
    public function addMessage(): void
    {
        echo json_encode($_POST);
    }
}