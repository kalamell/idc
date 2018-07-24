# Swagger\Client\ArticleApi

All URIs are relative to *http://150.95.31.184:3000/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createArticle**](ArticleApi.md#createArticle) | **POST** /articles | Create Article
[**deleteArticle**](ArticleApi.md#deleteArticle) | **POST** /articles/delete | Delete Article
[**getArticle**](ArticleApi.md#getArticle) | **GET** /articles | Get article
[**getArticleById**](ArticleApi.md#getArticleById) | **GET** /articles/{id} | Get article by id
[**getArticleByPageId**](ArticleApi.md#getArticleByPageId) | **GET** /articles/page/{pageId} | Get article by page
[**updateArticle**](ArticleApi.md#updateArticle) | **PUT** /articles | Update Article


# **createArticle**
> \Swagger\Client\Model\SuccessResponse createArticle($platform, $x_access_token, $x_user, $body, $lang)

Create Article

Create Article

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ArticleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$body = new \Swagger\Client\Model\Body7(); // \Swagger\Client\Model\Body7 | 
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->createArticle($platform, $x_access_token, $x_user, $body, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleApi->createArticle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **x_access_token** | **string**| access token after user login |
 **x_user** | **string**| username or email for check log |
 **body** | [**\Swagger\Client\Model\Body7**](../Model/Body7.md)|  |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteArticle**
> \Swagger\Client\Model\SuccessResponse deleteArticle($platform, $x_access_token, $x_user, $body, $lang)

Delete Article

Delete Article

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ArticleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$body = new \Swagger\Client\Model\Body8(); // \Swagger\Client\Model\Body8 | 
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->deleteArticle($platform, $x_access_token, $x_user, $body, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleApi->deleteArticle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **x_access_token** | **string**| access token after user login |
 **x_user** | **string**| username or email for check log |
 **body** | [**\Swagger\Client\Model\Body8**](../Model/Body8.md)|  |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArticle**
> \Swagger\Client\Model\ArticleResponse getArticle($platform, $x_access_token, $x_user, $lang)

Get article

Get article

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ArticleApi(
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
    $result = $apiInstance->getArticle($platform, $x_access_token, $x_user, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleApi->getArticle: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ArticleResponse**](../Model/ArticleResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArticleById**
> \Swagger\Client\Model\ArticleResponse getArticleById($platform, $id, $x_access_token, $x_user, $lang)

Get article by id

Get article by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ArticleApi(
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
    $result = $apiInstance->getArticleById($platform, $id, $x_access_token, $x_user, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleApi->getArticleById: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ArticleResponse**](../Model/ArticleResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArticleByPageId**
> \Swagger\Client\Model\ArticleResponse getArticleByPageId($platform, $page_id, $x_access_token, $x_user, $lang)

Get article by page

Get article by page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ArticleApi(
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
    $result = $apiInstance->getArticleByPageId($platform, $page_id, $x_access_token, $x_user, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleApi->getArticleByPageId: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ArticleResponse**](../Model/ArticleResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateArticle**
> \Swagger\Client\Model\SuccessResponse updateArticle($platform, $x_access_token, $x_user, $body, $lang)

Update Article

Update Article

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ArticleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$body = new \Swagger\Client\Model\Body6(); // \Swagger\Client\Model\Body6 | 
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->updateArticle($platform, $x_access_token, $x_user, $body, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleApi->updateArticle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **x_access_token** | **string**| access token after user login |
 **x_user** | **string**| username or email for check log |
 **body** | [**\Swagger\Client\Model\Body6**](../Model/Body6.md)|  |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

