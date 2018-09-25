simboss-php-sdk
---
[SIMBOSS API](https://www.simboss.com/www/api-doc/index.html) SDK

## 快速开始

- 添加依赖 composer

```json
"require": {
        "simboss/sdk" : "1.0.0"
    }
```

- 使用SimbossClient

```php
//初始化client
$simbossClient = SimbossClient::newInstance("appId", "appSecret");

//查询卡详情
$request = new DeviceDetailRequest();
$request->iccid = "89860401101730528432";
$response = $simbossClient->excute($request);

//返回结果说明
//1、接口请求的是否成功 bol
$success = $response->success;
//2、返回码, 见https://www.simboss.com/www/api-doc/index.html, 返回码规范章节。
$code = $response->code;
//3、返回的成功或者错误消息
$message = $response->message;
//4、返回的成功或者错误详细消息
$detail = $response->detail;
//5、返回的数据，不同请求返回值不同，具体请查看API文档。
$data = $response->data;

```

## 配置说明

- 默认配置见 \Simboss\Sdk\Config\SimbossConfig.php
- 自定义配置方式

```php
$conf = [
    'connectionTimeout' => 10000,
    'socketTimeout' => 30000,
    'apiUrl' => 'https://api.simboss.com',
    'apiAppId' => '10242017520',
    'apiAppSecret' => '2aa9382a45d3092f24fe2a0325f28200'
];
//初始化client
$simbossClient = SimbossClient::newInstance(null, null, null, $conf);
```

## API 清单

| API 名称               |           请求参                 |
| --------------------- | ------------------------------------------------------- |
|1.1 账户总览接口         | UserDashboardGetRequest         |
|2.1 批量卡详情			 | DeviceDetailBatchRequest        |
|2.2 单卡详情				 | DeviceDetailRequest             |
|2.3 单卡已订购套餐列表	 | DeviceOrderedPlansRequest       |
|2.4 单卡可续费套餐信息	 | DeviceRateplansRequest          |
|2.5 单卡续费				 | DeviceRechargeRequest           |
|2.6 单卡续费记录			 | DeviceRechargeRecordsRequest    |
|2.7 实时连接状态查询		 | DeviceGprsStatusRequest         |
|2.8 实时用户状态查询		 | DeviceUserStatusRequest         |
|2.9 设备实时开关机状态查询 | DeviceRunningStatusRequest      |
|2.10 查询设备套餐概要     | DeviceRatePlanSummaryRequest    |
|2.11 流量池卡开关网络     | DeviceModifyDeviceStatusRequest |
|2.12 日用量查询          | DeviceDailyUsageRequest         |
|2.13 取消测试期          | DeviceCancelTestingRequest      |
|2.14 更新备注            | DeviceMemoUpdateRequest         |
|2.15 批量更新备注         | DeviceMemoBatchUpdateRequest    |
|3.1 流量池详情			 | CardPoolDetailRequest           |
|3.2 用户下所有流量池信息   | CardPoolListRequest             |
|4.1 提交实名认证信息		 | RealnameSubmitRealnameRequest   |
|5.1 短信下发接口			 | SmsSendRequest                  |
|5.2 短信查询             | SmsListRequest                  |

## 源码说明 
- 仅支持php >= 5.6
- 单元测试：test/sdk/



