# Arta\Client\OrganizationApi

All URIs are relative to https://api.arta.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**organizationGet()**](OrganizationApi.md#organizationGet) | **GET** /organization | Get an Organization |
| [**organizationPatch()**](OrganizationApi.md#organizationPatch) | **PATCH** /organization | Update an Organization |


## `organizationGet()`

```php
organizationGet($authorization): \Arta\Client\Model\Organization
```

Get an Organization

Retrieve the Organization associated with the API Key in the Authorization header

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token

try {
    $result = $apiInstance->organizationGet($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->organizationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |

### Return type

[**\Arta\Client\Model\Organization**](../Model/Organization.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationPatch()`

```php
organizationPatch($authorization, $organization_patch_request): \Arta\Client\Model\Organization
```

Update an Organization

Update the Organization associated with the API Key in the Authorization header

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Arta\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Arta\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$organization_patch_request = {"organization":{"api_version":"2021-01-01","company_name":"Hudson Street Collective LLC","display_name":"Hudson Street","name":"Hudson Street Gallery"}}; // \Arta\Client\Model\OrganizationPatchRequest

try {
    $result = $apiInstance->organizationPatch($authorization, $organization_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->organizationPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **organization_patch_request** | [**\Arta\Client\Model\OrganizationPatchRequest**](../Model/OrganizationPatchRequest.md)|  | [optional] |

### Return type

[**\Arta\Client\Model\Organization**](../Model/Organization.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
