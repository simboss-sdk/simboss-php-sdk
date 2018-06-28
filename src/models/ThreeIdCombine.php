<?php

namespace Simboss\Sdk\Models;

use Simboss\Sdk\Exception\SimbossException;

/**
 * ICCID, MSISDN, IMSI三字段
 * Created by Abel 2018-06-20.
 **/
class ThreeIdCombine {

  public $iccid;

  public $msisdn;

  public $imsi;

  public function getParam() {
      $param = array();
      if (!empty($this->iccid)) {
          $param['iccid'] = $this->iccid;
      }
      if (!empty($this->msisdn)) {
          $param["msisdn"] = msisdn;
      }
      if (!empty($this->imsi)) {
          $param["imsi"] = $this->imsi;
      }
      if (count($param) < 1) {
          throw new SimbossException("param iccid, msisdn, imsi at least one can't be null");
      }
      return $param;
  }
}
