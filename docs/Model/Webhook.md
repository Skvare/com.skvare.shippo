# # Webhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event** | **string** | Type of event that triggers the webhook. |
**url** | **string** | URL webhook events are sent to. |
**active** | **bool** | Determines whether the webhook is active or not. | [optional]
**is_test** | **bool** | Determines whether the webhook is a test webhook or not. | [optional]
**object_created** | **\DateTime** | Timestamp of the creation of the webhook. | [optional]
**object_id** | **string** | Unique identifier of the webhook. This can be used to retrieve or delete the webhook. | [optional]
**object_updated** | **\DateTime** | Timestamp of the last update of the webhook. | [optional]
**object_owner** | **string** | Username of the user who created the webhook. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
