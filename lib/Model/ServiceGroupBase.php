<?php
/**
 * ServiceGroupBase
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ServiceGroupBase Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ServiceGroupBase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ServiceGroupBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'flat_rate' => 'string',
        'flat_rate_currency' => 'string',
        'free_shipping_threshold_currency' => 'string',
        'free_shipping_threshold_min' => 'string',
        'name' => 'string',
        'rate_adjustment' => 'int',
        'type' => '\OpenAPI\Client\Model\ServiceGroupTypeEnum'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'description' => null,
        'flat_rate' => null,
        'flat_rate_currency' => null,
        'free_shipping_threshold_currency' => null,
        'free_shipping_threshold_min' => null,
        'name' => null,
        'rate_adjustment' => 'int64',
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'description' => false,
        'flat_rate' => false,
        'flat_rate_currency' => false,
        'free_shipping_threshold_currency' => false,
        'free_shipping_threshold_min' => false,
        'name' => false,
        'rate_adjustment' => false,
        'type' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'description' => 'description',
        'flat_rate' => 'flat_rate',
        'flat_rate_currency' => 'flat_rate_currency',
        'free_shipping_threshold_currency' => 'free_shipping_threshold_currency',
        'free_shipping_threshold_min' => 'free_shipping_threshold_min',
        'name' => 'name',
        'rate_adjustment' => 'rate_adjustment',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'flat_rate' => 'setFlatRate',
        'flat_rate_currency' => 'setFlatRateCurrency',
        'free_shipping_threshold_currency' => 'setFreeShippingThresholdCurrency',
        'free_shipping_threshold_min' => 'setFreeShippingThresholdMin',
        'name' => 'setName',
        'rate_adjustment' => 'setRateAdjustment',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'flat_rate' => 'getFlatRate',
        'flat_rate_currency' => 'getFlatRateCurrency',
        'free_shipping_threshold_currency' => 'getFreeShippingThresholdCurrency',
        'free_shipping_threshold_min' => 'getFreeShippingThresholdMin',
        'name' => 'getName',
        'rate_adjustment' => 'getRateAdjustment',
        'type' => 'getType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('flat_rate', $data ?? [], null);
        $this->setIfExists('flat_rate_currency', $data ?? [], null);
        $this->setIfExists('free_shipping_threshold_currency', $data ?? [], null);
        $this->setIfExists('free_shipping_threshold_min', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('rate_adjustment', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description for the service group
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets flat_rate
     *
     * @return string|null
     */
    public function getFlatRate()
    {
        return $this->container['flat_rate'];
    }

    /**
     * Sets flat_rate
     *
     * @param string|null $flat_rate String representation of an amount to be returned as the flat rate if 1. The service group is of type `LIVE_RATE` and no matching rates were found; or 2. The service group is of type `FLAT_RATE`. Either integers or decimals are accepted. Required unless type is `FREE_SHIPPING`
     *
     * @return self
     */
    public function setFlatRate($flat_rate)
    {
        if (is_null($flat_rate)) {
            throw new \InvalidArgumentException('non-nullable flat_rate cannot be null');
        }
        $this->container['flat_rate'] = $flat_rate;

        return $this;
    }

    /**
     * Gets flat_rate_currency
     *
     * @return string|null
     */
    public function getFlatRateCurrency()
    {
        return $this->container['flat_rate_currency'];
    }

    /**
     * Sets flat_rate_currency
     *
     * @param string|null $flat_rate_currency required unless type is `FREE_SHIPPING`. (ISO 4217 currency)
     *
     * @return self
     */
    public function setFlatRateCurrency($flat_rate_currency)
    {
        if (is_null($flat_rate_currency)) {
            throw new \InvalidArgumentException('non-nullable flat_rate_currency cannot be null');
        }
        $this->container['flat_rate_currency'] = $flat_rate_currency;

        return $this;
    }

    /**
     * Gets free_shipping_threshold_currency
     *
     * @return string|null
     */
    public function getFreeShippingThresholdCurrency()
    {
        return $this->container['free_shipping_threshold_currency'];
    }

    /**
     * Sets free_shipping_threshold_currency
     *
     * @param string|null $free_shipping_threshold_currency optional unless type is `FREE_SHIPPING`. (ISO 4217 currency)
     *
     * @return self
     */
    public function setFreeShippingThresholdCurrency($free_shipping_threshold_currency)
    {
        if (is_null($free_shipping_threshold_currency)) {
            throw new \InvalidArgumentException('non-nullable free_shipping_threshold_currency cannot be null');
        }
        $this->container['free_shipping_threshold_currency'] = $free_shipping_threshold_currency;

        return $this;
    }

    /**
     * Gets free_shipping_threshold_min
     *
     * @return string|null
     */
    public function getFreeShippingThresholdMin()
    {
        return $this->container['free_shipping_threshold_min'];
    }

    /**
     * Sets free_shipping_threshold_min
     *
     * @param string|null $free_shipping_threshold_min For service groups of type `FREE_SHIPPING`, this field must be required to configure the minimum  cart total (total cost of items in the cart) for this service group to be returned for rates at  checkout. Optional unless type is `FREE_SHIPPING`
     *
     * @return self
     */
    public function setFreeShippingThresholdMin($free_shipping_threshold_min)
    {
        if (is_null($free_shipping_threshold_min)) {
            throw new \InvalidArgumentException('non-nullable free_shipping_threshold_min cannot be null');
        }
        $this->container['free_shipping_threshold_min'] = $free_shipping_threshold_min;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name for the service group that will be shown to customers in the response
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets rate_adjustment
     *
     * @return int|null
     */
    public function getRateAdjustment()
    {
        return $this->container['rate_adjustment'];
    }

    /**
     * Sets rate_adjustment
     *
     * @param int|null $rate_adjustment The amount in percent (%) that the service group's returned rate should be adjusted. For example, if this field is set to 5 and the matched rate price is $5.00, the returned value of the service group will be $5.25. Negative integers are also accepted and will discount the rate price by the defined percentage amount.
     *
     * @return self
     */
    public function setRateAdjustment($rate_adjustment)
    {
        if (is_null($rate_adjustment)) {
            throw new \InvalidArgumentException('non-nullable rate_adjustment cannot be null');
        }
        $this->container['rate_adjustment'] = $rate_adjustment;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\ServiceGroupTypeEnum|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\ServiceGroupTypeEnum|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


