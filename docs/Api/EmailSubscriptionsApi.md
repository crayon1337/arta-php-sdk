# OpenAPI\Client\EmailSubscriptionsApi

All URIs are relative to https://api.arta.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**emailSubscriptionsCreate()**](EmailSubscriptionsApi.md#emailSubscriptionsCreate) | **POST** /email_subscriptions | Create an Email Subscription |
| [**emailSubscriptionsDelete()**](EmailSubscriptionsApi.md#emailSubscriptionsDelete) | **DELETE** /email_subscriptions/{email_subscription_id} | Delete an Email Subscription |
| [**emailSubscriptionsGet()**](EmailSubscriptionsApi.md#emailSubscriptionsGet) | **GET** /email_subscriptions/{email_subscription_id} | Get an Email Subscription |
| [**emailSubscriptionsList()**](EmailSubscriptionsApi.md#emailSubscriptionsList) | **GET** /email_subscriptions | List Email Subscriptions |
| [**emailSubscriptionsUpdate()**](EmailSubscriptionsApi.md#emailSubscriptionsUpdate) | **PATCH** /email_subscriptions/{email_subscription_id} | Update an Email Subscription |


## `emailSubscriptionsCreate()`

```php
emailSubscriptionsCreate($authorization, $email_subscriptions_create_request): \OpenAPI\Client\Model\EmailSubscription
```

Create an Email Subscription

response

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmailSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$email_subscriptions_create_request = new \OpenAPI\Client\Model\EmailSubscriptionsCreateRequest(); // \OpenAPI\Client\Model\EmailSubscriptionsCreateRequest

try {
    $result = $apiInstance->emailSubscriptionsCreate($authorization, $email_subscriptions_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSubscriptionsApi->emailSubscriptionsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **email_subscriptions_create_request** | [**\OpenAPI\Client\Model\EmailSubscriptionsCreateRequest**](../Model/EmailSubscriptionsCreateRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmailSubscription**](../Model/EmailSubscription.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emailSubscriptionsDelete()`

```php
emailSubscriptionsDelete($authorization, $email_subscription_id)
```

Delete an Email Subscription

Delete an Email Subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmailSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$email_subscription_id = 56; // int | email_subscription_id parameter

try {
    $apiInstance->emailSubscriptionsDelete($authorization, $email_subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailSubscriptionsApi->emailSubscriptionsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **email_subscription_id** | **int**| email_subscription_id parameter | |

### Return type

void (empty response body)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emailSubscriptionsGet()`

```php
emailSubscriptionsGet($authorization, $email_subscription_id): \OpenAPI\Client\Model\EmailSubscription
```

Get an Email Subscription

Retrieve an existing Email Subscription request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmailSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$email_subscription_id = 56; // int | email_subscription_id parameter

try {
    $result = $apiInstance->emailSubscriptionsGet($authorization, $email_subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSubscriptionsApi->emailSubscriptionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **email_subscription_id** | **int**| email_subscription_id parameter | |

### Return type

[**\OpenAPI\Client\Model\EmailSubscription**](../Model/EmailSubscription.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emailSubscriptionsList()`

```php
emailSubscriptionsList($authorization, $page_size, $page): \OpenAPI\Client\Model\EmailSubscriptionList
```

List Email Subscriptions

Retrieve a paginated collection of Email Subscriptions belonging to your Organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmailSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$page_size = 20; // int | Results per page (max 50)
$page = 1; // int | Page number of the results to fetch.

try {
    $result = $apiInstance->emailSubscriptionsList($authorization, $page_size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSubscriptionsApi->emailSubscriptionsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **page_size** | **int**| Results per page (max 50) | [optional] [default to 20] |
| **page** | **int**| Page number of the results to fetch. | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\EmailSubscriptionList**](../Model/EmailSubscriptionList.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emailSubscriptionsUpdate()`

```php
emailSubscriptionsUpdate($authorization, $email_subscription_id, $email_subscriptions_update_request): \OpenAPI\Client\Model\EmailSubscription
```

Update an Email Subscription

Update an existing Email Subscription request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmailSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$email_subscription_id = 56; // int | email_subscription_id parameter
$email_subscriptions_update_request = new \OpenAPI\Client\Model\EmailSubscriptionsUpdateRequest(); // \OpenAPI\Client\Model\EmailSubscriptionsUpdateRequest

try {
    $result = $apiInstance->emailSubscriptionsUpdate($authorization, $email_subscription_id, $email_subscriptions_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSubscriptionsApi->emailSubscriptionsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **email_subscription_id** | **int**| email_subscription_id parameter | |
| **email_subscriptions_update_request** | [**\OpenAPI\Client\Model\EmailSubscriptionsUpdateRequest**](../Model/EmailSubscriptionsUpdateRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmailSubscription**](../Model/EmailSubscription.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
