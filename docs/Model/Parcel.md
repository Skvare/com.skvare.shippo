# # Parcel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**extra** | [**\OpenAPI\Client\Model\ParcelExtra**](ParcelExtra.md) |  | [optional]
**metadata** | **string** |  | [optional]
**mass_unit** | [**\OpenAPI\Client\Model\WeightUnitEnum**](WeightUnitEnum.md) |  |
**weight** | **string** | Weight of the parcel. Up to six digits in front and four digits after the decimal separator are accepted. |
**distance_unit** | [**\OpenAPI\Client\Model\DistanceUnitEnum**](DistanceUnitEnum.md) | The measure unit used for length, width and height. |
**height** | **string** | Height of the parcel. Up to six digits in front and four digits after the decimal separator are accepted. |
**length** | **string** | Length of the Parcel. Up to six digits in front and four digits after the decimal separator are accepted. |
**width** | **string** | Width of the Parcel. Up to six digits in front and four digits after the decimal separator are accepted. |
**object_created** | **\DateTime** | Date and time of Parcel creation. | [optional]
**object_id** | **string** | Unique identifier of the given Parcel object. This ID is required to create a Shipment object. | [optional]
**object_owner** | **string** | Username of the user who created the Parcel object. | [optional]
**object_state** | **string** | A Parcel will only be valid when all required values have been sent and validated successfully. | [optional]
**object_updated** | **\DateTime** | Date and time of last Parcel update. Since you cannot update Parcels after they were created, this time stamp reflects the time when the Parcel was changed by Shippo&#39;s systems for the last time, e.g., during sorting the dimensions given. | [optional]
**template** | [**\OpenAPI\Client\Model\ParcelTemplateEnumSet**](ParcelTemplateEnumSet.md) |  | [optional]
**test** | **bool** | Indicates whether the object has been created in test mode. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
