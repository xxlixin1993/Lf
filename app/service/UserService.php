<?php
/**
 * UserService.php
 * 用户逻辑层
 * User: lixin
 * Date: 17-8-10
 */

namespace app\service;


use app\model\User;
use core\BaseService;
use lib\Random;

class UserService extends BaseService
{
    /**
     * @var UserService
     */
    protected static $_instance;

    /**
     * UserService constructor.
     * @author lixin
     */
    protected function __construct()
    {
        parent::__construct();
    }

    /**
     * 获取UserService单例
     * @return UserService
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
     * 登陆逻辑
     * @param $username
     * @param $password
     * @return array
     * @author lixin
     */
    public function login($username, $password)
    {
        /**
         * 先查询账号注册了没
         *      注册了 -> 判断账号密码是否正确
         *      没注册 -> 直接登陆 创建用户
         */
        $userInfo = User::where('username', $username)->first()->toArray();

        if (empty($userInfo)) {
            $salt = Random::createRandomStr(10);

            $id = User::insertGetId([
                    'username' => $username,
                    'salt' => $salt,
                    'password' => sha1($password . $salt),
                    'add_time' => time()]
            );

            if ($id) {
                session_start();
                $sid = session_id();
                $_SESSION[$sid] = $id;
                setcookie('uid', $id, 86400);
                return [200, '成功'];
            } else {
                return [9001, '注册写入失败'];
            }
        } else {
            if (sha1($password . $userInfo['salt']) == $userInfo['password']) {
                session_start();
                $sid = session_id();
                $_SESSION[$sid] = $userInfo['id'];
                setcookie('uid', $userInfo['id'], 86400);
                return [200, '成功'];
            } else {
                return [1001, '用户名已经注册 且密码和你输入的不对应'];
            }
        }
    }
}