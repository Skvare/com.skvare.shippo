# # Batch

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_carrier_account** | **string** | ID of the Carrier Account object to use as the default for all shipments in this Batch.  The carrier account can be changed on a per-shipment basis by changing the carrier_account in the  corresponding BatchShipment object. |
**default_servicelevel_token** | **string** | Token of the service level to use as the default for all shipments in this Batch.  The servicelevel can be changed on a per-shipment basis by changing the servicelevel_token in the  corresponding BatchShipment object. &lt;a href&#x3D;\&quot;#tag/Service-Levels\&quot;&gt;Servicelevel tokens can be found here.&lt;/a&gt; |
**label_filetype** | [**\OpenAPI\Client\Model\LabelFileTypeEnum**](LabelFileTypeEnum.md) |  | [optional]
**metadata** | **string** | A string of up to 100 characters that can be filled with any additional information you want to attach to the object. | [optional]
**batch_shipments** | [**\OpenAPI\Client\Model\BatchShipmentPaginatedList**](BatchShipmentPaginatedList.md) |  |
**label_url** | **string[]** | An array of URLs each pointing to a merged file of 100 labels each |
**object_created** | **string** | Date and time of Batch creation |
**object_id** | **string** | Unique identifier of the given Batch object |
**object_owner** | **string** | Username of the user who created the Address object. |
**object_results** | [**\OpenAPI\Client\Model\BatchAllOfObjectResults**](BatchAllOfObjectResults.md) |  |
**object_updated** | **string** | Date and time of last update to the Batch |
**status** | **string** | Batches that are &#x60;VALIDATING&#x60; are being created and validated&lt;br&gt; &#x60;VALID&#x60; batches can be purchased&lt;br&gt; &#x60;INVALID&#x60; batches cannot be purchased, &#x60;INVALID&#x60; BatchShipments must be removed&lt;br&gt; Batches that are in the &#x60;PURCHASING&#x60; state are being purchased&lt;br&gt; &#x60;PURCHASED&#x60; batches are finished purchasing. |
**test** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
