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

    /**
     * 获取mongo链接
     * @param string $connection 选择mongo配置中的配置
     * @param string $mongoDb database名
     * @param string $collection 集合名
     * @return mixed
     * @author lixin
     */
    public function getMongoCollection($connection, $mongoDb, $collection)
    {
        return MongoDb::getInstance($connection)->getCollection($mongoDb, $collection);
    }
}