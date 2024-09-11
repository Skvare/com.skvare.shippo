# # Invoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object_id** | **string** | Unique identifier of the given Invoice object | [optional]
**object_created** | **\DateTime** | Date and time of Invoice creation. | [optional]
**object_updated** | **\DateTime** | Date and time of last Invoice update. | [optional]
**shippo_account** | **string** | Unique identifier of the user who the Invoice has been issued to. | [optional]
**invoice_number** | **string** | Human readable unique identifier of the given Invoice object that is displayed in the web app. | [optional]
**status** | [**\OpenAPI\Client\Model\InvoiceStatusEnum**](InvoiceStatusEnum.md) |  | [optional]
**invoice_closed** | **\DateTime** | Date and time of when the Invoice was posted and no new Invoice Items were added. Field will be null when invoice is still in the draft status. | [optional]
**invoice_paid_date** | **\DateTime** | Date and time of when the Invoice was successfully paid. Field will be null when invoice is not in the paid status. | [optional]
**total_invoiced** | [**\OpenAPI\Client\Model\AmountAndCurrencyInvoiced**](AmountAndCurrencyInvoiced.md) |  | [optional]
**total_charged** | [**\OpenAPI\Client\Model\AmountAndCurrencyCharged**](AmountAndCurrencyCharged.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
