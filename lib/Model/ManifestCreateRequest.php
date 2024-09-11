<?php
/**
 * ManifestCreateRequest
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
 * ManifestCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ManifestCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ManifestCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'carrier_account' => 'string',
        'shipment_date' => 'string',
        'transactions' => 'string[]',
        'address_from' => '\OpenAPI\Client\Model\ManifestCreateRequestAllOfAddressFrom',
        'async' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'carrier_account' => null,
        'shipment_date' => null,
        'transactions' => null,
        'address_from' => null,
        'async' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'carrier_account' => false,
        'shipment_date' => false,
        'transactions' => false,
        'address_from' => false,
        'async' => false
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
        'carrier_account' => 'carrier_account',
        'shipment_date' => 'shipment_date',
        'transactions' => 'transactions',
        'address_from' => 'address_from',
        'async' => 'async'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'carrier_account' => 'setCarrierAccount',
        'shipment_date' => 'setShipmentDate',
        'transactions' => 'setTransactions',
        'address_from' => 'setAddressFrom',
        'async' => 'setAsync'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'carrier_account' => 'getCarrierAccount',
        'shipment_date' => 'getShipmentDate',
        'transactions' => 'getTransactions',
        'address_from' => 'getAddressFrom',
        'async' => 'getAsync'
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
        $this->setIfExists('carrier_account', $data ?? [], null);
        $this->setIfExists('shipment_date', $data ?? [], null);
        $this->setIfExists('transactions', $data ?? [], null);
        $this->setIfExists('address_from', $data ?? [], null);
        $this->setIfExists('async', $data ?? [], null);
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

        if ($this->container['carrier_account'] === null) {
            $invalidProperties[] = "'carrier_account' can't be null";
        }
        if ($this->container['shipment_date'] === null) {
            $invalidProperties[] = "'shipment_date' can't be null";
        }
        if ($this->container['address_from'] === null) {
            $invalidProperties[] = "'address_from' can't be null";
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
     * Gets carrier_account
     *
     * @return string
     */
    public function getCarrierAccount()
    {
        return $this->container['carrier_account'];
    }

    /**
     * Sets carrier_account
     *
     * @param string $carrier_account ID of carrier account
     *
     * @return self
     */
    public function setCarrierAccount($carrier_account)
    {
        if (is_null($carrier_account)) {
            throw new \InvalidArgumentException('non-nullable carrier_account cannot be null');
        }
        $this->container['carrier_account'] = $carrier_account;

        return $this;
    }

    /**
     * Gets shipment_date
     *
     * @return string
     */
    public function getShipmentDate()
    {
        return $this->container['shipment_date'];
    }

    /**
     * Sets shipment_date
     *
     * @param string $shipment_date All shipments to be submitted on this day will be closed out.  Must be in the format `2014-01-18T00:35:03.463Z` (ISO 8601 date).
     *
     * @return self
     */
    public function setShipmentDate($shipment_date)
    {
        if (is_null($shipment_date)) {
            throw new \InvalidArgumentException('non-nullable shipment_date cannot be null');
        }
        $this->container['shipment_date'] = $shipment_date;

        return $this;
    }

    /**
     * Gets transactions
     *
     * @return string[]|null
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     *
     * @param string[]|null $transactions IDs transactions to use. If you set this to null or not send this parameter,  Shippo will automatically assign all applicable transactions.
     *
     * @return self
     */
    public function setTransactions($transactions)
    {
        if (is_null($transactions)) {
            throw new \InvalidArgumentException('non-nullable transactions cannot be null');
        }
        $this->container['transactions'] = $transactions;

        return $this;
    }

    /**
     * Gets address_from
     *
     * @return \OpenAPI\Client\Model\ManifestCreateRequestAllOfAddressFrom
     */
    public function getAddressFrom()
    {
        return $this->container['address_from'];
    }

    /**
     * Sets address_from
     *
     * @param \OpenAPI\Client\Model\ManifestCreateRequestAllOfAddressFrom $address_from address_from
     *
     * @return self
     */
    public function setAddressFrom($address_from)
    {
        if (is_null($address_from)) {
            throw new \InvalidArgumentException('non-nullable address_from cannot be null');
        }
        $this->container['address_from'] = $address_from;

        return $this;
    }

    /**
     * Gets async
     *
     * @return bool|null
     */
    public function getAsync()
    {
        return $this->container['async'];
    }

    /**
     * Sets async
     *
     * @param bool|null $async async
     *
     * @return self
     */
    public function setAsync($async)
    {
        if (is_null($async)) {
            throw new \InvalidArgumentException('non-nullable async cannot be null');
        }
        $this->container['async'] = $async;

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

