<?php

namespace Simboss\Sdk;


use Simboss\Sdk\Config\SimbossConfig;
use GuzzleHttp\Client;
use Simboss\Sdk\Request\SimbossRequest;
use Simboss\Sdk\Response\SimbossResponse;
use Simboss\Sdk\Utils\SignatureUtil;

/**
 *
 * @author dzh
 * @since 1.0
 */
class SimbossClient {

    /**
     * @var \GuzzleHttp\Client
     */
    private $httpClient;
    
    private $defaultCharSet = "UTF-8";

    /**
     * @var array
     */
    private $conf;
    
    private function __construct() {    
    }

    /**
     * Initialize/Create SimbossClient
     * @param string $apiAppId
     * @param string $apiAppSecret
     * @param string $apiUrl
     * @param array $conf
     * @return \Simboss\Sdk\SimbossClient
     */
    public static function newInstance($apiAppId = null, $apiAppSecret = null, $apiUrl = null, array $conf = []) {
        $client = new SimbossClient();
        $simbossConfig = new SimbossConfig();
        $client->conf = $simbossConfig->initConf($apiAppId, $apiAppSecret, $apiUrl, $conf);
        $client->initHttpClient($client->conf);
        return $client;
    }

    private function initHttpClient($conf) {
        //set head or cookies param
        //$optConf = [ 'headers' => [], 'cookies' => []];
        $heads = ['Content-Type' => 'application/x-www-form-urlencoded;charset=' . $this->defaultCharSet];
        $optConf = [ 'head' => $heads];
        $this->httpClient = new Client($optConf);
    }
   
    /**
     * 调用接口
     * @param SimbossRequest $request
     * @return SimbossResponse
     */
    public function excute (SimbossRequest $request) {
        try {
            $url = $this->conf['apiUrl'] . $request->getUri();
            $params = $this->getRequestParam($request);
            $httpParam = ['form_params' => $params];
            $httpRespoonse = $this->httpClient->post($url, $httpParam);
            $response = $httpRespoonse->getBody()->getContents();
            //return \GuzzleHttp\json_decode($response, true);
            return json_decode($response);
        } catch (\Exception $e) {
            $response = new SimbossResponse();
            $response->code = "599";
            $response->success = false;
            $response->message = $e->getMessage();
            return $response;
        }
    }
    
    /**
     * 设置请求参数
     * @param SimbossRequest $request
     * @return array
     */
    private function getRequestParam($request)
    {
        $param = $request->getParam();
        $param['appid'] = $this->conf['apiAppId'];
        $param['timestamp'] = $this->getMillisecond();
        $sign = SignatureUtil::getSignature($param, $this->conf['apiAppSecret']);
        $param['sign'] = $sign;
        return $param;
    }

    function getMillisecond() {
        list($s1, $s2) = explode(' ', microtime());
        return (float)sprintf('%.0f', (floatval($s1) + floatval($s2)) * 1000);
    }

}







