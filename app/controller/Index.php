<?php
/**
 * Created by PhpStorm.
 * User: lixin
 * Date: 2017/3/26
 * Time: 下午8:05
 */
namespace app\controller;


use app\model\User;
use core\Controller;
use core\Log;


class Index extends Controller
{
    public function index()
    {
//        $client = new \GuzzleHttp\Client();
//        $res = $client->request('GET', 'https://www.baidu.com');
//        echo $res->getStatusCode();
//        $res = User::where('a', 'cc')->get();
//        print_r($res);
//        exit;



        $log = new Log('name','warning',Log::FILE);
        $log->info('asd');
        echo 111;exit;
        $this->assign('asd','asd');
        $this->display('Index/index');
    }
}