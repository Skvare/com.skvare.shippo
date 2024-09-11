# # CustomsDeclarationCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aes_itn** | **string** | **required if eel_pfc is &#x60;AES_ITN&#x60;**&lt;br&gt; AES / ITN reference of the shipment. | [optional]
**b13a_filing_option** | [**\OpenAPI\Client\Model\CustomsDeclarationB13AFilingOptionEnum**](CustomsDeclarationB13AFilingOptionEnum.md) |  | [optional]
**b13a_number** | **string** | **must be provided if and only if b13a_filing_option is provided**&lt;br&gt; Represents:&lt;br&gt; the Proof of Report (POR) Number when b13a_filing_option is &#x60;FILED_ELECTRONICALLY&#x60;;&lt;br&gt;  the Summary ID Number when b13a_filing_option is &#x60;SUMMARY_REPORTING&#x60;;&lt;br&gt;  or the Exemption Number when b13a_filing_option is &#x60;NOT_REQUIRED&#x60;. | [optional]
**certificate** | **string** | Certificate reference of the shipment. | [optional]
**certify** | **bool** | Expresses that the certify_signer has provided all information of this customs declaration truthfully. |
**certify_signer** | **string** | Name of the person who created the customs declaration and is responsible for the validity of all  information provided. |
**commercial_invoice** | **bool** |  | [optional]
**contents_explanation** | **string** | **required if contents_type is &#x60;OTHER&#x60;**&lt;br&gt; Explanation of the type of goods of the shipment. | [optional]
**disclaimer** | **string** | Disclaimer for the shipment and customs information that have been provided. | [optional]
**duties_payor** | [**\OpenAPI\Client\Model\CustomsDeclarationBaseDutiesPayor**](CustomsDeclarationBaseDutiesPayor.md) |  | [optional]
**exporter_identification** | [**\OpenAPI\Client\Model\CustomsExporterIdentification**](CustomsExporterIdentification.md) |  | [optional]
**exporter_reference** | **string** | Exporter reference of an export shipment. | [optional]
**importer_reference** | **string** | Importer reference of an import shipment. | [optional]
**is_vat_collected** | **bool** | Indicates whether the shipment&#39;s destination VAT has been collected. May be required for some destinations. | [optional]
**invoice** | **string** | Invoice reference of the shipment. | [optional]
**license** | **string** | License reference of the shipment. | [optional]
**metadata** | **string** | A string of up to 100 characters that can be filled with any additional information you  want to attach to the object. | [optional]
**notes** | **string** | Additional notes to be included in the customs declaration. | [optional]
**address_importer** | [**\OpenAPI\Client\Model\AddressImporter**](AddressImporter.md) |  | [optional]
**contents_type** | [**\OpenAPI\Client\Model\CustomsDeclarationContentsTypeEnum**](CustomsDeclarationContentsTypeEnum.md) |  | [optional]
**eel_pfc** | [**\OpenAPI\Client\Model\CustomsDeclarationEelPfcEnum**](CustomsDeclarationEelPfcEnum.md) |  | [optional]
**incoterm** | [**\OpenAPI\Client\Model\CustomsDeclarationIncotermEnum**](CustomsDeclarationIncotermEnum.md) |  | [optional]
**items** | [**\OpenAPI\Client\Model\CustomsItemCreateRequest[]**](CustomsItemCreateRequest.md) |  |
**non_delivery_option** | [**\OpenAPI\Client\Model\CustomsDeclarationNonDeliveryOptionEnum**](CustomsDeclarationNonDeliveryOptionEnum.md) |  | [optional]
**test** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
