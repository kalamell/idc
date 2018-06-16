# Swagger\Client\SupplierApi

All URIs are relative to *http://150.95.31.184:3000/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**favoriteSupplier**](SupplierApi.md#favoriteSupplier) | **POST** /suppliers/favorite | favorite supplier for web
[**getSupplierByCategory**](SupplierApi.md#getSupplierByCategory) | **GET** /suppliers/{categoryId}/ | Get Supplier by Category
[**getSupplierByCategoryAll**](SupplierApi.md#getSupplierByCategoryAll) | **GET** /suppliers/{categoryId}/all | Get Supplier by Category all for show in map
[**getSupplierById**](SupplierApi.md#getSupplierById) | **GET** /suppliers/{categoryId}/{supplierId} | Get Supplier by id
[**getSupplierByShop**](SupplierApi.md#getSupplierByShop) | **GET** /suppliers/shop/{shopId} | Get Supplier by shop
[**getSupplierCategory**](SupplierApi.md#getSupplierCategory) | **GET** /suppliers/categories | Get Supplier Category


# **favoriteSupplier**
> \Swagger\Client\Model\SuccessResponse favoriteSupplier($platform, $x_access_token, $x_user, $action, $supplier_id, $lang)

favorite supplier for web

Favorite or Unfavorite supplier for web

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$action = "action_example"; // string | Action $push is favorite and $pull is unfavorite
$supplier_id = "supplier_id_example"; // string | supplierId is id
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->favoriteSupplier($platform, $x_access_token, $x_user, $action, $supplier_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierApi->favoriteSupplier: ', $e->getMessage(), PHP_EOL;
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
 **supplier_id** | **string**| supplierId is id |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSupplierByCategory**
> \Swagger\Client\Model\ProductResponse getSupplierByCategory($platform, $category_id, $lang, $pagination)

Get Supplier by Category

Get Supplier by Category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$category_id = "category_id_example"; // string | supplier category id from supplier category object
$lang = "th"; // string | lang is th or en
$pagination = "pagination_example"; // string | Pagination for load more supplier list. Send supplierId (_id) last array

try {
    $result = $apiInstance->getSupplierByCategory($platform, $category_id, $lang, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierApi->getSupplierByCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **category_id** | **string**| supplier category id from supplier category object |
 **lang** | **string**| lang is th or en | [optional] [default to th]
 **pagination** | **string**| Pagination for load more supplier list. Send supplierId (_id) last array | [optional]

### Return type

[**\Swagger\Client\Model\ProductResponse**](../Model/ProductResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSupplierByCategoryAll**
> \Swagger\Client\Model\ProductResponse getSupplierByCategoryAll($platform, $category_id, $lang)

Get Supplier by Category all for show in map

Get Supplier Category for show in map

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$category_id = "category_id_example"; // string | supplier category id from supplier category object
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getSupplierByCategoryAll($platform, $category_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierApi->getSupplierByCategoryAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **category_id** | **string**| supplier category id from supplier category object |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\ProductResponse**](../Model/ProductResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSupplierById**
> \Swagger\Client\Model\ProductResponse getSupplierById($platform, $category_id, $supplier_id, $lang)

Get Supplier by id

Get Supplier by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$category_id = "category_id_example"; // string | supplier category id from supplier category object
$supplier_id = "supplier_id_example"; // string | supplier id
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getSupplierById($platform, $category_id, $supplier_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierApi->getSupplierById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **category_id** | **string**| supplier category id from supplier category object |
 **supplier_id** | **string**| supplier id |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\ProductResponse**](../Model/ProductResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSupplierByShop**
> \Swagger\Client\Model\ProductResponse getSupplierByShop($platform, $category_id, $shop_id, $lang)

Get Supplier by shop

Get Supplier by shop

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$category_id = "category_id_example"; // string | supplier category id from supplier category object
$shop_id = "shop_id_example"; // string | shop id
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getSupplierByShop($platform, $category_id, $shop_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierApi->getSupplierByShop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **category_id** | **string**| supplier category id from supplier category object |
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

# **getSupplierCategory**
> \Swagger\Client\Model\DesignerCategoryResponse getSupplierCategory($platform, $lang)

Get Supplier Category

Get Supplier Category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getSupplierCategory($platform, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierApi->getSupplierCategory: ', $e->getMessage(), PHP_EOL;
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

