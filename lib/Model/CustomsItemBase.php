<?php
/**
 * CustomsItemBase
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
 * CustomsItemBase Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomsItemBase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomsItemBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'eccn_ear99' => 'string',
        'mass_unit' => '\OpenAPI\Client\Model\WeightUnitEnum',
        'metadata' => 'string',
        'net_weight' => 'string',
        'origin_country' => 'string',
        'quantity' => 'int',
        'sku_code' => 'string',
        'hs_code' => 'string',
        'tariff_number' => 'string',
        'value_amount' => 'string',
        'value_currency' => 'string'
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
        'eccn_ear99' => null,
        'mass_unit' => null,
        'metadata' => null,
        'net_weight' => null,
        'origin_country' => null,
        'quantity' => 'int64',
        'sku_code' => null,
        'hs_code' => null,
        'tariff_number' => null,
        'value_amount' => null,
        'value_currency' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'description' => false,
        'eccn_ear99' => false,
        'mass_unit' => false,
        'metadata' => false,
        'net_weight' => false,
        'origin_country' => false,
        'quantity' => false,
        'sku_code' => false,
        'hs_code' => false,
        'tariff_number' => false,
        'value_amount' => false,
        'value_currency' => false
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
        'eccn_ear99' => 'eccn_ear99',
        'mass_unit' => 'mass_unit',
        'metadata' => 'metadata',
        'net_weight' => 'net_weight',
        'origin_country' => 'origin_country',
        'quantity' => 'quantity',
        'sku_code' => 'sku_code',
        'hs_code' => 'hs_code',
        'tariff_number' => 'tariff_number',
        'value_amount' => 'value_amount',
        'value_currency' => 'value_currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'eccn_ear99' => 'setEccnEar99',
        'mass_unit' => 'setMassUnit',
        'metadata' => 'setMetadata',
        'net_weight' => 'setNetWeight',
        'origin_country' => 'setOriginCountry',
        'quantity' => 'setQuantity',
        'sku_code' => 'setSkuCode',
        'hs_code' => 'setHsCode',
        'tariff_number' => 'setTariffNumber',
        'value_amount' => 'setValueAmount',
        'value_currency' => 'setValueCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'eccn_ear99' => 'getEccnEar99',
        'mass_unit' => 'getMassUnit',
        'metadata' => 'getMetadata',
        'net_weight' => 'getNetWeight',
        'origin_country' => 'getOriginCountry',
        'quantity' => 'getQuantity',
        'sku_code' => 'getSkuCode',
        'hs_code' => 'getHsCode',
        'tariff_number' => 'getTariffNumber',
        'value_amount' => 'getValueAmount',
        'value_currency' => 'getValueCurrency'
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
        $this->setIfExists('eccn_ear99', $data ?? [], null);
        $this->setIfExists('mass_unit', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('net_weight', $data ?? [], null);
        $this->setIfExists('origin_country', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('sku_code', $data ?? [], null);
        $this->setIfExists('hs_code', $data ?? [], null);
        $this->setIfExists('tariff_number', $data ?? [], null);
        $this->setIfExists('value_amount', $data ?? [], null);
        $this->setIfExists('value_currency', $data ?? [], null);
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

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['mass_unit'] === null) {
            $invalidProperties[] = "'mass_unit' can't be null";
        }
        if ($this->container['net_weight'] === null) {
            $invalidProperties[] = "'net_weight' can't be null";
        }
        if ($this->container['origin_country'] === null) {
            $invalidProperties[] = "'origin_country' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['value_amount'] === null) {
            $invalidProperties[] = "'value_amount' can't be null";
        }
        if ($this->container['value_currency'] === null) {
            $invalidProperties[] = "'value_currency' can't be null";
        }
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
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Text description of your item.
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
     * Gets eccn_ear99
     *
     * @return string|null
     */
    public function getEccnEar99()
    {
        return $this->container['eccn_ear99'];
    }

    /**
     * Sets eccn_ear99
     *
     * @param string|null $eccn_ear99 Export Control Classification Number, required on some exports from the United States.
     *
     * @return self
     */
    public function setEccnEar99($eccn_ear99)
    {
        if (is_null($eccn_ear99)) {
            throw new \InvalidArgumentException('non-nullable eccn_ear99 cannot be null');
        }
        $this->container['eccn_ear99'] = $eccn_ear99;

        return $this;
    }

    /**
     * Gets mass_unit
     *
     * @return \OpenAPI\Client\Model\WeightUnitEnum
     */
    public function getMassUnit()
    {
        return $this->container['mass_unit'];
    }

    /**
     * Sets mass_unit
     *
     * @param \OpenAPI\Client\Model\WeightUnitEnum $mass_unit mass_unit
     *
     * @return self
     */
    public function setMassUnit($mass_unit)
    {
        if (is_null($mass_unit)) {
            throw new \InvalidArgumentException('non-nullable mass_unit cannot be null');
        }
        $this->container['mass_unit'] = $mass_unit;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return string|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param string|null $metadata A string of up to 100 characters that can be filled with any additional information you  want to attach to the object.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets net_weight
     *
     * @return string
     */
    public function getNetWeight()
    {
        return $this->container['net_weight'];
    }

    /**
     * Sets net_weight
     *
     * @param string $net_weight Total weight of this item, i.e. quantity * weight per item.
     *
     * @return self
     */
    public function setNetWeight($net_weight)
    {
        if (is_null($net_weight)) {
            throw new \InvalidArgumentException('non-nullable net_weight cannot be null');
        }
        $this->container['net_weight'] = $net_weight;

        return $this;
    }

    /**
     * Gets origin_country
     *
     * @return string
     */
    public function getOriginCountry()
    {
        return $this->container['origin_country'];
    }

    /**
     * Sets origin_country
     *
     * @param string $origin_country Country of origin of the item. Example: `US` or `DE`.  All accepted values can be found on the <a href=\"http://www.iso.org/\" target=\"_blank\">Official ISO Website</a>.
     *
     * @return self
     */
    public function setOriginCountry($origin_country)
    {
        if (is_null($origin_country)) {
            throw new \InvalidArgumentException('non-nullable origin_country cannot be null');
        }
        $this->container['origin_country'] = $origin_country;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Quantity of this item in the shipment you send.  Must be greater than 0.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets sku_code
     *
     * @return string|null
     */
    public function getSkuCode()
    {
        return $this->container['sku_code'];
    }

    /**
     * Sets sku_code
     *
     * @param string|null $sku_code SKU code of the item, which is required by some carriers.
     *
     * @return self
     */
    public function setSkuCode($sku_code)
    {
        if (is_null($sku_code)) {
            throw new \InvalidArgumentException('non-nullable sku_code cannot be null');
        }
        $this->container['sku_code'] = $sku_code;

        return $this;
    }

    /**
     * Gets hs_code
     *
     * @return string|null
     */
    public function getHsCode()
    {
        return $this->container['hs_code'];
    }

    /**
     * Sets hs_code
     *
     * @param string|null $hs_code HS code of the item, which is required by some carriers. If `tariff_number` is not provided, `hs_code` will be used.  If both `hs_code` and `tariff_number` are provided, `tariff_number` will be used. 50 character limit.
     *
     * @return self
     */
    public function setHsCode($hs_code)
    {
        if (is_null($hs_code)) {
            throw new \InvalidArgumentException('non-nullable hs_code cannot be null');
        }
        $this->container['hs_code'] = $hs_code;

        return $this;
    }

    /**
     * Gets tariff_number
     *
     * @return string|null
     */
    public function getTariffNumber()
    {
        return $this->container['tariff_number'];
    }

    /**
     * Sets tariff_number
     *
     * @param string|null $tariff_number The tariff number of the item. If `tariff_number` is not provided, `hs_code` will be used. If both `hs_code` and `tariff_number` are provided, `tariff_number` will be used. 12 character limit.
     *
     * @return self
     */
    public function setTariffNumber($tariff_number)
    {
        if (is_null($tariff_number)) {
            throw new \InvalidArgumentException('non-nullable tariff_number cannot be null');
        }
        $this->container['tariff_number'] = $tariff_number;

        return $this;
    }

    /**
     * Gets value_amount
     *
     * @return string
     */
    public function getValueAmount()
    {
        return $this->container['value_amount'];
    }

    /**
     * Sets value_amount
     *
     * @param string $value_amount Total value of this item, i.e. quantity * value per item.
     *
     * @return self
     */
    public function setValueAmount($value_amount)
    {
        if (is_null($value_amount)) {
            throw new \InvalidArgumentException('non-nullable value_amount cannot be null');
        }
        $this->container['value_amount'] = $value_amount;

        return $this;
    }

    /**
     * Gets value_currency
     *
     * @return string
     */
    public function getValueCurrency()
    {
        return $this->container['value_currency'];
    }

    /**
     * Sets value_currency
     *
     * @param string $value_currency Currency used for value_amount. The <a href=\"http://www.xe.com/iso4217.php\">official ISO 4217</a>  currency codes are used, e.g.  `USD` or `EUR`.
     *
     * @return self
     */
    public function setValueCurrency($value_currency)
    {
        if (is_null($value_currency)) {
            throw new \InvalidArgumentException('non-nullable value_currency cannot be null');
        }
        $this->container['value_currency'] = $value_currency;

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


