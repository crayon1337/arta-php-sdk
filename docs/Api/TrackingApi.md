# OpenAPI\Client\TrackingApi

All URIs are relative to https://api.arta.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**trackingsGet()**](TrackingApi.md#trackingsGet) | **GET** /trackings/{tracking_number} | Get Tracking Details |


## `trackingsGet()`

```php
trackingsGet($authorization, $tracking_number): \OpenAPI\Client\Model\Tracking
```

Get Tracking Details

Retrieve Tracking details for a parcel shipment by tracking number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$tracking_number = 'tracking_number_example'; // string | tracking_number parameter

try {
    $result = $apiInstance->trackingsGet($authorization, $tracking_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->trackingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **tracking_number** | **string**| tracking_number parameter | |

### Return type

[**\OpenAPI\Client\Model\Tracking**](../Model/Tracking.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
