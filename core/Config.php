<?php
/**
 * Created by PhpStorm.
 * User: lixin
 * Date: 2017/3/26
 * Time: 下午1:42
 */
namespace core;
/**
 * 加载配置文件
 */
class Config implements \ArrayAccess
{
    /**
     * 将所有的配置存放到自己的私有变量
     * @var array
     */
    private $config = array();

    /**
     * 保存要获取的config文件的路径
     * @var string
     */
    protected $path;

    /**
     * @var Config
     */
    protected static $_instance;

    /**
     * Config constructor.
     * @param $path
     */
    protected function __construct($path)
    {
        //组织配置文件路径
        $this->path = $path . '/config/';
    }

    public static function getInstance($path)
    {
        if (empty(self::$_instance)) {
            self::$_instance = new self($path);
        }
        return self::$_instance;
    }
    
    /**
     * 实现ArrayAccess的4个方法
     * @param mixed $key 配置文件名 例DatabaseConfig
     * @return mixed
     */
    public function offsetGet($key)
    {
        if (!isset($config[$key])) {
            //把配置文件的数组放在config属性中
            $this->config[$key] = require $this->path . $key . '.php';
        }
        //返回所调用的配置文件名
        return $this->config[$key];
    }

    //当要设置数组时会调用
    public function offsetSet($key, $value)
    {
        throw new \Exception("Cannot write config file.Plz modify the configuration by writing profiles.");

    }

    //当调用isset()时会调用
    public function offsetExists($key)
    {
        return isset($this->config[$key]);
    }

    //当要清除数组时会调用
    public function offsetUnset($key)
    {
        throw new \Exception("Cannot write config file.Plz modify the configuration by writing profiles.");
    }
}