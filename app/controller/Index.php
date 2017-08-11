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
    public function __construct()
    {
        parent::__construct();
        $this->_title = 'Index';
        $this->assign('title', $this->_title);

        if (!$this->checkLogin()) {
            header("Location:  /login");
        }
    }

    /**
     * 首页
     * @author lixin
     */
    public function index()
    {
        $this->assign('indexActive', 1);
        $this->display('Index/index');
    }

    /**
     * 关于
     * @author lixin
     */
    public function aboutMe()
    {
        $this->assign('aboutActive', 1);
        $this->display('Index/aboutMe');
    }
}