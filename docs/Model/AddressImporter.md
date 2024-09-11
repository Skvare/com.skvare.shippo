# # AddressImporter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | First and Last Name of the addressee | [optional]
**company** | **string** | Company Name | [optional]
**street1** | **string** | First street line, 35 character limit. Usually street number and street name (except for DHL Germany, see street_no). | [optional]
**street2** | **string** | Second street line, 35 character limit. | [optional]
**street3** | **string** | Third street line, 35 character limit.  Only accepted for USPS international shipments, UPS domestic and UPS international shipments. | [optional]
**street_no** | **string** | Street number of the addressed building.  This field can be included in street1 for all carriers except for DHL Germany. | [optional]
**city** | **string** | Name of a city | [optional]
**state** | **string** | **required for purchase for some countries**&lt;br&gt; State/Province values are required for shipments from/to the US, AU, and CA. UPS requires province for some  countries (i.e Ireland). To receive more accurate quotes, passing this field is recommended. Most carriers  only accept two or three character state abbreviations. | [optional]
**zip** | **string** | Postal code of an Address. | [optional]
**country** | **string** | Example: &#x60;US&#x60; or &#x60;DE&#x60;. All accepted values can be found on the  &lt;a href&#x3D;\&quot;http://www.iso.org/\&quot; target&#x3D;\&quot;blank\&quot;&gt;Official ISO Website&lt;/a&gt;. Sending a country is always required. | [optional]
**phone** | **string** | Addresses containing a phone number allow carriers to call the recipient when delivering the Parcel. This  increases the probability of delivery and helps to avoid accessorial charges after a Parcel has been shipped. | [optional]
**email** | **string** | E-mail address of the contact person, RFC3696/5321-compliant. | [optional]
**is_residential** | **bool** | Indicates whether the address provided is a residential address or not. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
