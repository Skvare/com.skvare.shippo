# # CoreRate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Final Rate price, expressed in the currency used in the sender&#39;s country. | [optional]
**amount_local** | **string** | Final Rate price, expressed in the currency used in the recipient&#39;s country. | [optional]
**currency** | **string** | Currency used in the sender&#39;s country, refers to &#x60;amount&#x60;.  The &lt;a href&#x3D;\&quot;http://www.xe.com/iso4217.php\&quot;&gt;official ISO 4217&lt;/a&gt; currency codes are used, e.g. &#x60;USD&#x60; or &#x60;EUR&#x60;. | [optional]
**currency_local** | **string** | Currency used in the recipient&#39;s country, refers to &#x60;amount_local&#x60;.  The &lt;a href&#x3D;\&quot;http://www.xe.com/iso4217.php\&quot;&gt;official ISO 4217&lt;/a&gt; currency codes are used, e.g. &#x60;USD&#x60; or \&quot;EUR\&quot;. | [optional]
**object_id** | **string** | Unique identifier of the Rate object. | [optional]
**provider** | **string** | Carrier offering the rate, e.g., &#x60;FedEx&#x60; or &#x60;Deutsche Post DHL&#x60;. | [optional]
**carrier_account** | **string** | Object ID of the carrier account that has been used to retrieve the rate. | [optional]
**servicelevel_name** | **string** | Service level name, e.g. &#x60;Priority Mail&#x60; or &#x60;FedEx Ground®&#x60;.  A service level commonly defines the transit time of a Shipment (e.g., Express vs. Standard),  along with other properties.  These names vary depending on the provider.&lt;br&gt; See &lt;a href&#x3D;\&quot;#tag/Service-Levels\&quot;&gt;Service Levels&lt;/a&gt;. | [optional]
**servicelevel_token** | **string** | Token of the Rate&#39;s servicelevel, e.g. &#x60;usps_priority&#x60; or &#x60;fedex_ground&#x60;. See &lt;a href&#x3D;\&quot;#tag/Service-Levels\&quot;&gt;servicelevels&lt;/a&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
