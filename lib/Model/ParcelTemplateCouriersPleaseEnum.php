<?php
/**
 * ParcelTemplateCouriersPleaseEnum
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
 * ParcelTemplateCouriersPleaseEnum Class Doc Comment
 *
 * @category Class
 * @description |Token | Name | Dimensions| |:---|:---|:---| | couriersplease_500g_satchel | 500g Satchel | 22.00 x 33.50 x 0.10 cm| | couriersplease_1kg_satchel | 1kg Satchel | 28.00 x 35.00 x 0.10 cm| | couriersplease_3kg_satchel | 3kg Satchel | 34.00 x 42.00 x 0.10 cm| | couriersplease_5kg_satchel | 5kg Satchel | 43.70 x 59.70 x 0.10 cm|
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ParcelTemplateCouriersPleaseEnum
{
    /**
     * Possible values of this enum
     */
    public const _500G_SATCHEL = 'couriersplease_500g_satchel';

    public const _1KG_SATCHEL = 'couriersplease_1kg_satchel';

    public const _3KG_SATCHEL = 'couriersplease_3kg_satchel';

    public const _5KG_SATCHEL = 'couriersplease_5kg_satchel';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_500G_SATCHEL,
            self::_1KG_SATCHEL,
            self::_3KG_SATCHEL,
            self::_5KG_SATCHEL
        ];
    }
}

