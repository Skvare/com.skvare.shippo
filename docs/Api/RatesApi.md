# OpenAPI\Client\RatesApi

All URIs are relative to https://api.goshippo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRate()**](RatesApi.md#getRate) | **GET** /rates/{RateId} | Retrieve a rate |
| [**listShipmentRates()**](RatesApi.md#listShipmentRates) | **GET** /shipments/{ShipmentId}/rates | Retrieve shipment rates |
| [**listShipmentRatesByCurrencyCode()**](RatesApi.md#listShipmentRatesByCurrencyCode) | **GET** /shipments/{ShipmentId}/rates/{CurrencyCode} | Retrieve shipment rates in currency |


## `getRate()`

```php
getRate($rate_id, $shippo_api_version): \OpenAPI\Client\Model\Rate
```

Retrieve a rate

Returns an existing rate using a rate object ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate_id = 'rate_id_example'; // string | Object ID of the rate
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->getRate($rate_id, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->getRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rate_id** | **string**| Object ID of the rate | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\Rate**](../Model/Rate.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listShipmentRates()`

```php
listShipmentRates($shipment_id, $page, $results, $shippo_api_version): \OpenAPI\Client\Model\RatePaginatedList
```

Retrieve shipment rates

Returns a paginated list of rates associated with a shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 'shipment_id_example'; // string | Object ID of the shipment to update
$page = 1; // int | The page number you want to select
$results = 25; // int | The number of results to return per page (max 100)
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->listShipmentRates($shipment_id, $page, $results, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->listShipmentRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipment_id** | **string**| Object ID of the shipment to update | |
| **page** | **int**| The page number you want to select | [optional] [default to 1] |
| **results** | **int**| The number of results to return per page (max 100) | [optional] [default to 25] |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\RatePaginatedList**](../Model/RatePaginatedList.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listShipmentRatesByCurrencyCode()`

```php
listShipmentRatesByCurrencyCode($shipment_id, $currency_code, $page, $results, $shippo_api_version): \OpenAPI\Client\Model\RatePaginatedList
```

Retrieve shipment rates in currency

Returns all available shipping rates for a shipment object.  When you create a new valid shipment object, Shippo automatically calculates all available rates. Depending on your shipment data, there may be none, one or multiple rates.  By default, the calculated rates will return the price in two currencies under the `amount` and `amount_local` keys, respectively. The `amount` key will contain the price of a rate expressed in the currency that is used in the country from where the parcel originates, and the `amount_local` key will contain the price expressed in the currency that is used in the country the parcel is shipped to. You can request rates with prices expressed in a different currency by adding the currency code to the end of the resource URL. The full list of supported currencies along with their codes can be viewed on <a href=\"http://openexchangerates.org/api/currencies.json\">open exchange rates</a>.  Note: re-requesting the rates with a different currency code will re-queue the shipment (i.e. set the Shipment's `status` to `QUEUED`) and the converted currency rates will only be available when the Shipment's `status` is set to `SUCCESS`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 'shipment_id_example'; // string | Object ID of the shipment to update
$currency_code = 'USD'; // string | ISO currency code for the rates
$page = 1; // int | The page number you want to select
$results = 25; // int | The number of results to return per page (max 100)
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->listShipmentRatesByCurrencyCode($shipment_id, $currency_code, $page, $results, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->listShipmentRatesByCurrencyCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipment_id** | **string**| Object ID of the shipment to update | |
| **currency_code** | **string**| ISO currency code for the rates | [default to &#39;USD&#39;] |
| **page** | **int**| The page number you want to select | [optional] [default to 1] |
| **results** | **int**| The number of results to return per page (max 100) | [optional] [default to 25] |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\RatePaginatedList**](../Model/RatePaginatedList.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
