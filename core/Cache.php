<?php
/**
 * Cache.php
 * Cache 底层驱动
 * User: lixin
 * Date: 17-5-20
 */

namespace core;


abstract class Cache
{
    /**
     * 通过魔术函数，实现读取不可访问属性
     * @param string $name 参数名
     * @return mixed
     */
    public function __get($name)
    {
        return $this->get($name);
    }

    /**
     * 通过魔术函数，给不可访问属性赋值
     * @param string $name  参数名
     * @param mixed  $value 值
     * @return boolean
     */
    public function __set($name, $value)
    {
        return $this->set($name, $value);
    }

    /**
     * 通过魔术函数，删除不可访问属性
     * @param string $name 参数名
     * @return boolean
     */
    public function __unset($name)
    {
        return $this->delete($name);
    }
}