<?php

namespace Simboss\Sdk\Models;

use Simboss\Sdk\Exception\SimbossException;

/**
 * ICCID, MSISDN, IMSI三字段
 * Created by Abel 2018-06-20.
 **/
class ThreeIdsCombine {

  /**
   * @var array
   */
  private $iccids = [];

  /**
   * @var array
   */
  private $msisdns = [];

  /**
   * @var array
   */
  private $imsis = [];

  public function getParam() {
      $param = array();
      if (!empty($this->iccids)) {
          $param['iccids'] = implode(",", $this->iccids);
      }
      if (!empty($this->msisdns)) {
          $param["msisdns"] = implode(",", $this->msisdns);
      }
      if (!empty($this->imsis)) {
          $param["imsis"] = implode(",", $this->imsis);
      }
      if (count($param) < 1) {
          throw new SimbossException("param iccids, msisdns, imsis at least one can't be null");
      }
      return $param;
  }
  
  /**
   * 添加查询的iccid
   * @param string $iccid
   */
  public function addIccid($iccid) {
      array_push($this->iccids, $iccid);
  }
  
  /**
   * 添加查询的msisdn
   * @param string $msisdn
   */
  public function addMsisdn($msisdn) {
      array_push($this->msisdns, $msisdn);
  }
  
  /**
   * 添加查询的imsi
   * @param string $imsi
   */
  public function addImsi($imsi) {
      array_push($this->imsis, $imsi);
  }
  
  
}
