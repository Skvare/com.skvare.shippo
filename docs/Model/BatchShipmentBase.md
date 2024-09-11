# # BatchShipmentBase

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier_account** | **string** | Object ID of the carrier account to be used for this shipment (will override batch default) | [optional]
**metadata** | **string** | A string of up to 100 characters that can be filled with any additional information you want  to attach to the object. | [optional]
**servicelevel_token** | **string** | A token that sets the shipping method for the batch, overriding the batch default.  Servicelevel tokens can be found &lt;a href&#x3D;\&quot;#tag/Service-Levels\&quot;&gt;in this list&lt;/a&gt;  or &lt;a href&#x3D;\&quot;#operation/ListCarrierAccounts\&quot;&gt;at this endpoint&lt;/a&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
