<?php

namespace Simboss\Sdk\Request;

use Simboss\Sdk\Constant\SimbossUriConstant;
use Simboss\Sdk\Models\ThreeIdCombine;
use Simboss\Sdk\Exception\SimbossException;

/**
 * Created by Abel 2018-06-20.
 **/
class SmsListRequest extends ThreeIdCombine implements SimbossRequest{

    public function getUri() {
        return SimbossUriConstant::URI_SMS_LIST;
    }

    public function getParam() {
        $param = parent::getParam();
        if (empty($this->pageNo)) {
            throw new SimbossException("param pageNo is required");
        }
        $param['pageNo'] = $this->pageNo;
        return $param;
    }
    
    /**
     * 页码
     * @var int
     */
    public $pageNo;

}
