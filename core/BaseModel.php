<?php
/**
 * BaseModel.php
 * 数据层
 * User: lixin
 * Date: 17-5-19
 */

namespace core;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    /**
     * BaseModel constructor.
     * @param array $attributes
     * @author lixin
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
    
    public function getMongoCollection($connection, $mongoDb, $collection)
    {
        return MongoDb::getInstance($connection)->getCollection($mongoDb, $collection);
    }
}