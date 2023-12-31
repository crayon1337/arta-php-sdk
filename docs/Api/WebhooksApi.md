# Arta\Client\WebhooksApi

All URIs are relative to https://api.arta.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**webhooksCreate()**](WebhooksApi.md#webhooksCreate) | **POST** /webhooks | Create a Webhook |
| [**webhooksDelete()**](WebhooksApi.md#webhooksDelete) | **DELETE** /webhooks/{webhook_id} | Delete a Webhook |
| [**webhooksGet()**](WebhooksApi.md#webhooksGet) | **GET** /webhooks/{webhook_id} | Get a Webhook |
| [**webhooksList()**](WebhooksApi.md#webhooksList) | **GET** /webhooks | List Webhooks |
| [**webhooksPatch()**](WebhooksApi.md#webhooksPatch) | **PATCH** /webhooks/{webhook_id} | Update a Webhook |
| [**webhooksPost()**](WebhooksApi.md#webhooksPost) | **POST** /webhooks/{webhook_id}/ping | Ping a Webhook |
| [**webhooksSecretTokenGet()**](WebhooksApi.md#webhooksSecretTokenGet) | **GET** /webhooks/{webhook_id}/secret_token | Get a Webhook Secret Token |
| [**webhooksSecretTokenResetPatch()**](WebhooksApi.md#webhooksSecretTokenResetPatch) | **PATCH** /webhooks/{webhook_id}/secret_token/reset | Reset a Webhook Secret Token |


## `webhooksCreate()`

```php
webhooksCreate($authorization, $webhooks_create_request): \Arta\Client\Model\Webhook
```

Create a Webhook

response

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$webhooks_create_request = new \Arta\Client\Model\WebhooksCreateRequest(); // \Arta\Client\Model\WebhooksCreateRequest

try {
    $result = $apiInstance->webhooksCreate($authorization, $webhooks_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **webhooks_create_request** | [**\Arta\Client\Model\WebhooksCreateRequest**](../Model/WebhooksCreateRequest.md)|  | [optional] |

### Return type

[**\Arta\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhooksDelete()`

```php
webhooksDelete($authorization, $webhook_id)
```

Delete a Webhook

Delete a Webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$webhook_id = 56; // int | webhook_id parameter

try {
    $apiInstance->webhooksDelete($authorization, $webhook_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **webhook_id** | **int**| webhook_id parameter | |

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

## `webhooksGet()`

```php
webhooksGet($authorization, $webhook_id): \Arta\Client\Model\Webhook
```

Get a Webhook

Retrieve an existing Webhook request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$webhook_id = 56; // int | webhook_id parameter

try {
    $result = $apiInstance->webhooksGet($authorization, $webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **webhook_id** | **int**| webhook_id parameter | |

### Return type

[**\Arta\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhooksList()`

```php
webhooksList($authorization, $page_size, $page): \Arta\Client\Model\WebhookList
```

List Webhooks

Retrieve a paginated collection of Webhooks belonging to your Organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$page_size = 20; // int | Results per page (max 50)
$page = 1; // int | Page number of the results to fetch.

try {
    $result = $apiInstance->webhooksList($authorization, $page_size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **page_size** | **int**| Results per page (max 50) | [optional] [default to 20] |
| **page** | **int**| Page number of the results to fetch. | [optional] [default to 1] |

### Return type

[**\Arta\Client\Model\WebhookList**](../Model/WebhookList.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhooksPatch()`

```php
webhooksPatch($authorization, $webhook_id, $webhooks_patch_request): \Arta\Client\Model\Webhook
```

Update a Webhook

Update an existing Webhook request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$webhook_id = 56; // int | webhook_id parameter
$webhooks_patch_request = new \Arta\Client\Model\WebhooksPatchRequest(); // \Arta\Client\Model\WebhooksPatchRequest

try {
    $result = $apiInstance->webhooksPatch($authorization, $webhook_id, $webhooks_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **webhook_id** | **int**| webhook_id parameter | |
| **webhooks_patch_request** | [**\Arta\Client\Model\WebhooksPatchRequest**](../Model/WebhooksPatchRequest.md)|  | [optional] |

### Return type

[**\Arta\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhooksPost()`

```php
webhooksPost($authorization, $webhook_id): \Arta\Client\Model\Webhook
```

Ping a Webhook

Trigger Arta to deliver a test message to an existing Webhook endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$webhook_id = 56; // int | webhook_id parameter

try {
    $result = $apiInstance->webhooksPost($authorization, $webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **webhook_id** | **int**| webhook_id parameter | |

### Return type

[**\Arta\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhooksSecretTokenGet()`

```php
webhooksSecretTokenGet($authorization, $webhook_id): \Arta\Client\Model\WebhooksSecretTokenGet200Response
```

Get a Webhook Secret Token

Retrieve the secret token associated with a webhook endpoint resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$webhook_id = 56; // int | webhook_id parameter

try {
    $result = $apiInstance->webhooksSecretTokenGet($authorization, $webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksSecretTokenGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **webhook_id** | **int**| webhook_id parameter | |

### Return type

[**\Arta\Client\Model\WebhooksSecretTokenGet200Response**](../Model/WebhooksSecretTokenGet200Response.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhooksSecretTokenResetPatch()`

```php
webhooksSecretTokenResetPatch($authorization, $webhook_id): \Arta\Client\Model\WebhooksSecretTokenResetPatch200Response
```

Reset a Webhook Secret Token

Regenerate the secret token associated with a webhook endpoint resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$webhook_id = 56; // int | webhook_id parameter

try {
    $result = $apiInstance->webhooksSecretTokenResetPatch($authorization, $webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksSecretTokenResetPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **webhook_id** | **int**| webhook_id parameter | |

### Return type

[**\Arta\Client\Model\WebhooksSecretTokenResetPatch200Response**](../Model/WebhooksSecretTokenResetPatch200Response.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
