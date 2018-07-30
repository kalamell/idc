# Swagger\Client\KnowledgeApi

All URIs are relative to *http://150.95.31.184:3000/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**favoriteKnowledge**](KnowledgeApi.md#favoriteKnowledge) | **POST** /knowledges/favorite | favorite knowledges for web
[**getKnowledge**](KnowledgeApi.md#getKnowledge) | **GET** /knowledges/{knowledgeCategoryId} | Get knowledge content list
[**getKnowledgeById**](KnowledgeApi.md#getKnowledgeById) | **GET** /knowledges/{knowledgeCategoryId}/{knowledgeId} | Get knowledge content by id
[**getKnowledgeBySubcategory**](KnowledgeApi.md#getKnowledgeBySubcategory) | **GET** /knowledges/category/{knowledgeCategoryId}/sub_category/{knowledgeSubcategoryId} | Get knowledge by subcategory
[**getKnowledgeCategory**](KnowledgeApi.md#getKnowledgeCategory) | **GET** /knowledges/categories | Get knowledge category
[**getKnowledgeSubcategory**](KnowledgeApi.md#getKnowledgeSubcategory) | **GET** /knowledges/sub_categories/{knowledgeCategoryId} | Get knowledge subcategory
[**likeKnowledge**](KnowledgeApi.md#likeKnowledge) | **POST** /knowledges/like | Like video
[**searchKnowledge**](KnowledgeApi.md#searchKnowledge) | **POST** /knowledges/search | Search knowledge


# **favoriteKnowledge**
> \Swagger\Client\Model\SuccessResponse favoriteKnowledge($platform, $x_access_token, $x_user, $action, $knowledge_id, $lang)

favorite knowledges for web

Favorite or Unfavorite knowledges for web

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\KnowledgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$action = "action_example"; // string | Action $push is favorite and $pull is unfavorite
$knowledge_id = "knowledge_id_example"; // string | knowledgeId is id
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->favoriteKnowledge($platform, $x_access_token, $x_user, $action, $knowledge_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeApi->favoriteKnowledge: ', $e->getMessage(), PHP_EOL;
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
 **knowledge_id** | **string**| knowledgeId is id |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKnowledge**
> \Swagger\Client\Model\KnowledgeResponse getKnowledge($platform, $knowledge_category_id, $x_access_token, $x_user, $lang)

Get knowledge content list

Get knowledge content list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\KnowledgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$knowledge_category_id = "knowledge_category_id_example"; // string | knowledge category id from knowledge category object
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getKnowledge($platform, $knowledge_category_id, $x_access_token, $x_user, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeApi->getKnowledge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **knowledge_category_id** | **string**| knowledge category id from knowledge category object |
 **x_access_token** | **string**| access token after user login | [optional]
 **x_user** | **string**| username or email for check log | [optional]
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\KnowledgeResponse**](../Model/KnowledgeResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKnowledgeById**
> \Swagger\Client\Model\KnowledgeResponse getKnowledgeById($platform, $knowledge_category_id, $knowledge_id, $x_access_token, $x_user, $lang)

Get knowledge content by id

Get knowledge content detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\KnowledgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$knowledge_category_id = "knowledge_category_id_example"; // string | knowledge category id from knowledge category object
$knowledge_id = "knowledge_id_example"; // string | knowledge id from knowledge object
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getKnowledgeById($platform, $knowledge_category_id, $knowledge_id, $x_access_token, $x_user, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeApi->getKnowledgeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **knowledge_category_id** | **string**| knowledge category id from knowledge category object |
 **knowledge_id** | **string**| knowledge id from knowledge object |
 **x_access_token** | **string**| access token after user login | [optional]
 **x_user** | **string**| username or email for check log | [optional]
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\KnowledgeResponse**](../Model/KnowledgeResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKnowledgeBySubcategory**
> \Swagger\Client\Model\KnowledgeResponse getKnowledgeBySubcategory($platform, $knowledge_category_id, $knowledge_subcategory_id, $x_access_token, $x_user, $lang)

Get knowledge by subcategory

Get knowledge by subcategory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\KnowledgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$knowledge_category_id = "knowledge_category_id_example"; // string | knowledge category id from knowledge category object
$knowledge_subcategory_id = "knowledge_subcategory_id_example"; // string | knowledge subcategory id from knowledge subcategory object
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getKnowledgeBySubcategory($platform, $knowledge_category_id, $knowledge_subcategory_id, $x_access_token, $x_user, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeApi->getKnowledgeBySubcategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **knowledge_category_id** | **string**| knowledge category id from knowledge category object |
 **knowledge_subcategory_id** | **string**| knowledge subcategory id from knowledge subcategory object |
 **x_access_token** | **string**| access token after user login | [optional]
 **x_user** | **string**| username or email for check log | [optional]
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\KnowledgeResponse**](../Model/KnowledgeResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKnowledgeCategory**
> \Swagger\Client\Model\CategoryResponse getKnowledgeCategory($platform, $lang)

Get knowledge category

Get knowledge category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\KnowledgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getKnowledgeCategory($platform, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeApi->getKnowledgeCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\CategoryResponse**](../Model/CategoryResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKnowledgeSubcategory**
> \Swagger\Client\Model\CategoryResponse getKnowledgeSubcategory($platform, $knowledge_category_id, $lang)

Get knowledge subcategory

Get knowledge subcategory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\KnowledgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$knowledge_category_id = "knowledge_category_id_example"; // string | knowledge category id from knowledge category object
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getKnowledgeSubcategory($platform, $knowledge_category_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeApi->getKnowledgeSubcategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **knowledge_category_id** | **string**| knowledge category id from knowledge category object |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\CategoryResponse**](../Model/CategoryResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **likeKnowledge**
> \Swagger\Client\Model\SuccessResponse likeKnowledge($platform, $x_access_token, $x_user, $action, $knowledge_id, $lang)

Like video

Like or unlike video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\KnowledgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$action = "action_example"; // string | Action $push is like and $pull is unlike
$knowledge_id = "knowledge_id_example"; // string | knowledgeId is video id
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->likeKnowledge($platform, $x_access_token, $x_user, $action, $knowledge_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeApi->likeKnowledge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **x_access_token** | **string**| access token after user login |
 **x_user** | **string**| username or email for check log |
 **action** | **string**| Action $push is like and $pull is unlike |
 **knowledge_id** | **string**| knowledgeId is video id |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKnowledge**
> \Swagger\Client\Model\KnowledgeSearchResponse searchKnowledge($platform, $text_search, $lang)

Search knowledge

Search knowledge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\KnowledgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$text_search = "text_search_example"; // string | 
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->searchKnowledge($platform, $text_search, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeApi->searchKnowledge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **text_search** | **string**|  |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\KnowledgeSearchResponse**](../Model/KnowledgeSearchResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

