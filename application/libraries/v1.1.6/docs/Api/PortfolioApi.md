# Swagger\Client\PortfolioApi

All URIs are relative to *http://150.95.31.184:3000/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPortfolio**](PortfolioApi.md#createPortfolio) | **POST** /portfolio | Create Portfolio
[**deletePortfolio**](PortfolioApi.md#deletePortfolio) | **POST** /portfolio/delete | Delete Portfolio
[**getPortfolio**](PortfolioApi.md#getPortfolio) | **GET** /portfolio | Get portfolio
[**getPortfolioById**](PortfolioApi.md#getPortfolioById) | **GET** /portfolio/{id} | Get portfolio by id
[**getPortfolioByPageId**](PortfolioApi.md#getPortfolioByPageId) | **GET** /portfolio/page/{pageId} | Get portfolio by page
[**updatePortfolio**](PortfolioApi.md#updatePortfolio) | **PUT** /portfolio | Update Portfolio


# **createPortfolio**
> \Swagger\Client\Model\SuccessResponse createPortfolio($platform, $x_access_token, $x_user, $page_id, $name, $detail, $image, $design_date, $produce_date, $lang)

Create Portfolio

Create Portfolio

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PortfolioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$page_id = "page_id_example"; // string | pageId is _id of Page Object
$name = "name_example"; // string | 
$detail = "detail_example"; // string | 
$image = "image_example"; // string | image is id from API Upload image
$design_date = "design_date_example"; // string | Format YYYY-MM-DD
$produce_date = "produce_date_example"; // string | Format YYYY-MM-DD
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->createPortfolio($platform, $x_access_token, $x_user, $page_id, $name, $detail, $image, $design_date, $produce_date, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfolioApi->createPortfolio: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **x_access_token** | **string**| access token after user login |
 **x_user** | **string**| username or email for check log |
 **page_id** | **string**| pageId is _id of Page Object |
 **name** | **string**|  |
 **detail** | **string**|  |
 **image** | **string**| image is id from API Upload image |
 **design_date** | **string**| Format YYYY-MM-DD |
 **produce_date** | **string**| Format YYYY-MM-DD |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePortfolio**
> \Swagger\Client\Model\SuccessResponse deletePortfolio($platform, $x_access_token, $x_user, $body, $lang)

Delete Portfolio

Delete Portfolio

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PortfolioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$body = new \Swagger\Client\Model\Body5(); // \Swagger\Client\Model\Body5 | 
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->deletePortfolio($platform, $x_access_token, $x_user, $body, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfolioApi->deletePortfolio: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **x_access_token** | **string**| access token after user login |
 **x_user** | **string**| username or email for check log |
 **body** | [**\Swagger\Client\Model\Body5**](../Model/Body5.md)|  |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPortfolio**
> \Swagger\Client\Model\PortfolioResponse getPortfolio($platform, $x_access_token, $x_user, $lang)

Get portfolio

Get portfolio

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PortfolioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getPortfolio($platform, $x_access_token, $x_user, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfolioApi->getPortfolio: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **x_access_token** | **string**| access token after user login | [optional]
 **x_user** | **string**| username or email for check log | [optional]
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\PortfolioResponse**](../Model/PortfolioResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPortfolioById**
> \Swagger\Client\Model\PortfolioResponse getPortfolioById($platform, $id, $x_access_token, $x_user, $lang)

Get portfolio by id

Get portfolio by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PortfolioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$id = "id_example"; // string | 
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getPortfolioById($platform, $id, $x_access_token, $x_user, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfolioApi->getPortfolioById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **id** | **string**|  |
 **x_access_token** | **string**| access token after user login | [optional]
 **x_user** | **string**| username or email for check log | [optional]
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\PortfolioResponse**](../Model/PortfolioResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPortfolioByPageId**
> \Swagger\Client\Model\PortfolioResponse getPortfolioByPageId($platform, $page_id, $x_access_token, $x_user, $lang)

Get portfolio by page

Get portfolio by page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PortfolioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$page_id = "page_id_example"; // string | pageId is _id of Page Object
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getPortfolioByPageId($platform, $page_id, $x_access_token, $x_user, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfolioApi->getPortfolioByPageId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **page_id** | **string**| pageId is _id of Page Object |
 **x_access_token** | **string**| access token after user login | [optional]
 **x_user** | **string**| username or email for check log | [optional]
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\PortfolioResponse**](../Model/PortfolioResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePortfolio**
> \Swagger\Client\Model\SuccessResponse updatePortfolio($platform, $x_access_token, $x_user, $id, $lang, $page_id, $name, $detail, $image, $design_date, $produce_date)

Update Portfolio

Update Portfolio

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PortfolioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$id = "id_example"; // string | id is _id of Idea Object
$lang = "th"; // string | lang is th or en
$page_id = "page_id_example"; // string | pageId is _id of Page Object
$name = "name_example"; // string | 
$detail = "detail_example"; // string | 
$image = "image_example"; // string | image is id from API Upload image
$design_date = "design_date_example"; // string | Format YYYY-MM-DD
$produce_date = "produce_date_example"; // string | Format YYYY-MM-DD

try {
    $result = $apiInstance->updatePortfolio($platform, $x_access_token, $x_user, $id, $lang, $page_id, $name, $detail, $image, $design_date, $produce_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfolioApi->updatePortfolio: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **x_access_token** | **string**| access token after user login |
 **x_user** | **string**| username or email for check log |
 **id** | **string**| id is _id of Idea Object |
 **lang** | **string**| lang is th or en | [optional] [default to th]
 **page_id** | **string**| pageId is _id of Page Object | [optional]
 **name** | **string**|  | [optional]
 **detail** | **string**|  | [optional]
 **image** | **string**| image is id from API Upload image | [optional]
 **design_date** | **string**| Format YYYY-MM-DD | [optional]
 **produce_date** | **string**| Format YYYY-MM-DD | [optional]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

