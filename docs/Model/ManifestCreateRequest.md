# # ManifestCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier_account** | **string** | ID of carrier account |
**shipment_date** | **string** | All shipments to be submitted on this day will be closed out.  Must be in the format &#x60;2014-01-18T00:35:03.463Z&#x60; (ISO 8601 date). |
**transactions** | **string[]** | IDs transactions to use. If you set this to null or not send this parameter,  Shippo will automatically assign all applicable transactions. | [optional]
**address_from** | [**\OpenAPI\Client\Model\ManifestCreateRequestAllOfAddressFrom**](ManifestCreateRequestAllOfAddressFrom.md) |  |
**async** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
