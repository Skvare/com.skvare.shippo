# OpenAPI\Client\UserParcelTemplatesApi

All URIs are relative to https://api.goshippo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createUserParcelTemplate()**](UserParcelTemplatesApi.md#createUserParcelTemplate) | **POST** /user-parcel-templates | Create a new user parcel template |
| [**deleteUserParcelTemplate()**](UserParcelTemplatesApi.md#deleteUserParcelTemplate) | **DELETE** /user-parcel-templates/{UserParcelTemplateObjectId} | Delete a user parcel template |
| [**getUserParcelTemplate()**](UserParcelTemplatesApi.md#getUserParcelTemplate) | **GET** /user-parcel-templates/{UserParcelTemplateObjectId} | Retrieves a user parcel template |
| [**listUserParcelTemplates()**](UserParcelTemplatesApi.md#listUserParcelTemplates) | **GET** /user-parcel-templates | List all user parcel templates |
| [**updateUserParcelTemplate()**](UserParcelTemplatesApi.md#updateUserParcelTemplate) | **PUT** /user-parcel-templates/{UserParcelTemplateObjectId} | Update an existing user parcel template |


## `createUserParcelTemplate()`

```php
createUserParcelTemplate($user_parcel_template_create_request, $shippo_api_version): \OpenAPI\Client\Model\UserParcelTemplate
```

Create a new user parcel template

Creates a new user parcel template. <br>You can choose to create a parcel template using a preset carrier template as a starting point, or you can create an entirely custom one. To use a preset carrier template, pass in a unique template token from <a href=\"#tag/Parcel-Templates\">this list</a> plus the weight fields (**weight** and **weight_unit**). Otherwise, omit the template field and pass the other fields, for the weight, length, height, and depth, as well as their units.\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserParcelTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_parcel_template_create_request = new \OpenAPI\Client\Model\UserParcelTemplateCreateRequest(); // \OpenAPI\Client\Model\UserParcelTemplateCreateRequest
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->createUserParcelTemplate($user_parcel_template_create_request, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserParcelTemplatesApi->createUserParcelTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_parcel_template_create_request** | [**\OpenAPI\Client\Model\UserParcelTemplateCreateRequest**](../Model/UserParcelTemplateCreateRequest.md)|  | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserParcelTemplate**](../Model/UserParcelTemplate.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUserParcelTemplate()`

```php
deleteUserParcelTemplate($user_parcel_template_object_id, $shippo_api_version)
```

Delete a user parcel template

Deletes a user parcel template using an object ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserParcelTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_parcel_template_object_id = 'user_parcel_template_object_id_example'; // string | Object ID of the user parcel template
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $apiInstance->deleteUserParcelTemplate($user_parcel_template_object_id, $shippo_api_version);
} catch (Exception $e) {
    echo 'Exception when calling UserParcelTemplatesApi->deleteUserParcelTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_parcel_template_object_id** | **string**| Object ID of the user parcel template | |
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

## `getUserParcelTemplate()`

```php
getUserParcelTemplate($user_parcel_template_object_id, $shippo_api_version): \OpenAPI\Client\Model\UserParcelTemplate
```

Retrieves a user parcel template

Returns the parcel template information for a specific user parcel template, identified by the object ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserParcelTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_parcel_template_object_id = 'user_parcel_template_object_id_example'; // string | Object ID of the user parcel template
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->getUserParcelTemplate($user_parcel_template_object_id, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserParcelTemplatesApi->getUserParcelTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_parcel_template_object_id** | **string**| Object ID of the user parcel template | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserParcelTemplate**](../Model/UserParcelTemplate.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUserParcelTemplates()`

```php
listUserParcelTemplates($shippo_api_version): \OpenAPI\Client\Model\UserParcelTemplateList
```

List all user parcel templates

Returns a list all of all user parcel template objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserParcelTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->listUserParcelTemplates($shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserParcelTemplatesApi->listUserParcelTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserParcelTemplateList**](../Model/UserParcelTemplateList.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserParcelTemplate()`

```php
updateUserParcelTemplate($user_parcel_template_object_id, $shippo_api_version, $user_parcel_template_update_request): \OpenAPI\Client\Model\UserParcelTemplate
```

Update an existing user parcel template

Updates an existing user parcel template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserParcelTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_parcel_template_object_id = 'user_parcel_template_object_id_example'; // string | Object ID of the user parcel template
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use
$user_parcel_template_update_request = new \OpenAPI\Client\Model\UserParcelTemplateUpdateRequest(); // \OpenAPI\Client\Model\UserParcelTemplateUpdateRequest

try {
    $result = $apiInstance->updateUserParcelTemplate($user_parcel_template_object_id, $shippo_api_version, $user_parcel_template_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserParcelTemplatesApi->updateUserParcelTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_parcel_template_object_id** | **string**| Object ID of the user parcel template | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |
| **user_parcel_template_update_request** | [**\OpenAPI\Client\Model\UserParcelTemplateUpdateRequest**](../Model/UserParcelTemplateUpdateRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserParcelTemplate**](../Model/UserParcelTemplate.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
