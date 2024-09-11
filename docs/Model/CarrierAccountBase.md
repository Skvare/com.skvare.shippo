# # CarrierAccountBase

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Unique identifier of the account. Please check the &lt;a href&#x3D;\&quot;https://docs.goshippo.com/docs/carriers/carrieraccounts/\&quot;&gt;carrier accounts tutorial&lt;/a&gt;  page for the &#x60;account_id&#x60; per carrier.&lt;br&gt;  To protect account information, this field will be masked in any API response. |
**active** | **bool** | Determines whether the account is active. When creating a shipment, if no &#x60;carrier_accounts&#x60; are explicitly  passed Shippo will query all carrier accounts that have this field set. By default, this is set to True. | [optional]
**carrier** | **string** | Carrier token, see &lt;a href&#x3D;\&quot;#tag/Carriers\&quot;&gt;Carriers&lt;/a&gt;&lt;br&gt; Please check the &lt;a href&#x3D;\&quot;https://docs.goshippo.com/docs/carriers/carrieraccounts/\&quot;&gt;carrier accounts tutorial&lt;/a&gt; page for all supported carriers. |
**parameters** | [**\OpenAPI\Client\Model\ConnectExistingOwnAccountRequestParameters**](ConnectExistingOwnAccountRequestParameters.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
