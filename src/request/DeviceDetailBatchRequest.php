<?php

namespace Simboss\Sdk\Request;

use Simboss\Sdk\Constant\SimbossUriConstant;
use Simboss\Sdk\Models\ThreeIdsCombine;

/**
 * Created by Abel 2018-06-20.
 **/
class DeviceDetailBatchRequest extends ThreeIdsCombine implements SimbossRequest{

  public function getUri() {
    return SimbossUriConstant::URI_DEVICE_DETAIL_BATCH;
  }

  public function getParam() {
    return parent::getParam();
  }

}
