<?php

namespace Simboss\Sdk\Response;

class SimbossResponse {
    
    /**
     * 返回消息
     * @var string
     */
    public $message;
    
    /**
     * 返回消息详情
     * @var string
     */
    public $detail;
    
    /**
     * 返回状态码
     * @var string
     */
    public $code;
    
    /**
     * 是否成功
     * @var boolean
     */
    public $success;
    
    /**
     * 返回数据
     * @var mixed
     */
    public $data;

}