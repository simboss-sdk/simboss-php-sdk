<?php
namespace Simboss\Tests\Sdk;

use PHPUnit\Framework\TestCase;
use Simboss\Sdk\SimbossClient;
use Simboss\Sdk\Request\SmsSendRequest;
use Simboss\Sdk\Request\SmsListRequest;

class TestSmsMgt extends TestCase
{

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

    public function _testSmsSend()
    {
        $request = new SmsSendRequest();
        $request->iccid = "89860401101730528432";
        $request->text = "php sdk 发送短信";
        $response = $this->simbossClient->excute($request);
        print_r($response);
    }

    public function testSmsList()
    {
        $request = new SmsListRequest();
        $request->iccid = "89860401101730528432";
        $request->pageNo = 1;
        $response = $this->simbossClient->excute($request);
        print_r($response);
        if (! empty($response->data)) {
            print_r($response->data->text);
        }
    }
}
