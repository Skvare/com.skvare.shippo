<?php

/**
 * Form controller class.
 *
 * @see https://docs.civicrm.org/dev/en/latest/framework/quickform/
 */

use Civi\Api4\Address;

/**
 *
 */
class CRM_Shippo_Utils {

  /**
   * Get From Address of Sender.
   *
   * @return array
   *   Address.
   */
  public static function getFromAddress(): array {
    $fieldMapping = [
      'shippo_shipping_from_name' => 'name',
      'shippo_shipping_from_street1' => 'street_address',
      'shippo_shipping_from_street2' => 'supplemental_address_1',
      'shippo_shipping_from_city' => 'city',
      'shippo_shipping_from_state' => 'state',
      'shippo_shipping_from_zip' => 'zip',
      'shippo_shipping_from_country' => 'country',
      'shippo_shipping_telephone' => 'phone',
      'shippo_shipping_email' => 'email',
    ];
    $domainID = CRM_Core_Config::domainID();
    $settings = Civi::settings($domainID);
    $address = [];
    foreach ($fieldMapping as $field => $civiField) {
      $address[$civiField] = $settings->get($field);
    }
    return $address;
  }

  /**
   * Get Address of contact.
   *
   * @param int $contactID
   *   Contact ID.
   *
   * @return array
   *   Address.
   *
   * @throws CRM_Core_Exception
   * @throws \Civi\API\Exception\UnauthorizedException
   */
  public static function getToEmail(int $contactID): array {
    $addresses = Address::get(TRUE)
      ->addSelect('name', 'street_address', 'supplemental_address_1', 'supplemental_address_2', 'city', 'state_province_id:abbr', 'country_id:abbr', 'postal_code')
      ->addWhere('is_primary', '=', TRUE)
      ->addWhere('contact_id', '=', $contactID)
      ->setLimit(1)
      ->execute();
    $addressCorrect = [];
    foreach ($addresses->first() as $key => $value) {
      if ($key == 'state_province_id:abbr') {
        $addressCorrect['state'] = $value;
      }
      elseif ($key == 'country_id:abbr') {
        $addressCorrect['country'] = $value;
      }
      else {
        $addressCorrect[$key] = $value;
      }
    }
    return $addressCorrect;
  }

}
