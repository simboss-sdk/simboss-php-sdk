<?php

namespace Simboss\Sdk\Request;

interface SimbossRequest {
    
    
    /**
     * 获取API的URI
     * @return string
     */
    function getUri();
    
    /**
     * 获取请求参数
     * @return array
     */
    function getParam();
    
}