<?php

namespace Simboss\Sdk\Request;

use Simboss\Sdk\Constant\SimbossUriConstant;
use Simboss\Sdk\Models\ThreeIdCombine;
use Simboss\Sdk\Exception\SimbossException;
use Simboss\Sdk\Utils\FileUtil;

/**
 * Created by Abel 2018-06-20.
 **/
class RealnameSubmitRealnameRequest extends ThreeIdCombine implements SimbossRequest {

    public function getUri() {
        return SimbossUriConstant::URI_REALNAME_SUBMIT_REALNAME;
    }
    
    public function getParam() {
        $param = parent::getParam();
        if (empty($this->name)) {
            throw new SimbossException("param status is required");
        }
        $param['name'] = $this->name;
        if (empty($this->licenseType)) {
            throw new SimbossException("param licenseType is required");
        }
        $param['licenseType'] = $this->licenseType;
        if (empty($this->licenseCode)) {
            throw new SimbossException("param licenseCode is required");
        }
        $param['licenseCode'] = $this->licenseCode;
        if (empty($this->phone)) {
            throw new SimbossException("param phone is required");
        }
        $param['phone'] = $this->phone;
        if (!empty($this->extenalUserName)) {
            $param['extenalUserName'] = $this->extenalUserName;
        }
        if (empty($this->pic1)) {
            throw new SimbossException("param pic1 is required");
        }
        $param['pic1'] = $this->pic1;
        if (empty($this->pic2)) {
            throw new SimbossException("param pic2 is required");
        }
        $param['pic2'] = $this->pic2;
        if (!empty($this->pic3)) {
          $param['pic3'] = $this->pic3;
        }
        return $param;
    }
 
    /**
     * 实名名字
     * @var string 
     */
    public $name;

    /**
     * 证件类型, (idcard: 身份证, passport:护照， mobile：手机号码)
     * @var string 
     */
    public $licenseType;

    /**
     * 证件号码
     * @var string
     */
    public $licenseCode;

    /**
     * 电话号码
     * @var string
     */
    public $phone;

    /**
     * 第三方系统实名名字
     * @var string
     */
    public $extenalUserName;

    /**
     * 证件正面图片
     * @var string （图片的base64字符串格式）
     */
    public $pic1;
    
    /**
     * 设置证件正面图片
     * @param string $localFilePath 本地图片文件路径
     */
    public function setPic1($localFilePath) {
        $this->pic1 = FileUtil::convertFileToBase64($localFilePath);
    }

    /**
     * 证件反面图片
     * @var string （图片的base64字符串格式）
     */
    public $pic2;
    
    /**
     * 设置证件反面图片
     * @param string $localFilePath 本地图片文件路径
     */
    public function setPic2($localFilePath) {
        $this->pic2 = FileUtil::convertFileToBase64($localFilePath);
    }

    /**
     * 手持证件图片（图片的base64字符串格式）
     * @var string
     */
    public $pic3;
    
    /**
     * 设置证件手持图片
     * @param string $localFilePath 本地图片文件路径
     */
    public function setPic3($localFilePath) {
        $this->pic3 = FileUtil::convertFileToBase64($localFilePath);
    }
    
}
