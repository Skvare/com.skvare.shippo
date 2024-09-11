<?php
/**
 * ServiceLevelOnTracEnum
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
 * ServiceLevelOnTracEnum Class Doc Comment
 *
 * @category Class
 * @description |Token | Service name| |:---|:---| | ontrac_ground | Ground| | ontrac_sunrise_gold | Sunrise Gold| | ontrac_sunrise | Sunrise|
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServiceLevelOnTracEnum
{
    /**
     * Possible values of this enum
     */
    public const GROUND = 'ontrac_ground';

    public const SUNRISE_GOLD = 'ontrac_sunrise_gold';

    public const SUNRISE = 'ontrac_sunrise';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GROUND,
            self::SUNRISE_GOLD,
            self::SUNRISE
        ];
    }
}

