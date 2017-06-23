<?php
/**
 * MongoDb.php
 * mongo驱动
 * User: lixin
 * Date: 17-6-23
 */

namespace core;


use bootstrap\Init;

class MongoDb
{
    private $_collection = [];

    private $_manager;

    private static $_instance;

    /**
     * MongoDb constructor.
     * @param string $connection mongodb配置文件中的定义的key
     * @author lixin
     */
    protected function __construct($connection)
    {
        $config = Config::getInstance(BASEDIR);
        //mongodb://username:password@host:port  || mongodb://host:port
        if (empty($config['mongodb'][$connection]['username'])) {
            $dns = 'mongodb://' . $config['mongodb'][$connection]['host'] . ':' . $config['mongodb'][$connection]['port'];
        } else {
            $dns = 'mongodb://' . $config['mongodb'][$connection]['username'] . ':'
                . $config['mongodb'][$connection]['password'] .
                '@' . $config['mongodb'][$connection]['host'] . ':'
                . $config['mongodb'][$connection]['port'];
        }

        $this->_manager = new \MongoDB\Driver\Manager($dns);
    }

    /**
     * 创建mongo链接
     * @param string $db
     * @param string $collection
     * @return mixed
     * @author lixin
     */
    private function collection($db, $collection)
    {
        $this->_collection[$db][$collection] = new \MongoDB\Collection($this->_manager, $db, $collection, $options = []);
        return $this->_collection[$db][$collection];
    }

    /**
     * 获取实例
     * @param string $connection mongodb配置文件中的定义的key
     * @return MongoDb
     * @author lixin
     */
    public static function getInstance($connection)
    {
        if (empty(self::$_instance)) {
            self::$_instance = new self($connection);
        }
        return self::$_instance;
    }

    /**
     * 获取mongo链接
     * @param string $db
     * @param string $collection
     * @return mixed
     * @author lixin
     */
    public function getCollection($db, $collection)
    {
        if (isset($this->_collection[$db][$collection])) {
            return $this->_collection[$db][$collection];
        } else {
            return $this->collection($db, $collection);
        }
    }

}