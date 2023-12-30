# OpenAPI\Client\ShipmentsApi

All URIs are relative to https://api.arta.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**shipmentsCreate()**](ShipmentsApi.md#shipmentsCreate) | **POST** /shipments | Create a Shipment |
| [**shipmentsGet()**](ShipmentsApi.md#shipmentsGet) | **GET** /shipments/{shipment_id} | Get a Shipment record |
| [**shipmentsList()**](ShipmentsApi.md#shipmentsList) | **GET** /shipments | List Shipment records |


## `shipmentsCreate()`

```php
shipmentsCreate($authorization, $shipments_create_request): \OpenAPI\Client\Model\Shipment
```

Create a Shipment

After receiving quotes for transport, you can book a shipment on Arta. This API call requires a Quote ID associated with the quote you intend to book from your initial quote request call.    Additionally, you may optionally provide `internal_reference`, `public_reference`, and `shipping_notes` in the payload of the booking call to add any context relevant to your shipment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$shipments_create_request = new \OpenAPI\Client\Model\ShipmentsCreateRequest(); // \OpenAPI\Client\Model\ShipmentsCreateRequest

try {
    $result = $apiInstance->shipmentsCreate($authorization, $shipments_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **shipments_create_request** | [**\OpenAPI\Client\Model\ShipmentsCreateRequest**](../Model/ShipmentsCreateRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Shipment**](../Model/Shipment.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentsGet()`

```php
shipmentsGet($authorization, $shipment_id): \OpenAPI\Client\Model\Shipment
```

Get a Shipment record

Retrieve an existing Shipment record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$shipment_id = 'shipment_id_example'; // string | shipment_id parameter

try {
    $result = $apiInstance->shipmentsGet($authorization, $shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **shipment_id** | **string**| shipment_id parameter | |

### Return type

[**\OpenAPI\Client\Model\Shipment**](../Model/Shipment.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentsList()`

```php
shipmentsList($authorization, $page_size, $page, $search): \OpenAPI\Client\Model\ShipmentList
```

List Shipment records

Retrieve a paginated collection of Shipment records belonging to your Organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$page_size = 20; // int | Results per page (max 50)
$page = 1; // int | Page number of the results to fetch.
$search = 'search_example'; // string | An optional structured search query

try {
    $result = $apiInstance->shipmentsList($authorization, $page_size, $page, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **page_size** | **int**| Results per page (max 50) | [optional] [default to 20] |
| **page** | **int**| Page number of the results to fetch. | [optional] [default to 1] |
| **search** | **string**| An optional structured search query | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShipmentList**](../Model/ShipmentList.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
