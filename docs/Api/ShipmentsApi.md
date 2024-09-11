# OpenAPI\Client\ShipmentsApi

All URIs are relative to https://api.goshippo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createShipment()**](ShipmentsApi.md#createShipment) | **POST** /shipments | Create a new shipment |
| [**getShipment()**](ShipmentsApi.md#getShipment) | **GET** /shipments/{ShipmentId} | Retrieve a shipment |
| [**listShipments()**](ShipmentsApi.md#listShipments) | **GET** /shipments | List all shipments |


## `createShipment()`

```php
createShipment($shipment_create_request, $shippo_api_version): \OpenAPI\Client\Model\Shipment
```

Create a new shipment

Creates a new shipment object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_create_request = new \OpenAPI\Client\Model\ShipmentCreateRequest(); // \OpenAPI\Client\Model\ShipmentCreateRequest | Shipment details and contact info.
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->createShipment($shipment_create_request, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->createShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipment_create_request** | [**\OpenAPI\Client\Model\ShipmentCreateRequest**](../Model/ShipmentCreateRequest.md)| Shipment details and contact info. | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\Shipment**](../Model/Shipment.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShipment()`

```php
getShipment($shipment_id, $shippo_api_version): \OpenAPI\Client\Model\Shipment
```

Retrieve a shipment

Returns an existing shipment using an object ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 'shipment_id_example'; // string | Object ID of the shipment to update
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->getShipment($shipment_id, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipment_id** | **string**| Object ID of the shipment to update | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\Shipment**](../Model/Shipment.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listShipments()`

```php
listShipments($page, $results, $object_created_gt, $object_created_gte, $object_created_lt, $object_created_lte, $shippo_api_version): \OpenAPI\Client\Model\ShipmentPaginatedList
```

List all shipments

Returns a list of all shipment objects.<br><br> In order to filter results, you must use the below path parameters.  A maximum date range of 90 days is permitted.  Provided dates should be ISO 8601 UTC dates (timezone offsets are currently not supported).<br><br>  Optional path parameters:<br>   `object_created_gt`- object(s) created greater than a provided date time<br>   `object_created_gte` - object(s) created greater than or equal to a provided date time<br>   `object_created_lt` - object(s) created less than a provided date time<br>   `object_created_lte` - object(s) created less than or equal to a provided date time<br>    Date format examples:<br>     `2017-01-01`<br>     `2017-01-01T03:30:30` or `2017-01-01T03:30:30.5`<br>     `2017-01-01T03:30:30Z`<br><br>    Example URL:<br>     `https://api.goshippo.com/shipments/?object_created_gte=2017-01-01T00:00:30&object_created_lt=2017-04-01T00:00:30`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The page number you want to select
$results = 25; // int | The number of results to return per page (max 100)
$object_created_gt = 'object_created_gt_example'; // string | Object(s) created greater than a provided date and time.
$object_created_gte = 'object_created_gte_example'; // string | Object(s) created greater than or equal to a provided date and time.
$object_created_lt = 'object_created_lt_example'; // string | Object(s) created lesser than a provided date and time.
$object_created_lte = 'object_created_lte_example'; // string | Object(s) created lesser than or equal to a provided date and time.
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->listShipments($page, $results, $object_created_gt, $object_created_gte, $object_created_lt, $object_created_lte, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->listShipments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The page number you want to select | [optional] [default to 1] |
| **results** | **int**| The number of results to return per page (max 100) | [optional] [default to 25] |
| **object_created_gt** | **string**| Object(s) created greater than a provided date and time. | [optional] |
| **object_created_gte** | **string**| Object(s) created greater than or equal to a provided date and time. | [optional] |
| **object_created_lt** | **string**| Object(s) created lesser than a provided date and time. | [optional] |
| **object_created_lte** | **string**| Object(s) created lesser than or equal to a provided date and time. | [optional] |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShipmentPaginatedList**](../Model/ShipmentPaginatedList.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
