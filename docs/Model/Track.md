# # Track

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_from** | [**\OpenAPI\Client\Model\TrackingStatusFromLocation**](TrackingStatusFromLocation.md) |  | [optional]
**address_to** | [**\OpenAPI\Client\Model\TrackingStatusToLocation**](TrackingStatusToLocation.md) |  | [optional]
**carrier** | **string** | Name of the carrier of the shipment to track. See &lt;a href&#x3D;\&quot;#tag/Carriers\&quot;&gt;Carriers&lt;/a&gt;. |
**eta** | **\DateTime** | The estimated time of arrival according to the carrier, this might be updated by carriers during the life of the shipment. | [optional]
**messages** | **string[]** |  |
**metadata** | **string** | A string of up to 100 characters that can be filled with any additional information you want to attach to the object. | [optional]
**original_eta** | **\DateTime** | The estimated time of arrival according to the carrier at the time the shipment first entered the system. | [optional]
**servicelevel** | [**\OpenAPI\Client\Model\ServiceLevelWithParent**](ServiceLevelWithParent.md) |  | [optional]
**tracking_history** | [**\OpenAPI\Client\Model\TrackingStatus[]**](TrackingStatus.md) | A list of tracking events, following the same structure as &lt;code&gt;tracking_status&lt;/code&gt;.  It contains a full history of all tracking statuses, starting with the earlier tracking event first. |
**tracking_number** | **string** | Tracking number to track. |
**tracking_status** | [**\OpenAPI\Client\Model\TrackingStatus**](TrackingStatus.md) |  | [optional]
**transaction** | **string** | The &lt;code&gt;object_id&lt;/code&gt; of the transaction associated with this tracking object.  This field is visible only to the object owner of the transaction. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
