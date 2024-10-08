<?php
/**
 * ServiceLevelePostGlobalEnum
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Shippo external API.
 *
 * Use this API to integrate with the Shippo service
 *
 * The version of the OpenAPI document: 2018-02-08
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.8.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ServiceLevelePostGlobalEnum Class Doc Comment
 *
 * @category Class
 * @description |Token | Service name| |:---|:---| | rr_donnelley_domestic_economy_parcel | Domestic Economy Parcel| | rr_donnelley_domestic_priority_parcel | Domestic Priority Parcel | | rr_donnelley_domestic_parcel_bpm | Domestic Parcel BPM| | rr_donnelley_priority_domestic_priority_parcel_bpm | Domestic Priority Parcel BPM| | rr_donnelley_priority_parcel_delcon | International Priority Parcel DelCon| | rr_donnelley_priority_parcel_nondelcon | International Priority Parcel NonDelcon| | rr_donnelley_economy_parcel | Economy Parcel Service | | rr_donnelley_ipa | International Priority Airmail (IPA)| | rr_donnelley_courier | International Courier| | rr_donnelley_isal | International Surface Air Lift (ISAL)| | rr_donnelley_epacket | e-Packet| | rr_donnelley_pmi | Priority Mail International| | rr_donnelley_emi | Express Mail International|
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServiceLevelePostGlobalEnum
{
    /**
     * Possible values of this enum
     */
    public const DOMESTIC_ECONOMY_PARCEL = 'rr_donnelley_domestic_economy_parcel';

    public const DOMESTIC_PRIORITY_PARCEL = 'rr_donnelley_domestic_priority_parcel';

    public const DOMESTIC_PARCEL_BPM = 'rr_donnelley_domestic_parcel_bpm';

    public const PRIORITY_DOMESTIC_PRIORITY_PARCEL_BPM = 'rr_donnelley_priority_domestic_priority_parcel_bpm';

    public const PRIORITY_PARCEL_DELCON = 'rr_donnelley_priority_parcel_delcon';

    public const PRIORITY_PARCEL_NONDELCON = 'rr_donnelley_priority_parcel_nondelcon';

    public const ECONOMY_PARCEL = 'rr_donnelley_economy_parcel';

    public const IPA = 'rr_donnelley_ipa';

    public const COURIER = 'rr_donnelley_courier';

    public const ISAL = 'rr_donnelley_isal';

    public const EPACKET = 'rr_donnelley_epacket';

    public const PMI = 'rr_donnelley_pmi';

    public const EMI = 'rr_donnelley_emi';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DOMESTIC_ECONOMY_PARCEL,
            self::DOMESTIC_PRIORITY_PARCEL,
            self::DOMESTIC_PARCEL_BPM,
            self::PRIORITY_DOMESTIC_PRIORITY_PARCEL_BPM,
            self::PRIORITY_PARCEL_DELCON,
            self::PRIORITY_PARCEL_NONDELCON,
            self::ECONOMY_PARCEL,
            self::IPA,
            self::COURIER,
            self::ISAL,
            self::EPACKET,
            self::PMI,
            self::EMI
        ];
    }
}


