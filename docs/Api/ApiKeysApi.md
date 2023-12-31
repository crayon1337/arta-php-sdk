# Arta\Client\ApiKeysApi

All URIs are relative to https://api.arta.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiKeysCreate()**](ApiKeysApi.md#apiKeysCreate) | **POST** /api_keys | Create an API Key |
| [**apiKeysDelete()**](ApiKeysApi.md#apiKeysDelete) | **DELETE** /api_keys/{api_key_id} | Delete an API Key |
| [**apiKeysGet()**](ApiKeysApi.md#apiKeysGet) | **GET** /api_keys/{api_key_id} | Get an API Key |
| [**apiKeysList()**](ApiKeysApi.md#apiKeysList) | **GET** /api_keys | List API Keys |


## `apiKeysCreate()`

```php
apiKeysCreate($authorization, $api_keys_create_request): \Arta\Client\Model\ApiKey
```

Create an API Key

You can create mulitple API keys for your organization. All API keys operate on either Live or Test modes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$api_keys_create_request = new \Arta\Client\Model\ApiKeysCreateRequest(); // \Arta\Client\Model\ApiKeysCreateRequest

try {
    $result = $apiInstance->apiKeysCreate($authorization, $api_keys_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->apiKeysCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **api_keys_create_request** | [**\Arta\Client\Model\ApiKeysCreateRequest**](../Model/ApiKeysCreateRequest.md)|  | [optional] |

### Return type

[**\Arta\Client\Model\ApiKey**](../Model/ApiKey.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiKeysDelete()`

```php
apiKeysDelete($api_key_id, $authorization)
```

Delete an API Key

Delete an API Key belonging to your Organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_key_id = 56; // int | api_key_id parameter
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token

try {
    $apiInstance->apiKeysDelete($api_key_id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->apiKeysDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_key_id** | **int**| api_key_id parameter | |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |

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

## `apiKeysGet()`

```php
apiKeysGet($api_key_id, $authorization): \Arta\Client\Model\ApiKey
```

Get an API Key

Get an API Key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_key_id = 56; // int | api_key_id parameter
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token

try {
    $result = $apiInstance->apiKeysGet($api_key_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->apiKeysGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_key_id** | **int**| api_key_id parameter | |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |

### Return type

[**\Arta\Client\Model\ApiKey**](../Model/ApiKey.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiKeysList()`

```php
apiKeysList($authorization, $page_size, $page): \Arta\Client\Model\ApiKeyList
```

List API Keys

Retrieve a paginated collection of API Keys belonging to your Organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$page_size = 20; // int | Results per page (max 50)
$page = 1; // int | Page number of the results to fetch.

try {
    $result = $apiInstance->apiKeysList($authorization, $page_size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->apiKeysList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **page_size** | **int**| Results per page (max 50) | [optional] [default to 20] |
| **page** | **int**| Page number of the results to fetch. | [optional] [default to 1] |

### Return type

[**\Arta\Client\Model\ApiKeyList**](../Model/ApiKeyList.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
