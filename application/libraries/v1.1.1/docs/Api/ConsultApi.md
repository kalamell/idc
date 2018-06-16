# Swagger\Client\ConsultApi

All URIs are relative to *http://150.95.31.184:3000/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createConsult**](ConsultApi.md#createConsult) | **POST** /consults/ | Create Consult


# **createConsult**
> \Swagger\Client\Model\SuccessResponse createConsult($platform, $name, $lang, $email, $mobile_no, $line_id, $message)

Create Consult

Create Consult

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ConsultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$name = "name_example"; // string | firstname - lastname
$lang = "th"; // string | lang is th or en
$email = "email_example"; // string | email
$mobile_no = "mobile_no_example"; // string | Mobile Number
$line_id = "line_id_example"; // string | Line Id
$message = "message_example"; // string | message

try {
    $result = $apiInstance->createConsult($platform, $name, $lang, $email, $mobile_no, $line_id, $message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsultApi->createConsult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **name** | **string**| firstname - lastname |
 **lang** | **string**| lang is th or en | [optional] [default to th]
 **email** | **string**| email | [optional]
 **mobile_no** | **string**| Mobile Number | [optional]
 **line_id** | **string**| Line Id | [optional]
 **message** | **string**| message | [optional]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

