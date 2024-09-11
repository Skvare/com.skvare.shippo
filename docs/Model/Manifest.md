# # Manifest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier_account** | **string** | ID of carrier account |
**shipment_date** | **string** | All shipments to be submitted on this day will be closed out.  Must be in the format &#x60;2014-01-18T00:35:03.463Z&#x60; (ISO 8601 date). |
**transactions** | **string[]** | IDs transactions to use. If you set this to null or not send this parameter,  Shippo will automatically assign all applicable transactions. | [optional]
**address_from** | **string** | ID of the Address object that should be used as pickup address for the scan form.  The USPS will validate this address before creating the scan form. |
**documents** | **string[]** | An array containing the URLs to all returned manifest documents. |
**errors** | **string[]** | An array of codes and messages describing the error that occurred if any. | [optional]
**object_created** | **\DateTime** | Date and time of object creation. |
**object_id** | **string** | Unique identifier of the given object. |
**object_owner** | **string** | Username of the user who created the object. |
**object_updated** | **\DateTime** | Date and time of last object update. |
**status** | **string** | Indicates the status of the manifest. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
