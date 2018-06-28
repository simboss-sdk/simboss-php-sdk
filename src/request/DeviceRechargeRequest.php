<?php

namespace Simboss\Sdk\Request;

use Simboss\Sdk\Constant\SimbossUriConstant;
use Simboss\Sdk\Models\ThreeIdCombine;
use Simboss\Sdk\Exception\SimbossException;

/**
 * Created by Abel 2018-06-20.
 **/
class DeviceRechargeRequest extends ThreeIdCombine implements SimbossRequest {

    public function getUri() {
        return SimbossUriConstant::URI_DEVICE_RECHARGE;
    }

    public function getParam() {
        $param = parent::getParam();
        if (empty($this->ratePlanId)) {
            throw new SimbossException("param ratePlanId is required");
        }
        $param['ratePlanId'] = $this->ratePlanId;
        $this->month = empty($this->month) ? 1 : $this->month;
        $param['month'] = $this->month;
        if (!empty($this->externalOrder)) {
            $param['externalOrder'] = $this->externalOrder;
        }
        return $param;
    }
   
  /**
   * 套餐ID
   * @var int
   */
  public $ratePlanId;

  /**
   * 续费几个月
   * @var int
   */
  public $month;

  /**
   * 外部续费编号
   * @var string
   */
  public $externalOrder;

}
