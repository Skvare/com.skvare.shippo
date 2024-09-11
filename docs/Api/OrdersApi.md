# OpenAPI\Client\OrdersApi

All URIs are relative to https://api.goshippo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrder()**](OrdersApi.md#createOrder) | **POST** /orders | Create a new order |
| [**getOrder()**](OrdersApi.md#getOrder) | **GET** /orders/{OrderId} | Retrieve an order |
| [**listOrders()**](OrdersApi.md#listOrders) | **GET** /orders | List all orders |


## `createOrder()`

```php
createOrder($order_create_request, $shippo_api_version): \OpenAPI\Client\Model\Order
```

Create a new order

Creates a new order object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_create_request = new \OpenAPI\Client\Model\OrderCreateRequest(); // \OpenAPI\Client\Model\OrderCreateRequest | Order details.
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->createOrder($order_create_request, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_create_request** | [**\OpenAPI\Client\Model\OrderCreateRequest**](../Model/OrderCreateRequest.md)| Order details. | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\Order**](../Model/Order.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($order_id, $shippo_api_version): \OpenAPI\Client\Model\Order
```

Retrieve an order

Retrieves an existing order using an object ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Object ID of the order
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->getOrder($order_id, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Object ID of the order | |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |

### Return type

[**\OpenAPI\Client\Model\Order**](../Model/Order.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrders()`

```php
listOrders($page, $results, $shippo_api_version, $order_status, $shop_app, $start_date, $end_date): \OpenAPI\Client\Model\OrderPaginatedList
```

List all orders

Returns a list of all order objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The page number you want to select
$results = 25; // int | The number of results to return per page (max 100)
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use
$order_status = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderStatusEnum()); // \OpenAPI\Client\Model\OrderStatusEnum[] | Filter orders by order status
$shop_app = new \OpenAPI\Client\Model\OrderShopAppEnum(); // OrderShopAppEnum | Filter orders by shop app
$start_date = 'start_date_example'; // string | Filter orders created after the input date and time (ISO 8601 UTC format).  This is based on the  `placed_at` field, meaning when the order has been placed, not when the order object was created.
$end_date = 'end_date_example'; // string | Filter orders created before the input date and time (ISO 8601 UTC format).  This is based on the  `placed_at` field, meaning when the order has been placed, not when the order object was created.

try {
    $result = $apiInstance->listOrders($page, $results, $shippo_api_version, $order_status, $shop_app, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->listOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The page number you want to select | [optional] [default to 1] |
| **results** | **int**| The number of results to return per page (max 100) | [optional] [default to 25] |
| **shippo_api_version** | **string**| String used to pick a non-default API version to use | [optional] |
| **order_status** | [**\OpenAPI\Client\Model\OrderStatusEnum[]**](../Model/\OpenAPI\Client\Model\OrderStatusEnum.md)| Filter orders by order status | [optional] |
| **shop_app** | [**OrderShopAppEnum**](../Model/.md)| Filter orders by shop app | [optional] |
| **start_date** | **string**| Filter orders created after the input date and time (ISO 8601 UTC format).  This is based on the  &#x60;placed_at&#x60; field, meaning when the order has been placed, not when the order object was created. | [optional] |
| **end_date** | **string**| Filter orders created before the input date and time (ISO 8601 UTC format).  This is based on the  &#x60;placed_at&#x60; field, meaning when the order has been placed, not when the order object was created. | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrderPaginatedList**](../Model/OrderPaginatedList.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
