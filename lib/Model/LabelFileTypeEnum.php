<?php
/**
 * LabelFileTypeEnum
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
 * LabelFileTypeEnum Class Doc Comment
 *
 * @category Class
 * @description Print format of the &lt;a href&#x3D;\&quot;https://docs.goshippo.com/docs/shipments/shippinglabelsizes/\&quot;&gt;label&lt;/a&gt;. If empty, will use the default format set from  &lt;a href&#x3D;\&quot;https://apps.goshippo.com/settings/labels\&quot;&gt;the Shippo dashboard.&lt;/a&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LabelFileTypeEnum
{
    /**
     * Possible values of this enum
     */
    public const PNG = 'PNG';

    public const PNG_2_3X7_5 = 'PNG_2.3x7.5';

    public const PDF = 'PDF';

    public const PDF_2_3X7_5 = 'PDF_2.3x7.5';

    public const PDF_4X6 = 'PDF_4x6';

    public const PDF_4X8 = 'PDF_4x8';

    public const PDF_A4 = 'PDF_A4';

    public const PDF_A5 = 'PDF_A5';

    public const PDF_A6 = 'PDF_A6';

    public const ZPLII = 'ZPLII';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PNG,
            self::PNG_2_3X7_5,
            self::PDF,
            self::PDF_2_3X7_5,
            self::PDF_4X6,
            self::PDF_4X8,
            self::PDF_A4,
            self::PDF_A5,
            self::PDF_A6,
            self::ZPLII
        ];
    }
}

