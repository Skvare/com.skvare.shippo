# OpenAPI\Client\ServiceGroupsApi

All URIs are relative to https://api.goshippo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createServiceGroup()**](ServiceGroupsApi.md#createServiceGroup) | **POST** /service-groups | Create a new service group |
| [**deleteServiceGroup()**](ServiceGroupsApi.md#deleteServiceGroup) | **DELETE** /service-groups/{ServiceGroupId} | Delete a service group |
| [**listServiceGroups()**](ServiceGroupsApi.md#listServiceGroups) | **GET** /service-groups | List all service groups |
| [**updateServiceGroup()**](ServiceGroupsApi.md#updateServiceGroup) | **PUT** /service-groups | Update an existing service group |


## `createServiceGroup()`

```php
createServiceGroup($service_group_create_request, $shippo_api_version): \OpenAPI\Client\Model\ServiceGroup
```

Create a new service group

Creates a new service group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServiceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_group_create_request = new \OpenAPI\Client\Model\ServiceGroupCreateRequest(); // \OpenAPI\Client\Model\ServiceGroupCreateRequest
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->createServiceGroup($service_group_create_request, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceGroupsApi->createServiceGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_group_create_request** | [**\OpenAPI\Client\Model\ServiceGroupCreateRequest**](../Model/ServiceGroupCreateRequest.md)|  | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\ServiceGroup**](../Model/ServiceGroup.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteServiceGroup()`

```php
deleteServiceGroup($service_group_id, $shippo_api_version)
```

Delete a service group

Deletes an existing service group using an object ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServiceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_group_id = 'service_group_id_example'; // string | Object ID of the service group
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $apiInstance->deleteServiceGroup($service_group_id, $shippo_api_version);
} catch (Exception $e) {
    echo 'Exception when calling ServiceGroupsApi->deleteServiceGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_group_id** | **string**| Object ID of the service group | |
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

## `listServiceGroups()`

```php
listServiceGroups($shippo_api_version): \OpenAPI\Client\Model\ServiceGroup[]
```

List all service groups

Returns a list of service group objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServiceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->listServiceGroups($shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceGroupsApi->listServiceGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\ServiceGroup[]**](../Model/ServiceGroup.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateServiceGroup()`

```php
updateServiceGroup($shippo_api_version, $service_group_update_request): \OpenAPI\Client\Model\ServiceGroup
```

Update an existing service group

Updates an existing service group object. <br>The object_id cannot be updated as it is the unique identifier for the object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServiceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use
$service_group_update_request = new \OpenAPI\Client\Model\ServiceGroupUpdateRequest(); // \OpenAPI\Client\Model\ServiceGroupUpdateRequest

try {
    $result = $apiInstance->updateServiceGroup($shippo_api_version, $service_group_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceGroupsApi->updateServiceGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |
| **service_group_update_request** | [**\OpenAPI\Client\Model\ServiceGroupUpdateRequest**](../Model/ServiceGroupUpdateRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ServiceGroup**](../Model/ServiceGroup.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
