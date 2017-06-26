<?php

/**
 * HttpRequest.php
 * http请求 使用的guzzle的类库
 * http://docs.guzzlephp.org/en/latest/quickstart.html
 * User: lixin
 * Date: 17-6-26
 */
namespace lib;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
class HttpRequest
{
    /**
     * http接口配置.
     * @var array
     */
    protected $_config = [
        // @ex:car项目的分页接口
        'CarTestPage' => '/page'

    ];

    /**
     * @var Client|null
     */
    public $_client = null;

    /**
     * 完整的接口链接.
     *
     * @var string
     */
    public $_baseUri = '';

    /**
     * 接口名.
     *
     * @var string
     */
    public $_apiName = '';

    /**
     * HttpRequest constructor.
     *
     * @param string $domain env中的配置名 例如logic
     * @param string $apiName $_config定义的api名
     * @param string $extra 用来对uri的补充
     * @param int $timeout 超时时间
     */
    public function __construct($domain, $apiName = '', $extra = '', $timeout = 2)
    {
        //联调测试环境问题，非生产环境接口超时时间改为5s
        $timeout = env('ENV') == 'product' ? $timeout : 5;
        $this->_apiName = $apiName;
        $this->_baseUri = env(strtoupper($domain) . 'API_DOMAIN_' . env('ENV'), 'http://lf.com') . $this->_config[$apiName] . $extra;

        $this->_client = new Client([
            'base_uri' => $this->_baseUri,
            'timeout' => $timeout,
        ]);
    }

    /**
     * 发送请求
     *
     * @param string $method HTTP请求方法 GET|PUT|POST|DELETE ...
     * @param array $query 请求的参数 详细见http://docs.guzzlephp.org/en/latest/request-options.html
     *
     * @return bool|string
     *
     * @example:
     * POST请求
     * $c = new HttpRequest('logic','CarTestPage');
     * $c->request('POST',[
     * 'form_params' =>
     *     [
     *     'foo' => 'abc',
     *     'bar' => '123',
     *     ]
     * ]);
     *
     * GET请求
     * $c = new HttpRequest('logic','CarTestPage');
     * $c->request('GET',['query' => ['foo' => 'abc','bar'=>123]])
     *
     * @author lixin1@douyu.tv
     */
    public function request($method, array $query = [])
    {
        if (is_null($this->_client) || empty($this->_baseUri)) {
            return false;
        }
        try {
            //接口禁用重定向
            $query['allow_redirects'] = false;

            $response = $this->_client->request($method, $this->_baseUri, $query);

            if ($response->getStatusCode() != 200) {
                return false;
            }

            return (string)$response->getBody();
        } catch (RequestException $e1) {
            $error = '错误码:' . $e1->getCode() . ' 错误信息:' . $e1->getMessage() . ' 错误请求: ' . \GuzzleHttp\Psr7\str($e1->getRequest());
            if ($e1->hasResponse()) {
                $error .= ' 错误响应:' . \GuzzleHttp\Psr7\str($e1->getResponse());
            }
            //$e1->getHandlerContext();  //错误的详细信息
            return false;
        } catch (\Exception $e2) {

            return false;
        }
    }

    /**
     * GET请求
     *
     * @param array $param 请求参数 ['foo' => 'abc','bar'=>123]
     *
     * @return bool|string
     *
     * @example
     * $c = new HttpRequest('logic','CarTestPage');
     * $c->getQuery(['foo' => 'abc','bar'=>123]);
     *
     * @author lixin1@douyu.tv
     */
    public function getQuery(array $param = [])
    {
        if (is_null($this->_client) || empty($this->_baseUri)) {
            return false;
        }
        //接口禁用重定向
        $query['allow_redirects'] = false;

        if (!empty($param)) {
            $query['query'] = $param;
        }

        try {
            $response = $this->_client->request('GET', $this->_baseUri, $query);

            if ($response->getStatusCode() != 200) {
                return false;
            }

            return (string)$response->getBody();
        } catch (RequestException $e1) {
            $error = '错误码:' . $e1->getCode() . ' 错误信息:' . $e1->getMessage() . ' 错误请求: ' . \GuzzleHttp\Psr7\str($e1->getRequest());

            if ($e1->hasResponse()) {
                $error .= ' 错误响应:' . \GuzzleHttp\Psr7\str($e1->getResponse());
            }
            //$e1->getHandlerContext();  //错误的详细信息

            return false;
        } catch (\Exception $e2) {


            return false;
        }
    }

    /**
     * POST表单请求
     *
     * @param array $param 请求参数 ['foo' => 'abc','bar'=>123]
     *
     * @return bool|string
     *
     * @example
     * $c = new HttpRequest('logic','CarTestPage');
     * $c->postForm(['foo' => 'abc','bar'=>123]);
     *
     * @author lixin1@douyu.tv
     */
    public function postForm(array $param = [])
    {
        if (is_null($this->_client) || empty($this->_baseUri)) {
            return false;
        }
        //接口禁用重定向
        $query['allow_redirects'] = false;

        if (!empty($param)) {
            $query['form_params'] = $param;
        }

        try {
            $response = $this->_client->request('POST', $this->_baseUri, $query);

            if ($response->getStatusCode() != 200) {

                return false;
            }

            return (string)$response->getBody();
        } catch (RequestException $e1) {
            $error = '错误码:' . $e1->getCode() . ' 错误信息:' . $e1->getMessage() . ' 错误请求: ' . \GuzzleHttp\Psr7\str($e1->getRequest());

            if ($e1->hasResponse()) {
                $error .= ' 错误响应:' . \GuzzleHttp\Psr7\str($e1->getResponse());
            }
            //$e1->getHandlerContext();  //错误的详细信息

            return false;
        } catch (\Exception $e2) {
            return false;
        }
    }


}
