<?php
/**
 * ServiceLevelCanadaPostEnum
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
 * ServiceLevelCanadaPostEnum Class Doc Comment
 *
 * @category Class
 * @description |Token | Service name| |:---|:---| | canada_post_regular_parcel | Regular Parcel| | canada_post_expedited_parcel | Expedited Parcel| | canada_post_priority | Priority| | canada_post_xpresspost | Xpresspost| | canada_post_xpresspost_international | Xpresspost International| | canada_post_xpresspost_usa | Xpresspost USA| | canada_post_expedited_parcel_usa | Expedited Parcel USA| | canada_post_tracked_packet_usa | Tracked Packet USA| | canada_post_small_packet_usa_air | Small Packet USA Air| | canada_post_tracked_packet_international | Tracked Packet International| | canada_post_small_packet_international_air | Small Package International Air|
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServiceLevelCanadaPostEnum
{
    /**
     * Possible values of this enum
     */
    public const REGULAR_PARCEL = 'canada_post_regular_parcel';

    public const EXPEDITED_PARCEL = 'canada_post_expedited_parcel';

    public const PRIORITY = 'canada_post_priority';

    public const XPRESSPOST = 'canada_post_xpresspost';

    public const XPRESSPOST_INTERNATIONAL = 'canada_post_xpresspost_international';

    public const XPRESSPOST_USA = 'canada_post_xpresspost_usa';

    public const EXPEDITED_PARCEL_USA = 'canada_post_expedited_parcel_usa';

    public const TRACKED_PACKET_USA = 'canada_post_tracked_packet_usa';

    public const SMALL_PACKET_USA_AIR = 'canada_post_small_packet_usa_air';

    public const TRACKED_PACKET_INTERNATIONAL = 'canada_post_tracked_packet_international';

    public const SMALL_PACKET_INTERNATIONAL_AIR = 'canada_post_small_packet_international_air';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::REGULAR_PARCEL,
            self::EXPEDITED_PARCEL,
            self::PRIORITY,
            self::XPRESSPOST,
            self::XPRESSPOST_INTERNATIONAL,
            self::XPRESSPOST_USA,
            self::EXPEDITED_PARCEL_USA,
            self::TRACKED_PACKET_USA,
            self::SMALL_PACKET_USA_AIR,
            self::TRACKED_PACKET_INTERNATIONAL,
            self::SMALL_PACKET_INTERNATIONAL_AIR
        ];
    }
}

