<?php
/**
 * Login.php
 * 描述
 * User: lixin
 * Date: 17-8-9
 */

namespace app\controller;


use core\Controller;

class Login extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->_title = 'Login';
    }

    public function index()
    {
        $this->display('Login/index');
    }
}