# OpenAPI\Client\AttachmentsApi

All URIs are relative to https://api.arta.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachmentsCreate()**](AttachmentsApi.md#attachmentsCreate) | **POST** /attachments | Create an Attachment |
| [**attachmentsDelete()**](AttachmentsApi.md#attachmentsDelete) | **DELETE** /attachments/{attachment_id} | Delete an Attachment |
| [**attachmentsGet()**](AttachmentsApi.md#attachmentsGet) | **GET** /attachments/{attachment_id} | Get an Attachment |
| [**attachmentsList()**](AttachmentsApi.md#attachmentsList) | **GET** /attachments | List Attachments |


## `attachmentsCreate()`

```php
attachmentsCreate($authorization, $attachments_create_request): \OpenAPI\Client\Model\Attachment
```

Create an Attachment

The attachment resource connects uploads on Arta to shipment or request resources. Attached uploads are visible in the Arta Dashobard under the \"Documents\" tab on the shipment and request detail pages.  Each upload may be attached to many requests or shipments. Each request or shipment may have many associated uploads.  To create an attachment via the API you can must send an authenticated request to the `POST /attachments` endpoint with a body that includes one of two different payload schema.  To attach an upload to a shipment, the attachment payload must include `upload_id` and `shipment_id` attributes. This payload must not include a `request_id` attribute. For example:  ```json {     \"attachment\": {         \"shipment_id\": \"506d79b6-1e5e-4e8c-a266-74658fdaf4ee\",         \"upload_id\": 5285     } } ```  To attach an upload to a request, the attachment payload must include `upload_id` and `request_id` attributes. This payload must not include a `shipment_id` attribute. For example:  ```json {     \"attachment\": {         \"request_id\": \"506d79b6-1e5e-4e8c-a266-74658fdaf4ee\",         \"upload_id\": 5285     } } ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$attachments_create_request = {"attachment":{"upload_id":4791,"request_id":"506d79b6-1e5e-4e8c-a266-74658fdaf4ee"}}; // \OpenAPI\Client\Model\AttachmentsCreateRequest

try {
    $result = $apiInstance->attachmentsCreate($authorization, $attachments_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **attachments_create_request** | [**\OpenAPI\Client\Model\AttachmentsCreateRequest**](../Model/AttachmentsCreateRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Attachment**](../Model/Attachment.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachmentsDelete()`

```php
attachmentsDelete($authorization, $attachment_id)
```

Delete an Attachment

Delete an Attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$attachment_id = 56; // int | attachment_id parameter

try {
    $apiInstance->attachmentsDelete($authorization, $attachment_id);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **attachment_id** | **int**| attachment_id parameter | |

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

## `attachmentsGet()`

```php
attachmentsGet($authorization, $attachment_id): \OpenAPI\Client\Model\Attachment
```

Get an Attachment

Retrieve an existing Attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$attachment_id = 56; // int | attachment_id parameter

try {
    $result = $apiInstance->attachmentsGet($authorization, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **attachment_id** | **int**| attachment_id parameter | |

### Return type

[**\OpenAPI\Client\Model\Attachment**](../Model/Attachment.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachmentsList()`

```php
attachmentsList($authorization, $page_size, $page): \OpenAPI\Client\Model\AttachmentList
```

List Attachments

Retrieve a paginated collection of Attachments belonging to your Organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$page_size = 20; // int | Results per page (max 50)
$page = 1; // int | Page number of the results to fetch.

try {
    $result = $apiInstance->attachmentsList($authorization, $page_size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **page_size** | **int**| Results per page (max 50) | [optional] [default to 20] |
| **page** | **int**| Page number of the results to fetch. | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\AttachmentList**](../Model/AttachmentList.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
