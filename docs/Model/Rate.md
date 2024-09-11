# # Rate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Final Rate price, expressed in the currency used in the sender&#39;s country. | [optional]
**amount_local** | **string** | Final Rate price, expressed in the currency used in the recipient&#39;s country. | [optional]
**currency** | **string** | Currency used in the sender&#39;s country, refers to &#x60;amount&#x60;.  The &lt;a href&#x3D;\&quot;http://www.xe.com/iso4217.php\&quot;&gt;official ISO 4217&lt;/a&gt; currency codes are used, e.g. &#x60;USD&#x60; or &#x60;EUR&#x60;. | [optional]
**currency_local** | **string** | Currency used in the recipient&#39;s country, refers to &#x60;amount_local&#x60;.  The &lt;a href&#x3D;\&quot;http://www.xe.com/iso4217.php\&quot;&gt;official ISO 4217&lt;/a&gt; currency codes are used, e.g. &#x60;USD&#x60; or \&quot;EUR\&quot;. | [optional]
**arrives_by** | **string** | Predicted time the carrier will deliver the package in the destination&#39;s local time zone. In the format &#x60;HH:MM:SS&#x60;. | [optional]
**attributes** | **string[]** | An array containing specific attributes of this Rate in context of the entire shipment.  Attributes can be assigned &#x60;CHEAPEST&#x60;, &#x60;FASTEST&#x60;, or &#x60;BESTVALUE&#x60;. |
**carrier_account** | **string** | Object ID of the carrier account that has been used to retrieve the rate. |
**duration_terms** | **string** | Further clarification of the transit times.  Often, this includes notes that the transit time as given in \&quot;days\&quot; is only an average, not a guaranteed time. | [optional]
**estimated_days** | **int** | Estimated transit time (duration) in days of the Parcel at the given servicelevel.  Please note that this is not binding, but only an average value as given by the provider.  Shippo is not able to guarantee any transit times. | [optional]
**included_insurance_price** | **string** | Cost to the user to insure the Rate for the requested amount of coverage, if insurance coverage was requested.  Expressed in the currency used in the sender&#39;s country. Will be null if no insurance coverage was requested, or if insurance is requested from a non-standard insurance provider.  Please note this price is already included in the &#x60;amount&#x60; and &#x60;amount_local&#x60; fields on the Rate. Do not add this field to them. | [optional]
**messages** | [**\OpenAPI\Client\Model\ResponseMessage[]**](ResponseMessage.md) |  | [optional]
**object_created** | **\DateTime** | Date and time of Rate creation. |
**object_id** | **string** | Unique identifier of the given Rate object. |
**object_owner** | **string** | Username of the user who created the rate object. |
**provider** | **string** | Carrier offering the rate, e.g., &#x60;FedEx&#x60; or &#x60;Deutsche Post DHL&#x60;. |
**provider_image_75** | **string** | URL to the provider logo with max. dimensions of 75*75px.  Please refer to the provider&#39;s Logo Usage Guidelines before using the logo. | [optional]
**provider_image_200** | **string** | URL to the provider logo with max. dimensions of 200*200px.  Please refer to the provider&#39;s Logo Usage Guidelines before using the logo. | [optional]
**servicelevel** | [**\OpenAPI\Client\Model\ServiceLevelWithParent**](ServiceLevelWithParent.md) |  |
**shipment** | **string** |  |
**test** | **bool** | Indicates whether the object has been created in test mode. | [optional]
**zone** | **string** | The parcel&#39;s transit zone token. These tokens can vary depending on the provider. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
