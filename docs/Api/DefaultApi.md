# OpenAPI\Client\DefaultApi

All URIs are relative to https://api.goshippo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchPost()**](DefaultApi.md#batchPost) | **POST** /batch |  |
| [**trackPost()**](DefaultApi.md#trackPost) | **POST** /track |  |
| [**transactionPost()**](DefaultApi.md#transactionPost) | **POST** /transaction |  |


## `batchPost()`

```php
batchPost($webhook_payload_batch)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_batch = new \OpenAPI\Client\Model\WebhookPayloadBatch(); // \OpenAPI\Client\Model\WebhookPayloadBatch | Batch created or purchased

try {
    $apiInstance->batchPost($webhook_payload_batch);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->batchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_batch** | [**\OpenAPI\Client\Model\WebhookPayloadBatch**](../Model/WebhookPayloadBatch.md)| Batch created or purchased | |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trackPost()`

```php
trackPost($webhook_payload_track)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_track = new \OpenAPI\Client\Model\WebhookPayloadTrack(); // \OpenAPI\Client\Model\WebhookPayloadTrack | Tracking status updated

try {
    $apiInstance->trackPost($webhook_payload_track);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->trackPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_track** | [**\OpenAPI\Client\Model\WebhookPayloadTrack**](../Model/WebhookPayloadTrack.md)| Tracking status updated | |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionPost()`

```php
transactionPost($webhook_payload_transaction)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_transaction = new \OpenAPI\Client\Model\WebhookPayloadTransaction(); // \OpenAPI\Client\Model\WebhookPayloadTransaction | Transaction created or updated

try {
    $apiInstance->transactionPost($webhook_payload_transaction);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transactionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_transaction** | [**\OpenAPI\Client\Model\WebhookPayloadTransaction**](../Model/WebhookPayloadTransaction.md)| Transaction created or updated | |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
