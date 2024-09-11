# # InvoiceNumber

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**prefix** | **string** | Custom prefix for invoice number field (ZPL labels only). Up to 11 characters, including trailing  spaces. Empty string indicates removal of default prefix. To use the default prefix, do not include this property. | [optional]
**value** | **string** | Optional text to be printed on the shipping label for invoice number. Up to 40 characters. If  provided, this will be used on the label instead of shipment.customs_declaration.invoice. | [optional]
**ref_sort** | **int** | Order UPS reference fields are printed on ZPL labels. For UPS shipments, if you choose to set &#x60;ref_sort&#x60; for one reference, you must set &#x60;ref_sort&#x60; for all other supported UPS references using unique integers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
