<?php
/**
 * Index
 * User: lixin
 * Date: 2017/3/26
 * Time: 下午8:05
 */
namespace app\module\car\controller;

use app\module\car\service\ExampleService;
use core\Controller;


class Index extends Controller
{
    public function index()
    {
//        $r = core\CacheFactory::$_handle['memcache']->set('asd','asd');
//        var_dump($r);exit;


//        $obj = ExampleService::getInstance();
//        print_r($obj->example());exit;

//        markdown 解析器
//        $markdown = '# Hello World';
//        $parser = new \cebe\markdown\GithubMarkdown();
//        echo $parser->parse($markdown);exit;

//        $this->assign('foo', 'bar');
//        $this->display('Index/index');
        echo 'car';
    }


    public function page()
    {
        $obj = ExampleService::getInstance();
        $page = $obj->pageEx();
        $page->setPath('/pageEx');
        $this->apiReturn('200', 'ok', $page);
    }
}