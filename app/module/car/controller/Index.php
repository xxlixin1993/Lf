<?php
/**
 * Index
 * User: lixin
 * Date: 2017/3/26
 * Time: 下午8:05
 */
namespace app\module\car\controller;

use app\module\car\model\Test;
use app\module\car\model\TestMongo;
use app\module\car\service\ExampleService;
use core\Controller;
use core\MongoDb;


class Index extends Controller
{
    public function index()
    {
//        $r = core\CacheFactory::$_handle['memcache']->set('asd','asd');
//        var_dump($r);exit;


//        $obj = ExampleService::getInstance();
//        print_r($obj->example());exit;
        

//        $t = new TestMongo();
//        print_r($t->getOneEx());exit;
//        exit;
//        $dsn = "mongodb://127.0.0.1:27017";
//        $i = MongoDb::getInstance($dsn);
//        $c = $i->getCollection("report_0x18", "RD5512G500000301");
//        print_r($c->findOne(array('time' => 1497336593)));exit;
//        exit;
//        $manager = new \MongoDB\Driver\Manager("mongodb://127.0.0.1:27017");
//        $this->collection = new \MongoDB\Collection($manager, "report_0x18", "RD5512G500000301");
//        $data = $this->collection->findOne(array('time' => 1497336593));
//        print_r($data);exit;
        
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