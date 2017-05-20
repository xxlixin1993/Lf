<?php

/**
 * ExampleService.php
 * User: lixin
 * Date: 17-5-19
 */
namespace app\service;

use app\model\Example;
use core\BaseService;

class ExampleService extends BaseService
{
    /**
     * @var ExampleService
     */
    protected static $_instance;

    /**
     * ExampleService constructor.
     * @author lixin
     */
    protected function __construct()
    {
        parent::__construct();
    }

    /**
     * 获取ExampleService单例
     * @return ExampleService
     * @author lixin
     */
    public static function getInstance()
    {
        if (empty(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * 测试函数
     * @author lixin
     */
    public function example()
    {
        $exampleModel = new Example();
        $res = $exampleModel->where('id', 1)->get();
        return $res;
    }
}