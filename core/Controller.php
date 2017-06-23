<?php

/**
 * 控制器基类
 * User: lixin
 * Date: 2017/3/26
 * Time: 下午11:28
 */
namespace core;


class Controller
{
    /**
     * Controller constructor.
     * @author lixin
     */
    public function __construct()
    {

    }

    /**
     * 输出Json
     * @param int $code 状态码
     * @param string $message 信息
     * @param array $data 数据
     * @author lixin
     */
    public function apiReturn($code, $message = '', $data = array())
    {
        $returnData = [
            'code' => $code,
            'data' => $data,
            'msg' => $message,
        ];
        exit(json_encode($returnData));
    }
}