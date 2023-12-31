# Arta\Client\InvoicePaymentsApi

All URIs are relative to https://api.arta.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**invoicePaymentsGet()**](InvoicePaymentsApi.md#invoicePaymentsGet) | **GET** /invoice_payments/{invoice_payment_id} | Get an Invoice Payment record |
| [**invoicePaymentsList()**](InvoicePaymentsApi.md#invoicePaymentsList) | **GET** /invoice_payments | List invoice payment records |


## `invoicePaymentsGet()`

```php
invoicePaymentsGet($authorization, $invoice_payment_id): \Arta\Client\Model\InvoicePayment
```

Get an Invoice Payment record

Retrieve an existing Invoice Payment record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\InvoicePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$invoice_payment_id = 56; // int | invoice_payment_id parameter

try {
    $result = $apiInstance->invoicePaymentsGet($authorization, $invoice_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->invoicePaymentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **invoice_payment_id** | **int**| invoice_payment_id parameter | |

### Return type

[**\Arta\Client\Model\InvoicePayment**](../Model/InvoicePayment.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentsList()`

```php
invoicePaymentsList($authorization, $page_size, $page): \Arta\Client\Model\InvoicePaymentList
```

List invoice payment records

Retrieve a paginated collection of Invoice Payments belonging to your Organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\InvoicePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$page_size = 20; // int | Results per page (max 50)
$page = 1; // int | Page number of the results to fetch.

try {
    $result = $apiInstance->invoicePaymentsList($authorization, $page_size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->invoicePaymentsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **page_size** | **int**| Results per page (max 50) | [optional] [default to 20] |
| **page** | **int**| Page number of the results to fetch. | [optional] [default to 1] |

### Return type

[**\Arta\Client\Model\InvoicePaymentList**](../Model/InvoicePaymentList.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
