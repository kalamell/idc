# Swagger\Client\DesignerApi

All URIs are relative to *http://150.95.31.184:3000/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**favoriteDesigner**](DesignerApi.md#favoriteDesigner) | **POST** /designers/favorite | favorite designer for web
[**getDesignerByCategory**](DesignerApi.md#getDesignerByCategory) | **GET** /designers/{categoryId}/ | Get Designer by Category
[**getDesignerByCategoryAll**](DesignerApi.md#getDesignerByCategoryAll) | **GET** /designers/{categoryId}/all | Get Designer by Category all for show in map
[**getDesignerById**](DesignerApi.md#getDesignerById) | **GET** /designers/{categoryId}/{designerId} | Get Designer by id
[**getDesignerCategory**](DesignerApi.md#getDesignerCategory) | **GET** /designers/categories | Get Designer Category


# **favoriteDesigner**
> \Swagger\Client\Model\SuccessResponse favoriteDesigner($platform, $x_access_token, $x_user, $action, $designer_id, $lang)

favorite designer for web

Favorite or Unfavorite designer for web

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DesignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$action = "action_example"; // string | Action $push is favorite and $pull is unfavorite
$designer_id = "designer_id_example"; // string | designerId is id
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->favoriteDesigner($platform, $x_access_token, $x_user, $action, $designer_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignerApi->favoriteDesigner: ', $e->getMessage(), PHP_EOL;
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
 **designer_id** | **string**| designerId is id |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDesignerByCategory**
> \Swagger\Client\Model\DesignerResponse getDesignerByCategory($platform, $category_id, $lang, $pagination)

Get Designer by Category

Get Designer by Category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DesignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$category_id = "category_id_example"; // string | designer category id from designer category object
$lang = "th"; // string | lang is th or en
$pagination = "pagination_example"; // string | Pagination for load more designer list. Send designerId (_id) last array

try {
    $result = $apiInstance->getDesignerByCategory($platform, $category_id, $lang, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignerApi->getDesignerByCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **category_id** | **string**| designer category id from designer category object |
 **lang** | **string**| lang is th or en | [optional] [default to th]
 **pagination** | **string**| Pagination for load more designer list. Send designerId (_id) last array | [optional]

### Return type

[**\Swagger\Client\Model\DesignerResponse**](../Model/DesignerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDesignerByCategoryAll**
> \Swagger\Client\Model\DesignerResponse getDesignerByCategoryAll($platform, $category_id, $lang)

Get Designer by Category all for show in map

Get Designer Category for show in map

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DesignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$category_id = "category_id_example"; // string | designer category id from designer category object
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getDesignerByCategoryAll($platform, $category_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignerApi->getDesignerByCategoryAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **category_id** | **string**| designer category id from designer category object |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\DesignerResponse**](../Model/DesignerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDesignerById**
> \Swagger\Client\Model\DesignerResponse getDesignerById($platform, $category_id, $designer_id, $lang)

Get Designer by id

Get Designer by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DesignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$category_id = "category_id_example"; // string | designer category id from designer category object
$designer_id = "designer_id_example"; // string | designer id
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getDesignerById($platform, $category_id, $designer_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignerApi->getDesignerById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **category_id** | **string**| designer category id from designer category object |
 **designer_id** | **string**| designer id |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\DesignerResponse**](../Model/DesignerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDesignerCategory**
> \Swagger\Client\Model\DesignerCategoryResponse getDesignerCategory($platform, $lang)

Get Designer Category

Get Designer Category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DesignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getDesignerCategory($platform, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignerApi->getDesignerCategory: ', $e->getMessage(), PHP_EOL;
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

