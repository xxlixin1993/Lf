<?php
/**
 * Login.php
 * 描述
 * User: lixin
 * Date: 17-8-9
 */

namespace app\controller;


use app\service\UserService;
use core\Controller;
use core\Request;

class Login extends Controller
{
    /**
     * Login constructor.
     * @author lixin
     */
    public function __construct()
    {
        parent::__construct();
        $this->_title = 'Login';
        $this->assign('title', $this->_title);
    }

    /**
     * 展示首页
     * @author lixin
     */
    public function index()
    {
        $this->display('Login/index');
    }

    /**
     * 注册
     * @author lixin
     */
    public function signUp()
    {

    }

    /**
     * 登陆
     * @author lixin
     */
    public function signIn()
    {
        $username = Request::$_POST['username'];
        $password = Request::$_POST['password'];
    
        $user = UserService::getInstance();
        list($code, $message) = $user->login($username, $password);
        $this->apiReturn($code, $message);
    }
}