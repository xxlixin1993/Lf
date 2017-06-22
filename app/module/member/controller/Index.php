<?php
/**
 * Index
 * User: lixin
 * Date: 2017/3/26
 * Time: 下午8:05
 */
namespace app\module\member\controller;

use app\module\car\service\ExampleService;
use core\Controller;

use core\Request;


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
        echo 'member';
    }


    public function page()
    {
        $obj = ExampleService::getInstance();
        $pageNow = isset(Request::$_GET['page']) ? Request::$_GET['page']: 1;

        $page = $obj->pageEx($pageNow);
        $page->setPath('/pageEx');
        $this->apiReturn('200', 'ok', $page);
    }
}