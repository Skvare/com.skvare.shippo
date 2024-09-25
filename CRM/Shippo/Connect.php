<?php

use GuzzleHttp\Client;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\Model\AddressCreateRequest;
use OpenAPI\Client\Model\CreateTransactionRequest;
use OpenAPI\Client\Model\CustomsDeclaration;
use OpenAPI\Client\Model\CustomsDeclarationCreateRequest;
use OpenAPI\Client\Model\RefundRequestBody;
use OpenAPI\Client\Model\Shipment;
use OpenAPI\Client\Model\ShipmentCreateRequest;
use OpenAPI\Client\Model\ShipmentCreateRequestAllOfAddressFrom;
use OpenAPI\Client\Model\ShipmentCreateRequestAllOfAddressTo;
use OpenAPI\Client\Model\ShipmentCreateRequestAllOfParcels;
use OpenAPI\Client\Model\Transaction;

require_once __DIR__ . '/../../vendor/autoload.php';


/**
 * Form controller class.
 *
 * @see https://docs.civicrm.org/dev/en/latest/framework/quickform/
 */
class CRM_Shippo_Connect {

  /**
   * @var null
   */
  private static $_singleton = NULL;

  const API_VERSION = '2018-02-08';

  /**
   * Function to init object.
   */
  public static function shippo($apiType = '') {
    if (self::$_singleton[$apiType] == NULL) {
      $domainID = CRM_Core_Config::domainID();
      $settings = Civi::settings($domainID);
      $apiKey = $settings->get('shippo_api_live');
      // Configure API key authorization: APIKeyHeader.
      $config = Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'ShippoToken ' . $apiKey);

      if ($apiType) {
        $cname = "OpenAPI\\Client\\Api\\" . $apiType;
        self::$_singleton[$apiType] = new $cname(
          new Client(),
          $config
        );
      }
    }
    return self::$_singleton[$apiType];
  }

  /**
   * Address params.
   *
   * @param array $params
   *   Input params for address.
   *
   * @return string|null
   *   Address id.
   */
  public static function address(array $params) {
    /** @var  OpenAPI\Client\Api\AddressesApi $apiInstance */
    $apiInstance = CRM_Shippo_Connect::shippo('AddressesApi');

    // \OpenAPI\Client\Model\AddressCreateRequest | Address details.
    $addressCreateRequest = new AddressCreateRequest();
    // String | String used to pick a non-default API version to use.
    $shippoApiVersion = self::API_VERSION;
    if (!empty($params['street_address'])) {
      $addressCreateRequest->setStreet1($params['street_address']);
    }
    if (!empty($params['supplemental_address_1'])) {
      $addressCreateRequest->setStreet2($params['supplemental_address_1']);
    }
    if (!empty($params['city'])) {
      $addressCreateRequest->setCity($params['city']);
    }
    if (!empty($params['state'])) {
      $addressCreateRequest->setState($params['state']);
    }
    if (!empty($params['zip'])) {
      $addressCreateRequest->setZip($params['zip']);
    }
    if (!empty($params['country'])) {
      $addressCreateRequest->setCountry($params['country']);
    }
    if (!empty($params['phone'])) {
      $addressCreateRequest->setPhone($params['phone']);
    }
    if (!empty($params['email'])) {
      $addressCreateRequest->setEmail($params['email']);
    }
    if (!empty($params['name'])) {
      $addressCreateRequest->setName($params['name']);
    }
    $addressID = '';
    try {
      $result = $apiInstance->createAddress($addressCreateRequest, $shippoApiVersion);
      $addressID = $result->getObjectId();
    }
    catch (Exception $e) {
      echo 'createAddress: ', $e->getMessage(), PHP_EOL;
    }
    return $addressID;
  }

  /**
   * Function to validate the address.
   *
   * @param string $addressObjectID
   *   Address object id.
   *
   * @return bool
   *   Is valid.
   *
   * @throws \OpenAPI\Client\ApiException
   */
  public static function validate(string $addressObjectID): bool {
    /** @var  OpenAPI\Client\Api\AddressesApi $apiInstance */
    $result = FALSE;
    try {
      if ($addressObjectID) {
        $apiInstance = CRM_Shippo_Connect::shippo('AddressesApi');
        $result = $apiInstance->validateAddress($addressObjectID)->valid();
      }
    }
    catch (Exception $e) {
      echo 'Exception when calling AddressesApi->validateAddress: ', $e->getMessage(), PHP_EOL;
    }
    return $result;
  }

  /**
   * Get Address from object id.
   *
   * @param string $addressObjectID
   *   Address Object ID.
   *
   * @return array
   *   Address.
   *
   * @throws \OpenAPI\Client\ApiException
   */
  public static function getAddress(string $addressObjectID): array {
    /** @var  OpenAPI\Client\Api\AddressesApi $apiInstance */
    try {
      if ($addressObjectID) {
        $apiInstance = CRM_Shippo_Connect::shippo('AddressesApi');
        $addressObject = $apiInstance->getAddress($addressObjectID, self::API_VERSION);
        return [
          'name' => $addressObject->getName(),
          'street_address' => $addressObject->getStreet1(),
          'supplemental_address_1' => $addressObject->getStreet2(),
          'city' => $addressObject->getCity(),
          'state' => $addressObject->getState(),
          'zip' => $addressObject->getZip(),
          'country' => $addressObject->getCountry(),
          'phone' => $addressObject->getPhone(),
          'email' => $addressObject->getEmail(),
        ];
      }
    }
    catch (Exception $e) {
      echo 'Exception when calling AddressesApi->getAddress: ', $e->getMessage(), PHP_EOL;
    }
    return [];
  }

  /**
   * Declarations Request.
   *
   * @param array $params
   *   Declarations details.
   *
   * @return false|array|CustomsDeclaration
   *   Mixed.
   */
  public static function declarations(array $params): array|bool|CustomsDeclaration {
    $result = FALSE;
    try {
      /** @var  OpenAPI\Client\Api\CustomsDeclarationsApi $apiInstance */
      $apiInstance = CRM_Shippo_Connect::shippo('CustomsDeclarationsApi');
      $customsDeclarationRequest = new CustomsDeclarationCreateRequest();
      $customsDeclarationRequest->setContentsType($params['contents_type']);
      $customsDeclarationRequest->setContentsExplanation($params['contents_explanation']);
      $customsDeclarationRequest->setNonDeliveryOption($params['non_delivery_option']);
      $customsDeclarationRequest->setCertify($params['certify']);
      $customsDeclarationRequest->setCertifySigner($params['certify_signer']);
      $customsDeclarationRequest->setItems($params['items']);
      $result = $apiInstance->createCustomsDeclaration($customsDeclarationRequest, self::API_VERSION);
    }
    catch (Exception $e) {
      echo 'Exception when calling CustomsDeclarationsApi: ', $e->getMessage(), PHP_EOL;
    }
    return $result;
  }

  /**
   * Create Shipment.
   *
   * @param array $params
   *   Shipment details.
   *
   * @return false|array|Shipment
   *   Mixed return.
   */
  public static function shipment(array $params): bool|Shipment|array {
    /** @var  OpenAPI\Client\Api\ShipmentsApi $apiInstance */
    $result = FALSE;
    try {
      if (!empty($params)) {
        /** @var  OpenAPI\Client\Api\ShipmentsApi $apiInstance */
        $apiInstance = CRM_Shippo_Connect::shippo('ShipmentsApi');
        // Request | Shipment details.
        $async = !empty($params['async']);

        $addressFromRequest = new ShipmentCreateRequestAllOfAddressFrom();
        $addressFromRequest->setStreet1($params['address_from']['street_address']);
        if (!empty($params['address_from']['supplemental_address_1'])) {
          $addressFromRequest->setStreet2($params['address_from']['supplemental_address_1']);
        }

        $addressFromRequest->setCity($params['address_from']['city']);
        $addressFromRequest->setState($params['address_from']['state']);
        $addressFromRequest->setZip($params['address_from']['zip']);
        $addressFromRequest->setCountry($params['address_from']['country']);
        $addressFromRequest->setPhone($params['address_from']['phone']);
        $addressFromRequest->setEmail($params['address_from']['email']);
        if (!empty($params['address_from']['name'])) {
          $addressFromRequest->setName($params['address_from']['name']);
        }

        $addressToRequest = new ShipmentCreateRequestAllOfAddressTo();
        $addressToRequest->setStreet1($params['address_to']['street_address']);
        if (!empty($params['address_to']['supplemental_address_1'])) {
          $addressToRequest->setStreet2($params['address_to']['supplemental_address_1']);
        }
        $addressToRequest->setCity($params['address_to']['city']);
        $addressToRequest->setState($params['address_to']['state']);
        $addressToRequest->setZip($params['address_to']['zip'] ?? $params['address_to']['postal_code']);
        $addressToRequest->setCountry($params['address_to']['country']);
        $addressToRequest->setPhone($params['address_to']['phone']);
        if (!empty($params['address_to']['name'])) {
          $addressToRequest->setName($params['address_to']['name']);
        }

        $parcelRequest = new ShipmentCreateRequestAllOfParcels();
        $parcelRequest->setHeight($params['parcels']['height']);
        $parcelRequest->setWidth($params['parcels']['width']);
        $parcelRequest->setLength($params['parcels']['length']);
        $parcelRequest->setWeight($params['parcels']['weight']);
        $parcelRequest->setMassUnit($params['parcels']['mass_unit']);
        $parcelRequest->setDistanceUnit($params['parcels']['distance_unit']);

        $shipmentCreateRequest = new ShipmentCreateRequest();
        $shipmentCreateRequest->setAddressFrom($addressFromRequest);
        $shipmentCreateRequest->setAddressTo($addressToRequest);
        $shipmentCreateRequest->setParcels([$parcelRequest]);
        $shipmentCreateRequest->setCustomsDeclaration($params['customs_declaration']);
        $shipmentCreateRequest->setAsync($async);
        // String | String used to pick a non-default API version to use.
        $result = $apiInstance->createShipment($shipmentCreateRequest);
      }
    }
    catch (Exception $e) {
      echo 'Exception when calling shipment: ', $e->getMessage(), PHP_EOL;
    }
    return $result;
  }

  /**
   * Create Transaction.
   *
   * @param array $params
   *   Input for transaction.
   *
   * @return false|array|Transaction
   *   Mixed.
   */
  public static function transactions(array $params): Transaction|bool|array {
    /** @var  OpenAPI\Client\Api\TransactionsApi $apiInstance */
    $result = FALSE;
    try {
      if (!empty($params)) {
        $async = !empty($params['async']);

        /** @var  OpenAPI\Client\Api\TransactionsApi $apiInstance */
        $apiInstance = CRM_Shippo_Connect::shippo('TransactionsApi');
        $transactionRequest = new CreateTransactionRequest();
        $transactionRequest->setRate($params['rate']);
        $transactionRequest->setLabelFileType($params['label_file_type']);
        $transactionRequest->setAsync($async);
        $result = $apiInstance->createTransaction($transactionRequest,
          self::API_VERSION);
      }
    }
    catch (Exception $e) {
      echo 'Exception when calling TransactionsApi: ', $e->getMessage(), PHP_EOL;
    }
    return $result;
  }

  /**
   * Create Transaction.
   *
   * @param array $params
   *   Input for transaction.
   *
   * @return false|array|Refund
   *   Mixed.
   */
  public static function refund(array $params): Refund|bool|array {
    /** @var  OpenAPI\Client\Api\RefundsApi $apiInstance */
    $result = FALSE;
    try {
      if (!empty($params)) {
        $async = !empty($params['async']);

        /** @var  OpenAPI\Client\Api\RefundsApi $apiInstance */
        $apiInstance = CRM_Shippo_Connect::shippo('RefundsApi');
        $refundRequest = new RefundRequestBody();
        $refundRequest->setTransaction($params['transaction']);
        $refundRequest->setAsync($async);
        $result = $apiInstance->createRefund($refundRequest, self::API_VERSION);
      }
    }
    catch (Exception $e) {
      echo 'Exception when calling RefundsApi: ', $e->getMessage(), PHP_EOL;
    }
    return $result;
  }

}
