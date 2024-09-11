# OpenAPI\Client\AddressesApi

All URIs are relative to https://api.goshippo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAddress()**](AddressesApi.md#createAddress) | **POST** /addresses | Create a new address |
| [**getAddress()**](AddressesApi.md#getAddress) | **GET** /addresses/{AddressId} | Retrieve an address |
| [**listAddresses()**](AddressesApi.md#listAddresses) | **GET** /addresses | List all addresses |
| [**validateAddress()**](AddressesApi.md#validateAddress) | **GET** /addresses/{AddressId}/validate | Validate an address |


## `createAddress()`

```php
createAddress($address_create_request, $shippo_api_version): \OpenAPI\Client\Model\Address
```

Create a new address

Creates a new address object. You can use address objects to create new shipments, calculate rates, and to create orders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_create_request = new \OpenAPI\Client\Model\AddressCreateRequest(); // \OpenAPI\Client\Model\AddressCreateRequest | Address details.
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->createAddress($address_create_request, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->createAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_create_request** | [**\OpenAPI\Client\Model\AddressCreateRequest**](../Model/AddressCreateRequest.md)| Address details. | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\Address**](../Model/Address.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddress()`

```php
getAddress($address_id, $shippo_api_version): \OpenAPI\Client\Model\Address
```

Retrieve an address

Returns an existing address using an object ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 'address_id_example'; // string | Object ID of the address
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->getAddress($address_id, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_id** | **string**| Object ID of the address | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\Address**](../Model/Address.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAddresses()`

```php
listAddresses($page, $results, $shippo_api_version): \OpenAPI\Client\Model\AddressPaginatedList
```

List all addresses

Returns a list of all address objects that have been created in this account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The page number you want to select
$results = 5; // int | The number of results to return per page (max 100, default 5)
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->listAddresses($page, $results, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->listAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The page number you want to select | [optional] [default to 1] |
| **results** | **int**| The number of results to return per page (max 100, default 5) | [optional] [default to 5] |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\AddressPaginatedList**](../Model/AddressPaginatedList.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateAddress()`

```php
validateAddress($address_id, $shippo_api_version): \OpenAPI\Client\Model\Address
```

Validate an address

Validates an existing address using an object ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 'address_id_example'; // string | Object ID of the address
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->validateAddress($address_id, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->validateAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_id** | **string**| Object ID of the address | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\Address**](../Model/Address.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
