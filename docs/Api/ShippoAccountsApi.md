# OpenAPI\Client\ShippoAccountsApi

All URIs are relative to https://api.goshippo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createShippoAccount()**](ShippoAccountsApi.md#createShippoAccount) | **POST** /shippo-accounts | Create a Shippo Account |
| [**getShippoAccount()**](ShippoAccountsApi.md#getShippoAccount) | **GET** /shippo-accounts/{ShippoAccountId} | Retrieve a Shippo Account |
| [**listShippoAccounts()**](ShippoAccountsApi.md#listShippoAccounts) | **GET** /shippo-accounts | List all Shippo Accounts |
| [**updateShippoAccount()**](ShippoAccountsApi.md#updateShippoAccount) | **PUT** /shippo-accounts/{ShippoAccountId} | Update a Shippo Account |


## `createShippoAccount()`

```php
createShippoAccount($shippo_account_update_request, $shippo_api_version): \OpenAPI\Client\Model\ShippoAccount
```

Create a Shippo Account

Creates a Shippo Account object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ShippoAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shippo_account_update_request = new \OpenAPI\Client\Model\ShippoAccountUpdateRequest(); // \OpenAPI\Client\Model\ShippoAccountUpdateRequest
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->createShippoAccount($shippo_account_update_request, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippoAccountsApi->createShippoAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shippo_account_update_request** | [**\OpenAPI\Client\Model\ShippoAccountUpdateRequest**](../Model/ShippoAccountUpdateRequest.md)|  | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShippoAccount**](../Model/ShippoAccount.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippoAccount()`

```php
getShippoAccount($shippo_account_id, $shippo_api_version): \OpenAPI\Client\Model\ShippoAccount
```

Retrieve a Shippo Account

Returns a Shippo Account using an object ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ShippoAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shippo_account_id = 'shippo_account_id_example'; // string | Object ID of the ShippoAccount
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->getShippoAccount($shippo_account_id, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippoAccountsApi->getShippoAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shippo_account_id** | **string**| Object ID of the ShippoAccount | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShippoAccount**](../Model/ShippoAccount.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listShippoAccounts()`

```php
listShippoAccounts($page, $results, $shippo_api_version): \OpenAPI\Client\Model\ShippoAccountPaginatedList
```

List all Shippo Accounts

Returns a list of Shippo Accounts objects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ShippoAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The page number you want to select
$results = 25; // int | The number of results to return per page (max 100)
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->listShippoAccounts($page, $results, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippoAccountsApi->listShippoAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The page number you want to select | [optional] [default to 1] |
| **results** | **int**| The number of results to return per page (max 100) | [optional] [default to 25] |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShippoAccountPaginatedList**](../Model/ShippoAccountPaginatedList.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateShippoAccount()`

```php
updateShippoAccount($shippo_account_id, $shippo_api_version, $shippo_account_update_request): \OpenAPI\Client\Model\ShippoAccount
```

Update a Shippo Account

Updates a Shippo Account object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ShippoAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shippo_account_id = 'shippo_account_id_example'; // string | Object ID of the ShippoAccount
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use
$shippo_account_update_request = new \OpenAPI\Client\Model\ShippoAccountUpdateRequest(); // \OpenAPI\Client\Model\ShippoAccountUpdateRequest

try {
    $result = $apiInstance->updateShippoAccount($shippo_account_id, $shippo_api_version, $shippo_account_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippoAccountsApi->updateShippoAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shippo_account_id** | **string**| Object ID of the ShippoAccount | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |
| **shippo_account_update_request** | [**\OpenAPI\Client\Model\ShippoAccountUpdateRequest**](../Model/ShippoAccountUpdateRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShippoAccount**](../Model/ShippoAccount.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
