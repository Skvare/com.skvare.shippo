# OpenAPIClient-php

Use this API to integrate with the Shippo service

For more information, please visit [https://goshippo.com/contact/](https://goshippo.com/contact/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_create_request = new \OpenAPI\Client\Model\AddressCreateRequest(); // \OpenAPI\Client\Model\AddressCreateRequest | Address details.
$shippo_api_version = 2018-02-08; // string | String used to pick a non-default API version to use

try {
    $result = $apiInstance->createAddress($address_create_request, $shippo_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->createAddress: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.goshippo.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddressesApi* | [**createAddress**](docs/Api/AddressesApi.md#createaddress) | **POST** /addresses | Create a new address
*AddressesApi* | [**getAddress**](docs/Api/AddressesApi.md#getaddress) | **GET** /addresses/{AddressId} | Retrieve an address
*AddressesApi* | [**listAddresses**](docs/Api/AddressesApi.md#listaddresses) | **GET** /addresses | List all addresses
*AddressesApi* | [**validateAddress**](docs/Api/AddressesApi.md#validateaddress) | **GET** /addresses/{AddressId}/validate | Validate an address
*BatchesApi* | [**addShipmentsToBatch**](docs/Api/BatchesApi.md#addshipmentstobatch) | **POST** /batches/{BatchId}/add_shipments | Add shipments to a batch
*BatchesApi* | [**createBatch**](docs/Api/BatchesApi.md#createbatch) | **POST** /batches | Create a batch
*BatchesApi* | [**getBatch**](docs/Api/BatchesApi.md#getbatch) | **GET** /batches/{BatchId} | Retrieve a batch
*BatchesApi* | [**purchaseBatch**](docs/Api/BatchesApi.md#purchasebatch) | **POST** /batches/{BatchId}/purchase | Purchase a batch
*BatchesApi* | [**removeShipmentsFromBatch**](docs/Api/BatchesApi.md#removeshipmentsfrombatch) | **POST** /batches/{BatchId}/remove_shipments | Remove shipments from a batch
*CarrierAccountsApi* | [**createCarrierAccount**](docs/Api/CarrierAccountsApi.md#createcarrieraccount) | **POST** /carrier_accounts | Create a new carrier account
*CarrierAccountsApi* | [**getCarrierAccount**](docs/Api/CarrierAccountsApi.md#getcarrieraccount) | **GET** /carrier_accounts/{CarrierAccountId} | Retrieve a carrier account
*CarrierAccountsApi* | [**getCarrierRegistrationStatus**](docs/Api/CarrierAccountsApi.md#getcarrierregistrationstatus) | **GET** /carrier_accounts/reg-status | Get Carrier Registration status
*CarrierAccountsApi* | [**initiateOauth2Signin**](docs/Api/CarrierAccountsApi.md#initiateoauth2signin) | **GET** /carrier_accounts/{CarrierAccountObjectId}/signin/initiate | Connect an existing carrier account using OAuth 2.0
*CarrierAccountsApi* | [**listCarrierAccounts**](docs/Api/CarrierAccountsApi.md#listcarrieraccounts) | **GET** /carrier_accounts | List all carrier accounts
*CarrierAccountsApi* | [**registerCarrierAccount**](docs/Api/CarrierAccountsApi.md#registercarrieraccount) | **POST** /carrier_accounts/register/new | Add a Shippo carrier account
*CarrierAccountsApi* | [**updateCarrierAccount**](docs/Api/CarrierAccountsApi.md#updatecarrieraccount) | **PUT** /carrier_accounts/{CarrierAccountId} | Update a carrier account
*CarrierParcelTemplatesApi* | [**getCarrierParcelTemplate**](docs/Api/CarrierParcelTemplatesApi.md#getcarrierparceltemplate) | **GET** /parcel-templates/{CarrierParcelTemplateToken} | Retrieve a carrier parcel templates
*CarrierParcelTemplatesApi* | [**listCarrierParcelTemplates**](docs/Api/CarrierParcelTemplatesApi.md#listcarrierparceltemplates) | **GET** /parcel-templates | List all carrier parcel templates
*CustomsDeclarationsApi* | [**createCustomsDeclaration**](docs/Api/CustomsDeclarationsApi.md#createcustomsdeclaration) | **POST** /customs/declarations | Create a new customs declaration
*CustomsDeclarationsApi* | [**getCustomsDeclaration**](docs/Api/CustomsDeclarationsApi.md#getcustomsdeclaration) | **GET** /customs/declarations/{CustomsDeclarationId} | Retrieve a customs declaration
*CustomsDeclarationsApi* | [**listCustomsDeclarations**](docs/Api/CustomsDeclarationsApi.md#listcustomsdeclarations) | **GET** /customs/declarations | List all customs declarations
*CustomsItemsApi* | [**createCustomsItem**](docs/Api/CustomsItemsApi.md#createcustomsitem) | **POST** /customs/items | Create a new customs item
*CustomsItemsApi* | [**getCustomsItem**](docs/Api/CustomsItemsApi.md#getcustomsitem) | **GET** /customs/items/{CustomsItemId} | Retrieve a customs item
*CustomsItemsApi* | [**listCustomsItems**](docs/Api/CustomsItemsApi.md#listcustomsitems) | **GET** /customs/items | List all customs items
*ManifestsApi* | [**createManifest**](docs/Api/ManifestsApi.md#createmanifest) | **POST** /manifests | Create a new manifest
*ManifestsApi* | [**getManifest**](docs/Api/ManifestsApi.md#getmanifest) | **GET** /manifests/{ManifestId} | Retrieve a manifest
*ManifestsApi* | [**listManifests**](docs/Api/ManifestsApi.md#listmanifests) | **GET** /manifests | List all manifests
*OrdersApi* | [**createOrder**](docs/Api/OrdersApi.md#createorder) | **POST** /orders | Create a new order
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /orders/{OrderId} | Retrieve an order
*OrdersApi* | [**listOrders**](docs/Api/OrdersApi.md#listorders) | **GET** /orders | List all orders
*ParcelsApi* | [**createParcel**](docs/Api/ParcelsApi.md#createparcel) | **POST** /parcels | Create a new parcel
*ParcelsApi* | [**getParcel**](docs/Api/ParcelsApi.md#getparcel) | **GET** /parcels/{ParcelId} | Retrieve an existing parcel
*ParcelsApi* | [**listParcels**](docs/Api/ParcelsApi.md#listparcels) | **GET** /parcels | List all parcels
*PickupsApi* | [**createPickup**](docs/Api/PickupsApi.md#createpickup) | **POST** /pickups | Create a pickup
*RatesApi* | [**getRate**](docs/Api/RatesApi.md#getrate) | **GET** /rates/{RateId} | Retrieve a rate
*RatesApi* | [**listShipmentRates**](docs/Api/RatesApi.md#listshipmentrates) | **GET** /shipments/{ShipmentId}/rates | Retrieve shipment rates
*RatesApi* | [**listShipmentRatesByCurrencyCode**](docs/Api/RatesApi.md#listshipmentratesbycurrencycode) | **GET** /shipments/{ShipmentId}/rates/{CurrencyCode} | Retrieve shipment rates in currency
*RatesAtCheckoutApi* | [**createLiveRate**](docs/Api/RatesAtCheckoutApi.md#createliverate) | **POST** /live-rates | Generate a live rates request
*RatesAtCheckoutApi* | [**deleteDefaultParcelTemplate**](docs/Api/RatesAtCheckoutApi.md#deletedefaultparceltemplate) | **DELETE** /live-rates/settings/parcel-template | Clear current default parcel template
*RatesAtCheckoutApi* | [**getDefaultParcelTemplate**](docs/Api/RatesAtCheckoutApi.md#getdefaultparceltemplate) | **GET** /live-rates/settings/parcel-template | Show current default parcel template
*RatesAtCheckoutApi* | [**updateDefaultParcelTemplate**](docs/Api/RatesAtCheckoutApi.md#updatedefaultparceltemplate) | **PUT** /live-rates/settings/parcel-template | Update default parcel template
*RefundsApi* | [**createRefund**](docs/Api/RefundsApi.md#createrefund) | **POST** /refunds | Create a refund
*RefundsApi* | [**getRefund**](docs/Api/RefundsApi.md#getrefund) | **GET** /refunds/{RefundId} | Retrieve a refund
*RefundsApi* | [**listRefunds**](docs/Api/RefundsApi.md#listrefunds) | **GET** /refunds/ | List all refunds
*ServiceGroupsApi* | [**createServiceGroup**](docs/Api/ServiceGroupsApi.md#createservicegroup) | **POST** /service-groups | Create a new service group
*ServiceGroupsApi* | [**deleteServiceGroup**](docs/Api/ServiceGroupsApi.md#deleteservicegroup) | **DELETE** /service-groups/{ServiceGroupId} | Delete a service group
*ServiceGroupsApi* | [**listServiceGroups**](docs/Api/ServiceGroupsApi.md#listservicegroups) | **GET** /service-groups | List all service groups
*ServiceGroupsApi* | [**updateServiceGroup**](docs/Api/ServiceGroupsApi.md#updateservicegroup) | **PUT** /service-groups | Update an existing service group
*ShipmentsApi* | [**createShipment**](docs/Api/ShipmentsApi.md#createshipment) | **POST** /shipments | Create a new shipment
*ShipmentsApi* | [**getShipment**](docs/Api/ShipmentsApi.md#getshipment) | **GET** /shipments/{ShipmentId} | Retrieve a shipment
*ShipmentsApi* | [**listShipments**](docs/Api/ShipmentsApi.md#listshipments) | **GET** /shipments | List all shipments
*ShippoAccountsApi* | [**createShippoAccount**](docs/Api/ShippoAccountsApi.md#createshippoaccount) | **POST** /shippo-accounts | Create a Shippo Account
*ShippoAccountsApi* | [**getShippoAccount**](docs/Api/ShippoAccountsApi.md#getshippoaccount) | **GET** /shippo-accounts/{ShippoAccountId} | Retrieve a Shippo Account
*ShippoAccountsApi* | [**listShippoAccounts**](docs/Api/ShippoAccountsApi.md#listshippoaccounts) | **GET** /shippo-accounts | List all Shippo Accounts
*ShippoAccountsApi* | [**updateShippoAccount**](docs/Api/ShippoAccountsApi.md#updateshippoaccount) | **PUT** /shippo-accounts/{ShippoAccountId} | Update a Shippo Account
*TrackingStatusApi* | [**createTrack**](docs/Api/TrackingStatusApi.md#createtrack) | **POST** /tracks | Register a tracking webhook
*TrackingStatusApi* | [**getTrack**](docs/Api/TrackingStatusApi.md#gettrack) | **GET** /tracks/{Carrier}/{TrackingNumber} | Get a tracking status
*TransactionsApi* | [**createTransaction**](docs/Api/TransactionsApi.md#createtransaction) | **POST** /transactions | Create a shipping label
*TransactionsApi* | [**getTransaction**](docs/Api/TransactionsApi.md#gettransaction) | **GET** /transactions/{TransactionId} | Retrieve a shipping label
*TransactionsApi* | [**listTransactions**](docs/Api/TransactionsApi.md#listtransactions) | **GET** /transactions | List all shipping labels
*UserParcelTemplatesApi* | [**createUserParcelTemplate**](docs/Api/UserParcelTemplatesApi.md#createuserparceltemplate) | **POST** /user-parcel-templates | Create a new user parcel template
*UserParcelTemplatesApi* | [**deleteUserParcelTemplate**](docs/Api/UserParcelTemplatesApi.md#deleteuserparceltemplate) | **DELETE** /user-parcel-templates/{UserParcelTemplateObjectId} | Delete a user parcel template
*UserParcelTemplatesApi* | [**getUserParcelTemplate**](docs/Api/UserParcelTemplatesApi.md#getuserparceltemplate) | **GET** /user-parcel-templates/{UserParcelTemplateObjectId} | Retrieves a user parcel template
*UserParcelTemplatesApi* | [**listUserParcelTemplates**](docs/Api/UserParcelTemplatesApi.md#listuserparceltemplates) | **GET** /user-parcel-templates | List all user parcel templates
*UserParcelTemplatesApi* | [**updateUserParcelTemplate**](docs/Api/UserParcelTemplatesApi.md#updateuserparceltemplate) | **PUT** /user-parcel-templates/{UserParcelTemplateObjectId} | Update an existing user parcel template
*WebhooksApi* | [**createWebhook**](docs/Api/WebhooksApi.md#createwebhook) | **POST** /webhooks | Create a new webhook
*WebhooksApi* | [**deleteWebhook**](docs/Api/WebhooksApi.md#deletewebhook) | **DELETE** /webhooks/{webhookId} | Delete a specific webhook
*WebhooksApi* | [**getWebhook**](docs/Api/WebhooksApi.md#getwebhook) | **GET** /webhooks/{webhookId} | Retrieve a specific webhook
*WebhooksApi* | [**listWebhooks**](docs/Api/WebhooksApi.md#listwebhooks) | **GET** /webhooks | List all webhooks
*WebhooksApi* | [**updateWebhook**](docs/Api/WebhooksApi.md#updatewebhook) | **PUT** /webhooks/{webhookId} | Update an existing webhook

## Models

- [Address](docs/Model/Address.md)
- [AddressAllOfLatitude](docs/Model/AddressAllOfLatitude.md)
- [AddressAllOfLongitude](docs/Model/AddressAllOfLongitude.md)
- [AddressBase](docs/Model/AddressBase.md)
- [AddressCompleteCreateRequest](docs/Model/AddressCompleteCreateRequest.md)
- [AddressCreateRequest](docs/Model/AddressCreateRequest.md)
- [AddressFrom](docs/Model/AddressFrom.md)
- [AddressFromCreateRequest](docs/Model/AddressFromCreateRequest.md)
- [AddressImporter](docs/Model/AddressImporter.md)
- [AddressImporterResponse](docs/Model/AddressImporterResponse.md)
- [AddressPaginatedList](docs/Model/AddressPaginatedList.md)
- [AddressPickupCompleteCreateRequest](docs/Model/AddressPickupCompleteCreateRequest.md)
- [AddressReturn](docs/Model/AddressReturn.md)
- [AddressTo](docs/Model/AddressTo.md)
- [AddressToCreateRequest](docs/Model/AddressToCreateRequest.md)
- [AddressValidationResults](docs/Model/AddressValidationResults.md)
- [AddressValidationResultsMessage](docs/Model/AddressValidationResultsMessage.md)
- [AddressValidationResultsMessageCodeEnum](docs/Model/AddressValidationResultsMessageCodeEnum.md)
- [AddressValidationResultsMessageSourceEnum](docs/Model/AddressValidationResultsMessageSourceEnum.md)
- [Alcohol](docs/Model/Alcohol.md)
- [AmountAndCurrencyCharged](docs/Model/AmountAndCurrencyCharged.md)
- [AmountAndCurrencyInvoiced](docs/Model/AmountAndCurrencyInvoiced.md)
- [Batch](docs/Model/Batch.md)
- [BatchAllOfObjectResults](docs/Model/BatchAllOfObjectResults.md)
- [BatchBase](docs/Model/BatchBase.md)
- [BatchCreateRequest](docs/Model/BatchCreateRequest.md)
- [BatchShipment](docs/Model/BatchShipment.md)
- [BatchShipmentBase](docs/Model/BatchShipmentBase.md)
- [BatchShipmentCreateRequest](docs/Model/BatchShipmentCreateRequest.md)
- [BatchShipmentPaginatedList](docs/Model/BatchShipmentPaginatedList.md)
- [Billing](docs/Model/Billing.md)
- [COD](docs/Model/COD.md)
- [CarrierAccount](docs/Model/CarrierAccount.md)
- [CarrierAccountBase](docs/Model/CarrierAccountBase.md)
- [CarrierAccountCanadaPostCreateParameters](docs/Model/CarrierAccountCanadaPostCreateParameters.md)
- [CarrierAccountCanadaPostCreateRequest](docs/Model/CarrierAccountCanadaPostCreateRequest.md)
- [CarrierAccountChronopostCreateRequest](docs/Model/CarrierAccountChronopostCreateRequest.md)
- [CarrierAccountColissimoCreateRequest](docs/Model/CarrierAccountColissimoCreateRequest.md)
- [CarrierAccountCorreosCreateRequest](docs/Model/CarrierAccountCorreosCreateRequest.md)
- [CarrierAccountDHLExpressCreateRequest](docs/Model/CarrierAccountDHLExpressCreateRequest.md)
- [CarrierAccountDHLExpressCreateRequestParameters](docs/Model/CarrierAccountDHLExpressCreateRequestParameters.md)
- [CarrierAccountDPDUKCreateRequest](docs/Model/CarrierAccountDPDUKCreateRequest.md)
- [CarrierAccountDeutschePostCreateRequest](docs/Model/CarrierAccountDeutschePostCreateRequest.md)
- [CarrierAccountDpdDeCreateRequest](docs/Model/CarrierAccountDpdDeCreateRequest.md)
- [CarrierAccountFedExCreateRequest](docs/Model/CarrierAccountFedExCreateRequest.md)
- [CarrierAccountHermesUKCreateRequest](docs/Model/CarrierAccountHermesUKCreateRequest.md)
- [CarrierAccountMondialRelayCreateRequest](docs/Model/CarrierAccountMondialRelayCreateRequest.md)
- [CarrierAccountPaginatedList](docs/Model/CarrierAccountPaginatedList.md)
- [CarrierAccountPosteItalianeCreateRequest](docs/Model/CarrierAccountPosteItalianeCreateRequest.md)
- [CarrierAccountRegistrationStatus](docs/Model/CarrierAccountRegistrationStatus.md)
- [CarrierAccountSendleCreateRequest](docs/Model/CarrierAccountSendleCreateRequest.md)
- [CarrierAccountServiceLevel](docs/Model/CarrierAccountServiceLevel.md)
- [CarrierAccountUPSCreateRequest](docs/Model/CarrierAccountUPSCreateRequest.md)
- [CarrierAccountUPSCreateRequestParameters](docs/Model/CarrierAccountUPSCreateRequestParameters.md)
- [CarrierAccountUSPSCreateRequest](docs/Model/CarrierAccountUSPSCreateRequest.md)
- [CarrierAccountUpdateRequest](docs/Model/CarrierAccountUpdateRequest.md)
- [CarrierAccountWithExtraInfo](docs/Model/CarrierAccountWithExtraInfo.md)
- [CarrierAccountWithExtraInfoAllOfObjectInfo](docs/Model/CarrierAccountWithExtraInfoAllOfObjectInfo.md)
- [CarrierAccountWithExtraInfoAllOfObjectInfoAuthentication](docs/Model/CarrierAccountWithExtraInfoAllOfObjectInfoAuthentication.md)
- [CarrierParcelTemplate](docs/Model/CarrierParcelTemplate.md)
- [CarrierParcelTemplateList](docs/Model/CarrierParcelTemplateList.md)
- [CarriersEnum](docs/Model/CarriersEnum.md)
- [ConnectExistingOwnAccountRequest](docs/Model/ConnectExistingOwnAccountRequest.md)
- [ConnectExistingOwnAccountRequestParameters](docs/Model/ConnectExistingOwnAccountRequestParameters.md)
- [ConversionAmount](docs/Model/ConversionAmount.md)
- [CoreRate](docs/Model/CoreRate.md)
- [CreateNewOwnUPSAccountRequest](docs/Model/CreateNewOwnUPSAccountRequest.md)
- [CreateParcelRequest](docs/Model/CreateParcelRequest.md)
- [CreateTransactionRequest](docs/Model/CreateTransactionRequest.md)
- [CustomerReference](docs/Model/CustomerReference.md)
- [CustomsDeclaration](docs/Model/CustomsDeclaration.md)
- [CustomsDeclarationB13AFilingOptionEnum](docs/Model/CustomsDeclarationB13AFilingOptionEnum.md)
- [CustomsDeclarationBase](docs/Model/CustomsDeclarationBase.md)
- [CustomsDeclarationBaseDutiesPayor](docs/Model/CustomsDeclarationBaseDutiesPayor.md)
- [CustomsDeclarationBaseDutiesPayorAddress](docs/Model/CustomsDeclarationBaseDutiesPayorAddress.md)
- [CustomsDeclarationContentsTypeEnum](docs/Model/CustomsDeclarationContentsTypeEnum.md)
- [CustomsDeclarationCreateRequest](docs/Model/CustomsDeclarationCreateRequest.md)
- [CustomsDeclarationEelPfcEnum](docs/Model/CustomsDeclarationEelPfcEnum.md)
- [CustomsDeclarationIncotermEnum](docs/Model/CustomsDeclarationIncotermEnum.md)
- [CustomsDeclarationNonDeliveryOptionEnum](docs/Model/CustomsDeclarationNonDeliveryOptionEnum.md)
- [CustomsDeclarationPaginatedList](docs/Model/CustomsDeclarationPaginatedList.md)
- [CustomsExporterIdentification](docs/Model/CustomsExporterIdentification.md)
- [CustomsInvoicedCharges](docs/Model/CustomsInvoicedCharges.md)
- [CustomsItem](docs/Model/CustomsItem.md)
- [CustomsItemBase](docs/Model/CustomsItemBase.md)
- [CustomsItemCreateRequest](docs/Model/CustomsItemCreateRequest.md)
- [CustomsItemPaginatedList](docs/Model/CustomsItemPaginatedList.md)
- [CustomsTaxIdentification](docs/Model/CustomsTaxIdentification.md)
- [DangerousGoodsBiologicalMaterial](docs/Model/DangerousGoodsBiologicalMaterial.md)
- [DangerousGoodsLithiumBatteries](docs/Model/DangerousGoodsLithiumBatteries.md)
- [DangerousGoodsObject](docs/Model/DangerousGoodsObject.md)
- [DefaultParcelTemplate](docs/Model/DefaultParcelTemplate.md)
- [DefaultParcelTemplateUpdateRequest](docs/Model/DefaultParcelTemplateUpdateRequest.md)
- [DepartmentNumber](docs/Model/DepartmentNumber.md)
- [DistanceUnitEnum](docs/Model/DistanceUnitEnum.md)
- [DryIce](docs/Model/DryIce.md)
- [FedExConnectExistingOwnAccountParameters](docs/Model/FedExConnectExistingOwnAccountParameters.md)
- [InitiateOauth2Signin400Response](docs/Model/InitiateOauth2Signin400Response.md)
- [InitiateOauth2Signin401Response](docs/Model/InitiateOauth2Signin401Response.md)
- [InitiateOauth2Signin404Response](docs/Model/InitiateOauth2Signin404Response.md)
- [InstantTransactionCreateRequest](docs/Model/InstantTransactionCreateRequest.md)
- [Insurance](docs/Model/Insurance.md)
- [Invoice](docs/Model/Invoice.md)
- [InvoiceItem](docs/Model/InvoiceItem.md)
- [InvoiceItemPaginatedList](docs/Model/InvoiceItemPaginatedList.md)
- [InvoiceItemTypesEnum](docs/Model/InvoiceItemTypesEnum.md)
- [InvoiceNumber](docs/Model/InvoiceNumber.md)
- [InvoicePaginatedList](docs/Model/InvoicePaginatedList.md)
- [InvoiceStatusEnum](docs/Model/InvoiceStatusEnum.md)
- [LabelFileTypeEnum](docs/Model/LabelFileTypeEnum.md)
- [LineItem](docs/Model/LineItem.md)
- [LineItemBase](docs/Model/LineItemBase.md)
- [LineItemCreateRequest](docs/Model/LineItemCreateRequest.md)
- [LiveRate](docs/Model/LiveRate.md)
- [LiveRateCreateRequest](docs/Model/LiveRateCreateRequest.md)
- [LiveRateCreateRequestAddressFrom](docs/Model/LiveRateCreateRequestAddressFrom.md)
- [LiveRateCreateRequestAddressTo](docs/Model/LiveRateCreateRequestAddressTo.md)
- [LiveRateCreateRequestParcel](docs/Model/LiveRateCreateRequestParcel.md)
- [LiveRatePaginatedList](docs/Model/LiveRatePaginatedList.md)
- [Location](docs/Model/Location.md)
- [Manifest](docs/Model/Manifest.md)
- [ManifestBase](docs/Model/ManifestBase.md)
- [ManifestCreateRequest](docs/Model/ManifestCreateRequest.md)
- [ManifestCreateRequestAllOfAddressFrom](docs/Model/ManifestCreateRequestAllOfAddressFrom.md)
- [ManifestErrors](docs/Model/ManifestErrors.md)
- [ManifestPaginatedList](docs/Model/ManifestPaginatedList.md)
- [ObjectStateEnum](docs/Model/ObjectStateEnum.md)
- [Order](docs/Model/Order.md)
- [OrderBase](docs/Model/OrderBase.md)
- [OrderCreateRequest](docs/Model/OrderCreateRequest.md)
- [OrderPaginatedList](docs/Model/OrderPaginatedList.md)
- [OrderShopAppEnum](docs/Model/OrderShopAppEnum.md)
- [OrderStatusEnum](docs/Model/OrderStatusEnum.md)
- [PaginatedList](docs/Model/PaginatedList.md)
- [Parcel](docs/Model/Parcel.md)
- [ParcelBase](docs/Model/ParcelBase.md)
- [ParcelCreateFromTemplateRequest](docs/Model/ParcelCreateFromTemplateRequest.md)
- [ParcelCreateRequest](docs/Model/ParcelCreateRequest.md)
- [ParcelDimensions](docs/Model/ParcelDimensions.md)
- [ParcelExtra](docs/Model/ParcelExtra.md)
- [ParcelInsurance](docs/Model/ParcelInsurance.md)
- [ParcelPaginatedList](docs/Model/ParcelPaginatedList.md)
- [ParcelTemplateAramexAustraliaEnum](docs/Model/ParcelTemplateAramexAustraliaEnum.md)
- [ParcelTemplateCouriersPleaseEnum](docs/Model/ParcelTemplateCouriersPleaseEnum.md)
- [ParcelTemplateDHLeCommerceEnum](docs/Model/ParcelTemplateDHLeCommerceEnum.md)
- [ParcelTemplateDPDUKEnum](docs/Model/ParcelTemplateDPDUKEnum.md)
- [ParcelTemplateEnumSet](docs/Model/ParcelTemplateEnumSet.md)
- [ParcelTemplateFedExEnum](docs/Model/ParcelTemplateFedExEnum.md)
- [ParcelTemplateUPSEnum](docs/Model/ParcelTemplateUPSEnum.md)
- [ParcelTemplateUSPSEnum](docs/Model/ParcelTemplateUSPSEnum.md)
- [Pickup](docs/Model/Pickup.md)
- [PickupBase](docs/Model/PickupBase.md)
- [PickupCreateRequest](docs/Model/PickupCreateRequest.md)
- [PoNumber](docs/Model/PoNumber.md)
- [Rate](docs/Model/Rate.md)
- [RateAmountAndCurrency](docs/Model/RateAmountAndCurrency.md)
- [RatePaginatedList](docs/Model/RatePaginatedList.md)
- [Refund](docs/Model/Refund.md)
- [RefundPaginatedList](docs/Model/RefundPaginatedList.md)
- [RefundRequestBody](docs/Model/RefundRequestBody.md)
- [RegisterCarrierAccountRequest](docs/Model/RegisterCarrierAccountRequest.md)
- [ResponseMessage](docs/Model/ResponseMessage.md)
- [RmaNumber](docs/Model/RmaNumber.md)
- [ServiceGroup](docs/Model/ServiceGroup.md)
- [ServiceGroupAccountAndServiceLevel](docs/Model/ServiceGroupAccountAndServiceLevel.md)
- [ServiceGroupBase](docs/Model/ServiceGroupBase.md)
- [ServiceGroupCreateRequest](docs/Model/ServiceGroupCreateRequest.md)
- [ServiceGroupTypeEnum](docs/Model/ServiceGroupTypeEnum.md)
- [ServiceGroupUpdateRequest](docs/Model/ServiceGroupUpdateRequest.md)
- [ServiceLevel](docs/Model/ServiceLevel.md)
- [ServiceLevelAPCPostalEnum](docs/Model/ServiceLevelAPCPostalEnum.md)
- [ServiceLevelAPGEnum](docs/Model/ServiceLevelAPGEnum.md)
- [ServiceLevelAirterraEnum](docs/Model/ServiceLevelAirterraEnum.md)
- [ServiceLevelAramexAustraliaEnum](docs/Model/ServiceLevelAramexAustraliaEnum.md)
- [ServiceLevelAsendiaEnum](docs/Model/ServiceLevelAsendiaEnum.md)
- [ServiceLevelAustraliaPostEnum](docs/Model/ServiceLevelAustraliaPostEnum.md)
- [ServiceLevelBetterTrucksEnum](docs/Model/ServiceLevelBetterTrucksEnum.md)
- [ServiceLevelCDLEnum](docs/Model/ServiceLevelCDLEnum.md)
- [ServiceLevelCanadaPostEnum](docs/Model/ServiceLevelCanadaPostEnum.md)
- [ServiceLevelChronopostEnum](docs/Model/ServiceLevelChronopostEnum.md)
- [ServiceLevelColissimoEnum](docs/Model/ServiceLevelColissimoEnum.md)
- [ServiceLevelCorreosEspanaEnum](docs/Model/ServiceLevelCorreosEspanaEnum.md)
- [ServiceLevelCouriersPleaseEnum](docs/Model/ServiceLevelCouriersPleaseEnum.md)
- [ServiceLevelDHLExpressEnum](docs/Model/ServiceLevelDHLExpressEnum.md)
- [ServiceLevelDHLGermanyEnum](docs/Model/ServiceLevelDHLGermanyEnum.md)
- [ServiceLevelDHLeCommerceEnum](docs/Model/ServiceLevelDHLeCommerceEnum.md)
- [ServiceLevelDPDDEEnum](docs/Model/ServiceLevelDPDDEEnum.md)
- [ServiceLevelDPDUKEnum](docs/Model/ServiceLevelDPDUKEnum.md)
- [ServiceLevelDeutschePostEnum](docs/Model/ServiceLevelDeutschePostEnum.md)
- [ServiceLevelEnumSet](docs/Model/ServiceLevelEnumSet.md)
- [ServiceLevelEvriUKEnum](docs/Model/ServiceLevelEvriUKEnum.md)
- [ServiceLevelFedExEnum](docs/Model/ServiceLevelFedExEnum.md)
- [ServiceLevelGLSUSEnum](docs/Model/ServiceLevelGLSUSEnum.md)
- [ServiceLevelGlobegisticsEnum](docs/Model/ServiceLevelGlobegisticsEnum.md)
- [ServiceLevelJitsuEnum](docs/Model/ServiceLevelJitsuEnum.md)
- [ServiceLevelLSOEnum](docs/Model/ServiceLevelLSOEnum.md)
- [ServiceLevelLasershipEnum](docs/Model/ServiceLevelLasershipEnum.md)
- [ServiceLevelMondialRelayEnum](docs/Model/ServiceLevelMondialRelayEnum.md)
- [ServiceLevelOnTracEnum](docs/Model/ServiceLevelOnTracEnum.md)
- [ServiceLevelParcelforceEnum](docs/Model/ServiceLevelParcelforceEnum.md)
- [ServiceLevelPostItalianeEnum](docs/Model/ServiceLevelPostItalianeEnum.md)
- [ServiceLevelPurolatorEnum](docs/Model/ServiceLevelPurolatorEnum.md)
- [ServiceLevelRoyalMailEnum](docs/Model/ServiceLevelRoyalMailEnum.md)
- [ServiceLevelSendleEnum](docs/Model/ServiceLevelSendleEnum.md)
- [ServiceLevelSwyftEnum](docs/Model/ServiceLevelSwyftEnum.md)
- [ServiceLevelUDSEnum](docs/Model/ServiceLevelUDSEnum.md)
- [ServiceLevelUPSEnum](docs/Model/ServiceLevelUPSEnum.md)
- [ServiceLevelUSPSEnum](docs/Model/ServiceLevelUSPSEnum.md)
- [ServiceLevelVehoEnum](docs/Model/ServiceLevelVehoEnum.md)
- [ServiceLevelWithParent](docs/Model/ServiceLevelWithParent.md)
- [ServiceLevelWithParentAllOfParentServicelevel](docs/Model/ServiceLevelWithParentAllOfParentServicelevel.md)
- [ServiceLevelePostGlobalEnum](docs/Model/ServiceLevelePostGlobalEnum.md)
- [Shipment](docs/Model/Shipment.md)
- [ShipmentBase](docs/Model/ShipmentBase.md)
- [ShipmentCreateRequest](docs/Model/ShipmentCreateRequest.md)
- [ShipmentCreateRequestAllOfAddressFrom](docs/Model/ShipmentCreateRequestAllOfAddressFrom.md)
- [ShipmentCreateRequestAllOfAddressReturn](docs/Model/ShipmentCreateRequestAllOfAddressReturn.md)
- [ShipmentCreateRequestAllOfAddressTo](docs/Model/ShipmentCreateRequestAllOfAddressTo.md)
- [ShipmentCreateRequestAllOfCustomsDeclaration](docs/Model/ShipmentCreateRequestAllOfCustomsDeclaration.md)
- [ShipmentCreateRequestAllOfParcels](docs/Model/ShipmentCreateRequestAllOfParcels.md)
- [ShipmentExtra](docs/Model/ShipmentExtra.md)
- [ShipmentExtraLasershipAttributesEnum](docs/Model/ShipmentExtraLasershipAttributesEnum.md)
- [ShipmentExtraReturnServiceType](docs/Model/ShipmentExtraReturnServiceType.md)
- [ShipmentExtraReturnServiceTypeLasershipEnum](docs/Model/ShipmentExtraReturnServiceTypeLasershipEnum.md)
- [ShipmentExtraReturnServiceTypeUPSEnum](docs/Model/ShipmentExtraReturnServiceTypeUPSEnum.md)
- [ShipmentPaginatedList](docs/Model/ShipmentPaginatedList.md)
- [ShippoAccount](docs/Model/ShippoAccount.md)
- [ShippoAccountBase](docs/Model/ShippoAccountBase.md)
- [ShippoAccountPaginatedList](docs/Model/ShippoAccountPaginatedList.md)
- [ShippoAccountUpdateRequest](docs/Model/ShippoAccountUpdateRequest.md)
- [Track](docs/Model/Track.md)
- [TrackingStatus](docs/Model/TrackingStatus.md)
- [TrackingStatusEnum](docs/Model/TrackingStatusEnum.md)
- [TrackingStatusFromLocation](docs/Model/TrackingStatusFromLocation.md)
- [TrackingStatusLocation](docs/Model/TrackingStatusLocation.md)
- [TrackingStatusLocationBase](docs/Model/TrackingStatusLocationBase.md)
- [TrackingStatusSubstatus](docs/Model/TrackingStatusSubstatus.md)
- [TrackingStatusToLocation](docs/Model/TrackingStatusToLocation.md)
- [TracksRequest](docs/Model/TracksRequest.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionCreateRequest](docs/Model/TransactionCreateRequest.md)
- [TransactionCreatedBy](docs/Model/TransactionCreatedBy.md)
- [TransactionPaginatedList](docs/Model/TransactionPaginatedList.md)
- [TransactionRate](docs/Model/TransactionRate.md)
- [TransactionStatusEnum](docs/Model/TransactionStatusEnum.md)
- [UPSConnectExistingOwnAccountParameters](docs/Model/UPSConnectExistingOwnAccountParameters.md)
- [UPSCreateNewOwnAccountParameters](docs/Model/UPSCreateNewOwnAccountParameters.md)
- [UPSReferenceFields](docs/Model/UPSReferenceFields.md)
- [UserParcelTemplate](docs/Model/UserParcelTemplate.md)
- [UserParcelTemplateBase](docs/Model/UserParcelTemplateBase.md)
- [UserParcelTemplateCreateRequest](docs/Model/UserParcelTemplateCreateRequest.md)
- [UserParcelTemplateList](docs/Model/UserParcelTemplateList.md)
- [UserParcelTemplateUpdateRequest](docs/Model/UserParcelTemplateUpdateRequest.md)
- [UserParcelTemplateWithCarrierTemplateCreateRequest](docs/Model/UserParcelTemplateWithCarrierTemplateCreateRequest.md)
- [UserParcelTemplateWithoutCarrierTemplateCreateRequest](docs/Model/UserParcelTemplateWithoutCarrierTemplateCreateRequest.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookBase](docs/Model/WebhookBase.md)
- [WebhookEventTypeEnum](docs/Model/WebhookEventTypeEnum.md)
- [WebhookPaginatedList](docs/Model/WebhookPaginatedList.md)
- [WebhookPayload](docs/Model/WebhookPayload.md)
- [WebhookPayloadBase](docs/Model/WebhookPayloadBase.md)
- [WebhookPayloadBatch](docs/Model/WebhookPayloadBatch.md)
- [WebhookPayloadTrack](docs/Model/WebhookPayloadTrack.md)
- [WebhookPayloadTransaction](docs/Model/WebhookPayloadTransaction.md)
- [WebhookUpdateRequest](docs/Model/WebhookUpdateRequest.md)
- [WeightUnitEnum](docs/Model/WeightUnitEnum.md)

## Authorization

Authentication schemes defined for the API:
### APIKeyHeader

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2018-02-08`
    - Generator version: `7.8.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
