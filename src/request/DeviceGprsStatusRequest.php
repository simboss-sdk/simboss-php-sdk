<?php

namespace Simboss\Sdk\Request;

use Simboss\Sdk\Constant\SimbossUriConstant;
use Simboss\Sdk\Models\ThreeIdCombine;

/**
 * Created by Abel 2018-06-20.
 **/
class DeviceGprsStatusRequest extends ThreeIdCombine implements SimbossRequest{

  public function getUri() {
      return SimbossUriConstant::URI_DEVICE_GPRS_STATUS;
  }

  public function getParam() {
      return parent::getParam();
  }
  
}
