<?php
namespace Simboss\Tests\Sdk;

use PHPUnit\Framework\TestCase;
use Simboss\Sdk\SimbossClient;
use Simboss\Sdk\Request\RealnameSubmitRealnameRequest;

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

    public function testRealnameSubmitRealname()
    {
        $request = new RealnameSubmitRealnameRequest();
        $request->iccid = "89860401101730528432";
        $request->name = "张三-php-sdk";
        $request->licenseType = "idcard";
        $request->licenseCode = "49900023923";
        $request->phone = "13655445565";
        $request->extenalUserName = "ID:xiaomi";
        $request->setPic1("/Users/Abel/logo.jpg");
        $request->setPic2("/Users/Abel/logo.jpg");
        $request->setPic3("/Users/Abel/logo.jpg");
        $response = $this->simbossClient->excute($request);
        print_r($response);
    }
}
