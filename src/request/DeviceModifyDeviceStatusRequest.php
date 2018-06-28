<?php

namespace Simboss\Sdk\Request;

use Simboss\Sdk\Constant\SimbossUriConstant;
use Simboss\Sdk\Models\ThreeIdCombine;
use Simboss\Sdk\Exception\SimbossException;

/**
 * Created by Abel 2018-06-20.
 **/
class DeviceModifyDeviceStatusRequest extends ThreeIdCombine implements SimbossRequest {

	public function getUri() {
		return SimbossUriConstant::URI_DEVICE_MODIFY_DEVICE_STATUS;
	}

    public function getParam() {
        $param = parent::getParam();
        if (empty($this->status)) {
            throw new SimbossException("param status is required");
        }
        $param['status'] = $this->status;
        return $param;
    }

    /**
     * 停机：DEACTIVATED_NAME， 复机： ACTIVATED_NAME
     * @var string
     */
    public $status;

}
