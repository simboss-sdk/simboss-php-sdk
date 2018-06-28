<?php

namespace Simboss\Sdk\Request;

use Simboss\Sdk\Constant\SimbossUriConstant;
use Simboss\Sdk\Models\ThreeIdCombine;
use Simboss\Sdk\Exception\SimbossException;

/**
 * Created by Abel 2018-06-20.
 **/
class SmsSendRequest extends ThreeIdCombine implements SimbossRequest {

    public function getUri() {
        return SimbossUriConstant::URI_SMS_SEND;
    }
    
    public function getParam() {
        $param = parent::getParam();
        if (empty($this->text)) {
            throw new SimbossException("param text is required");
        }
        $param['text'] = $this->text;
        if (!empty($this->msgId)) {
            $param['msgId'] = $this->msgId;
        }
        return $param;
    }

    /**
     * 短信内容
     * @var string
     */
    public $text;

    /**
     * id
     * @var string
     */
    public $msgId;

}
