<?php


namespace app\index\controller;

use Fize\Framework\Controller;
use Fize\View\View;


class Index extends Controller
{

    public function index()
    {
        View::assign('title', 'Hello FizeFramework.');
        View::assign('body', 'This is a Demo for FizeFramework.');
        return View::render();
    }
}