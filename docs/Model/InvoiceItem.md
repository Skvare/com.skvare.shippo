# # InvoiceItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object_id** | **string** | Unique identifier of the given Invoice Item object. | [optional]
**object_created** | **\DateTime** | Date and time of Invoice Item creation. | [optional]
**object_updated** | **\DateTime** | Date and time of last Invoice Item update. | [optional]
**shippo_account** | **string** | Unique identifier of the user who the Invoice Item has been issued to. | [optional]
**type** | [**\OpenAPI\Client\Model\InvoiceItemTypesEnum**](InvoiceItemTypesEnum.md) |  | [optional]
**description** | **string** | Additional information about what the Invoice Item is for. | [optional]
**amount** | **string** | The money amount that the Invoice Item represents. | [optional]
**currency** | **string** | The currency that &#39;amount&#39; is in. The official ISO 4217 currency codes are used, e.g. \&quot;USD\&quot; or \&quot;EUR\&quot;. &lt;a href&#x3D;\&quot;http://www.xe.com/iso4217.php\&quot; target&#x3D;\&quot;blank\&quot;&gt;ISO 4217 Standard&lt;/a&gt;. | [optional]
**charge_conversion** | [**\OpenAPI\Client\Model\ConversionAmount**](ConversionAmount.md) |  | [optional]
**invoice** | **string** | Unique identifier of the Invoice that the Invoice Item belongs to. | [optional]
**transaction** | **string** | Unique identifier of the Transaction that the Invoice Item represents. Not all Invoice Items are linked to a transaction. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
