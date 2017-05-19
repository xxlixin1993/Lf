<?php
/**
 * Index
 * User: lixin
 * Date: 2017/3/26
 * Time: 下午8:05
 */
namespace app\controller;

use core\Controller;
use app\service\ExampleService;


class Index extends Controller
{
    public function index()
    {
        $obj = ExampleService::getInstance();
        print_r($obj->example());exit;
        
        $this->assign('foo','bar');
        $this->display('Index/index');
    }
}