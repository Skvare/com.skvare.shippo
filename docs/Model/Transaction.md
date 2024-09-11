# # Transaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**commercial_invoice_url** | **string** | A URL pointing to the commercial invoice as a 8.5x11 inch PDF file.  A value will only be returned if the Transactions has been processed successfully and if the shipment is international. | [optional]
**created_by** | [**\OpenAPI\Client\Model\TransactionCreatedBy**](TransactionCreatedBy.md) |  | [optional]
**eta** | **string** | The estimated time of arrival according to the carrier. | [optional]
**label_file_type** | [**\OpenAPI\Client\Model\LabelFileTypeEnum**](LabelFileTypeEnum.md) |  | [optional]
**label_url** | **string** | A URL pointing directly to the label in the format you&#39;ve set in your settings.  A value will only be returned if the Transactions has been processed successfully. | [optional]
**messages** | [**\OpenAPI\Client\Model\ResponseMessage[]**](ResponseMessage.md) |  | [optional]
**metadata** | **string** | A string of up to 100 characters that can be filled with any additional information you want to  attach to the object. | [optional]
**object_created** | **\DateTime** | Date and time of Transaction creation. | [optional]
**object_id** | **string** | Unique identifier of the given Transaction object. | [optional]
**object_owner** | **string** | Username of the user who created the Transaction object. | [optional]
**object_state** | [**\OpenAPI\Client\Model\ObjectStateEnum**](ObjectStateEnum.md) |  | [optional]
**object_updated** | **\DateTime** | Date and time of last Transaction update. | [optional]
**parcel** | **string** | Object ID of the Parcel object that is being shipped. | [optional]
**qr_code_url** | **string** | A URL pointing directly to the QR code in PNG format.  A value will only be returned if requested using qr_code_requested flag and the carrier provides such an option. | [optional]
**rate** | [**\OpenAPI\Client\Model\TransactionRate**](TransactionRate.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\TransactionStatusEnum**](TransactionStatusEnum.md) |  | [optional]
**test** | **bool** | Indicates whether the object has been created in test mode. | [optional]
**tracking_number** | **string** | The carrier-specific tracking number that can be used to track the Shipment.  A value will only be returned if the Rate is for a trackable Shipment and if the Transactions has been processed successfully. | [optional]
**tracking_status** | [**\OpenAPI\Client\Model\TrackingStatusEnum**](TrackingStatusEnum.md) |  | [optional]
**tracking_url_provider** | **string** | A link to track this item on the carrier-provided tracking website.  A value will only be returned if tracking is available and the carrier provides such a service. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
