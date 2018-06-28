<?php

namespace Simboss\Sdk\Config;

class SimbossConfig {
    
    public $conf = [
        'connectionTimeout' => 10000,
        'socketTimeout' => 30000,
        'apiUrl' => 'https://api.simboss.com',
        'apiAppId' => '',
        'apiAppSecret' => ''
    ];
    
    /**
     * 
     * @param string $apiAppId
     * @param string $apiAppSecret
     * @param string $apiUrl
     * @param array $conf
     * @return \Simboss\Sdk\Config\SimbossConfig
     */
    public function initConf($apiAppId = null, $apiAppSecret = null, $apiUrl = null, array $conf = []) {
        if (!empty($conf)) foreach ($conf as $key => $value) {
            $this->conf[$key] = $value;   
        }
        if(isset($apiUrl)) $this->conf['apiUrl'] = $apiUrl;
        if(isset($apiAppId)) $this->conf['apiAppId'] = $apiAppId;
        if(isset($apiAppSecret)) $this->conf['apiAppSecret'] = $apiAppSecret;
        return $this->conf;
    }
    
}