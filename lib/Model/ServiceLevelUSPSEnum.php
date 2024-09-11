<?php
/**
 * ServiceLevelUSPSEnum
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
 * ServiceLevelUSPSEnum Class Doc Comment
 *
 * @category Class
 * @description |Token | Service name| |:---|:---| | usps_priority | Priority Mail| | usps_priority_express | Priority Mail Express| | usps_media_mail | Media Mail, only for existing Shippo customers with grandfathered Media Mail option.| | usps_priority_mail_international | Priority Mail International| | usps_priority_mail_express_international | Priority Mail Express International| | usps_first_class_package_international_service | First Class Package International| | usps_ground_advantage | Ground Advantage |
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServiceLevelUSPSEnum
{
    /**
     * Possible values of this enum
     */
    public const PRIORITY = 'usps_priority';

    public const PRIORITY_EXPRESS = 'usps_priority_express';

    public const MEDIA_MAIL = 'usps_media_mail';

    public const PRIORITY_MAIL_INTERNATIONAL = 'usps_priority_mail_international';

    public const PRIORITY_MAIL_EXPRESS_INTERNATIONAL = 'usps_priority_mail_express_international';

    public const FIRST_CLASS_PACKAGE_INTERNATIONAL_SERVICE = 'usps_first_class_package_international_service';

    public const GROUND_ADVANTAGE = 'usps_ground_advantage';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PRIORITY,
            self::PRIORITY_EXPRESS,
            self::MEDIA_MAIL,
            self::PRIORITY_MAIL_INTERNATIONAL,
            self::PRIORITY_MAIL_EXPRESS_INTERNATIONAL,
            self::FIRST_CLASS_PACKAGE_INTERNATIONAL_SERVICE,
            self::GROUND_ADVANTAGE
        ];
    }
}

