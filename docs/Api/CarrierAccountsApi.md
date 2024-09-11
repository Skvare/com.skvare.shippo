# OpenAPI\Client\CarrierAccountsApi

All URIs are relative to https://api.goshippo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCarrierAccount()**](CarrierAccountsApi.md#createCarrierAccount) | **POST** /carrier_accounts | Create a new carrier account |
| [**getCarrierAccount()**](CarrierAccountsApi.md#getCarrierAccount) | **GET** /carrier_accounts/{CarrierAccountId} | Retrieve a carrier account |
| [**getCarrierRegistrationStatus()**](CarrierAccountsApi.md#getCarrierRegistrationStatus) | **GET** /carrier_accounts/reg-status | Get Carrier Registration status |
| [**initiateOauth2Signin()**](CarrierAccountsApi.md#initiateOauth2Signin) | **GET** /carrier_accounts/{CarrierAccountObjectId}/signin/initiate | Connect an existing carrier account using OAuth 2.0 |
| [**listCarrierAccounts()**](CarrierAccountsApi.md#listCarrierAccounts) | **GET** /carrier_accounts | List all carrier accounts |
| [**registerCarrierAccount()**](CarrierAccountsApi.md#registerCarrierAccount) | **POST** /carrier_accounts/register/new | Add a Shippo carrier account |
| [**updateCarrierAccount()**](CarrierAccountsApi.md#updateCarrierAccount) | **PUT** /carrier_accounts/{CarrierAccountId} | Update a carrier account |


## `createCarrierAccount()`

```php
createCarrierAccount($connect_existing_own_account_request, $shippo_api_version): \OpenAPI\Client\Model\CarrierAccount
```

Create a new carrier account

Creates a new carrier account or connects an existing carrier account to the Shippo account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CarrierAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connect_existing_own_account_request = new \OpenAPI\Client\Model\ConnectExistingOwnAccountRequest(); // \OpenAPI\Client\Model\ConnectExistingOwnAccountRequest | Examples.
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->createCarrierAccount($connect_existing_own_account_request, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarrierAccountsApi->createCarrierAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **connect_existing_own_account_request** | [**\OpenAPI\Client\Model\ConnectExistingOwnAccountRequest**](../Model/ConnectExistingOwnAccountRequest.md)| Examples. | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\CarrierAccount**](../Model/CarrierAccount.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCarrierAccount()`

```php
getCarrierAccount($carrier_account_id, $shippo_api_version): \OpenAPI\Client\Model\CarrierAccount
```

Retrieve a carrier account

Returns an existing carrier account using an object ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CarrierAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_account_id = 'carrier_account_id_example'; // string | Object ID of the carrier account
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->getCarrierAccount($carrier_account_id, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarrierAccountsApi->getCarrierAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **carrier_account_id** | **string**| Object ID of the carrier account | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\CarrierAccount**](../Model/CarrierAccount.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCarrierRegistrationStatus()`

```php
getCarrierRegistrationStatus($carrier, $shippo_api_version): \OpenAPI\Client\Model\CarrierAccountRegistrationStatus
```

Get Carrier Registration status

Returns the registration status for the given account for the given carrier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CarrierAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier = 'carrier_example'; // string | filter by specific carrier
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->getCarrierRegistrationStatus($carrier, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarrierAccountsApi->getCarrierRegistrationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **carrier** | **string**| filter by specific carrier | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\CarrierAccountRegistrationStatus**](../Model/CarrierAccountRegistrationStatus.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `initiateOauth2Signin()`

```php
initiateOauth2Signin($carrier_account_object_id, $redirect_uri, $state, $shippo_api_version)
```

Connect an existing carrier account using OAuth 2.0

Used by client applications to setup or reconnect an existing carrier account with carriers that support OAuth 2.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CarrierAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_account_object_id = 'carrier_account_object_id_example'; // string | The carrier account ID (UUID) to start a signin process.
$redirect_uri = 'redirect_uri_example'; // string | Callback URL. The URL that tells the authorization server where to send the user back to after they approve the request.
$state = 'state_example'; // string | A random string generated by the consuming application and included in the request to prevent CSRF attacks. The consuming application checks that the same value is returned after the user authorizes Shippo.
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $apiInstance->initiateOauth2Signin($carrier_account_object_id, $redirect_uri, $state, $shippo_api_version);
} catch (Exception $e) {
    echo 'Exception when calling CarrierAccountsApi->initiateOauth2Signin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **carrier_account_object_id** | **string**| The carrier account ID (UUID) to start a signin process. | |
| **redirect_uri** | **string**| Callback URL. The URL that tells the authorization server where to send the user back to after they approve the request. | |
| **state** | **string**| A random string generated by the consuming application and included in the request to prevent CSRF attacks. The consuming application checks that the same value is returned after the user authorizes Shippo. | [optional] |
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

## `listCarrierAccounts()`

```php
listCarrierAccounts($service_levels, $carrier, $account_id, $page, $results, $shippo_api_version): \OpenAPI\Client\Model\CarrierAccountPaginatedList
```

List all carrier accounts

Returns a list of all carrier accounts connected to your Shippo account. These carrier accounts include both Shippo carrier accounts and your own carrier accounts that you have connected to your Shippo account.  Additionally, you can get information about the service levels associated with each carrier account by passing in the `?service_levels=true` query parameter. <br> Using it appends the property `service_levels` to each carrier account. <br> By default, if the query parameter is omitted, the `service_levels` property will not be included in the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CarrierAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_levels = True; // bool | Appends the property `service_levels` to each returned carrier account
$carrier = new \OpenAPI\Client\Model\CarriersEnum(); // CarriersEnum | Filter the response by the specified carrier
$account_id = 'account_id_example'; // string | Filter the response by the specified carrier account Id
$page = 1; // int | The page number you want to select
$results = 5; // int | The number of results to return per page (max 100, default 5)
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->listCarrierAccounts($service_levels, $carrier, $account_id, $page, $results, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarrierAccountsApi->listCarrierAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_levels** | **bool**| Appends the property &#x60;service_levels&#x60; to each returned carrier account | [optional] |
| **carrier** | [**CarriersEnum**](../Model/.md)| Filter the response by the specified carrier | [optional] |
| **account_id** | **string**| Filter the response by the specified carrier account Id | [optional] |
| **page** | **int**| The page number you want to select | [optional] [default to 1] |
| **results** | **int**| The number of results to return per page (max 100, default 5) | [optional] [default to 5] |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\CarrierAccountPaginatedList**](../Model/CarrierAccountPaginatedList.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerCarrierAccount()`

```php
registerCarrierAccount($register_carrier_account_request, $shippo_api_version): \OpenAPI\Client\Model\CarrierAccount
```

Add a Shippo carrier account

Adds a Shippo carrier account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CarrierAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$register_carrier_account_request = new \OpenAPI\Client\Model\RegisterCarrierAccountRequest(); // \OpenAPI\Client\Model\RegisterCarrierAccountRequest | Examples.
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->registerCarrierAccount($register_carrier_account_request, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarrierAccountsApi->registerCarrierAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **register_carrier_account_request** | [**\OpenAPI\Client\Model\RegisterCarrierAccountRequest**](../Model/RegisterCarrierAccountRequest.md)| Examples. | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\CarrierAccount**](../Model/CarrierAccount.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCarrierAccount()`

```php
updateCarrierAccount($carrier_account_id, $shippo_api_version, $carrier_account_update_request): \OpenAPI\Client\Model\CarrierAccount
```

Update a carrier account

Updates an existing carrier account object. The account_id and carrier can't be updated. This is because they form the unique identifier together.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CarrierAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_account_id = 'carrier_account_id_example'; // string | Object ID of the carrier account
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use
$carrier_account_update_request = new \OpenAPI\Client\Model\CarrierAccountUpdateRequest(); // \OpenAPI\Client\Model\CarrierAccountUpdateRequest | Examples.

try {
    $result = $apiInstance->updateCarrierAccount($carrier_account_id, $shippo_api_version, $carrier_account_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarrierAccountsApi->updateCarrierAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **carrier_account_id** | **string**| Object ID of the carrier account | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |
| **carrier_account_update_request** | [**\OpenAPI\Client\Model\CarrierAccountUpdateRequest**](../Model/CarrierAccountUpdateRequest.md)| Examples. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CarrierAccount**](../Model/CarrierAccount.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
