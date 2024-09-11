# # Shipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**extra** | [**\OpenAPI\Client\Model\ShipmentExtra**](ShipmentExtra.md) |  | [optional]
**metadata** | **string** | A string of up to 100 characters that can be filled with any additional information you want to attach to the object. | [optional]
**shipment_date** | **string** | Date the shipment will be tendered to the carrier. Must be in the format &#x60;2014-01-18T00:35:03.463Z&#x60;.  Defaults to current date and time if no value is provided. Please note that some carriers require this value to be in the future, on a working day, or similar. | [optional]
**address_from** | [**\OpenAPI\Client\Model\AddressFrom**](AddressFrom.md) |  |
**address_return** | [**\OpenAPI\Client\Model\AddressReturn**](AddressReturn.md) |  | [optional]
**address_to** | [**\OpenAPI\Client\Model\AddressTo**](AddressTo.md) |  |
**carrier_accounts** | **string[]** | An array of object_ids of the carrier account objects to be used for getting shipping rates for this shipment.  If no carrier account object_ids are set in this field, Shippo will attempt to generate rates using all the  carrier accounts that have the &#x60;active&#x60; field set. |
**customs_declaration** | [**\OpenAPI\Client\Model\CustomsDeclaration**](CustomsDeclaration.md) |  | [optional]
**messages** | [**\OpenAPI\Client\Model\ResponseMessage[]**](ResponseMessage.md) |  |
**object_created** | **\DateTime** | Date and time of Shipment creation. |
**object_id** | **string** | Unique identifier of the given Shipment object. |
**object_owner** | **string** | Username of the user who created the Shipment object. |
**object_updated** | **\DateTime** | Date and time of last Shipment update. |
**parcels** | [**\OpenAPI\Client\Model\Parcel[]**](Parcel.md) | List of Parcel objects to be shipped. |
**rates** | [**\OpenAPI\Client\Model\Rate[]**](Rate.md) | An array with all available rates. If &lt;code&gt;async&lt;/code&gt; has been set to &lt;code&gt;false&lt;/code&gt; in the request, this will be populated with all available rates in the response. Otherwise rates will be created asynchronously and this array will initially be empty. |
**status** | **string** | &#x60;Waiting&#x60; shipments have been successfully submitted but not yet been processed.  &#x60;Queued&#x60; shipments are currently being processed.  &#x60;Success&#x60; shipments have been processed successfully, meaning that rate generation has concluded.  &#x60;Error&#x60; does not occur currently and is reserved for future use. |
**test** | **bool** | Indicates whether the object has been created in test mode. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
