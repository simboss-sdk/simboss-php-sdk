<?php

namespace Simboss\Sdk\Request;

use Simboss\Sdk\Constant\SimbossUriConstant;

class UserDashboardGetRequest implements SimbossRequest {

    public function getUri() {
        return SimbossUriConstant::URI_USER_DASHBOARD_GET;
    }
    
    public function getParam() {
        return [];
    }
}