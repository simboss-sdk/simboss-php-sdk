<?php

namespace Simboss\Tests\Sdk;

use PHPUnit\Framework\TestCase;
use Simboss\Sdk\SimbossClient;
use Simboss\Sdk\Request\UserDashboardGetRequest;

class TestAccountInfo extends TestCase {
    
    private $simbossClient;
    
    /**
     * {@inheritDoc}
     * @see \PHPUnit_Framework_TestCase::setUp()
     */
    public function setUp() {
        $this->simbossClient = SimbossClient::newInstance("10242017520", "2aa9382a45d3092f24fe2a0325f28200");
    }
    
    public function testUserDashboardGet () {
        $request = new UserDashboardGetRequest();
        $response = $this->simbossClient->excute($request);
        print_r($response);
        if (!empty($response->data)) {
            print_r($response->data->company);
        }
    }
}







