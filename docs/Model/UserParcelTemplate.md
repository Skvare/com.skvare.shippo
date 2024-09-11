# # UserParcelTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**distance_unit** | [**\OpenAPI\Client\Model\DistanceUnitEnum**](DistanceUnitEnum.md) | The measure unit used for length, width and height. Required, but if using a preset carrier template then this field must be empty. | [optional]
**height** | **string** | The height of the package, in units specified by the &#x60;distance_unit&#x60; attribute. Required, but if using a preset carrier template then this field must be empty. | [optional]
**length** | **string** | The length of the package, in units specified by the &#x60;distance_unit&#x60; attribute. Required, but if using a preset carrier template then this field must be empty. | [optional]
**name** | **string** | The name of the User Parcel Template | [optional]
**weight** | **string** | The weight of the package, in units specified by the weight_unit attribute. | [optional]
**weight_unit** | [**\OpenAPI\Client\Model\WeightUnitEnum**](WeightUnitEnum.md) |  | [optional]
**width** | **string** | The width of the package, in units specified by the &#x60;distance_unit&#x60; attribute. Required, but if using a preset carrier template then this field must be empty. | [optional]
**object_created** | **\DateTime** | Date and time of User Parcel Template creation | [optional]
**object_id** | **string** | Unique identifier of the given User Parcel Template object | [optional]
**object_owner** | **string** | Username of the user who created the User Parcel Template object | [optional]
**object_updated** | **\DateTime** | Date and time of last update on User Parcel Template | [optional]
**template** | [**\OpenAPI\Client\Model\CarrierParcelTemplate**](CarrierParcelTemplate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
