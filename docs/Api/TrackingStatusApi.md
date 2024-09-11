# OpenAPI\Client\TrackingStatusApi

All URIs are relative to https://api.goshippo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTrack()**](TrackingStatusApi.md#createTrack) | **POST** /tracks | Register a tracking webhook |
| [**getTrack()**](TrackingStatusApi.md#getTrack) | **GET** /tracks/{Carrier}/{TrackingNumber} | Get a tracking status |


## `createTrack()`

```php
createTrack($tracks_request, $shippo_api_version): \OpenAPI\Client\Model\Track
```

Register a tracking webhook

Registers a webhook that will send HTTP notifications to you when the status of your tracked package changes. For more details on creating a webhook, see our guides on <a href=\"https://docs.goshippo.com/docs/tracking/webhooks/\">Webhooks</a> and <a href=\"https://docs.goshippo.com/docs/tracking/tracking/\">Tracking</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TrackingStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tracks_request = new \OpenAPI\Client\Model\TracksRequest(); // \OpenAPI\Client\Model\TracksRequest
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->createTrack($tracks_request, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingStatusApi->createTrack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tracks_request** | [**\OpenAPI\Client\Model\TracksRequest**](../Model/TracksRequest.md)|  | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\Track**](../Model/Track.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrack()`

```php
getTrack($tracking_number, $carrier, $shippo_api_version): \OpenAPI\Client\Model\Track
```

Get a tracking status

Returns the tracking status of a shipment using a carrier name and a tracking number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TrackingStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tracking_number = 'tracking_number_example'; // string | Tracking number
$carrier = 'carrier_example'; // string | Name of the carrier
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->getTrack($tracking_number, $carrier, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingStatusApi->getTrack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tracking_number** | **string**| Tracking number | |
| **carrier** | **string**| Name of the carrier | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\Track**](../Model/Track.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
