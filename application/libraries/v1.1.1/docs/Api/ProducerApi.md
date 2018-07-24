# Swagger\Client\ProducerApi

All URIs are relative to *http://150.95.31.184:3000/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**favoriteProducer**](ProducerApi.md#favoriteProducer) | **POST** /producers/favorite | favorite producer for web
[**getProducerByCategory**](ProducerApi.md#getProducerByCategory) | **GET** /producers/{categoryId}/ | Get Producer by Category
[**getProducerByCategoryAll**](ProducerApi.md#getProducerByCategoryAll) | **GET** /producers/{categoryId}/all | Get Producer by Category all for show in map
[**getProducerById**](ProducerApi.md#getProducerById) | **GET** /producers/{categoryId}/{producerId} | Get Producer by id
[**getProducerByShop**](ProducerApi.md#getProducerByShop) | **GET** /producers/shop/{shopId} | Get Producer by shop
[**getProducerCategory**](ProducerApi.md#getProducerCategory) | **GET** /producers/categories | Get Producer Category


# **favoriteProducer**
> \Swagger\Client\Model\SuccessResponse favoriteProducer($platform, $x_access_token, $x_user, $action, $producer_id, $lang)

favorite producer for web

Favorite or Unfavorite producer for web

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProducerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$action = "action_example"; // string | Action $push is favorite and $pull is unfavorite
$producer_id = "producer_id_example"; // string | producerId is id
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->favoriteProducer($platform, $x_access_token, $x_user, $action, $producer_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProducerApi->favoriteProducer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **x_access_token** | **string**| access token after user login |
 **x_user** | **string**| username or email for check log |
 **action** | **string**| Action $push is favorite and $pull is unfavorite |
 **producer_id** | **string**| producerId is id |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProducerByCategory**
> \Swagger\Client\Model\ProductResponse getProducerByCategory($platform, $category_id, $lang, $pagination)

Get Producer by Category

Get Producer by Category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProducerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$category_id = "category_id_example"; // string | producer category id from producer category object
$lang = "th"; // string | lang is th or en
$pagination = "pagination_example"; // string | Pagination for load more producer list. Send producerId (_id) last array

try {
    $result = $apiInstance->getProducerByCategory($platform, $category_id, $lang, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProducerApi->getProducerByCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **category_id** | **string**| producer category id from producer category object |
 **lang** | **string**| lang is th or en | [optional] [default to th]
 **pagination** | **string**| Pagination for load more producer list. Send producerId (_id) last array | [optional]

### Return type

[**\Swagger\Client\Model\ProductResponse**](../Model/ProductResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProducerByCategoryAll**
> \Swagger\Client\Model\ProductResponse getProducerByCategoryAll($platform, $category_id, $lang)

Get Producer by Category all for show in map

Get Producer Category for show in map

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProducerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$category_id = "category_id_example"; // string | producer category id from producer category object
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getProducerByCategoryAll($platform, $category_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProducerApi->getProducerByCategoryAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **category_id** | **string**| producer category id from producer category object |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\ProductResponse**](../Model/ProductResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProducerById**
> \Swagger\Client\Model\ProductResponse getProducerById($platform, $category_id, $producer_id, $lang)

Get Producer by id

Get Producer by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProducerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$category_id = "category_id_example"; // string | producer category id from producer category object
$producer_id = "producer_id_example"; // string | producer id
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getProducerById($platform, $category_id, $producer_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProducerApi->getProducerById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **category_id** | **string**| producer category id from producer category object |
 **producer_id** | **string**| producer id |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\ProductResponse**](../Model/ProductResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProducerByShop**
> \Swagger\Client\Model\ProductResponse getProducerByShop($platform, $category_id, $shop_id, $lang)

Get Producer by shop

Get Producer by shop

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProducerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$category_id = "category_id_example"; // string | producer category id from producer category object
$shop_id = "shop_id_example"; // string | shop id
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getProducerByShop($platform, $category_id, $shop_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProducerApi->getProducerByShop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **category_id** | **string**| producer category id from producer category object |
 **shop_id** | **string**| shop id |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\ProductResponse**](../Model/ProductResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProducerCategory**
> \Swagger\Client\Model\DesignerCategoryResponse getProducerCategory($platform, $lang)

Get Producer Category

Get Producer Category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProducerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getProducerCategory($platform, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProducerApi->getProducerCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\DesignerCategoryResponse**](../Model/DesignerCategoryResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

