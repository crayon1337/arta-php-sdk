# Arta\Client\UploadsApi

All URIs are relative to https://api.arta.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**uploadsCreate()**](UploadsApi.md#uploadsCreate) | **POST** /uploads | Create an Upload |
| [**uploadsDelete()**](UploadsApi.md#uploadsDelete) | **DELETE** /uploads/{upload_id} | Delete an Upload |
| [**uploadsGet()**](UploadsApi.md#uploadsGet) | **GET** /uploads/{upload_id} | Get an Upload |
| [**uploadsList()**](UploadsApi.md#uploadsList) | **GET** /uploads | List Uploads |


## `uploadsCreate()`

```php
uploadsCreate($authorization, $uploads_create_request): \Arta\Client\Model\UploadWithPresignedUrl
```

Create an Upload

Uploading a file to Arta via API is a two step process.  The first step is to make an authenticated HTTP request to the `POST /uploads` endpoint described here. Successful requests to this endpoint will create an upload resource with a \"pending\" `status` as well as a `presigned_url` attribute.   The second step is to create a `PUT` HTTP request to the URL defined in the `presigned_url` field of the successful create response. This second request must include the raw data of the file as the request `body` and a `content-type` header. The `content-type` header must match the `mime_type` provided in your initial request. The size of the raw data must match the `size` param provided in your initial request.  For example, if you provided a `mime_type` of `text/csv` and a `size` of `13` bytes in the initial request to create the resource and if it successfully responded with a `presigned_url` value of `https://cdn.arta.io/uploads/my-file.csv`, your second request will look something like the following:  ``` curl --location --request PUT 'https://cdn.arta.io/uploads/my-file.csv' \\ --header 'Content-Type: text/csv' \\ --data-raw 'hello,world, ' ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$uploads_create_request = new \Arta\Client\Model\UploadsCreateRequest(); // \Arta\Client\Model\UploadsCreateRequest

try {
    $result = $apiInstance->uploadsCreate($authorization, $uploads_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->uploadsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **uploads_create_request** | [**\Arta\Client\Model\UploadsCreateRequest**](../Model/UploadsCreateRequest.md)|  | [optional] |

### Return type

[**\Arta\Client\Model\UploadWithPresignedUrl**](../Model/UploadWithPresignedUrl.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadsDelete()`

```php
uploadsDelete($authorization, $upload_id)
```

Delete an Upload

Delete an Upload

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$upload_id = 56; // int | upload_id parameter

try {
    $apiInstance->uploadsDelete($authorization, $upload_id);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->uploadsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **upload_id** | **int**| upload_id parameter | |

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

## `uploadsGet()`

```php
uploadsGet($authorization, $upload_id): \Arta\Client\Model\Upload
```

Get an Upload

Retrieve an existing Upload

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$upload_id = 56; // int | upload_id parameter

try {
    $result = $apiInstance->uploadsGet($authorization, $upload_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->uploadsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **upload_id** | **int**| upload_id parameter | |

### Return type

[**\Arta\Client\Model\Upload**](../Model/Upload.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadsList()`

```php
uploadsList($authorization, $page_size, $page): \Arta\Client\Model\UploadList
```

List Uploads

Retrieve a paginated collection of Uploads belonging to your Organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$page_size = 20; // int | Results per page (max 50)
$page = 1; // int | Page number of the results to fetch.

try {
    $result = $apiInstance->uploadsList($authorization, $page_size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->uploadsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **page_size** | **int**| Results per page (max 50) | [optional] [default to 20] |
| **page** | **int**| Page number of the results to fetch. | [optional] [default to 1] |

### Return type

[**\Arta\Client\Model\UploadList**](../Model/UploadList.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
