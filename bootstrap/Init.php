<?php

/**
 * 初始化
 * User: lixin
 * Date: 2017/3/24
 * Time: 下午12:30
 */
namespace bootstrap;

use app\exception\HttpException;
use Dotenv\Dotenv;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use core;

class Init
{
    /**
     * @var Init init实例
     */
    protected static $_instance;

    /**
     * @var string 应用目录
     */
    public $_base_dir;

    /**
     * @var core\Config 配置文件对象
     */
    public $_config;

    /**
     * Init constructor.
     * @param $_base_dir
     */
    protected function __construct($_base_dir)
    {
        //注册为自动加载函数
        spl_autoload_register('\\bootstrap\\Init::autoload');
        $this->_base_dir = $_base_dir;
        $this->_config = new core\Config($_base_dir);
    }

    /**
     * 单例获得一个init实例
     * @param   string $_base_dir
     * @return  object    init实例
     */
    public static function getInstance($_base_dir = '')
    {
        if (empty(self::$_instance)) {
            self::$_instance = new self($_base_dir);
        }
        return self::$_instance;
    }

    /**
     * 类的自动加载
     * @param  string $class 带命名空间的类名,例app\IndexController
     * @return void
     */
    public static function autoload($class)
    {
        if (file_exists(BASEDIR . '/' . str_replace('\\', '/', $class) . '.php')) {
            include BASEDIR . '/' . str_replace('\\', '/', $class) . '.php';
        }
    }


    /**
     * 初始化程序
     * @param string $module web需要分发
     */
    public function init($module = 'web')
    {
        include BASEDIR . '/app/helpers.php';

        $dotEnv = new Dotenv(BASEDIR);
        $dotEnv->load();

        //检查系统环境是否是windows
        if (substr(PHP_OS, 0, 3) == "WIN")
            define("__IS_WIN__", 1);
        else
            define("__IS_WIN__", 0);
        //设置时区
        date_default_timezone_set('Asia/Shanghai');
        //设置php版本号
        if (!defined('PHP_VERSION_ID')) {
            $version = explode('.', PHP_VERSION);
            define('PHP_VERSION_ID', ($version[0] * 10000 + $version[1] * 100 + $version[2]));
        }

        //用传参数DEBUG值来判断是否开启调试模式，打开错误提示
        define("__DEBUG__", (env('DEBUG', false) ? 1 : 0));

        if (__DEBUG__ == 1) {
            error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
            ini_set('display_errors', true);
        } else {
            error_reporting(0);
            ini_set('display_errors', false);
        }

        self::connMysql();
        self::connCache();
        if ($module == 'web') {
            self::dispatch();
        }
    }

    /**
     * 路由分发
     * @throws HttpException
     */
    private function dispatch()
    {
        $request_method = $_SERVER['REQUEST_METHOD'];
        if (strpos($_SERVER['REQUEST_URI'], '?') !== false) {
            $query = strstr($_SERVER['REQUEST_URI'], '?', true);
        } else {
            $query = $_SERVER['REQUEST_URI'];
        }
        core\Request::checkParam($request_method);
        $query = htmlspecialchars($query, ENT_QUOTES);

        if (array_key_exists($query, $this->_config['router'][$request_method])) {
            $params = explode('@', $this->_config['router'][$request_method][$query]);
            $controller = "\\app\\module\\" . $params[0] ."\\controller\\".$params[1];
            $action = $params[2];
            (new $controller)->$action();
        } else {
            throw new HttpException('Undefined router', 404);
        }
    }

    /**
     * 初始化数据库
     */
    private function connMysql()
    {
        $capsule = new Capsule;
        foreach ($this->_config['database'] as $key => $value) {
            $capsule->addConnection($value, $key);
        }

        $capsule->setEventDispatcher(new Dispatcher(new Container));

        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }

    /**
     * 初始化缓存
     */
    private function connCache()
    {
        core\CacheFactory::cacheFactory('memcache', $this->_config['memcache']);
    }
}