<?php
/**
 * ServiceLevelParcelforceEnum
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
 * ServiceLevelParcelforceEnum Class Doc Comment
 *
 * @category Class
 * @description |Token | Service name| |:---|:---| | parcelforce_express48 | Express 48| | parcelforce_express24 | Express 24| | parcelforce_expressam | Express AM|
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServiceLevelParcelforceEnum
{
    /**
     * Possible values of this enum
     */
    public const EXPRESS48 = 'parcelforce_express48';

    public const EXPRESS24 = 'parcelforce_express24';

    public const EXPRESSAM = 'parcelforce_expressam';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EXPRESS48,
            self::EXPRESS24,
            self::EXPRESSAM
        ];
    }
}

