# OpenAPI\Client\CustomsItemsApi

All URIs are relative to https://api.goshippo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomsItem()**](CustomsItemsApi.md#createCustomsItem) | **POST** /customs/items | Create a new customs item |
| [**getCustomsItem()**](CustomsItemsApi.md#getCustomsItem) | **GET** /customs/items/{CustomsItemId} | Retrieve a customs item |
| [**listCustomsItems()**](CustomsItemsApi.md#listCustomsItems) | **GET** /customs/items | List all customs items |


## `createCustomsItem()`

```php
createCustomsItem($customs_item_create_request, $shippo_api_version): \OpenAPI\Client\Model\CustomsItem
```

Create a new customs item

Creates a new customs item object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomsItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customs_item_create_request = new \OpenAPI\Client\Model\CustomsItemCreateRequest(); // \OpenAPI\Client\Model\CustomsItemCreateRequest | CustomsItem details.
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->createCustomsItem($customs_item_create_request, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomsItemsApi->createCustomsItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customs_item_create_request** | [**\OpenAPI\Client\Model\CustomsItemCreateRequest**](../Model/CustomsItemCreateRequest.md)| CustomsItem details. | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomsItem**](../Model/CustomsItem.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomsItem()`

```php
getCustomsItem($customs_item_id, $page, $shippo_api_version): \OpenAPI\Client\Model\CustomsItem
```

Retrieve a customs item

Returns an existing customs item using an object ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomsItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customs_item_id = 'customs_item_id_example'; // string | Object ID of the customs item
$page = 1; // int | The page number you want to select
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->getCustomsItem($customs_item_id, $page, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomsItemsApi->getCustomsItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customs_item_id** | **string**| Object ID of the customs item | |
| **page** | **int**| The page number you want to select | [optional] [default to 1] |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomsItem**](../Model/CustomsItem.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomsItems()`

```php
listCustomsItems($page, $results, $shippo_api_version): \OpenAPI\Client\Model\CustomsItemPaginatedList
```

List all customs items

Returns a list all customs items objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomsItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The page number you want to select
$results = 25; // int | The number of results to return per page (max 100)
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->listCustomsItems($page, $results, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomsItemsApi->listCustomsItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The page number you want to select | [optional] [default to 1] |
| **results** | **int**| The number of results to return per page (max 100) | [optional] [default to 25] |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomsItemPaginatedList**](../Model/CustomsItemPaginatedList.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
