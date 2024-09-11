# # BatchShipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier_account** | **string** | Object ID of the carrier account to be used for this shipment (will override batch default) | [optional]
**metadata** | **string** | A string of up to 100 characters that can be filled with any additional information you want  to attach to the object. | [optional]
**servicelevel_token** | **string** | A token that sets the shipping method for the batch, overriding the batch default.  Servicelevel tokens can be found &lt;a href&#x3D;\&quot;#tag/Service-Levels\&quot;&gt;in this list&lt;/a&gt;  or &lt;a href&#x3D;\&quot;#operation/ListCarrierAccounts\&quot;&gt;at this endpoint&lt;/a&gt;. | [optional]
**messages** | **string[]** | List of Shipment and Transaction error messages. | [optional]
**object_id** | **string** | Object ID of this batch shipment. Can be used in the remove_shipments endpoint. |
**shipment** | **string** | Object ID of the shipment object created for this batch shipment. |
**status** | **string** | &#x60;INVALID&#x60; batch shipments cannot be purchased and will have to be removed, fixed, and added to the batch again.&lt;br&gt; &#x60;VALID&#x60; batch shipments can be purchased. &lt;br&gt; Batch shipments with the status &#x60;TRANSACTION_FAILED&#x60; were not able to be purchased and the error will be displayed on the message field&lt;br&gt;  &#x60;INCOMPLETE&#x60; batch shipments have an issue with the Address and will need to be removed, fixed, and added to the batch again. |
**transaction** | **string** | Object ID of the transaction object created for this batch shipment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
