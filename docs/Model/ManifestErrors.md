# # ManifestErrors

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**generic_carrier_error** | **string** | There is an error from the carrier that requires investigation. Please contact support with the object ID of this response. | [optional]
**carrier_account_invalid_credentials** | **string** | The carrier account contains invalid credentials. Please update your carrier account with valid credentials. | [optional]
**carrier_account_access_denied** | **string** | There is an issue with your carrier account. Please contact support with the information of your account manager at the carrier and the object ID of this response. | [optional]
**manifest_invalid_transactions** | **string** | For this carrier, all shipments must be manifested on the same day that they are created regardless of shipment date. | [optional]
**manifest_no_transactions** | **string** | There are no shipments in the manifest. Please check that the shipment date of the shipments matches the shipment date of the manifest. | [optional]
**address_from_missing_zip** | **string** | The sender address is missing the zip. Please update the sender address and try again. | [optional]
**address_from_invalid_zip1** | **string** | The sender address contains an invalid zip. Please update the sender address and try again. | [optional]
**address_from_invalid_zip2** | **string** | The sender address contains an invalid zip. Please update the sender address and try again. You can also try removing the last 4 digits of the zip. | [optional]
**address_from_missing_city** | **string** | The sender address is missing the city. Please update the sender address and try again. | [optional]
**address_from_invalid_city** | **string** | The sender address contains an invalid city. Please update the sender address and try again. | [optional]
**address_from_missing_state** | **string** | The sender address is missing the state. Please update the sender address and try again. | [optional]
**address_from_invalid_state** | **string** | The sender address contains an invalid state. Please update the sender address and try again. | [optional]
**address_from_missing_name** | **string** | The sender address is missing the name. Please update the sender address and try again. | [optional]
**shipment_date_missing** | **string** | The shipment date is missing. Please update the shipment date and try again. | [optional]
**shipment_date_invalid** | **string** | The shipment date is invalid. Please update the shipment date and try again. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
