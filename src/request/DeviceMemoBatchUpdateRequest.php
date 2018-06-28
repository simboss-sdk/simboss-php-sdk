<?php

namespace Simboss\Sdk\Request;

use Simboss\Sdk\Constant\SimbossUriConstant;
use Simboss\Sdk\Models\ThreeIdsCombine;
use Simboss\Sdk\Exception\SimbossException;

/**
 * Created by Abel 2018-06-20.
 **/
class DeviceMemoBatchUpdateRequest extends ThreeIdsCombine implements SimbossRequest{

    public function getUri() {
        return SimbossUriConstant::URI_DEVICE_MEMO_BATCH_UPDATE;
    }
    
    public function getParam() {
        $param = parent::getParam();
        if (empty($this->memo)) {
          throw new SimbossException("param memo is required");
        }
        $param['memo'] = $this->memo;
        return $param;
    }

    public $memo;
}
