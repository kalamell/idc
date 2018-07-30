# Swagger\Client\UploadApi

All URIs are relative to *http://150.95.31.184:3000/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**uploadChat**](UploadApi.md#uploadChat) | **POST** /upload/chat | Upload image file sound for chat
[**uploadImage**](UploadApi.md#uploadImage) | **POST** /upload/images | Upload image


# **uploadChat**
> \Swagger\Client\Model\UploadResponse uploadChat($platform, $x_access_token, $x_user, $file, $lang)

Upload image file sound for chat

Upload image file and sound for chat *** remark response array string url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$file = "/path/to/file.txt"; // \SplFileObject | file for chat response url of file
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->uploadChat($platform, $x_access_token, $x_user, $file, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->uploadChat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **x_access_token** | **string**| access token after user login |
 **x_user** | **string**| username or email for check log |
 **file** | **\SplFileObject**| file for chat response url of file |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\UploadResponse**](../Model/UploadResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadImage**
> \Swagger\Client\Model\UploadResponse uploadImage($platform, $x_access_token, $x_user, $images, $lang)

Upload image

Upload image *** remark response array string id image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$images = "/path/to/file.txt"; // \SplFileObject | image file
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->uploadImage($platform, $x_access_token, $x_user, $images, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->uploadImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **x_access_token** | **string**| access token after user login |
 **x_user** | **string**| username or email for check log |
 **images** | **\SplFileObject**| image file |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\UploadResponse**](../Model/UploadResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

