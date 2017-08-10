<?php
/**
 * User.php
 * 描述
 * User: lixin
 * Date: 17-8-10
 */

namespace app\model;


use core\BaseModel;

class User extends BaseModel
{
    protected $connection = 'test';
    protected $table = 'user';
}