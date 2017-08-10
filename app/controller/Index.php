<?php

/**
 * Index.php
 * 描述
 * User: lixin
 * Date: 17-8-8
 */
namespace app\controller;
use core\Controller;

class Index extends Controller
{
    /**
     * 首页
     * @author lixin
     */
    public function index()
    {
        $this->display('Index/index');
    }

    /**
     * 关于
     * @author lixin
     */
    public function aboutMe()
    {
        $this->display('Index/aboutMe');
    }
}