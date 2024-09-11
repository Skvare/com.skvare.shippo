# # UPSCreateNewOwnAccountParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_address_city** | **string** |  |
**billing_address_country_iso2** | **string** |  |
**billing_address_state** | **string** |  |
**billing_address_street1** | **string** |  |
**billing_address_street2** | **string** | Empty string acceptable for billing_address_street2 | [optional]
**billing_address_zip** | **string** |  |
**company** | **string** | Company name. Full name is acceptable in this field if the user has no company name |
**email** | **string** |  |
**full_name** | **string** |  |
**phone** | **string** |  |
**pickup_address_city** | **string** | User&#39;s pickup address city. Only required if pickup_address_same_as_billing_address is false | [optional]
**pickup_address_country_iso2** | **string** | User&#39;s pickup street 1. Only required if pickup_address_same_as_billing_address is false | [optional]
**pickup_address_same_as_billing_address** | **bool** |  |
**pickup_address_state** | **string** | User&#39;s pickup address state. Only required if pickup_address_same_as_billing_address is false | [optional]
**pickup_address_street1** | **string** | User&#39;s pickup address street 1. Only required if pickup_address_same_as_billing_address is false | [optional]
**pickup_address_street2** | **string** | User&#39;s pickup street 2. Only used if pickup_address_same_as_billing_address is false, empty string acceptable | [optional]
**pickup_address_zip** | **string** | User&#39;s pickup address zip code. Only required if pickup_address_same_as_billing_address is false | [optional]
**ups_agreements** | **bool** | Whether the user agrees to the UPS terms and conditions or not. Error 400 will be returned if passed in as false |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
