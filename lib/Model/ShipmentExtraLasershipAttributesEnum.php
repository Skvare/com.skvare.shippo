<?php
/**
 * ShipmentExtraLasershipAttributesEnum
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
 * ShipmentExtraLasershipAttributesEnum Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipmentExtraLasershipAttributesEnum
{
    /**
     * Possible values of this enum
     */
    public const TWO_PERSON_DELIVERY = 'TwoPersonDelivery';

    public const EXPLOSIVE = 'Explosive';

    public const ALCOHOL = 'Alcohol';

    public const HAZMAT = 'Hazmat';

    public const CONTROLLED_SUBSTANCE = 'ControlledSubstance';

    public const REFRIGERATED = 'Refrigerated';

    public const DRY_ICE = 'DryIce';

    public const PERISHABLE = 'Perishable';

    public const NO_RTS = 'NoRTS';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TWO_PERSON_DELIVERY,
            self::EXPLOSIVE,
            self::ALCOHOL,
            self::HAZMAT,
            self::CONTROLLED_SUBSTANCE,
            self::REFRIGERATED,
            self::DRY_ICE,
            self::PERISHABLE,
            self::NO_RTS
        ];
    }
}

