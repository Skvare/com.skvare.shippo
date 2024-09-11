<?php
/**
 * ServiceLevelChronopostEnum
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
 * ServiceLevelChronopostEnum Class Doc Comment
 *
 * @category Class
 * @description |Token | Service name| |:---|:---| | chronopost_13 | Chrono 13| | chronopost_10 | Chrono 10| | chronopost_18| Chrono 18| | chronopost_relais_fr | Chrono Point Relais| | chronopost_classic | Chrono Classic International| | chronopost_express | Chrono Express International|
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServiceLevelChronopostEnum
{
    /**
     * Possible values of this enum
     */
    public const _13 = 'chronopost_13';

    public const _10 = 'chronopost_10';

    public const _18 = 'chronopost_18';

    public const RELAIS_FR = 'chronopost_relais_fr';

    public const CLASSIC = 'chronopost_classic';

    public const EXPRESS = 'chronopost_express';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_13,
            self::_10,
            self::_18,
            self::RELAIS_FR,
            self::CLASSIC,
            self::EXPRESS
        ];
    }
}


