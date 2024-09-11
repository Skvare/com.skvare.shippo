# # CustomsDeclaration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aes_itn** | **string** | **required if eel_pfc is &#x60;AES_ITN&#x60;**&lt;br&gt; AES / ITN reference of the shipment. | [optional]
**b13a_filing_option** | **string** | B13A Option details are obtained by filing a B13A Canada Export Declaration via the Canadian Export Reporting System (CERS).  &lt;a href&#x3D;\&quot;https://www.cbsa-asfc.gc.ca/services/export/guide-eng.html\&quot; target&#x3D;\&quot;_blank\&quot; rel&#x3D;\&quot;noopener noreferrer\&quot;&gt; More information on reporting commercial exports from Canada. &lt;/a&gt; Allowed values available &lt;a href&#x3D;\&quot;#tag/Customs-Declaration-B13A-Filing-Option\&quot;&gt;here&lt;/a&gt; | [optional]
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
**address_importer** | **string** | Object ID of the Importer address. | [optional]
**contents_type** | **string** | Type of goods of the shipment.   Allowed values available &lt;a href&#x3D;\&quot;#tag/Customs-Declaration-Contents-Type\&quot;&gt;here&lt;/a&gt; | [optional]
**eel_pfc** | **string** | EEL / PFC type of the shipment. For most shipments from the US to CA, &#x60;NOEEI_30_36&#x60; is applicable; for most  other shipments from the US, &#x60;NOEEI_30_37_a&#x60; is applicable. Allowed values available &lt;a href&#x3D;\&quot;#tag/Customs-Declaration-EELPFC\&quot;&gt;here&lt;/a&gt; | [optional]
**incoterm** | **string** | The incoterm reference of the shipment. FCA is available for DHL Express and FedEx only.  eDAP is available for DPD UK only. DAP is available for DHL Express and DPD UK. If expecting DAP for other carriers, please use DDU. Allowed values available &lt;a href&#x3D;\&quot;#tag/Customs-Declaration-Incoterm\&quot;&gt;here&lt;/a&gt; | [optional]
**invoiced_charges** | [**\OpenAPI\Client\Model\CustomsInvoicedCharges**](CustomsInvoicedCharges.md) |  | [optional]
**items** | **string[]** | Distinct Parcel content items as Customs Items object_ids. |
**non_delivery_option** | **string** | Indicates how the carrier should proceed in case the shipment can&#39;t be delivered. Allowed values available &lt;a href&#x3D;\&quot;#tag/Customs-Declaration-Non-Delivery-Option\&quot;&gt;here&lt;/a&gt; | [optional]
**object_created** | **\DateTime** | Date and time of object creation. | [optional]
**object_id** | **string** | Unique identifier of the given object. | [optional]
**object_owner** | **string** | Username of the user who created the object. | [optional]
**object_state** | [**\OpenAPI\Client\Model\ObjectStateEnum**](ObjectStateEnum.md) |  | [optional]
**object_updated** | **\DateTime** | Date and time of last object update. | [optional]
**test** | **bool** | Indicates whether the object has been created in test mode. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
