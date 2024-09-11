<?php
/**
 * ShipmentCreateRequest
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
 * ShipmentCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipmentCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'extra' => '\OpenAPI\Client\Model\ShipmentExtra',
        'metadata' => 'string',
        'shipment_date' => 'string',
        'address_from' => '\OpenAPI\Client\Model\ShipmentCreateRequestAllOfAddressFrom',
        'address_return' => '\OpenAPI\Client\Model\ShipmentCreateRequestAllOfAddressReturn',
        'address_to' => '\OpenAPI\Client\Model\ShipmentCreateRequestAllOfAddressTo',
        'customs_declaration' => '\OpenAPI\Client\Model\ShipmentCreateRequestAllOfCustomsDeclaration',
        'async' => 'bool',
        'carrier_accounts' => 'string[]',
        'parcels' => '\OpenAPI\Client\Model\ShipmentCreateRequestAllOfParcels[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'extra' => null,
        'metadata' => null,
        'shipment_date' => null,
        'address_from' => null,
        'address_return' => null,
        'address_to' => null,
        'customs_declaration' => null,
        'async' => null,
        'carrier_accounts' => null,
        'parcels' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'extra' => false,
        'metadata' => false,
        'shipment_date' => false,
        'address_from' => false,
        'address_return' => false,
        'address_to' => false,
        'customs_declaration' => false,
        'async' => false,
        'carrier_accounts' => false,
        'parcels' => false
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
        'extra' => 'extra',
        'metadata' => 'metadata',
        'shipment_date' => 'shipment_date',
        'address_from' => 'address_from',
        'address_return' => 'address_return',
        'address_to' => 'address_to',
        'customs_declaration' => 'customs_declaration',
        'async' => 'async',
        'carrier_accounts' => 'carrier_accounts',
        'parcels' => 'parcels'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'extra' => 'setExtra',
        'metadata' => 'setMetadata',
        'shipment_date' => 'setShipmentDate',
        'address_from' => 'setAddressFrom',
        'address_return' => 'setAddressReturn',
        'address_to' => 'setAddressTo',
        'customs_declaration' => 'setCustomsDeclaration',
        'async' => 'setAsync',
        'carrier_accounts' => 'setCarrierAccounts',
        'parcels' => 'setParcels'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'extra' => 'getExtra',
        'metadata' => 'getMetadata',
        'shipment_date' => 'getShipmentDate',
        'address_from' => 'getAddressFrom',
        'address_return' => 'getAddressReturn',
        'address_to' => 'getAddressTo',
        'customs_declaration' => 'getCustomsDeclaration',
        'async' => 'getAsync',
        'carrier_accounts' => 'getCarrierAccounts',
        'parcels' => 'getParcels'
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
        $this->setIfExists('extra', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('shipment_date', $data ?? [], null);
        $this->setIfExists('address_from', $data ?? [], null);
        $this->setIfExists('address_return', $data ?? [], null);
        $this->setIfExists('address_to', $data ?? [], null);
        $this->setIfExists('customs_declaration', $data ?? [], null);
        $this->setIfExists('async', $data ?? [], null);
        $this->setIfExists('carrier_accounts', $data ?? [], null);
        $this->setIfExists('parcels', $data ?? [], null);
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

        if ($this->container['address_from'] === null) {
            $invalidProperties[] = "'address_from' can't be null";
        }
        if ($this->container['address_to'] === null) {
            $invalidProperties[] = "'address_to' can't be null";
        }
        if ($this->container['parcels'] === null) {
            $invalidProperties[] = "'parcels' can't be null";
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
     * Gets extra
     *
     * @return \OpenAPI\Client\Model\ShipmentExtra|null
     */
    public function getExtra()
    {
        return $this->container['extra'];
    }

    /**
     * Sets extra
     *
     * @param \OpenAPI\Client\Model\ShipmentExtra|null $extra extra
     *
     * @return self
     */
    public function setExtra($extra)
    {
        if (is_null($extra)) {
            throw new \InvalidArgumentException('non-nullable extra cannot be null');
        }
        $this->container['extra'] = $extra;

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
     * @param string|null $metadata A string of up to 100 characters that can be filled with any additional information you want to attach to the object.
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
     * Gets shipment_date
     *
     * @return string|null
     */
    public function getShipmentDate()
    {
        return $this->container['shipment_date'];
    }

    /**
     * Sets shipment_date
     *
     * @param string|null $shipment_date Date the shipment will be tendered to the carrier. Must be in the format `2014-01-18T00:35:03.463Z`.  Defaults to current date and time if no value is provided. Please note that some carriers require this value to be in the future, on a working day, or similar.
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
     * Gets address_from
     *
     * @return \OpenAPI\Client\Model\ShipmentCreateRequestAllOfAddressFrom
     */
    public function getAddressFrom()
    {
        return $this->container['address_from'];
    }

    /**
     * Sets address_from
     *
     * @param \OpenAPI\Client\Model\ShipmentCreateRequestAllOfAddressFrom $address_from address_from
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
     * Gets address_return
     *
     * @return \OpenAPI\Client\Model\ShipmentCreateRequestAllOfAddressReturn|null
     */
    public function getAddressReturn()
    {
        return $this->container['address_return'];
    }

    /**
     * Sets address_return
     *
     * @param \OpenAPI\Client\Model\ShipmentCreateRequestAllOfAddressReturn|null $address_return address_return
     *
     * @return self
     */
    public function setAddressReturn($address_return)
    {
        if (is_null($address_return)) {
            throw new \InvalidArgumentException('non-nullable address_return cannot be null');
        }
        $this->container['address_return'] = $address_return;

        return $this;
    }

    /**
     * Gets address_to
     *
     * @return \OpenAPI\Client\Model\ShipmentCreateRequestAllOfAddressTo
     */
    public function getAddressTo()
    {
        return $this->container['address_to'];
    }

    /**
     * Sets address_to
     *
     * @param \OpenAPI\Client\Model\ShipmentCreateRequestAllOfAddressTo $address_to address_to
     *
     * @return self
     */
    public function setAddressTo($address_to)
    {
        if (is_null($address_to)) {
            throw new \InvalidArgumentException('non-nullable address_to cannot be null');
        }
        $this->container['address_to'] = $address_to;

        return $this;
    }

    /**
     * Gets customs_declaration
     *
     * @return \OpenAPI\Client\Model\ShipmentCreateRequestAllOfCustomsDeclaration|null
     */
    public function getCustomsDeclaration()
    {
        return $this->container['customs_declaration'];
    }

    /**
     * Sets customs_declaration
     *
     * @param \OpenAPI\Client\Model\ShipmentCreateRequestAllOfCustomsDeclaration|null $customs_declaration customs_declaration
     *
     * @return self
     */
    public function setCustomsDeclaration($customs_declaration)
    {
        if (is_null($customs_declaration)) {
            throw new \InvalidArgumentException('non-nullable customs_declaration cannot be null');
        }
        $this->container['customs_declaration'] = $customs_declaration;

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
     * Gets carrier_accounts
     *
     * @return string[]|null
     */
    public function getCarrierAccounts()
    {
        return $this->container['carrier_accounts'];
    }

    /**
     * Sets carrier_accounts
     *
     * @param string[]|null $carrier_accounts List of <a href=\"#tag/Carrier-Accounts/\">Carrier Accounts</a> `object_id`s used to filter  the returned rates.  If set, only rates from these carriers will be returned.
     *
     * @return self
     */
    public function setCarrierAccounts($carrier_accounts)
    {
        if (is_null($carrier_accounts)) {
            throw new \InvalidArgumentException('non-nullable carrier_accounts cannot be null');
        }
        $this->container['carrier_accounts'] = $carrier_accounts;

        return $this;
    }

    /**
     * Gets parcels
     *
     * @return \OpenAPI\Client\Model\ShipmentCreateRequestAllOfParcels[]
     */
    public function getParcels()
    {
        return $this->container['parcels'];
    }

    /**
     * Sets parcels
     *
     * @param \OpenAPI\Client\Model\ShipmentCreateRequestAllOfParcels[] $parcels parcels
     *
     * @return self
     */
    public function setParcels($parcels)
    {
        if (is_null($parcels)) {
            throw new \InvalidArgumentException('non-nullable parcels cannot be null');
        }
        $this->container['parcels'] = $parcels;

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

