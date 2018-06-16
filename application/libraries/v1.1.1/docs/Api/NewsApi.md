# Swagger\Client\NewsApi

All URIs are relative to *http://150.95.31.184:3000/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getNews**](NewsApi.md#getNews) | **GET** /news/{newsCategoryId} | Get news
[**getNewsById**](NewsApi.md#getNewsById) | **GET** /news/{newsCategoryId}/{newsId} | Get news by id
[**getNewsCategory**](NewsApi.md#getNewsCategory) | **GET** /news/categories | Get news category
[**searchNews**](NewsApi.md#searchNews) | **POST** /news/search | Search news


# **getNews**
> \Swagger\Client\Model\NewsResponse getNews($platform, $news_category_id, $lang, $sort_field, $sort_value, $pagination)

Get news

Get news list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$news_category_id = "news_category_id_example"; // string | news category id from news category object
$lang = "lang_example"; // string | lang is th or en
$sort_field = "th"; // string | field for sort book list
$sort_value = 56; // int | sortValue is 1 ASC and -1 DESC
$pagination = "pagination_example"; // string | Pagination for load more book list. Send bookId (_id) last array

try {
    $result = $apiInstance->getNews($platform, $news_category_id, $lang, $sort_field, $sort_value, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->getNews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **news_category_id** | **string**| news category id from news category object |
 **lang** | **string**| lang is th or en | [optional]
 **sort_field** | **string**| field for sort book list | [optional] [default to th]
 **sort_value** | **int**| sortValue is 1 ASC and -1 DESC | [optional]
 **pagination** | **string**| Pagination for load more book list. Send bookId (_id) last array | [optional]

### Return type

[**\Swagger\Client\Model\NewsResponse**](../Model/NewsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNewsById**
> \Swagger\Client\Model\NewsResponse getNewsById($platform, $news_id, $news_category_id, $lang)

Get news by id

Get news detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$news_id = "news_id_example"; // string | News id is _id in news object for get news detail
$news_category_id = "news_category_id_example"; // string | news category id from news category object
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getNewsById($platform, $news_id, $news_category_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->getNewsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **news_id** | **string**| News id is _id in news object for get news detail |
 **news_category_id** | **string**| news category id from news category object |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\NewsResponse**](../Model/NewsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNewsCategory**
> \Swagger\Client\Model\CategoryResponse getNewsCategory($platform, $lang)

Get news category

Get news category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getNewsCategory($platform, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->getNewsCategory: ', $e->getMessage(), PHP_EOL;
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

# **searchNews**
> \Swagger\Client\Model\NewsSearchResponse searchNews($platform, $text_search, $lang)

Search news

Search news

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$text_search = "text_search_example"; // string | 
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->searchNews($platform, $text_search, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->searchNews: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\NewsSearchResponse**](../Model/NewsSearchResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

