<?php

/**
 * 控制器基类
 * User: lixin
 * Date: 2017/3/26
 * Time: 下午11:28
 */
namespace core;

use bootstrap\Init;

class Controller
{

    protected $_data;
    protected $_template_dir;

    /**
     * 构造函数
     */
    public function __construct()
    {
        $this->_template_dir = Init::getInstance()->_base_dir . '/app/view/';
    }

    /**
     * 分配数据给模板
     * @param string $key 变量名
     * @param mixed $value 变量值
     */
    public function assign($key, $value)
    {
        $this->_data[$key] = $value;
    }

    /**
     * 渲染模板 用php自带模板属性
     * @param string $view_name 模板文件名
     */
    public function display($view_name = '')
    {
        $path = $this->_template_dir . '/' . $view_name . '.php';
        //把数组中的key当变量名,value当变量值
        extract($this->_data);
        include $path;
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