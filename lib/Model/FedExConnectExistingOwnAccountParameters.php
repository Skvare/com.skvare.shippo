<?php
/**
 * FedExConnectExistingOwnAccountParameters
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
 * FedExConnectExistingOwnAccountParameters Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FedExConnectExistingOwnAccountParameters implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FedExConnectExistingOwnAccountParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'phone_number' => 'string',
        'from_address_st' => 'string',
        'from_address_city' => 'string',
        'from_address_state' => 'string',
        'from_address_zip' => 'string',
        'from_address_country_iso2' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'first_name' => null,
        'last_name' => null,
        'phone_number' => null,
        'from_address_st' => null,
        'from_address_city' => null,
        'from_address_state' => null,
        'from_address_zip' => null,
        'from_address_country_iso2' => 'iso-3166-1-alpha-2'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'first_name' => false,
        'last_name' => false,
        'phone_number' => false,
        'from_address_st' => false,
        'from_address_city' => false,
        'from_address_state' => false,
        'from_address_zip' => false,
        'from_address_country_iso2' => false
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
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'phone_number' => 'phone_number',
        'from_address_st' => 'from_address_st',
        'from_address_city' => 'from_address_city',
        'from_address_state' => 'from_address_state',
        'from_address_zip' => 'from_address_zip',
        'from_address_country_iso2' => 'from_address_country_iso2'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'phone_number' => 'setPhoneNumber',
        'from_address_st' => 'setFromAddressSt',
        'from_address_city' => 'setFromAddressCity',
        'from_address_state' => 'setFromAddressState',
        'from_address_zip' => 'setFromAddressZip',
        'from_address_country_iso2' => 'setFromAddressCountryIso2'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'phone_number' => 'getPhoneNumber',
        'from_address_st' => 'getFromAddressSt',
        'from_address_city' => 'getFromAddressCity',
        'from_address_state' => 'getFromAddressState',
        'from_address_zip' => 'getFromAddressZip',
        'from_address_country_iso2' => 'getFromAddressCountryIso2'
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
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('from_address_st', $data ?? [], null);
        $this->setIfExists('from_address_city', $data ?? [], null);
        $this->setIfExists('from_address_state', $data ?? [], null);
        $this->setIfExists('from_address_zip', $data ?? [], null);
        $this->setIfExists('from_address_country_iso2', $data ?? [], null);
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

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ($this->container['phone_number'] === null) {
            $invalidProperties[] = "'phone_number' can't be null";
        }
        if ($this->container['from_address_st'] === null) {
            $invalidProperties[] = "'from_address_st' can't be null";
        }
        if ($this->container['from_address_city'] === null) {
            $invalidProperties[] = "'from_address_city' can't be null";
        }
        if ($this->container['from_address_state'] === null) {
            $invalidProperties[] = "'from_address_state' can't be null";
        }
        if ($this->container['from_address_zip'] === null) {
            $invalidProperties[] = "'from_address_zip' can't be null";
        }
        if ($this->container['from_address_country_iso2'] === null) {
            $invalidProperties[] = "'from_address_country_iso2' can't be null";
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
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name First name of the account holder
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name Last name of the account holder
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number Phone number of the account holder
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets from_address_st
     *
     * @return string
     */
    public function getFromAddressSt()
    {
        return $this->container['from_address_st'];
    }

    /**
     * Sets from_address_st
     *
     * @param string $from_address_st Street address of the account holder
     *
     * @return self
     */
    public function setFromAddressSt($from_address_st)
    {
        if (is_null($from_address_st)) {
            throw new \InvalidArgumentException('non-nullable from_address_st cannot be null');
        }
        $this->container['from_address_st'] = $from_address_st;

        return $this;
    }

    /**
     * Gets from_address_city
     *
     * @return string
     */
    public function getFromAddressCity()
    {
        return $this->container['from_address_city'];
    }

    /**
     * Sets from_address_city
     *
     * @param string $from_address_city City of the account holder
     *
     * @return self
     */
    public function setFromAddressCity($from_address_city)
    {
        if (is_null($from_address_city)) {
            throw new \InvalidArgumentException('non-nullable from_address_city cannot be null');
        }
        $this->container['from_address_city'] = $from_address_city;

        return $this;
    }

    /**
     * Gets from_address_state
     *
     * @return string
     */
    public function getFromAddressState()
    {
        return $this->container['from_address_state'];
    }

    /**
     * Sets from_address_state
     *
     * @param string $from_address_state State of the account holder
     *
     * @return self
     */
    public function setFromAddressState($from_address_state)
    {
        if (is_null($from_address_state)) {
            throw new \InvalidArgumentException('non-nullable from_address_state cannot be null');
        }
        $this->container['from_address_state'] = $from_address_state;

        return $this;
    }

    /**
     * Gets from_address_zip
     *
     * @return string
     */
    public function getFromAddressZip()
    {
        return $this->container['from_address_zip'];
    }

    /**
     * Sets from_address_zip
     *
     * @param string $from_address_zip Zip code of the account holder
     *
     * @return self
     */
    public function setFromAddressZip($from_address_zip)
    {
        if (is_null($from_address_zip)) {
            throw new \InvalidArgumentException('non-nullable from_address_zip cannot be null');
        }
        $this->container['from_address_zip'] = $from_address_zip;

        return $this;
    }

    /**
     * Gets from_address_country_iso2
     *
     * @return string
     */
    public function getFromAddressCountryIso2()
    {
        return $this->container['from_address_country_iso2'];
    }

    /**
     * Sets from_address_country_iso2
     *
     * @param string $from_address_country_iso2 Country of the account holder
     *
     * @return self
     */
    public function setFromAddressCountryIso2($from_address_country_iso2)
    {
        if (is_null($from_address_country_iso2)) {
            throw new \InvalidArgumentException('non-nullable from_address_country_iso2 cannot be null');
        }
        $this->container['from_address_country_iso2'] = $from_address_country_iso2;

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

