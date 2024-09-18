<?php

use GuzzleHttp\Client;
use OpenAPI\Client\Api\AddressesApi;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\Model\AddressCreateRequest;

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

}
