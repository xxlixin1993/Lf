<?php
/**
 * Cache.php
 * Cache操作类
 * User: lixin
 * Date: 17-5-20
 */

namespace core;


class Cache
{
    /**
     * 获取redis链接
     * @return mixed
     * @author lixin
     */
    public static function getRedisConn()
    {
        if (empty(CacheFactory::$_handle['redis'])) {
            $config = Config::getInstance(BASEDIR);
            CacheFactory::cacheFactory('redis', $config['redis']);
        }
        return CacheFactory::$_handle['redis'];
    }

    /**
     * 获取memcache链接
     * @return mixed
     * @author lixin
     */
    public static function getMemcacheConn()
    {
        if (empty(CacheFactory::$_handle['memcache'])) {
            $config = Config::getInstance(BASEDIR);
            CacheFactory::cacheFactory('memcache', $config['memcache']);
        }
        return CacheFactory::$_handle['memcache'];
    }

}