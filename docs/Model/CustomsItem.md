# # CustomsItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Text description of your item. |
**eccn_ear99** | **string** | Export Control Classification Number, required on some exports from the United States. | [optional]
**mass_unit** | [**\OpenAPI\Client\Model\WeightUnitEnum**](WeightUnitEnum.md) |  |
**metadata** | **string** | A string of up to 100 characters that can be filled with any additional information you  want to attach to the object. | [optional]
**net_weight** | **string** | Total weight of this item, i.e. quantity * weight per item. |
**origin_country** | **string** | Country of origin of the item. Example: &#x60;US&#x60; or &#x60;DE&#x60;.  All accepted values can be found on the &lt;a href&#x3D;\&quot;http://www.iso.org/\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Official ISO Website&lt;/a&gt;. |
**quantity** | **int** | Quantity of this item in the shipment you send.  Must be greater than 0. |
**sku_code** | **string** | SKU code of the item, which is required by some carriers. | [optional]
**hs_code** | **string** | HS code of the item, which is required by some carriers. If &#x60;tariff_number&#x60; is not provided, &#x60;hs_code&#x60; will be used.  If both &#x60;hs_code&#x60; and &#x60;tariff_number&#x60; are provided, &#x60;tariff_number&#x60; will be used. 50 character limit. | [optional]
**tariff_number** | **string** | The tariff number of the item. If &#x60;tariff_number&#x60; is not provided, &#x60;hs_code&#x60; will be used. If both &#x60;hs_code&#x60; and &#x60;tariff_number&#x60; are provided, &#x60;tariff_number&#x60; will be used. 12 character limit. | [optional]
**value_amount** | **string** | Total value of this item, i.e. quantity * value per item. |
**value_currency** | **string** | Currency used for value_amount. The &lt;a href&#x3D;\&quot;http://www.xe.com/iso4217.php\&quot;&gt;official ISO 4217&lt;/a&gt;  currency codes are used, e.g.  &#x60;USD&#x60; or &#x60;EUR&#x60;. |
**object_created** | **\DateTime** | Date and time of object creation. | [optional]
**object_id** | **string** | Unique identifier of the given object. | [optional]
**object_owner** | **string** | Username of the user who created the object. | [optional]
**object_state** | [**\OpenAPI\Client\Model\ObjectStateEnum**](ObjectStateEnum.md) |  | [optional]
**object_updated** | **\DateTime** | Date and time of last object update. | [optional]
**test** | **bool** | Indicates whether the object has been created in test mode. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
