# # ShipmentCreateRequestAllOfAddressReturn

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | **required for purchase**&lt;br&gt; First and Last Name of the addressee | [optional]
**company** | **string** | Company Name | [optional]
**street1** | **string** | **required for purchase**&lt;br&gt; First street line, 35 character limit. Usually street number and street name (except for DHL Germany, see street_no). | [optional]
**street2** | **string** | Second street line, 35 character limit. | [optional]
**street3** | **string** | Third street line, 35 character limit.  Only accepted for USPS international shipments, UPS domestic and UPS international shipments. | [optional]
**street_no** | **string** | Street number of the addressed building.  This field can be included in street1 for all carriers except for DHL Germany. | [optional]
**city** | **string** | **required for purchase**&lt;br&gt; Name of a city. When creating a Quote Address, sending a city is optional but will yield more accurate Rates.  Please bear in mind that city names may be ambiguous (there are 34 Springfields in the US). Pass in a state  or a ZIP code (see below), if known, it will yield more accurate results. | [optional]
**state** | **string** | **required for purchase for some countries**&lt;br&gt; State/Province values are required for shipments from/to the US, AU, and CA. UPS requires province for some  countries (i.e Ireland). To receive more accurate quotes, passing this field is recommended. Most carriers  only accept two or three character state abbreviations. | [optional]
**zip** | **string** | **required for purchase**&lt;br&gt; Postal code of an Address. When creating a Quote Addresses, sending a ZIP is optional but will yield more  accurate Rates. | [optional]
**country** | **string** | ISO 3166-1 alpha-2 country codes and country names can be used. For most consistent results, we reccomend using country codes like &#x60;US&#x60; or &#x60;DE&#x60;. If using country names, please ensure they are spelled correctly and in English. Country names are converted to country codes. Refer to this &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements\&quot; target&#x3D;\&quot;_blank\&quot;&gt;guide&lt;/a&gt; for a list of country codes. Sending a country is always required. | [optional]
**phone** | **string** | Addresses containing a phone number allow carriers to call the recipient when delivering the Parcel. This  increases the probability of delivery and helps to avoid accessorial charges after a Parcel has been shipped. | [optional]
**email** | **string** | E-mail address of the contact person, RFC3696/5321-compliant. | [optional]
**is_residential** | **bool** |  | [optional]
**metadata** | **string** | A string of up to 100 characters that can be filled with any additional information you want  to attach to the object. | [optional]
**validate** | **bool** | Set to true to validate Address object. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
