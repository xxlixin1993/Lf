<?php

/**
 * 请求类
 * User: lixin
 * Date: 2017/3/31
 * Time: 上午10:51
 */
namespace core;
class Request
{
    /**
     * GET请求参数
     * @var array
     */
    public static $_GET  = [];

    /**
     * POST请求参数
     * @var array
     */
    public static $_POST = [];

    /**
     * PUT请求参数
     * @var array
     */
    public static $_PUT = [];

    /**
     * DELETE请求参数
     * @var array
     */
    public static $_DELETE = [];

    /**
     * 检查请求参数
     * @param string $request_method GET POST PUT DELETE
     */
    public static function checkParam($request_method)
    {
        if (!empty($_GET)) {
            foreach ($_GET as $key => $value) {
                self::$_GET[$key] = htmlspecialchars($value, ENT_QUOTES);
            }
        }
        if (!empty($_POST)) {
            foreach ($_POST as $key => $value) {
                self::$_POST[$key] = htmlspecialchars($value, ENT_QUOTES);
            }
        }
        //put delete参数
        if ($request_method == 'PUT' || $request_method == 'DELETE') {
            $params = file_get_contents('php://input');
            if (!empty($params)) {
                if (strstr($params, '&')) {
                    $param_arr = explode('&', $params);
                    foreach ($param_arr as $item) {
                        $tmp = explode('=', $item);
                        if ($request_method == 'PUT') {
                            self::$_PUT[$tmp[0]] = htmlspecialchars($tmp[1], ENT_QUOTES);
                        } else {
                            self::$_DELETE[$tmp[0]] = htmlspecialchars($tmp[1], ENT_QUOTES);
                        }
                    }
                } else {
                    if (strstr($params, '=')) {
                        $param_arr = explode('=', $params);
                        if ($request_method == 'PUT') {
                            self::$_PUT[$param_arr[0]] = htmlspecialchars($param_arr[1], ENT_QUOTES);
                        } else {
                            self::$_DELETE[$param_arr[0]] = htmlspecialchars($param_arr[1], ENT_QUOTES);
                        }
                    }
                }
            }
        }

    }


}