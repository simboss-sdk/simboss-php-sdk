<?php
namespace Simboss\Tests\Sdk;

use PHPUnit\Framework\TestCase;
use Simboss\Sdk\SimbossClient;
use Simboss\Sdk\Request\DeviceDetailRequest;
use Simboss\Sdk\Request\DeviceDetailBatchRequest;
use Simboss\Sdk\Request\DeviceOrderedPlansRequest;
use Simboss\Sdk\Request\DeviceRateplansRequest;
use Simboss\Sdk\Request\DeviceRechargeRequest;
use Simboss\Sdk\Request\DeviceRechargeRecordsRequest;
use Simboss\Sdk\Request\DeviceGprsStatusRequest;
use Simboss\Sdk\Request\DeviceUserStatusRequest;
use Simboss\Sdk\Request\DeviceRunningStatusRequest;
use Simboss\Sdk\Request\DeviceRatePlanSummaryRequest;
use Simboss\Sdk\Request\DeviceModifyDeviceStatusRequest;
use Simboss\Sdk\Request\DeviceDailyUsageRequest;
use Simboss\Sdk\Request\DeviceCancelTestingRequest;
use Simboss\Sdk\Request\DeviceMemoUpdateRequest;
use Simboss\Sdk\Request\DeviceMemoBatchUpdateRequest;

class TestAccountInfo extends TestCase{

    private $simbossClient;

    /**
     *
     * {@inheritdoc}
     * @see \PHPUnit_Framework_TestCase::setUp()
     */
    public function setUp()
    {
        $this->simbossClient = SimbossClient::newInstance("10242017520", "2aa9382a45d3092f24fe2a0325f28200");
    }

    public function _testDeviceDetail()
    {
        $request = new DeviceDetailRequest();
        $request->iccid = "89860401101730528432";
        $response = $this->simbossClient->excute($request);
        print_r($response);
        if (! empty($response->data)) {
            print_r($response->data->iccid);
        }
    }

    public function _testDeviceDetailBatch()
    {
        $request = new DeviceDetailBatchRequest();
        $request->addIccid("89860401101730528432");
        $request->addIccid("8986031740205777418");
        $response = $this->simbossClient->excute($request);
        print_r($response);
        if (! empty($response->data)) {
            print_r($response->data[0]->openDate);
        }
    }

    public function _testDeviceOrderedRatePlans()
    {
        $request = new DeviceOrderedPlansRequest();
        $request->iccid = "89860401101730528432";
        $response = $this->simbossClient->excute($request);
        print_r($response);
        if (! empty($response->data)) {
            print_r($response->data[0]->name);
        }
    }

    public function _testDeviceRateplans()
    {
        $request = new DeviceRateplansRequest();
        $request->iccid = "89860401101730528432";
        $response = $this->simbossClient->excute($request);
        print_r($response);
        if (! empty($response->data)) {
            print_r($response->data[0]->name);
        }
    }

    public function _testDeviceRecharge()
    {
        $request = new DeviceRechargeRequest();
        $request->iccid = "89860401101730528432";
        $request->ratePlanId = 672;
        $response = $this->simbossClient->excute($request);
        print_r($response);
    }

    public function _testDeviceRechargeRecords()
    {
        $request = new DeviceRechargeRecordsRequest();
        $request->iccid = "89860401101730528432";
        $response = $this->simbossClient->excute($request);
        print_r($response);
        if (! empty($response->data)) {
            print_r($response->data[0]->orderName);
        }
    }

    public function _testDeviceGprsStatus()
    {
        $request = new DeviceGprsStatusRequest();
        $request->iccid = "89860401101730528432";
        $response = $this->simbossClient->excute($request);
        print_r($response);
        if (! empty($response->data)) {
            print_r($response->data->status);
        }
    }

    public function _testDeviceUserStatus()
    {
        $request = new DeviceUserStatusRequest();
        $request->iccid = "89860401101730528432";
        $response = $this->simbossClient->excute($request);
        print_r($response);
        if (! empty($response->data)) {
            print_r($response->data->status);
        }
    }

    public function _testDeviceRunningStatus()
    {
        $request = new DeviceRunningStatusRequest();
        $request->iccid = "89860401101730528432";
        $response = $this->simbossClient->excute($request);
        print_r($response);
        if (! empty($response->data)) {
            print_r($response->data->status);
        }
    }

    public function _testDeviceRatePlanSummary()
    {
        $request = new DeviceRatePlanSummaryRequest();
        $request->iccid = "89860401101730528432";
        $response = $this->simbossClient->excute($request);
        print_r($response);
        if (! empty($response->data)) {
            print_r($response->data->expirationDate);
        }
    }

    public function _testDeviceModifyDeviceStatus()
    {
        $request = new DeviceModifyDeviceStatusRequest();
        $request->iccid = "89860401101730528432";
        $request->status = "ACTIVATED_NAME";
        $response = $this->simbossClient->excute($request);
        print_r($response);
    }

    public function _testDeviceDailyUsage()
    {
        $request = new DeviceDailyUsageRequest();
        $request->iccid = "89860401101730528432";
        $request->date = "2018-06-27";
        $response = $this->simbossClient->excute($request);
        print_r($response);
        if (! empty($response->data)) {
            print_r($response->data->date);
        }
    }

    public function _testDeviceCancelTesting()
    {
        $request = new DeviceCancelTestingRequest();
        $request->iccid = "89860401101730528432";
        $response = $this->simbossClient->excute($request);
        print_r($response);
    }

    public function _testDeviceMemoUpdate()
    {
        $request = new DeviceMemoUpdateRequest();
        $request->iccid = "89860401101730528432";
        $request->memo = "我的php单个备注";
        $response = $this->simbossClient->excute($request);
        print_r($response);
    }

    public function _testDeviceMemoBatchUpdate()
    {
        $request = new DeviceMemoBatchUpdateRequest();
        $request->addIccid("89860401101730528432");
        $request->addIccid("8986031740205777418");
        $request->memo = "我的php批量备注";
        $response = $this->simbossClient->excute($request);
        print_r($response);
    }
}







