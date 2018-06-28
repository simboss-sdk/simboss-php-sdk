<?php

namespace Simboss\Sdk\Utils;

class SignatureUtil {
    
    /**
     * 参数签名 sha256 
     * @param array $param
     * @param string $appSecret
     */
    public static function getSignature(array $param, $appSecret) {
        $sign = "";
        ksort($param);
        foreach ($param as $key => $value) {
            $sign .= $key . "=" . $value . "&";
        }
        if (strrpos($sign, "&", strlen($sign) -1 )) {
            $sign = substr($sign, 0, strlen($sign) - 1);
        }
        $sign = $sign . $appSecret;   
        $sign = hash('sha256', $sign);
        return $sign;
    }
    
    
    
    
}