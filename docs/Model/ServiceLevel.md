# # ServiceLevel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the Rate&#39;s servicelevel, e.g. &#x60;International Priority&#x60; or &#x60;Standard Post&#x60;.  A servicelevel commonly defines the transit time of a Shipment (e.g., Express vs. Standard), along with other properties.  These names vary depending on the provider. | [optional]
**terms** | **string** | Further clarification of the service. | [optional]
**token** | **string** | Token of the Rate&#39;s servicelevel, e.g. &#x60;usps_priority&#x60; or &#x60;fedex_ground&#x60;.  See &lt;a href&#x3D;\&quot;#tag/Service-Levels\&quot;&gt;servicelevels&lt;/a&gt;. | [optional]
**extended_token** | **string** | Unique, extended version of the Service Level \&quot;token\&quot;.  Guaranteed to be unique across all Service Levels, and may help offer insight into the specific Service Level it describes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
