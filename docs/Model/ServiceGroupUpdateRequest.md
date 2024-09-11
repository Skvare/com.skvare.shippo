# # ServiceGroupUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Description for the service group |
**flat_rate** | **string** | String representation of an amount to be returned as the flat rate if 1. The service group is of type &#x60;LIVE_RATE&#x60; and no matching rates were found; or 2. The service group is of type &#x60;FLAT_RATE&#x60;. Either integers or decimals are accepted. Required unless type is &#x60;FREE_SHIPPING&#x60; | [optional]
**flat_rate_currency** | **string** | required unless type is &#x60;FREE_SHIPPING&#x60;. (ISO 4217 currency) | [optional]
**free_shipping_threshold_currency** | **string** | optional unless type is &#x60;FREE_SHIPPING&#x60;. (ISO 4217 currency) | [optional]
**free_shipping_threshold_min** | **string** | For service groups of type &#x60;FREE_SHIPPING&#x60;, this field must be required to configure the minimum  cart total (total cost of items in the cart) for this service group to be returned for rates at  checkout. Optional unless type is &#x60;FREE_SHIPPING&#x60; | [optional]
**name** | **string** | Name for the service group that will be shown to customers in the response |
**rate_adjustment** | **int** | The amount in percent (%) that the service group&#39;s returned rate should be adjusted. For example, if this field is set to 5 and the matched rate price is $5.00, the returned value of the service group will be $5.25. Negative integers are also accepted and will discount the rate price by the defined percentage amount. | [optional]
**type** | [**\OpenAPI\Client\Model\ServiceGroupTypeEnum**](ServiceGroupTypeEnum.md) |  |
**object_id** | **string** | The unique identifier of the given Service Group object. |
**is_active** | **bool** | True if the service group is enabled, false otherwise. |
**service_levels** | [**\OpenAPI\Client\Model\ServiceGroupAccountAndServiceLevel[]**](ServiceGroupAccountAndServiceLevel.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
