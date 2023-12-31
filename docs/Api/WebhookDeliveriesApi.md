# Arta\Client\WebhookDeliveriesApi

All URIs are relative to https://api.arta.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**webhookDeliveriesGet()**](WebhookDeliveriesApi.md#webhookDeliveriesGet) | **GET** /webhook_deliveries/{webhook_delivery_id} | Get a Webhook Delivery |
| [**webhookDeliveriesList()**](WebhookDeliveriesApi.md#webhookDeliveriesList) | **GET** /webhook_deliveries | List Webhook Deliveries |


## `webhookDeliveriesGet()`

```php
webhookDeliveriesGet($authorization, $webhook_delivery_id): \Arta\Client\Model\WebhookDelivery
```

Get a Webhook Delivery

Retrieve an existing Webhook Delivery

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\WebhookDeliveriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$webhook_delivery_id = 'webhook_delivery_id_example'; // string | webhook_delivery_id parameter

try {
    $result = $apiInstance->webhookDeliveriesGet($authorization, $webhook_delivery_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookDeliveriesApi->webhookDeliveriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **webhook_delivery_id** | **string**| webhook_delivery_id parameter | |

### Return type

[**\Arta\Client\Model\WebhookDelivery**](../Model/WebhookDelivery.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDeliveriesList()`

```php
webhookDeliveriesList($authorization, $page_size, $page): \Arta\Client\Model\WebhookDeliveryList
```

List Webhook Deliveries

Retrieve a paginated collection of Webhook Deliveries belonging to your Organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\WebhookDeliveriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$page_size = 20; // int | Results per page (max 50)
$page = 1; // int | Page number of the results to fetch.

try {
    $result = $apiInstance->webhookDeliveriesList($authorization, $page_size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookDeliveriesApi->webhookDeliveriesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **page_size** | **int**| Results per page (max 50) | [optional] [default to 20] |
| **page** | **int**| Page number of the results to fetch. | [optional] [default to 1] |

### Return type

[**\Arta\Client\Model\WebhookDeliveryList**](../Model/WebhookDeliveryList.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
