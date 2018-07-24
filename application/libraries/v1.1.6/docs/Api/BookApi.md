# Swagger\Client\BookApi

All URIs are relative to *http://150.95.31.184:3000/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBookShelf**](BookApi.md#deleteBookShelf) | **POST** /books/shelf/delete | Delete book shelf
[**downloadBookShelf**](BookApi.md#downloadBookShelf) | **POST** /books/shelf | Download book shelf
[**getBook**](BookApi.md#getBook) | **GET** /books/ | Get book
[**getBookById**](BookApi.md#getBookById) | **GET** /books/{bookId} | Get book by id
[**getBookCategory**](BookApi.md#getBookCategory) | **GET** /books/categories | Get book category
[**getBookShelf**](BookApi.md#getBookShelf) | **GET** /books/shelf | Get book shelf
[**likeReviewBook**](BookApi.md#likeReviewBook) | **POST** /reviews/like | Like or Unlike review
[**reviewBookShelf**](BookApi.md#reviewBookShelf) | **POST** /reviews/book | Write review book
[**searchBook**](BookApi.md#searchBook) | **POST** /books/search | Search book
[**searchBookShelf**](BookApi.md#searchBookShelf) | **POST** /books/shelf/search | Search book shelf


# **deleteBookShelf**
> \Swagger\Client\Model\SuccessResponse deleteBookShelf($platform, $x_access_token, $x_user, $body, $lang)

Delete book shelf

Delete book shelf

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$body = new \Swagger\Client\Model\BookDeleteRequest(); // \Swagger\Client\Model\BookDeleteRequest | Pet object that needs to be added to the store
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->deleteBookShelf($platform, $x_access_token, $x_user, $body, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookApi->deleteBookShelf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **x_access_token** | **string**| access token after user login |
 **x_user** | **string**| username or email for check log |
 **body** | [**\Swagger\Client\Model\BookDeleteRequest**](../Model/BookDeleteRequest.md)| Pet object that needs to be added to the store |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadBookShelf**
> \Swagger\Client\Model\SuccessResponse downloadBookShelf($platform, $x_access_token, $x_user, $book_id, $lang)

Download book shelf

Download book shelf

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$book_id = "book_id_example"; // string | bookId is _id from book object
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->downloadBookShelf($platform, $x_access_token, $x_user, $book_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookApi->downloadBookShelf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **x_access_token** | **string**| access token after user login |
 **x_user** | **string**| username or email for check log |
 **book_id** | **string**| bookId is _id from book object |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBook**
> \Swagger\Client\Model\BookResponse getBook($platform, $x_access_token, $x_user, $lang, $category_id, $sort_field, $sort_value, $pagination)

Get book

Get book list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$lang = "th"; // string | lang is th or en
$category_id = "category_id_example"; // string | Category values that need to be considered for filter
$sort_field = "sort_field_example"; // string | field for sort book list
$sort_value = 56; // int | sortValue is 1 ASC and -1 DESC
$pagination = "pagination_example"; // string | Pagination for load more book list. Send bookId (_id) last array

try {
    $result = $apiInstance->getBook($platform, $x_access_token, $x_user, $lang, $category_id, $sort_field, $sort_value, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookApi->getBook: ', $e->getMessage(), PHP_EOL;
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
 **category_id** | **string**| Category values that need to be considered for filter | [optional]
 **sort_field** | **string**| field for sort book list | [optional]
 **sort_value** | **int**| sortValue is 1 ASC and -1 DESC | [optional]
 **pagination** | **string**| Pagination for load more book list. Send bookId (_id) last array | [optional]

### Return type

[**\Swagger\Client\Model\BookResponse**](../Model/BookResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBookById**
> \Swagger\Client\Model\BookResponse getBookById($platform, $x_access_token, $x_user, $book_id, $lang)

Get book by id

Get book detail and review response

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$book_id = "book_id_example"; // string | Book id is _id in book object for get book detail
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getBookById($platform, $x_access_token, $x_user, $book_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookApi->getBookById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **x_access_token** | **string**| access token after user login |
 **x_user** | **string**| username or email for check log |
 **book_id** | **string**| Book id is _id in book object for get book detail |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\BookResponse**](../Model/BookResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBookCategory**
> \Swagger\Client\Model\CategoryResponse getBookCategory($platform, $lang)

Get book category

Get book category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->getBookCategory($platform, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookApi->getBookCategory: ', $e->getMessage(), PHP_EOL;
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

# **getBookShelf**
> \Swagger\Client\Model\BookResponse getBookShelf($platform, $x_access_token, $x_user, $lang)

Get book shelf

Get book shelf

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BookApi(
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
    $result = $apiInstance->getBookShelf($platform, $x_access_token, $x_user, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookApi->getBookShelf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **x_access_token** | **string**| access token after user login |
 **x_user** | **string**| username or email for check log |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\BookResponse**](../Model/BookResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **likeReviewBook**
> \Swagger\Client\Model\SuccessResponse likeReviewBook($platform, $x_access_token, $x_user, $review_id, $action, $lang)

Like or Unlike review

Like or Unlike review of book

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$review_id = "review_id_example"; // string | reviewId is _id from review object
$action = "action_example"; // string | $push is like review. $pull is unlike review
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->likeReviewBook($platform, $x_access_token, $x_user, $review_id, $action, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookApi->likeReviewBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **x_access_token** | **string**| access token after user login |
 **x_user** | **string**| username or email for check log |
 **review_id** | **string**| reviewId is _id from review object |
 **action** | **string**| $push is like review. $pull is unlike review |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewBookShelf**
> \Swagger\Client\Model\SuccessResponse reviewBookShelf($platform, $x_access_token, $x_user, $book_id, $rating, $note, $lang)

Write review book

Write review book

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$book_id = "book_id_example"; // string | bookId is _id from book object
$rating = 56; // int | rating 1 2 3 4 5
$note = "note_example"; // string | 
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->reviewBookShelf($platform, $x_access_token, $x_user, $book_id, $rating, $note, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookApi->reviewBookShelf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **x_access_token** | **string**| access token after user login |
 **x_user** | **string**| username or email for check log |
 **book_id** | **string**| bookId is _id from book object |
 **rating** | **int**| rating 1 2 3 4 5 |
 **note** | **string**|  |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchBook**
> \Swagger\Client\Model\BookSearchResponse searchBook($platform, $text_search, $lang)

Search book

Search book

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$text_search = "text_search_example"; // string | 
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->searchBook($platform, $text_search, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookApi->searchBook: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\BookSearchResponse**](../Model/BookSearchResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchBookShelf**
> \Swagger\Client\Model\BookResponse searchBookShelf($platform, $x_access_token, $x_user, $text_search, $lang)

Search book shelf

Search book shelf

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$text_search = "text_search_example"; // string | textSearch for search
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->searchBookShelf($platform, $x_access_token, $x_user, $text_search, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookApi->searchBookShelf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **x_access_token** | **string**| access token after user login |
 **x_user** | **string**| username or email for check log |
 **text_search** | **string**| textSearch for search |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\BookResponse**](../Model/BookResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

