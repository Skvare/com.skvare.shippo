<?php
/**
 * OrderStatusEnum
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
 * OrderStatusEnum Class Doc Comment
 *
 * @category Class
 * @description Current state of the order. See the &lt;a href&#x3D;\&quot;https://docs.goshippo.com/docs/orders/orders/\&quot;&gt;orders tutorial&lt;/a&gt;  for the logic of how the status is handled.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderStatusEnum
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'UNKNOWN';

    public const AWAITPAY = 'AWAITPAY';

    public const PAID = 'PAID';

    public const REFUNDED = 'REFUNDED';

    public const CANCELLED = 'CANCELLED';

    public const PARTIALLY_FULFILLED = 'PARTIALLY_FULFILLED';

    public const SHIPPED = 'SHIPPED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::AWAITPAY,
            self::PAID,
            self::REFUNDED,
            self::CANCELLED,
            self::PARTIALLY_FULFILLED,
            self::SHIPPED
        ];
    }
}

