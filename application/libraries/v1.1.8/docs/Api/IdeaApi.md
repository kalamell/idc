# Swagger\Client\IdeaApi

All URIs are relative to *http://150.95.31.184:3000/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createIdea**](IdeaApi.md#createIdea) | **POST** /idea | Create Idea
[**deleteIdea**](IdeaApi.md#deleteIdea) | **POST** /idea/delete | Delete Idea
[**getIdea**](IdeaApi.md#getIdea) | **GET** /idea | Get idea
[**getIdeaById**](IdeaApi.md#getIdeaById) | **GET** /idea/{id} | Get idea by id
[**getIdeaByPageId**](IdeaApi.md#getIdeaByPageId) | **GET** /idea/page/{pageId} | Get idea by page
[**updateIdea**](IdeaApi.md#updateIdea) | **PUT** /idea | Update Idea


# **createIdea**
> \Swagger\Client\Model\SuccessResponse createIdea($platform, $x_access_token, $x_user, $page_id, $name, $detail, $image, $lang)

Create Idea

Create Idea

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\IdeaApi(
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
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->createIdea($platform, $x_access_token, $x_user, $page_id, $name, $detail, $image, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdeaApi->createIdea: ', $e->getMessage(), PHP_EOL;
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
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIdea**
> \Swagger\Client\Model\SuccessResponse deleteIdea($platform, $x_access_token, $x_user, $body, $lang)

Delete Idea

Delete Idea

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\IdeaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$body = new \Swagger\Client\Model\Body4(); // \Swagger\Client\Model\Body4 | 
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->deleteIdea($platform, $x_access_token, $x_user, $body, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdeaApi->deleteIdea: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **x_access_token** | **string**| access token after user login |
 **x_user** | **string**| username or email for check log |
 **body** | [**\Swagger\Client\Model\Body4**](../Model/Body4.md)|  |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIdea**
> \Swagger\Client\Model\IdeaResponse getIdea($platform, $x_access_token, $x_user, $lang)

Get idea

Get idea

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\IdeaApi(
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
    $result = $apiInstance->getIdea($platform, $x_access_token, $x_user, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdeaApi->getIdea: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\IdeaResponse**](../Model/IdeaResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIdeaById**
> \Swagger\Client\Model\IdeaResponse getIdeaById($platform, $id, $x_access_token, $x_user, $lang)

Get idea by id

Get idea by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\IdeaApi(
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
    $result = $apiInstance->getIdeaById($platform, $id, $x_access_token, $x_user, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdeaApi->getIdeaById: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\IdeaResponse**](../Model/IdeaResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIdeaByPageId**
> \Swagger\Client\Model\IdeaResponse getIdeaByPageId($platform, $page_id, $x_access_token, $x_user, $lang)

Get idea by page

Get idea by page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\IdeaApi(
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
    $result = $apiInstance->getIdeaByPageId($platform, $page_id, $x_access_token, $x_user, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdeaApi->getIdeaByPageId: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\IdeaResponse**](../Model/IdeaResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateIdea**
> \Swagger\Client\Model\SuccessResponse updateIdea($platform, $x_access_token, $x_user, $id, $lang, $page_id, $name, $detail, $image)

Update Idea

Update Idea

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\IdeaApi(
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

try {
    $result = $apiInstance->updateIdea($platform, $x_access_token, $x_user, $id, $lang, $page_id, $name, $detail, $image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdeaApi->updateIdea: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

