# Arta\Client\ShipmentExceptionsApi

All URIs are relative to https://api.arta.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**shipmentExceptionsCreate()**](ShipmentExceptionsApi.md#shipmentExceptionsCreate) | **POST** /shipment_exceptions | Create Shipment Exception |
| [**shipmentExceptionsGet()**](ShipmentExceptionsApi.md#shipmentExceptionsGet) | **GET** /shipment_exceptions/{shipment_exception_id} | Get a Shipment Exception |
| [**shipmentExceptionsList()**](ShipmentExceptionsApi.md#shipmentExceptionsList) | **GET** /shipment_exceptions | List Shipment Exceptions |
| [**shipmentExceptionsUpdate()**](ShipmentExceptionsApi.md#shipmentExceptionsUpdate) | **PATCH** /shipment_exceptions/{shipment_exception_id} | Update a Shipment Exception |


## `shipmentExceptionsCreate()`

```php
shipmentExceptionsCreate($authorization, $shipment_exceptions_create_request): \Arta\Client\Model\ShipmentExceptionsCreate201Response
```

Create Shipment Exception

Create a Shipment Exception for a Shipment  * Clients can create shipment exceptions of a single type currently:`requested_hold_to_collect`   * A shipment must have a `pending` or `confirmed` status to create a `requested_hold_to_collect` shipment exception.   * `hold_until` date cannot be greater than 30 days from the associated shipment's `created_at` timestamp.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\ShipmentExceptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$shipment_exceptions_create_request = {"shipment_exception":{"type":"requested_hold_to_collect","shipment_id":"5baff45a-281d-416e-9310-a4a7c637952e","hold_until":"2023-08-15"}}; // \Arta\Client\Model\ShipmentExceptionsCreateRequest

try {
    $result = $apiInstance->shipmentExceptionsCreate($authorization, $shipment_exceptions_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentExceptionsApi->shipmentExceptionsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **shipment_exceptions_create_request** | [**\Arta\Client\Model\ShipmentExceptionsCreateRequest**](../Model/ShipmentExceptionsCreateRequest.md)|  | [optional] |

### Return type

[**\Arta\Client\Model\ShipmentExceptionsCreate201Response**](../Model/ShipmentExceptionsCreate201Response.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentExceptionsGet()`

```php
shipmentExceptionsGet($authorization, $shipment_exception_id): \Arta\Client\Model\ShipmentExceptionsGet200Response
```

Get a Shipment Exception

Retrieve an existing Shipment Exception

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\ShipmentExceptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$shipment_exception_id = 'shipment_exception_id_example'; // string | shipment_exception_id parameter

try {
    $result = $apiInstance->shipmentExceptionsGet($authorization, $shipment_exception_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentExceptionsApi->shipmentExceptionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **shipment_exception_id** | **string**| shipment_exception_id parameter | |

### Return type

[**\Arta\Client\Model\ShipmentExceptionsGet200Response**](../Model/ShipmentExceptionsGet200Response.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentExceptionsList()`

```php
shipmentExceptionsList($authorization, $page_size, $page): \Arta\Client\Model\ShipmentExceptionsList200Response
```

List Shipment Exceptions

Retrieve a paginated collection of Shipment Exceptions belonging to your Organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\ShipmentExceptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$page_size = 20; // int | Results per page (max 50)
$page = 1; // int | Page number of the results to fetch.

try {
    $result = $apiInstance->shipmentExceptionsList($authorization, $page_size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentExceptionsApi->shipmentExceptionsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **page_size** | **int**| Results per page (max 50) | [optional] [default to 20] |
| **page** | **int**| Page number of the results to fetch. | [optional] [default to 1] |

### Return type

[**\Arta\Client\Model\ShipmentExceptionsList200Response**](../Model/ShipmentExceptionsList200Response.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentExceptionsUpdate()`

```php
shipmentExceptionsUpdate($authorization, $shipment_exception_id, $shipment_exceptions_update_request): \Arta\Client\Model\ShipmentExceptionsUpdate200Response
```

Update a Shipment Exception

For client-created `requested_hold_to_collect` Shipment Exception resources with a `new` status, you may update the resource to change the `hold_until` or release the hold by changing the `status` to resolved.  This endpoint supports two different request body formats: one request body includes a `hold_until` parameter where the value is in the `YYYY-MM-DD` format; the other accepted body format includes a `status` where the value may be `resolved`.  * `hold_until` date cannot be greater than 30 days from the associated shipments `created_at` timestamp.  * Clients can only update shipment exceptions created by the client -- not shipment exceptions created by Arta.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\ShipmentExceptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$shipment_exception_id = 'shipment_exception_id_example'; // string | shipment_exception_id parameter
$shipment_exceptions_update_request = {"shipment_exception":{"hold_until":"2023-08-15"}}; // \Arta\Client\Model\ShipmentExceptionsUpdateRequest

try {
    $result = $apiInstance->shipmentExceptionsUpdate($authorization, $shipment_exception_id, $shipment_exceptions_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentExceptionsApi->shipmentExceptionsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **shipment_exception_id** | **string**| shipment_exception_id parameter | |
| **shipment_exceptions_update_request** | [**\Arta\Client\Model\ShipmentExceptionsUpdateRequest**](../Model/ShipmentExceptionsUpdateRequest.md)|  | [optional] |

### Return type

[**\Arta\Client\Model\ShipmentExceptionsUpdate200Response**](../Model/ShipmentExceptionsUpdate200Response.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
