<?php
/**
 * Test.php
 * 描述
 * User: lixin
 * Date: 17-6-23
 */

namespace app\module\car\model;


use core\BaseModel;

class TestMongo extends BaseModel
{
    protected $_mongoDb = "report_0x18";
    protected $_collection = "RD5512G500000301";
    protected $_connection = "report_0x18";
    protected $_mongo_connection;

    public function __construct($attributes = [])
    {
        parent::__construct($attributes);
        $this->_mongo_connection = $this->getMongoCollection($this->_connection, $this->_mongoDb, $this->_collection);
    }

    public function getOneEx()
    {
        return $this->_mongo_connection->findOne(array('time' => 1497336593));
    }
}