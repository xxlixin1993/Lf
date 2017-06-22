<?php
/**
 * Index
 * User: lixin
 * Date: 2017/3/26
 * Time: 下午8:05
 */
namespace app\controller\v120;

use core\CacheFactory;
use core\Controller;
use app\service\ExampleService;
use core\Request;


class Index extends Controller
{
    public function index()
    {
        echo 'v120';
    }
}