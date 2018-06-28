<?php

namespace Simboss\Sdk\Request;

use Simboss\Sdk\Constant\SimbossUriConstant;
use Simboss\Sdk\Models\ThreeIdCombine;
use Simboss\Sdk\Exception\SimbossException;

/**
 * Created by Abel 2018-06-20.
 **/
class DeviceDailyUsageRequest extends ThreeIdCombine implements SimbossRequest {
    
    public function getUri() {
        return SimbossUriConstant::URI_DEVICE_DAILY_USAGE;
    }

    public function getParam() {
        $param = parent::getParam();
        if (empty($this->date)) {
            throw new SimbossException("param date is required");
        }
        $param['date'] = $this->date;
        return  $param;
    }
 
    /**
    * @var string, format: date(day, 'Y-m-d')
    */
    public $date;
}


