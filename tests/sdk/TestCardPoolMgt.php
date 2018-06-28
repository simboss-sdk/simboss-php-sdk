<?php
namespace Simboss\Tests\Sdk;

use PHPUnit\Framework\TestCase;
use Simboss\Sdk\SimbossClient;
use Simboss\Sdk\Request\CardPoolDetailRequest;
use Simboss\Sdk\Request\CardPoolListRequest;

class TestCardPoolMgt extends TestCase
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

    public function _testCardPoolDetail() {
        $request = new CardPoolDetailRequest();
        $request->iccid = "8986031740205777419";
        $response = $this->simbossClient->excute($request);
        print_r($response);
        if (! empty($response->data)) {
            print_r($response->data->carrier);
        }
    }

    public function testCardPoolList() {
        $request = new CardPoolListRequest();
        $response = $this->simbossClient->excute($request);
        print_r($response);
        if (! empty($response->data)) {
            print_r($response->data[0]->carrier);
        }
    }
}
