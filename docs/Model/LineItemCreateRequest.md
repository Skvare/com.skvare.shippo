# # LineItemCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | **string** | Currency of the &lt;code&gt;total_price&lt;/code&gt; amount. | [optional]
**manufacture_country** | **string** | Country the item was manufactured in. In the Shippo dashboard, this value will be used ot pre-fill the customs declaration when creating a label for this order. | [optional]
**max_delivery_time** | **\DateTime** | The date and time this item needs to be delivered by, i.e. by when the carrier delivers it to the buyer.  This value is used by some platforms such as eBay to measure a seller&#39;s shipping time and performance.  It will be displayed in the Shippo dashboard. | [optional]
**max_ship_time** | **\DateTime** | The date and time this item needs to be fulfilled by, i.e. by when the shipping label needs to be  created and handed over to the carrier. This value is used by some platforms such as eBay to measure  a seller&#39;s handling time and performance. It will be displayed in the Shippo dashboard. | [optional]
**quantity** | **int** | The quantity of this item in this order. | [optional]
**sku** | **string** | The stock keeping unit value of this item. | [optional]
**title** | **string** | Title of the line item. | [optional]
**total_price** | **string** | Total price paid by the buyer for this item (or these items, if quantity &gt; 1). | [optional]
**variant_title** | **string** | A variant is a specific variation of an item (e.g. &#x60;size M&#x60; or &#x60;color blue&#x60;).  Variants might be exposed as a separate resource in the future too.  Currently the variant title is a free text field describing the variant. | [optional]
**weight** | **string** | Total weight of this/these item(s). Instead of specifying the weight of all items,  you can also set the &lt;code&gt;total_weight&lt;/code&gt; value of the order object. | [optional]
**weight_unit** | [**\OpenAPI\Client\Model\WeightUnitEnum**](WeightUnitEnum.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
