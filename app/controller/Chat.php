<?php
/**
 * Chat.php
 * 描述
 * User: lixin
 * Date: 17-8-11
 */

namespace app\controller;


use core\Controller;

class Chat extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->_title = 'Chat';
        $this->assign('title', $this->_title);

        if (!$this->checkLogin()) {
            header("Location:  /login");
        }
    }

    public function index()
    {
        $this->display("Chat/index");
    }
}