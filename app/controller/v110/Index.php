<?php
/**
 * Index
 * User: lixin
 * Date: 2017/3/26
 * Time: 下午8:05
 */
namespace app\controller\v110;

use core\Controller;
use app\service\ExampleService;
use core\Request;
use lib\Mail;


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
//        $mail = Mail::createQQMailHandle('403136170@qq.com','xxlixin1993@gmail.com','nickname','test','test');
//        print_r(Mail::send($mail));
        echo 'v110';
    }


    public function page()
    {
        $obj = ExampleService::getInstance();
        $page = $obj->pageEx(Request::$_GET['page']);
        $page->setPath('/pageEx');
        $this->apiReturn('200', 'ok', $page);
    }
}