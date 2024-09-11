# # Pickup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier_account** | **string** | The object ID of your USPS or DHL Express carrier account.  You can retrieve this from your Rate requests or our &lt;a href&#x3D;\&quot;#tag/Carrier-Accounts/\&quot;&gt;Carrier Accounts&lt;/a&gt; endpoint. |
**location** | [**\OpenAPI\Client\Model\Location**](Location.md) |  |
**metadata** | **string** | A string of up to 100 characters that can be filled with any additional information you  want to attach to the object. | [optional]
**requested_end_time** | **\DateTime** | The latest that you requested your parcels to be available for pickup.  Expressed in the timezone specified in the response. |
**requested_start_time** | **\DateTime** | The earliest that you requested your parcels to be ready for pickup.  Expressed in the timezone specified in the response. |
**transactions** | **string[]** | The transaction(s) object ID(s) for the parcel(s) that need to be picked up. |
**object_created** | **\DateTime** | Date and time of Pickup creation. | [optional]
**object_id** | **string** | Unique identifier of the given Pickup object. | [optional]
**object_updated** | **\DateTime** | Date and time of last Pickup update. | [optional]
**confirmed_start_time** | **string** | The earliest that your parcels will be ready for pickup, confirmed by the carrier.  Expressed in the timezone specified in the response. | [optional]
**confirmed_end_time** | **string** | The latest that your parcels will be available for pickup, confirmed by the carrier.  Expressed in the timezone specified in the response. | [optional]
**cancel_by_time** | **string** | The latest time to cancel a pickup. Expressed in the timezone specified in the response.  To cancel a pickup, you will need to contact the carrier directly.  The ability to cancel a pickup through Shippo may be released in future iterations. | [optional]
**status** | **string** | Indicates the status of the pickup. | [optional]
**confirmation_code** | **string** | Pickup&#39;s confirmation code returned by the carrier.  To edit or cancel a pickup, you will need to contact USPS or DHL Express directly and provide your &#x60;confirmation_code&#x60;. | [optional]
**timezone** | **string** | The pickup time windows will be in the time zone specified here, not UTC. | [optional]
**messages** | **string[]** | An array containing strings of any messages generated during validation. | [optional]
**is_test** | **bool** | Indicates whether the object has been created in test mode. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
