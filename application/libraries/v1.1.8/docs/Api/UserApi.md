# Swagger\Client\UserApi

All URIs are relative to *http://150.95.31.184:3000/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changePasswordUser**](UserApi.md#changePasswordUser) | **POST** /users/change_password | Change Password
[**forgotPasswordUser**](UserApi.md#forgotPasswordUser) | **POST** /users/forgot_password | Forgot Password
[**getMyFavorite**](UserApi.md#getMyFavorite) | **GET** /users/myFavorite | Get my favorite for web
[**getUserProfile**](UserApi.md#getUserProfile) | **GET** /users/me | Get user profile
[**loginUser**](UserApi.md#loginUser) | **POST** /users/login | Login
[**logoutUser**](UserApi.md#logoutUser) | **POST** /users/logout | Logout
[**registerUser**](UserApi.md#registerUser) | **POST** /users/register | Register
[**resetPasswordUser**](UserApi.md#resetPasswordUser) | **POST** /users/reset_password | Reset Password
[**updateUserProfile**](UserApi.md#updateUserProfile) | **PUT** /users/me | Update Profile


# **changePasswordUser**
> \Swagger\Client\Model\SuccessResponse changePasswordUser($platform, $x_access_token, $x_user, $old_password, $new_password, $lang)

Change Password

Change Password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$old_password = "old_password_example"; // string | 
$new_password = "new_password_example"; // string | 
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->changePasswordUser($platform, $x_access_token, $x_user, $old_password, $new_password, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->changePasswordUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **x_access_token** | **string**| access token after user login |
 **x_user** | **string**| username or email for check log |
 **old_password** | **string**|  |
 **new_password** | **string**|  |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forgotPasswordUser**
> \Swagger\Client\Model\SuccessResponse forgotPasswordUser($platform, $email, $lang)

Forgot Password

Forgot Password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$email = "email_example"; // string | 
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->forgotPasswordUser($platform, $email, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->forgotPasswordUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **email** | **string**|  |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyFavorite**
> \Swagger\Client\Model\UserFavoriteResponse getMyFavorite($platform, $x_access_token, $x_user, $lang)

Get my favorite for web

Get my favorite for web

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserApi(
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
    $result = $apiInstance->getMyFavorite($platform, $x_access_token, $x_user, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getMyFavorite: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\UserFavoriteResponse**](../Model/UserFavoriteResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserProfile**
> \Swagger\Client\Model\UserResponse getUserProfile($platform, $x_access_token, $x_user, $lang)

Get user profile

Get user profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserApi(
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
    $result = $apiInstance->getUserProfile($platform, $x_access_token, $x_user, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserProfile: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginUser**
> \Swagger\Client\Model\UserResponse loginUser($platform, $type, $username, $credential, $lang, $device_id)

Login

Login

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$type = "local"; // string | type is local or facebook
$username = "username_example"; // string | 
$credential = "credential_example"; // string | if type is local send password but facebook send socialAccessToken
$lang = "th"; // string | lang is th or en
$device_id = "device_id_example"; // string | deviceId is deviceToken of FCM or APNS notification

try {
    $result = $apiInstance->loginUser($platform, $type, $username, $credential, $lang, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->loginUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **type** | **string**| type is local or facebook | [default to local]
 **username** | **string**|  |
 **credential** | **string**| if type is local send password but facebook send socialAccessToken |
 **lang** | **string**| lang is th or en | [optional] [default to th]
 **device_id** | **string**| deviceId is deviceToken of FCM or APNS notification | [optional]

### Return type

[**\Swagger\Client\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logoutUser**
> \Swagger\Client\Model\SuccessResponse logoutUser($platform, $x_access_token, $x_user, $lang)

Logout

Logout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserApi(
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
    $result = $apiInstance->logoutUser($platform, $x_access_token, $x_user, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->logoutUser: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerUser**
> \Swagger\Client\Model\UserResponse registerUser($platform, $type, $firstname, $lastname, $email, $birthday, $lang, $username, $password, $social_id, $social_access_token, $device_id)

Register

Register

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$type = "local"; // string | type is local or facebook
$firstname = "firstname_example"; // string | 
$lastname = "lastname_example"; // string | 
$email = "email_example"; // string | 
$birthday = "birthday_example"; // string | 
$lang = "lang_example"; // string | lang is th or en
$username = "username_example"; // string | Require if type is local
$password = "password_example"; // string | Require if type is local
$social_id = "social_id_example"; // string | Require if type is facebook
$social_access_token = "social_access_token_example"; // string | Require if type is facebook
$device_id = "device_id_example"; // string | deviceId is deviceToken of FCM or APNS notification

try {
    $result = $apiInstance->registerUser($platform, $type, $firstname, $lastname, $email, $birthday, $lang, $username, $password, $social_id, $social_access_token, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->registerUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **type** | **string**| type is local or facebook | [default to local]
 **firstname** | **string**|  |
 **lastname** | **string**|  |
 **email** | **string**|  |
 **birthday** | **string**|  |
 **lang** | **string**| lang is th or en | [optional]
 **username** | **string**| Require if type is local | [optional]
 **password** | **string**| Require if type is local | [optional]
 **social_id** | **string**| Require if type is facebook | [optional]
 **social_access_token** | **string**| Require if type is facebook | [optional]
 **device_id** | **string**| deviceId is deviceToken of FCM or APNS notification | [optional]

### Return type

[**\Swagger\Client\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetPasswordUser**
> \Swagger\Client\Model\SuccessResponse resetPasswordUser($platform, $email, $password, $auth_code, $lang)

Reset Password

Reset Password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$email = "email_example"; // string | 
$password = "password_example"; // string | new password
$auth_code = "auth_code_example"; // string | authCode from email of user
$lang = "th"; // string | lang is th or en

try {
    $result = $apiInstance->resetPasswordUser($platform, $email, $password, $auth_code, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->resetPasswordUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **email** | **string**|  |
 **password** | **string**| new password |
 **auth_code** | **string**| authCode from email of user |
 **lang** | **string**| lang is th or en | [optional] [default to th]

### Return type

[**\Swagger\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUserProfile**
> \Swagger\Client\Model\UserResponse updateUserProfile($platform, $x_access_token, $x_user, $lang, $firstname, $lastname, $email, $birthday, $device_id, $need_notification, $pic, $cover)

Update Profile

Update Profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = "platform_example"; // string | platform
$x_access_token = "x_access_token_example"; // string | access token after user login
$x_user = "x_user_example"; // string | username or email for check log
$lang = "lang_example"; // string | lang is th or en
$firstname = "firstname_example"; // string | 
$lastname = "lastname_example"; // string | 
$email = "email_example"; // string | 
$birthday = "birthday_example"; // string | 
$device_id = "device_id_example"; // string | deviceId is deviceToken of FCM or APNS notification
$need_notification = true; // bool | flag for check user need notification
$pic = "/path/to/file.txt"; // \SplFileObject | picture profile of user
$cover = "cover_example"; // string | cover is id from API upload image

try {
    $result = $apiInstance->updateUserProfile($platform, $x_access_token, $x_user, $lang, $firstname, $lastname, $email, $birthday, $device_id, $need_notification, $pic, $cover);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUserProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| platform |
 **x_access_token** | **string**| access token after user login |
 **x_user** | **string**| username or email for check log |
 **lang** | **string**| lang is th or en | [optional]
 **firstname** | **string**|  | [optional]
 **lastname** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **birthday** | **string**|  | [optional]
 **device_id** | **string**| deviceId is deviceToken of FCM or APNS notification | [optional]
 **need_notification** | **bool**| flag for check user need notification | [optional]
 **pic** | **\SplFileObject**| picture profile of user | [optional]
 **cover** | **string**| cover is id from API upload image | [optional]

### Return type

[**\Swagger\Client\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

