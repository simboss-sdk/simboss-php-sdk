<?php

namespace Simboss\Sdk\Request;

use Simboss\Sdk\Constant\SimbossUriConstant;
use Simboss\Sdk\Models\ThreeIdCombine;

/**
 * Created by Abel 2018-06-20.
 **/
class DeviceRatePlanSummaryRequest extends ThreeIdCombine implements SimbossRequest{

  public function getUri() {
      return SimbossUriConstant::URI_DEVICE_RATEPLAN_SUMMARY;
  }

  public function getParam() {
      return parent::getParam();
  }
  
}
