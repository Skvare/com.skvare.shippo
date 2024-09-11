<?php
/**
 * TrackingStatusEnum
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
 * TrackingStatusEnum Class Doc Comment
 *
 * @category Class
 * @description Indicates the high level status of the shipment.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TrackingStatusEnum
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'UNKNOWN';

    public const PRE_TRANSIT = 'PRE_TRANSIT';

    public const TRANSIT = 'TRANSIT';

    public const DELIVERED = 'DELIVERED';

    public const RETURNED = 'RETURNED';

    public const FAILURE = 'FAILURE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::PRE_TRANSIT,
            self::TRANSIT,
            self::DELIVERED,
            self::RETURNED,
            self::FAILURE
        ];
    }
}


