<?php
/**
 * ServiceLevelDHLExpressEnum
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
 * ServiceLevelDHLExpressEnum Class Doc Comment
 *
 * @category Class
 * @description |Token | Service name| |:---|:---| | dhl_express_domestic_express_doc | Domestic Express Doc| | dhl_express_economy_select_doc | Economy Select Doc| | dhl_express_worldwide_nondoc | Express Worldwide Nondoc| | dhl_express_worldwide_doc | Express Worldwide Doc| | dhl_express_worldwide | Worldwide| | dhl_express_worldwide_eu_doc | Express Worldwide EU Doc| | dhl_express_break_bulk_express_doc | Break Bulk Express Doc| | dhl_express_express_9_00_nondoc | Express 9:00 NonDoc| | dhl_express_economy_select_nondoc | Economy Select NonDoc| | dhl_express_break_bulk_economy_doc | Break Bulk Economy Doc| | dhl_express_express_9_00_doc | Express 9:00 Doc| | dhl_express_express_10_30_doc | Express 10:30 Doc| | dhl_express_express_10_30_nondoc | Express 10:30 NonDoc| | dhl_express_express_12_00_doc | Express 12:00 Doc| | dhl_express_europack_nondoc | Europack NonDoc| | dhl_express_express_envelope_doc | Express Envelope Doc| | dhl_express_express_12_00_nondoc | Express 12:00 NonDoc| | dhl_express_express_12_doc | Domestic Express 12:00| | dhl_express_worldwide_b2c_doc | Express Worldwide (B2C) Doc| | dhl_express_worldwide_b2c_nondoc | Express Worldwide (B2C) NonDoc| | dhl_express_medical_express | Medical Express| | dhl_express_express_easy_nondoc | Express Easy NonDoc|
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServiceLevelDHLExpressEnum
{
    /**
     * Possible values of this enum
     */
    public const DOMESTIC_EXPRESS_DOC = 'dhl_express_domestic_express_doc';

    public const ECONOMY_SELECT_DOC = 'dhl_express_economy_select_doc';

    public const WORLDWIDE_NONDOC = 'dhl_express_worldwide_nondoc';

    public const WORLDWIDE_DOC = 'dhl_express_worldwide_doc';

    public const WORLDWIDE = 'dhl_express_worldwide';

    public const WORLDWIDE_EU_DOC = 'dhl_express_worldwide_eu_doc';

    public const BREAK_BULK_EXPRESS_DOC = 'dhl_express_break_bulk_express_doc';

    public const EXPRESS_9_00_NONDOC = 'dhl_express_express_9_00_nondoc';

    public const ECONOMY_SELECT_NONDOC = 'dhl_express_economy_select_nondoc';

    public const BREAK_BULK_ECONOMY_DOC = 'dhl_express_break_bulk_economy_doc';

    public const EXPRESS_9_00_DOC = 'dhl_express_express_9_00_doc';

    public const EXPRESS_10_30_DOC = 'dhl_express_express_10_30_doc';

    public const EXPRESS_10_30_NONDOC = 'dhl_express_express_10_30_nondoc';

    public const EXPRESS_12_00_DOC = 'dhl_express_express_12_00_doc';

    public const EUROPACK_NONDOC = 'dhl_express_europack_nondoc';

    public const EXPRESS_ENVELOPE_DOC = 'dhl_express_express_envelope_doc';

    public const EXPRESS_12_00_NONDOC = 'dhl_express_express_12_00_nondoc';

    public const EXPRESS_12_DOC = 'dhl_express_express_12_doc';

    public const WORLDWIDE_B2C_DOC = 'dhl_express_worldwide_b2c_doc';

    public const WORLDWIDE_B2C_NONDOC = 'dhl_express_worldwide_b2c_nondoc';

    public const MEDICAL_EXPRESS = 'dhl_express_medical_express';

    public const EXPRESS_EASY_NONDOC = 'dhl_express_express_easy_nondoc';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DOMESTIC_EXPRESS_DOC,
            self::ECONOMY_SELECT_DOC,
            self::WORLDWIDE_NONDOC,
            self::WORLDWIDE_DOC,
            self::WORLDWIDE,
            self::WORLDWIDE_EU_DOC,
            self::BREAK_BULK_EXPRESS_DOC,
            self::EXPRESS_9_00_NONDOC,
            self::ECONOMY_SELECT_NONDOC,
            self::BREAK_BULK_ECONOMY_DOC,
            self::EXPRESS_9_00_DOC,
            self::EXPRESS_10_30_DOC,
            self::EXPRESS_10_30_NONDOC,
            self::EXPRESS_12_00_DOC,
            self::EUROPACK_NONDOC,
            self::EXPRESS_ENVELOPE_DOC,
            self::EXPRESS_12_00_NONDOC,
            self::EXPRESS_12_DOC,
            self::WORLDWIDE_B2C_DOC,
            self::WORLDWIDE_B2C_NONDOC,
            self::MEDICAL_EXPRESS,
            self::EXPRESS_EASY_NONDOC
        ];
    }
}


