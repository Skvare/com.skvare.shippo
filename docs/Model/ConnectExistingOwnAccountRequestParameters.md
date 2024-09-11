# # ConnectExistingOwnAccountRequestParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | First name of the account holder |
**last_name** | **string** | Last name of the account holder |
**phone_number** | **string** | Phone number of the account holder |
**from_address_st** | **string** | Street address of the account holder |
**from_address_city** | **string** | City of the account holder |
**from_address_state** | **string** | State of the account holder |
**from_address_zip** | **string** | Zip code of the account holder |
**from_address_country_iso2** | **string** | Country of the account holder |
**account_number** | **string** | The UPS account number |
**aia_country_iso2** | **string** | Only required if has_invoice is true. Country associated with the account that issued the invoice | [optional]
**billing_address_city** | **string** |  |
**billing_address_country_iso2** | **string** |  |
**billing_address_state** | **string** |  |
**billing_address_street1** | **string** |  |
**billing_address_street2** | **string** | Empty string acceptable for billing_address_street2 | [optional]
**billing_address_zip** | **string** |  |
**collec_country_iso2** | **string** |  |
**collec_zip** | **string** | Zip code of the collection/pickup address |
**company** | **string** | Company name. Full name is acceptable in this field if the user has no company name |
**currency_code** | **string** | Only required if has_invoice is true. 3-letter currency code associated with invoice_value | [optional]
**email** | **string** |  |
**full_name** | **string** |  |
**has_invoice** | **bool** | true if user has been issued a UPS invoice within the past 90 days for the US or Canada; and 45 days for any other countries. User can use data from any of the last 3 invoices |
**invoice_controlid** | **string** | Only required if aia_country_iso2 is US and has_invoice is true. | [optional]
**invoice_date** | **string** | Only required if has_invoice is true. Date the invoice was issued. yyyymmdd format | [optional]
**invoice_number** | **string** |  | [optional]
**invoice_value** | **string** | Only required if has_invoice is true. Max 16 digits before decimal and 2 digits after decimal | [optional]
**phone** | **string** |  |
**title** | **string** | User&#39;s title, e.g. including but not limited to Manager, Doctor, Artist, Engineer, Mr, Ms, Mrs, Mx |
**ups_agreements** | **bool** | Whether the user agrees to the UPS terms and conditions or not. Error 400 will be returned if passed in as false |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
