# OpenAPI\Client\CustomsDeclarationsApi

All URIs are relative to https://api.goshippo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomsDeclaration()**](CustomsDeclarationsApi.md#createCustomsDeclaration) | **POST** /customs/declarations | Create a new customs declaration |
| [**getCustomsDeclaration()**](CustomsDeclarationsApi.md#getCustomsDeclaration) | **GET** /customs/declarations/{CustomsDeclarationId} | Retrieve a customs declaration |
| [**listCustomsDeclarations()**](CustomsDeclarationsApi.md#listCustomsDeclarations) | **GET** /customs/declarations | List all customs declarations |


## `createCustomsDeclaration()`

```php
createCustomsDeclaration($customs_declaration_create_request, $shippo_api_version): \OpenAPI\Client\Model\CustomsDeclaration
```

Create a new customs declaration

Creates a new customs declaration object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomsDeclarationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customs_declaration_create_request = new \OpenAPI\Client\Model\CustomsDeclarationCreateRequest(); // \OpenAPI\Client\Model\CustomsDeclarationCreateRequest | CustomsDeclaration details.
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->createCustomsDeclaration($customs_declaration_create_request, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomsDeclarationsApi->createCustomsDeclaration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customs_declaration_create_request** | [**\OpenAPI\Client\Model\CustomsDeclarationCreateRequest**](../Model/CustomsDeclarationCreateRequest.md)| CustomsDeclaration details. | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomsDeclaration**](../Model/CustomsDeclaration.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomsDeclaration()`

```php
getCustomsDeclaration($customs_declaration_id, $page, $shippo_api_version): \OpenAPI\Client\Model\CustomsDeclaration
```

Retrieve a customs declaration

Returns an existing customs declaration using an object ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomsDeclarationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customs_declaration_id = 'customs_declaration_id_example'; // string | Object ID of the customs declaration
$page = 1; // int | The page number you want to select
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->getCustomsDeclaration($customs_declaration_id, $page, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomsDeclarationsApi->getCustomsDeclaration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customs_declaration_id** | **string**| Object ID of the customs declaration | |
| **page** | **int**| The page number you want to select | [optional] [default to 1] |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomsDeclaration**](../Model/CustomsDeclaration.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomsDeclarations()`

```php
listCustomsDeclarations($page, $results, $shippo_api_version): \OpenAPI\Client\Model\CustomsDeclarationPaginatedList
```

List all customs declarations

Returns a a list of all customs declaration objects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomsDeclarationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The page number you want to select
$results = 5; // int | The number of results to return per page (max 100, default 5)
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->listCustomsDeclarations($page, $results, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomsDeclarationsApi->listCustomsDeclarations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The page number you want to select | [optional] [default to 1] |
| **results** | **int**| The number of results to return per page (max 100, default 5) | [optional] [default to 5] |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomsDeclarationPaginatedList**](../Model/CustomsDeclarationPaginatedList.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
