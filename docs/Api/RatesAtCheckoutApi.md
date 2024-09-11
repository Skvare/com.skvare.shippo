# OpenAPI\Client\RatesAtCheckoutApi

All URIs are relative to https://api.goshippo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLiveRate()**](RatesAtCheckoutApi.md#createLiveRate) | **POST** /live-rates | Generate a live rates request |
| [**deleteDefaultParcelTemplate()**](RatesAtCheckoutApi.md#deleteDefaultParcelTemplate) | **DELETE** /live-rates/settings/parcel-template | Clear current default parcel template |
| [**getDefaultParcelTemplate()**](RatesAtCheckoutApi.md#getDefaultParcelTemplate) | **GET** /live-rates/settings/parcel-template | Show current default parcel template |
| [**updateDefaultParcelTemplate()**](RatesAtCheckoutApi.md#updateDefaultParcelTemplate) | **PUT** /live-rates/settings/parcel-template | Update default parcel template |


## `createLiveRate()`

```php
createLiveRate($live_rate_create_request, $shippo_api_version): \OpenAPI\Client\Model\LiveRatePaginatedList
```

Generate a live rates request

Initiates a live rates request. Include either the object ID for an existing address record or a fully formed address object when entering an address value. You can also enter the object ID of an existing user parcel template or a fully formed user parcel template object as the parcel value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RatesAtCheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_rate_create_request = new \OpenAPI\Client\Model\LiveRateCreateRequest(); // \OpenAPI\Client\Model\LiveRateCreateRequest | Generate rates at checkout
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->createLiveRate($live_rate_create_request, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesAtCheckoutApi->createLiveRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_rate_create_request** | [**\OpenAPI\Client\Model\LiveRateCreateRequest**](../Model/LiveRateCreateRequest.md)| Generate rates at checkout | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\LiveRatePaginatedList**](../Model/LiveRatePaginatedList.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDefaultParcelTemplate()`

```php
deleteDefaultParcelTemplate($shippo_api_version)
```

Clear current default parcel template

Clears the currently configured default parcel template for live rates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RatesAtCheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $apiInstance->deleteDefaultParcelTemplate($shippo_api_version);
} catch (Exception $e) {
    echo 'Exception when calling RatesAtCheckoutApi->deleteDefaultParcelTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDefaultParcelTemplate()`

```php
getDefaultParcelTemplate($shippo_api_version): \OpenAPI\Client\Model\DefaultParcelTemplate
```

Show current default parcel template

Retrieve and display the currently configured default parcel template for live rates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RatesAtCheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->getDefaultParcelTemplate($shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesAtCheckoutApi->getDefaultParcelTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\DefaultParcelTemplate**](../Model/DefaultParcelTemplate.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDefaultParcelTemplate()`

```php
updateDefaultParcelTemplate($shippo_api_version, $default_parcel_template_update_request): \OpenAPI\Client\Model\DefaultParcelTemplate
```

Update default parcel template

Update the currently configured default parcel template for live rates. The object_id in the request payload should identify the user parcel template to be the new default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RatesAtCheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use
$default_parcel_template_update_request = new \OpenAPI\Client\Model\DefaultParcelTemplateUpdateRequest(); // \OpenAPI\Client\Model\DefaultParcelTemplateUpdateRequest

try {
    $result = $apiInstance->updateDefaultParcelTemplate($shippo_api_version, $default_parcel_template_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesAtCheckoutApi->updateDefaultParcelTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |
| **default_parcel_template_update_request** | [**\OpenAPI\Client\Model\DefaultParcelTemplateUpdateRequest**](../Model/DefaultParcelTemplateUpdateRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DefaultParcelTemplate**](../Model/DefaultParcelTemplate.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
