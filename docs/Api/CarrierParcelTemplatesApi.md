# OpenAPI\Client\CarrierParcelTemplatesApi

All URIs are relative to https://api.goshippo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCarrierParcelTemplate()**](CarrierParcelTemplatesApi.md#getCarrierParcelTemplate) | **GET** /parcel-templates/{CarrierParcelTemplateToken} | Retrieve a carrier parcel templates |
| [**listCarrierParcelTemplates()**](CarrierParcelTemplatesApi.md#listCarrierParcelTemplates) | **GET** /parcel-templates | List all carrier parcel templates |


## `getCarrierParcelTemplate()`

```php
getCarrierParcelTemplate($carrier_parcel_template_token, $shippo_api_version): \OpenAPI\Client\Model\CarrierParcelTemplate
```

Retrieve a carrier parcel templates

Fetches the parcel template information for a specific carrier parcel template, identified by the token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CarrierParcelTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_parcel_template_token = 'carrier_parcel_template_token_example'; // string | The unique string representation of the carrier parcel template
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->getCarrierParcelTemplate($carrier_parcel_template_token, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarrierParcelTemplatesApi->getCarrierParcelTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **carrier_parcel_template_token** | **string**| The unique string representation of the carrier parcel template | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\CarrierParcelTemplate**](../Model/CarrierParcelTemplate.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCarrierParcelTemplates()`

```php
listCarrierParcelTemplates($include, $carrier, $shippo_api_version): \OpenAPI\Client\Model\CarrierParcelTemplateList
```

List all carrier parcel templates

List all carrier parcel template objects. <br> Use the following query string params to filter the results as needed. <br> <ul> <li>`include=all` (the default). Includes templates from all carriers </li> <li>`include=user`. Includes templates only from carriers which the user has added (whether or not they're currently enabled) </li> <li>`include=enabled`. includes templates only for carriers which the user has added and enabled </li> <li>`carrier=*token*`. filter by specific carrier, e.g. fedex, usps </li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CarrierParcelTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = 'include_example'; // string | filter by user or enabled
$carrier = fedex; // string | filter by specific carrier
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->listCarrierParcelTemplates($include, $carrier, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarrierParcelTemplatesApi->listCarrierParcelTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include** | **string**| filter by user or enabled | [optional] |
| **carrier** | **string**| filter by specific carrier | [optional] |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\CarrierParcelTemplateList**](../Model/CarrierParcelTemplateList.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
