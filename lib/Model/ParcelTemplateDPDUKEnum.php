<?php
/**
 * ParcelTemplateDPDUKEnum
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
 * ParcelTemplateDPDUKEnum Class Doc Comment
 *
 * @category Class
 * @description |Token | Name | Dimensions| |:---|:---|:---| | DPD_UK_Express_Pak| DPD UK Express Pak | 530.00 x 400.00 x 100.00 mm|
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ParcelTemplateDPDUKEnum
{
    /**
     * Possible values of this enum
     */
    public const DPD_UK_EXPRESS_PAK = 'DPD_UK_Express_Pak';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DPD_UK_EXPRESS_PAK
        ];
    }
}


