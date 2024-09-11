# # PickupCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier_account** | **string** | The object ID of your USPS or DHL Express carrier account.  You can retrieve this from your Rate requests or our &lt;a href&#x3D;\&quot;#tag/Carrier-Accounts/\&quot;&gt;Carrier Accounts&lt;/a&gt; endpoint. |
**location** | [**\OpenAPI\Client\Model\Location**](Location.md) |  |
**metadata** | **string** | A string of up to 100 characters that can be filled with any additional information you  want to attach to the object. | [optional]
**requested_end_time** | **\DateTime** | The latest that you requested your parcels to be available for pickup.  Expressed in the timezone specified in the response. |
**requested_start_time** | **\DateTime** | The earliest that you requested your parcels to be ready for pickup.  Expressed in the timezone specified in the response. |
**transactions** | **string[]** | The transaction(s) object ID(s) for the parcel(s) that need to be picked up. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)