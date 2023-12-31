# Arta\Client\RequestsApi

All URIs are relative to https://api.arta.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**requestsCancel()**](RequestsApi.md#requestsCancel) | **PATCH** /requests/{request_id}/cancel | Cancel a Quote Request |
| [**requestsCreate()**](RequestsApi.md#requestsCreate) | **POST** /requests | Create a Quote Request |
| [**requestsCustom()**](RequestsApi.md#requestsCustom) | **PATCH** /requests/{request_id}/custom | Request custom quotes |
| [**requestsGet()**](RequestsApi.md#requestsGet) | **GET** /requests/{request_id} | Get a Quote Request |
| [**requestsList()**](RequestsApi.md#requestsList) | **GET** /requests | List Request records |
| [**requestsUpdateContacts()**](RequestsApi.md#requestsUpdateContacts) | **PATCH** /requests/{request_id}/contacts | Update the contacts for a Quote Request |


## `requestsCancel()`

```php
requestsCancel($authorization, $request_id): \Arta\Client\Model\Request
```

Cancel a Quote Request

Cancels an in_progress Quote Request resource. This is useful to indicate to Arta that you no longer require custom quotes for a request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$request_id = 'request_id_example'; // string | request_id parameter

try {
    $result = $apiInstance->requestsCancel($authorization, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->requestsCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **request_id** | **string**| request_id parameter | |

### Return type

[**\Arta\Client\Model\Request**](../Model/Request.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestsCreate()`

```php
requestsCreate($authorization, $arta_quote_timeout, $requests_create_request): \Arta\Client\Model\Request
```

Create a Quote Request

The first step to booking a shipment on Arta is to create a quote request. This quote request provides Arta with all the necessary transport details for us to price your eventual shipment.    Arta will return eligible quotes for your shipment across Arta's Premium, Selecct, and Parcel quote types. If any quote types are ineligible given your logistic details, those will be noted in the `disqualifications` response.    You must minimally include `objects`, `origin`, and `destination` details in your API call for Arta to successfully price the transport.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$arta_quote_timeout = 6000; // int | Optionally set a timeout boundary in milliseconds for creating quote requests.  While Arta takes great care to return quotes quickly, several external services consumed during the process of creating quotes have varying response times. The `Arta-Quote-Timeout` header is particularly useful if your integration requires requests to return within a given time frame. When the timeout is reached, the Arta API will stop any tasks in progress and return the quotes that have already been completed. If building quotes for a particular quote type is incomplete at timeout, the API will return a disqualification message for that quote type with a `client_timeout_reached` `reason_code`.
$requests_create_request = new \Arta\Client\Model\RequestsCreateRequest(); // \Arta\Client\Model\RequestsCreateRequest

try {
    $result = $apiInstance->requestsCreate($authorization, $arta_quote_timeout, $requests_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->requestsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **arta_quote_timeout** | **int**| Optionally set a timeout boundary in milliseconds for creating quote requests.  While Arta takes great care to return quotes quickly, several external services consumed during the process of creating quotes have varying response times. The &#x60;Arta-Quote-Timeout&#x60; header is particularly useful if your integration requires requests to return within a given time frame. When the timeout is reached, the Arta API will stop any tasks in progress and return the quotes that have already been completed. If building quotes for a particular quote type is incomplete at timeout, the API will return a disqualification message for that quote type with a &#x60;client_timeout_reached&#x60; &#x60;reason_code&#x60;. | [optional] |
| **requests_create_request** | [**\Arta\Client\Model\RequestsCreateRequest**](../Model/RequestsCreateRequest.md)|  | [optional] |

### Return type

[**\Arta\Client\Model\Request**](../Model/Request.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestsCustom()`

```php
requestsCustom($authorization, $request_id, $requests_custom_request): \Arta\Client\Model\Request
```

Request custom quotes

Convert an existing Quote Request into a Custom Quote Request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$request_id = 'request_id_example'; // string | request_id parameter
$requests_custom_request = new \Arta\Client\Model\RequestsCustomRequest(); // \Arta\Client\Model\RequestsCustomRequest

try {
    $result = $apiInstance->requestsCustom($authorization, $request_id, $requests_custom_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->requestsCustom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **request_id** | **string**| request_id parameter | |
| **requests_custom_request** | [**\Arta\Client\Model\RequestsCustomRequest**](../Model/RequestsCustomRequest.md)|  | [optional] |

### Return type

[**\Arta\Client\Model\Request**](../Model/Request.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestsGet()`

```php
requestsGet($authorization, $request_id): \Arta\Client\Model\Request
```

Get a Quote Request

Retrieve an existing Shipment Quote Request record by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$request_id = 'request_id_example'; // string | request_id parameter

try {
    $result = $apiInstance->requestsGet($authorization, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->requestsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **request_id** | **string**| request_id parameter | |

### Return type

[**\Arta\Client\Model\Request**](../Model/Request.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestsList()`

```php
requestsList($authorization, $page_size, $page, $search): \Arta\Client\Model\RequestList
```

List Request records

Retrieve a paginated collection of Quote request records belonging to your Organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\RequestsApi(
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
    $result = $apiInstance->requestsList($authorization, $page_size, $page, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->requestsList: ', $e->getMessage(), PHP_EOL;
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

[**\Arta\Client\Model\RequestList**](../Model/RequestList.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestsUpdateContacts()`

```php
requestsUpdateContacts($authorization, $request_id, $requests_update_contacts_request): \Arta\Client\Model\Request
```

Update the contacts for a Quote Request

For quote requests with a current status of `quoted` or `disqualified`, you may update the contacts associated with either or both of the origin and destination locations.  Completing the missing contact details for a previously unbookable quote request may change the bookable status for the request if all other requirements are met.  This endpoint payload requires at least one of a destination or an origin object to be present.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$request_id = 'request_id_example'; // string | request_id parameter
$requests_update_contacts_request = {"destination":{"contacts":[{"email_address":"destination@example.com","name":"Destination Contact","phone_number":"(310) 123-4567"}]},"origin":{"contacts":[{"email_address":"origin@example.com","name":"Origin Contact","phone_number":"(310) 234-5678"}]}}; // \Arta\Client\Model\RequestsUpdateContactsRequest

try {
    $result = $apiInstance->requestsUpdateContacts($authorization, $request_id, $requests_update_contacts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->requestsUpdateContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **request_id** | **string**| request_id parameter | |
| **requests_update_contacts_request** | [**\Arta\Client\Model\RequestsUpdateContactsRequest**](../Model/RequestsUpdateContactsRequest.md)|  | [optional] |

### Return type

[**\Arta\Client\Model\Request**](../Model/Request.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
