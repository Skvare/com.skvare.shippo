# # Billing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | **string** | Account number to be billed. (For DHL Germany, leave this field blank.) | [optional]
**country** | **string** | Country iso2 code of account number to be billed (required for UPS third party billing only). | [optional]
**participation_code** | **string** | 2 digit code used to override your default participation code associated with your DHL Germany account. | [optional]
**type** | **string** | Party to be billed. (Leave blank for DHL Germany.) | [optional]
**zip** | **string** | ZIP code of account number to be billed (required for UPS if there is a zip on the billing account). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
