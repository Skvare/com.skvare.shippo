<?php
/**
 * ServiceLevelDPDUKEnum
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
 * ServiceLevelDPDUKEnum Class Doc Comment
 *
 * @category Class
 * @description |Token | Service name| |:---|:---| | dpd_uk_ship_to_shop | Ship to shop| | dpd_uk_1030 | Door to door 10.30 next day| | dpd_uk_1200 | Door to door 12.00 next day| | dpd_uk_saturday | Saturday Delivery| | dpd_uk_saturday_1030 | Saturday Delivery 10.30| | dpd_uk_saturday_1200 | Saturday Delivery 12.00| | dpd_uk_sunday | Sunday Delivery| | dpd_uk_sunday_1030 | Sunday Delivery 10.30| | dpd_uk_sunday_1200 | Sunday Delivery 12.00| | dpd_uk_next_day | Next day| | dpd_uk_two_day | Two day| | dpd_uk_classic | DPD Classic| | dpd_uk_air_classic | DPD Air Classic| | dpd_uk_air_express | DPD Air Express| | dpd_uk_direct | DPD Direct| | dpd_uk_direct_tracked_mail| DPD Tracked Mail| | dpd_uk_pickup_returns | Pickup Returns|
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServiceLevelDPDUKEnum
{
    /**
     * Possible values of this enum
     */
    public const SHIP_TO_SHOP = 'dpd_uk_ship_to_shop';

    public const _1030 = 'dpd_uk_1030';

    public const _1200 = 'dpd_uk_1200';

    public const SATURDAY = 'dpd_uk_saturday';

    public const SATURDAY_1030 = 'dpd_uk_saturday_1030';

    public const SATURDAY_1200 = 'dpd_uk_saturday_1200';

    public const SUNDAY = 'dpd_uk_sunday';

    public const SUNDAY_1030 = 'dpd_uk_sunday_1030';

    public const SUNDAY_1200 = 'dpd_uk_sunday_1200';

    public const NEXT_DAY = 'dpd_uk_next_day';

    public const TWO_DAY = 'dpd_uk_two_day';

    public const CLASSIC = 'dpd_uk_classic';

    public const AIR_CLASSIC = 'dpd_uk_air_classic';

    public const AIR_EXPRESS = 'dpd_uk_air_express';

    public const DIRECT = 'dpd_uk_direct';

    public const DIRECT_TRACKED_MAIL = 'dpd_uk_direct_tracked_mail';

    public const PICKUP_RETURNS = 'dpd_uk_pickup_returns';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SHIP_TO_SHOP,
            self::_1030,
            self::_1200,
            self::SATURDAY,
            self::SATURDAY_1030,
            self::SATURDAY_1200,
            self::SUNDAY,
            self::SUNDAY_1030,
            self::SUNDAY_1200,
            self::NEXT_DAY,
            self::TWO_DAY,
            self::CLASSIC,
            self::AIR_CLASSIC,
            self::AIR_EXPRESS,
            self::DIRECT,
            self::DIRECT_TRACKED_MAIL,
            self::PICKUP_RETURNS
        ];
    }
}


