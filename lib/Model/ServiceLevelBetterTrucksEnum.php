<?php
/**
 * ServiceLevelBetterTrucksEnum
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
 * ServiceLevelBetterTrucksEnum Class Doc Comment
 *
 * @category Class
 * @description |Token | Service name| |:---|:---| | better_trucks_same_day | Same Day| | better_trucks_next_day | Next Day|
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServiceLevelBetterTrucksEnum
{
    /**
     * Possible values of this enum
     */
    public const SAME_DAY = 'better_trucks_same_day';

    public const NEXT_DAY = 'better_trucks_next_day';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SAME_DAY,
            self::NEXT_DAY
        ];
    }
}


