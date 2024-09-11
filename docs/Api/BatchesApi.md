# OpenAPI\Client\BatchesApi

All URIs are relative to https://api.goshippo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addShipmentsToBatch()**](BatchesApi.md#addShipmentsToBatch) | **POST** /batches/{BatchId}/add_shipments | Add shipments to a batch |
| [**createBatch()**](BatchesApi.md#createBatch) | **POST** /batches | Create a batch |
| [**getBatch()**](BatchesApi.md#getBatch) | **GET** /batches/{BatchId} | Retrieve a batch |
| [**purchaseBatch()**](BatchesApi.md#purchaseBatch) | **POST** /batches/{BatchId}/purchase | Purchase a batch |
| [**removeShipmentsFromBatch()**](BatchesApi.md#removeShipmentsFromBatch) | **POST** /batches/{BatchId}/remove_shipments | Remove shipments from a batch |


## `addShipmentsToBatch()`

```php
addShipmentsToBatch($batch_id, $batch_shipment_create_request, $shippo_api_version): \OpenAPI\Client\Model\Batch
```

Add shipments to a batch

Adds batch shipments to an existing batch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = 'batch_id_example'; // string | Object ID of the batch
$batch_shipment_create_request = array(new \OpenAPI\Client\Model\BatchShipmentCreateRequest()); // \OpenAPI\Client\Model\BatchShipmentCreateRequest[] | Array of shipments to add to the batch
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->addShipmentsToBatch($batch_id, $batch_shipment_create_request, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->addShipmentsToBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batch_id** | **string**| Object ID of the batch | |
| **batch_shipment_create_request** | [**\OpenAPI\Client\Model\BatchShipmentCreateRequest[]**](../Model/BatchShipmentCreateRequest.md)| Array of shipments to add to the batch | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\Batch**](../Model/Batch.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBatch()`

```php
createBatch($batch_create_request, $shippo_api_version): \OpenAPI\Client\Model\Batch
```

Create a batch

Creates a new batch object for purchasing shipping labels for many shipments at once. Batches are created asynchronously. This means that the API response won't include your batch shipments yet. You need to retrieve the batch later to verify that all batch shipments are valid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_create_request = new \OpenAPI\Client\Model\BatchCreateRequest(); // \OpenAPI\Client\Model\BatchCreateRequest | Batch details.
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->createBatch($batch_create_request, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->createBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batch_create_request** | [**\OpenAPI\Client\Model\BatchCreateRequest**](../Model/BatchCreateRequest.md)| Batch details. | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\Batch**](../Model/Batch.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBatch()`

```php
getBatch($batch_id, $shippo_api_version): \OpenAPI\Client\Model\Batch
```

Retrieve a batch

Returns a batch using an object ID. <br> Batch shipments are displayed 100 at a time.  You can iterate  through each `page` using the `?page= query` parameter.  You can also filter based on batch shipment  status, for example, by passing a query param like `?object_results=creation_failed`. <br>  For more details on filtering results, see our guide on <a href=\"https://docs.goshippo.com/docs/api_concepts/filtering/\" target=\"blank\"> filtering</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = 'batch_id_example'; // string | Object ID of the batch
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->getBatch($batch_id, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->getBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batch_id** | **string**| Object ID of the batch | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\Batch**](../Model/Batch.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseBatch()`

```php
purchaseBatch($batch_id, $shippo_api_version): \OpenAPI\Client\Model\Batch
```

Purchase a batch

Purchases an existing batch with a status of `VALID`.  Once you send a POST request to the purchase endpoint the batch status will change to `PURCHASING`.  When all the shipments are purchased, the status will change to `PURCHASED` and you will receive a  `batch_purchased` webhook indicating that the batch has been purchased

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = 'batch_id_example'; // string | Object ID of the batch
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->purchaseBatch($batch_id, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->purchaseBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batch_id** | **string**| Object ID of the batch | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\Batch**](../Model/Batch.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeShipmentsFromBatch()`

```php
removeShipmentsFromBatch($batch_id, $request_body, $shippo_api_version): \OpenAPI\Client\Model\Batch
```

Remove shipments from a batch

Removes shipments from an existing batch shipment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = 'batch_id_example'; // string | Object ID of the batch
$request_body = array('request_body_example'); // string[] | Array of shipments object ids to remove from the batch
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->removeShipmentsFromBatch($batch_id, $request_body, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->removeShipmentsFromBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batch_id** | **string**| Object ID of the batch | |
| **request_body** | [**string[]**](../Model/string.md)| Array of shipments object ids to remove from the batch | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\Batch**](../Model/Batch.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
