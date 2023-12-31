# Arta\Client\MetadataApi

All URIs are relative to https://api.arta.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**metadalocationAccessRestrictions()**](MetadataApi.md#metadalocationAccessRestrictions) | **GET** /metadata/location_access_restrictions | Location Access Restrictions |
| [**metadataApiVersions()**](MetadataApi.md#metadataApiVersions) | **GET** /metadata/api_versions | API Versions |
| [**metadataCurrencies()**](MetadataApi.md#metadataCurrencies) | **GET** /metadata/currencies | Currencies |
| [**metadataEmailNotifications()**](MetadataApi.md#metadataEmailNotifications) | **GET** /metadata/email_notifications | Email Notifications |
| [**metadataInsurances()**](MetadataApi.md#metadataInsurances) | **GET** /metadata/insurances | Insurance |
| [**metadataObjectMaterials()**](MetadataApi.md#metadataObjectMaterials) | **GET** /metadata/object_materials | Object Materials |
| [**metadataObjects()**](MetadataApi.md#metadataObjects) | **GET** /metadata/objects | Object Types |
| [**metadataPackageStatuses()**](MetadataApi.md#metadataPackageStatuses) | **GET** /metadata/package_statuses | Package Statuses |
| [**metadataPackings()**](MetadataApi.md#metadataPackings) | **GET** /metadata/packings | Packing Types |
| [**metadataParcelTransportServices()**](MetadataApi.md#metadataParcelTransportServices) | **GET** /metadata/parcel_transport_services | Parcel Transport Services |
| [**metadataPaymentProcessTypes()**](MetadataApi.md#metadataPaymentProcessTypes) | **GET** /metadata/payment_process_types | Payment Process types |
| [**metadataQuotes()**](MetadataApi.md#metadataQuotes) | **GET** /metadata/quotes | Quote Types |
| [**metadataRequestStatuses()**](MetadataApi.md#metadataRequestStatuses) | **GET** /metadata/request_statuses | Quote Request Statuses |
| [**metadataServices()**](MetadataApi.md#metadataServices) | **GET** /metadata/services | Services |
| [**metadataShipmentExceptionTypes()**](MetadataApi.md#metadataShipmentExceptionTypes) | **GET** /metadata/shipment_exception_types | Shipment Exception Types |
| [**metadataShipmentStatuses()**](MetadataApi.md#metadataShipmentStatuses) | **GET** /metadata/shipment_statuses | Shipment Statuses |


## `metadalocationAccessRestrictions()`

```php
metadalocationAccessRestrictions($authorization): \Arta\Client\Model\MetadalocationAccessRestrictions200ResponseInner[]
```

Location Access Restrictions

Retrieve the list of valid Location Access Restriction objects for origin and destination locations.    The \"Create a Quote Request\" endpoint accepts a list of Location Access Restriction IDs for each location.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token

try {
    $result = $apiInstance->metadalocationAccessRestrictions($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadalocationAccessRestrictions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |

### Return type

[**\Arta\Client\Model\MetadalocationAccessRestrictions200ResponseInner[]**](../Model/MetadalocationAccessRestrictions200ResponseInner.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metadataApiVersions()`

```php
metadataApiVersions($authorization): \Arta\Client\Model\MetadataApiVersions200ResponseInner[]
```

API Versions

Retrieve the list of versions for Arta's API.    A version may be passed along in API calls as an `arta-version` request header to target a specific API version.    Additionally, you may set a default API version on your Organization to fallback to a particular version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token

try {
    $result = $apiInstance->metadataApiVersions($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataApiVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |

### Return type

[**\Arta\Client\Model\MetadataApiVersions200ResponseInner[]**](../Model/MetadataApiVersions200ResponseInner.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metadataCurrencies()`

```php
metadataCurrencies($authorization): \Arta\Client\Model\MetadataCurrencies200ResponseInner[]
```

Currencies

Retrieve the list of currencies supported by Arta's API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token

try {
    $result = $apiInstance->metadataCurrencies($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataCurrencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |

### Return type

[**\Arta\Client\Model\MetadataCurrencies200ResponseInner[]**](../Model/MetadataCurrencies200ResponseInner.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metadataEmailNotifications()`

```php
metadataEmailNotifications($authorization): \Arta\Client\Model\MetadataEmailNotifications200ResponseInner[]
```

Email Notifications

Arta's email notifications are optional and configurable. You can use email rules and email subscriptions to dictate whether Arta delivers them on your behalf to either internal or external recipients.    The Email Notifications metadata endpoint lists the current notification types and their properties.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token

try {
    $result = $apiInstance->metadataEmailNotifications($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataEmailNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |

### Return type

[**\Arta\Client\Model\MetadataEmailNotifications200ResponseInner[]**](../Model/MetadataEmailNotifications200ResponseInner.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metadataInsurances()`

```php
metadataInsurances($authorization): \Arta\Client\Model\MetadataInsurances200ResponseInner[]
```

Insurance

The list of insurance types supported by Arta's API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token

try {
    $result = $apiInstance->metadataInsurances($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataInsurances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |

### Return type

[**\Arta\Client\Model\MetadataInsurances200ResponseInner[]**](../Model/MetadataInsurances200ResponseInner.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metadataObjectMaterials()`

```php
metadataObjectMaterials($authorization): \Arta\Client\Model\MetadataObjectMaterials200ResponseInner[]
```

Object Materials

Retrieve the list of valid object materials

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token

try {
    $result = $apiInstance->metadataObjectMaterials($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataObjectMaterials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |

### Return type

[**\Arta\Client\Model\MetadataObjectMaterials200ResponseInner[]**](../Model/MetadataObjectMaterials200ResponseInner.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metadataObjects()`

```php
metadataObjects($authorization): \Arta\Client\Model\MetadataObjects200ResponseInner[]
```

Object Types

The list of object types supported by Arta's API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token

try {
    $result = $apiInstance->metadataObjects($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |

### Return type

[**\Arta\Client\Model\MetadataObjects200ResponseInner[]**](../Model/MetadataObjects200ResponseInner.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metadataPackageStatuses()`

```php
metadataPackageStatuses($authorization): \Arta\Client\Model\MetadataPackageStatuses200ResponseInner[]
```

Package Statuses

The list of possible statuses for a package in a shipment on Arta.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token

try {
    $result = $apiInstance->metadataPackageStatuses($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataPackageStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |

### Return type

[**\Arta\Client\Model\MetadataPackageStatuses200ResponseInner[]**](../Model/MetadataPackageStatuses200ResponseInner.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metadataPackings()`

```php
metadataPackings($authorization): \Arta\Client\Model\MetadataPackings200ResponseInner[]
```

Packing Types

The list of packing types supported by Arta's API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token

try {
    $result = $apiInstance->metadataPackings($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataPackings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |

### Return type

[**\Arta\Client\Model\MetadataPackings200ResponseInner[]**](../Model/MetadataPackings200ResponseInner.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metadataParcelTransportServices()`

```php
metadataParcelTransportServices($authorization): \Arta\Client\Model\MetadataParcelTransportServices200ResponseInner[]
```

Parcel Transport Services

The list of parcel transport services and their descriptions. The `id` and `name` fields are present in Arta Parcel quote request and shipment service responses. The `description` field provides additional context about the differences between each transport service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token

try {
    $result = $apiInstance->metadataParcelTransportServices($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataParcelTransportServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |

### Return type

[**\Arta\Client\Model\MetadataParcelTransportServices200ResponseInner[]**](../Model/MetadataParcelTransportServices200ResponseInner.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metadataPaymentProcessTypes()`

```php
metadataPaymentProcessTypes($authorization): \Arta\Client\Model\MetadataPaymentProcessTypes200ResponseInner[]
```

Payment Process types

The list of shipment payment process types supported by Arta's API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token

try {
    $result = $apiInstance->metadataPaymentProcessTypes($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataPaymentProcessTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |

### Return type

[**\Arta\Client\Model\MetadataPaymentProcessTypes200ResponseInner[]**](../Model/MetadataPaymentProcessTypes200ResponseInner.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metadataQuotes()`

```php
metadataQuotes($authorization): \Arta\Client\Model\MetadataQuotes200ResponseInner[]
```

Quote Types

The list of Quote types provided by Arta.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token

try {
    $result = $apiInstance->metadataQuotes($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataQuotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |

### Return type

[**\Arta\Client\Model\MetadataQuotes200ResponseInner[]**](../Model/MetadataQuotes200ResponseInner.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metadataRequestStatuses()`

```php
metadataRequestStatuses($authorization): \Arta\Client\Model\MetadataRequestStatuses200ResponseInner[]
```

Quote Request Statuses

The list of statuses for a quote request resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token

try {
    $result = $apiInstance->metadataRequestStatuses($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataRequestStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |

### Return type

[**\Arta\Client\Model\MetadataRequestStatuses200ResponseInner[]**](../Model/MetadataRequestStatuses200ResponseInner.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metadataServices()`

```php
metadataServices($authorization): \Arta\Client\Model\MetadataServices200ResponseInner[]
```

Services

The list of shipment services supported by Arta's API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token

try {
    $result = $apiInstance->metadataServices($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |

### Return type

[**\Arta\Client\Model\MetadataServices200ResponseInner[]**](../Model/MetadataServices200ResponseInner.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metadataShipmentExceptionTypes()`

```php
metadataShipmentExceptionTypes($authorization): \Arta\Client\Model\MetadataShipmentExceptionTypes200ResponseInner[]
```

Shipment Exception Types

Retrieve the list of shipment exception types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token

try {
    $result = $apiInstance->metadataShipmentExceptionTypes($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataShipmentExceptionTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |

### Return type

[**\Arta\Client\Model\MetadataShipmentExceptionTypes200ResponseInner[]**](../Model/MetadataShipmentExceptionTypes200ResponseInner.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metadataShipmentStatuses()`

```php
metadataShipmentStatuses($authorization): \Arta\Client\Model\MetadataShipmentStatuses200ResponseInner[]
```

Shipment Statuses

The list of statuses for a shipment on Arta.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token

try {
    $result = $apiInstance->metadataShipmentStatuses($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataShipmentStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |

### Return type

[**\Arta\Client\Model\MetadataShipmentStatuses200ResponseInner[]**](../Model/MetadataShipmentStatuses200ResponseInner.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
