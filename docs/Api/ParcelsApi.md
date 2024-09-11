# OpenAPI\Client\ParcelsApi

All URIs are relative to https://api.goshippo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createParcel()**](ParcelsApi.md#createParcel) | **POST** /parcels | Create a new parcel |
| [**getParcel()**](ParcelsApi.md#getParcel) | **GET** /parcels/{ParcelId} | Retrieve an existing parcel |
| [**listParcels()**](ParcelsApi.md#listParcels) | **GET** /parcels | List all parcels |


## `createParcel()`

```php
createParcel($create_parcel_request, $shippo_api_version): \OpenAPI\Client\Model\Parcel
```

Create a new parcel

Creates a new parcel object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ParcelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_parcel_request = new \OpenAPI\Client\Model\CreateParcelRequest(); // \OpenAPI\Client\Model\CreateParcelRequest | Parcel details.
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->createParcel($create_parcel_request, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelsApi->createParcel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_parcel_request** | [**\OpenAPI\Client\Model\CreateParcelRequest**](../Model/CreateParcelRequest.md)| Parcel details. | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\Parcel**](../Model/Parcel.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getParcel()`

```php
getParcel($parcel_id, $shippo_api_version): \OpenAPI\Client\Model\Parcel
```

Retrieve an existing parcel

Returns parcel details using an existing parcel object ID (this will not return parcel details associated with un-purchased shipment/rate parcel object IDs).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ParcelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_id = 'parcel_id_example'; // string | Object ID of the parcel
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->getParcel($parcel_id, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelsApi->getParcel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parcel_id** | **string**| Object ID of the parcel | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\Parcel**](../Model/Parcel.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listParcels()`

```php
listParcels($page, $results, $shippo_api_version): \OpenAPI\Client\Model\ParcelPaginatedList
```

List all parcels

Returns a list of all parcel objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ParcelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The page number you want to select
$results = 25; // int | The number of results to return per page (max 100)
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->listParcels($page, $results, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelsApi->listParcels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The page number you want to select | [optional] [default to 1] |
| **results** | **int**| The number of results to return per page (max 100) | [optional] [default to 25] |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\ParcelPaginatedList**](../Model/ParcelPaginatedList.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
