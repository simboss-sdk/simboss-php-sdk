<?php

namespace Simboss\Sdk\Request;

use Simboss\Sdk\Constant\SimbossUriConstant;

class CardPoolListRequest implements SimbossRequest {

    public function getUri() {
        return SimbossUriConstant::URI_CARD_POOL_LIST;
    }
    
    public function getParam() {
        return [];
    }
}