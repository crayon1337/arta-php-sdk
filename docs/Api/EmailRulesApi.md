# OpenAPI\Client\EmailRulesApi

All URIs are relative to https://api.arta.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**emailRulesCreate()**](EmailRulesApi.md#emailRulesCreate) | **POST** /email_rules | Create an Email Rule |
| [**emailRulesDelete()**](EmailRulesApi.md#emailRulesDelete) | **DELETE** /email_rules/{email_rule_id} | Delete an Email Rule |
| [**emailRulesGet()**](EmailRulesApi.md#emailRulesGet) | **GET** /email_rules/{email_rule_id} | Get an Email Rule |
| [**emailRulesList()**](EmailRulesApi.md#emailRulesList) | **GET** /email_rules | List Email Rules |
| [**emailRulesUpdate()**](EmailRulesApi.md#emailRulesUpdate) | **PATCH** /email_rules/{email_rule_id} | Update an Email Rule |


## `emailRulesCreate()`

```php
emailRulesCreate($authorization, $email_rules_create_request): \OpenAPI\Client\Model\EmailRule
```

Create an Email Rule

response

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmailRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$email_rules_create_request = new \OpenAPI\Client\Model\EmailRulesCreateRequest(); // \OpenAPI\Client\Model\EmailRulesCreateRequest

try {
    $result = $apiInstance->emailRulesCreate($authorization, $email_rules_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailRulesApi->emailRulesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **email_rules_create_request** | [**\OpenAPI\Client\Model\EmailRulesCreateRequest**](../Model/EmailRulesCreateRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmailRule**](../Model/EmailRule.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emailRulesDelete()`

```php
emailRulesDelete($authorization, $email_rule_id)
```

Delete an Email Rule

Delete an Email Rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmailRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$email_rule_id = 56; // int | email_rule_id parameter

try {
    $apiInstance->emailRulesDelete($authorization, $email_rule_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailRulesApi->emailRulesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **email_rule_id** | **int**| email_rule_id parameter | |

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

## `emailRulesGet()`

```php
emailRulesGet($authorization, $email_rule_id): \OpenAPI\Client\Model\EmailRule
```

Get an Email Rule

Retrieve an existing Email Rule request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmailRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$email_rule_id = 56; // int | email_rule_id parameter

try {
    $result = $apiInstance->emailRulesGet($authorization, $email_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailRulesApi->emailRulesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **email_rule_id** | **int**| email_rule_id parameter | |

### Return type

[**\OpenAPI\Client\Model\EmailRule**](../Model/EmailRule.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emailRulesList()`

```php
emailRulesList($authorization, $page_size, $page): \OpenAPI\Client\Model\EmailRuleList
```

List Email Rules

Retrieve a paginated collection of Email Rules belonging to your Organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmailRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$page_size = 20; // int | Results per page (max 50)
$page = 1; // int | Page number of the results to fetch.

try {
    $result = $apiInstance->emailRulesList($authorization, $page_size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailRulesApi->emailRulesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **page_size** | **int**| Results per page (max 50) | [optional] [default to 20] |
| **page** | **int**| Page number of the results to fetch. | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\EmailRuleList**](../Model/EmailRuleList.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emailRulesUpdate()`

```php
emailRulesUpdate($authorization, $email_rule_id, $email_rules_update_request): \OpenAPI\Client\Model\EmailRule
```

Update an Email Rule

Update an existing Email Rule request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmailRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$email_rule_id = 56; // int | email_rule_id parameter
$email_rules_update_request = new \OpenAPI\Client\Model\EmailRulesUpdateRequest(); // \OpenAPI\Client\Model\EmailRulesUpdateRequest

try {
    $result = $apiInstance->emailRulesUpdate($authorization, $email_rule_id, $email_rules_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailRulesApi->emailRulesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Authorize your API calls with an Arta API token | |
| **email_rule_id** | **int**| email_rule_id parameter | |
| **email_rules_update_request** | [**\OpenAPI\Client\Model\EmailRulesUpdateRequest**](../Model/EmailRulesUpdateRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmailRule**](../Model/EmailRule.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
