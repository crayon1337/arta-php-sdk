# OpenAPI\Client\HostedSessionsApi

All URIs are relative to https://api.arta.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**hostedSessionsCancel()**](HostedSessionsApi.md#hostedSessionsCancel) | **PATCH** /hosted_sessions/{hosted_session_id}/cancel | Cancel a Hosted Session |
| [**hostedSessionsCreate()**](HostedSessionsApi.md#hostedSessionsCreate) | **POST** /hosted_sessions | Create a Hosted Session |
| [**hostedSessionsGet()**](HostedSessionsApi.md#hostedSessionsGet) | **GET** /hosted_sessions/{hosted_session_id} | Get a Hosted Session |
| [**hostedSessionsList()**](HostedSessionsApi.md#hostedSessionsList) | **GET** /hosted_sessions | List Hosted Sessions |


## `hostedSessionsCancel()`

```php
hostedSessionsCancel($authorization, $hosted_session_id): \OpenAPI\Client\Model\HostedSession
```

Cancel a Hosted Session

Cancel an existing hosted session resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\HostedSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$hosted_session_id = 56; // int | hosted_session_id parameter

try {
    $result = $apiInstance->hostedSessionsCancel($authorization, $hosted_session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostedSessionsApi->hostedSessionsCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **hosted_session_id** | **int**| hosted_session_id parameter | |

### Return type

[**\OpenAPI\Client\Model\HostedSession**](../Model/HostedSession.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hostedSessionsCreate()`

```php
hostedSessionsCreate($authorization, $body): \OpenAPI\Client\Model\HostedSession
```

Create a Hosted Session

Create a hosted session resource to generate an Arta Booking url.  This endpoint expects one of two versions of the `hosted_session` schema:  * You may send a `hosted_session` object with a subset of the fields required for generating quote requests via the Arta API. With this schema, you must minimally include valid `objects` and `origin` details in your API call. Additionally, you may provide a `success_url` and a `cancel_url` to determine where Arta will redirect the user after the session is complete  * Alternatively, you may share an existing Quote Request by sending a `hosted_session` object with the corresponding request's `request_id`. This will create an Arta Booking session for the request  Use the private `url` in the successful hosted session response to direct your users to the Arta Booking web page so that they may configure and book their own shipment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\HostedSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$body = {"hosted_session":{"additional_services":["signature_delivery"],"cancel_url":"http://example.com/cancelled","insurance":"arta_transit_insurance","internal_reference":"Purchase Order: 2801","objects":[{"internal_reference":"Accession ID: 823","current_packing":["no_packing"],"depth":"3","details":{"creation_date":"1980","creator":"Bob Smithson","notes":"Artist signature in the lower left corner","title":"Black Rectangle"},"height":"32","public_reference":"Round Smithson work","subtype":"painting_unframed","width":"15","unit_of_measurement":"in","weight":"3.0","weight_unit":"lb","value":"2500","value_currency":"USD"}],"origin":{"address_line_1":"87 Richardson St","address_line_2":"string","address_line_3":"string","city":"Brooklyn","region":"NY","postal_code":"11249","country":"string","title":"Gallery","contacts":[{"name":"Rachel Egistrar","email_address":"registrar@example.com","phone_number":"(212) 234-5678"}]},"public_reference":"Order #1437","shipping_notes":"New customer","success_url":"http://example.com/success"}}; // OneOf | 

try {
    $result = $apiInstance->hostedSessionsCreate($authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostedSessionsApi->hostedSessionsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **body** | **OneOf**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\HostedSession**](../Model/HostedSession.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hostedSessionsGet()`

```php
hostedSessionsGet($authorization, $hosted_session_id): \OpenAPI\Client\Model\HostedSession
```

Get a Hosted Session

Retrieve an existing hosted session resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\HostedSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$hosted_session_id = 56; // int | hosted_session_id parameter

try {
    $result = $apiInstance->hostedSessionsGet($authorization, $hosted_session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostedSessionsApi->hostedSessionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **hosted_session_id** | **int**| hosted_session_id parameter | |

### Return type

[**\OpenAPI\Client\Model\HostedSession**](../Model/HostedSession.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hostedSessionsList()`

```php
hostedSessionsList($authorization, $page_size, $page): \OpenAPI\Client\Model\HostedSessionList
```

List Hosted Sessions

Retrieve a paginated collection of hosted sessions belonging to your organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\HostedSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$page_size = 20; // int | Results per page (max 50)
$page = 1; // int | Page number of the results to fetch.

try {
    $result = $apiInstance->hostedSessionsList($authorization, $page_size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostedSessionsApi->hostedSessionsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **page_size** | **int**| Results per page (max 50) | [optional] [default to 20] |
| **page** | **int**| Page number of the results to fetch. | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\HostedSessionList**](../Model/HostedSessionList.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
