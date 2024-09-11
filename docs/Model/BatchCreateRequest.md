# # BatchCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_carrier_account** | **string** | ID of the Carrier Account object to use as the default for all shipments in this Batch.  The carrier account can be changed on a per-shipment basis by changing the carrier_account in the  corresponding BatchShipment object. |
**default_servicelevel_token** | **string** | Token of the service level to use as the default for all shipments in this Batch.  The servicelevel can be changed on a per-shipment basis by changing the servicelevel_token in the  corresponding BatchShipment object. &lt;a href&#x3D;\&quot;#tag/Service-Levels\&quot;&gt;Servicelevel tokens can be found here.&lt;/a&gt; |
**label_filetype** | [**\OpenAPI\Client\Model\LabelFileTypeEnum**](LabelFileTypeEnum.md) |  | [optional]
**metadata** | **string** | A string of up to 100 characters that can be filled with any additional information you want to attach to the object. | [optional]
**batch_shipments** | [**\OpenAPI\Client\Model\BatchShipmentCreateRequest[]**](BatchShipmentCreateRequest.md) | Array of BatchShipment objects. The response keeps the same order as in the request array. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
