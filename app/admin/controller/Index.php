<?php


namespace app\admin\controller;

use fize\framework\Controller;
use fize\framework\Config;
use fize\framework\View;
use fize\framework\Response;
use fize\framework\Request;


class Index extends Controller
{

    public function index()
    {
        echo "<h1>Hello FizeFramework.</h1>\r\n<br/>";
        echo "<p>The Controller now is \"admin/Index/index\".</p>\r\n<br/>";
    }

    public function config()
    {
        $cfg_app = Config::get('app');
        var_dump($cfg_app);

        $cfg_db = Config::get('db');
        var_dump($cfg_db);
    }

    public function view()
    {
        View::assign('fize', ['name' => '陈峰展', 'mobile' => '14759786559']);

        $rows = [
            ['id' => 0, 'name' => '陈峰展1'],
            ['id' => 1, 'name' => '陈峰展2'],
            ['id' => 2, 'name' => '陈峰展3'],
            ['id' => 3, 'name' => '陈峰展4'],
        ];
        View::assign('rows', $rows);
        //return View::render();  //字符串
        return Response::html(View::render());
    }

    public function json()
    {
        $rows = [
            ['id' => 0, 'name' => '陈峰展1'],
            ['id' => 1, 'name' => '陈峰展2'],
            ['id' => 2, 'name' => '陈峰展3'],
            ['id' => 3, 'name' => '陈峰展4'],
        ];
        return Response::json($rows);
    }
}