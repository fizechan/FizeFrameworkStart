<?php


namespace app\index\controller;

use fize\framework\Controller;
use fize\framework\View;


class Index extends Controller
{

    public function index()
    {
        View::assign('title', 'Hello FizeFramework.');
        View::assign('body', 'This is a Demo for FizeFramework.');
        return View::render();
    }
}