<?php
/**
 * AddressReturn
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
 * AddressReturn Class Doc Comment
 *
 * @category Class
 * @description ID of the Address object where the shipment will be sent back to if it is not delivered  (Only available for UPS, USPS, and Fedex shipments). &lt;br/&gt;  If this field is not set, your shipments will be returned to the address_from.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AddressReturn implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddressReturn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'company' => 'string',
        'street1' => 'string',
        'street2' => 'string',
        'street3' => 'string',
        'street_no' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'country' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'is_residential' => 'bool',
        'metadata' => 'string',
        'is_complete' => 'bool',
        'latitude' => '\OpenAPI\Client\Model\AddressAllOfLatitude',
        'longitude' => '\OpenAPI\Client\Model\AddressAllOfLongitude',
        'object_created' => '\DateTime',
        'object_id' => 'string',
        'object_owner' => 'string',
        'object_updated' => '\DateTime',
        'validation_results' => '\OpenAPI\Client\Model\AddressValidationResults',
        'test' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'company' => null,
        'street1' => null,
        'street2' => null,
        'street3' => null,
        'street_no' => null,
        'city' => null,
        'state' => null,
        'zip' => null,
        'country' => null,
        'phone' => null,
        'email' => null,
        'is_residential' => null,
        'metadata' => null,
        'is_complete' => null,
        'latitude' => null,
        'longitude' => null,
        'object_created' => 'date-time',
        'object_id' => null,
        'object_owner' => null,
        'object_updated' => 'date-time',
        'validation_results' => null,
        'test' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'company' => false,
        'street1' => false,
        'street2' => false,
        'street3' => false,
        'street_no' => false,
        'city' => false,
        'state' => false,
        'zip' => false,
        'country' => false,
        'phone' => false,
        'email' => false,
        'is_residential' => false,
        'metadata' => false,
        'is_complete' => false,
        'latitude' => false,
        'longitude' => false,
        'object_created' => false,
        'object_id' => false,
        'object_owner' => false,
        'object_updated' => false,
        'validation_results' => false,
        'test' => false
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
        'name' => 'name',
        'company' => 'company',
        'street1' => 'street1',
        'street2' => 'street2',
        'street3' => 'street3',
        'street_no' => 'street_no',
        'city' => 'city',
        'state' => 'state',
        'zip' => 'zip',
        'country' => 'country',
        'phone' => 'phone',
        'email' => 'email',
        'is_residential' => 'is_residential',
        'metadata' => 'metadata',
        'is_complete' => 'is_complete',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'object_created' => 'object_created',
        'object_id' => 'object_id',
        'object_owner' => 'object_owner',
        'object_updated' => 'object_updated',
        'validation_results' => 'validation_results',
        'test' => 'test'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'company' => 'setCompany',
        'street1' => 'setStreet1',
        'street2' => 'setStreet2',
        'street3' => 'setStreet3',
        'street_no' => 'setStreetNo',
        'city' => 'setCity',
        'state' => 'setState',
        'zip' => 'setZip',
        'country' => 'setCountry',
        'phone' => 'setPhone',
        'email' => 'setEmail',
        'is_residential' => 'setIsResidential',
        'metadata' => 'setMetadata',
        'is_complete' => 'setIsComplete',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'object_created' => 'setObjectCreated',
        'object_id' => 'setObjectId',
        'object_owner' => 'setObjectOwner',
        'object_updated' => 'setObjectUpdated',
        'validation_results' => 'setValidationResults',
        'test' => 'setTest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'company' => 'getCompany',
        'street1' => 'getStreet1',
        'street2' => 'getStreet2',
        'street3' => 'getStreet3',
        'street_no' => 'getStreetNo',
        'city' => 'getCity',
        'state' => 'getState',
        'zip' => 'getZip',
        'country' => 'getCountry',
        'phone' => 'getPhone',
        'email' => 'getEmail',
        'is_residential' => 'getIsResidential',
        'metadata' => 'getMetadata',
        'is_complete' => 'getIsComplete',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'object_created' => 'getObjectCreated',
        'object_id' => 'getObjectId',
        'object_owner' => 'getObjectOwner',
        'object_updated' => 'getObjectUpdated',
        'validation_results' => 'getValidationResults',
        'test' => 'getTest'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('company', $data ?? [], null);
        $this->setIfExists('street1', $data ?? [], null);
        $this->setIfExists('street2', $data ?? [], null);
        $this->setIfExists('street3', $data ?? [], null);
        $this->setIfExists('street_no', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('zip', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('is_residential', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('is_complete', $data ?? [], null);
        $this->setIfExists('latitude', $data ?? [], null);
        $this->setIfExists('longitude', $data ?? [], null);
        $this->setIfExists('object_created', $data ?? [], null);
        $this->setIfExists('object_id', $data ?? [], null);
        $this->setIfExists('object_owner', $data ?? [], null);
        $this->setIfExists('object_updated', $data ?? [], null);
        $this->setIfExists('validation_results', $data ?? [], null);
        $this->setIfExists('test', $data ?? [], null);
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
     * @param string|null $name **required for purchase**<br> First and Last Name of the addressee
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
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company Company Name
     *
     * @return self
     */
    public function setCompany($company)
    {
        if (is_null($company)) {
            throw new \InvalidArgumentException('non-nullable company cannot be null');
        }
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets street1
     *
     * @return string|null
     */
    public function getStreet1()
    {
        return $this->container['street1'];
    }

    /**
     * Sets street1
     *
     * @param string|null $street1 **required for purchase**<br> First street line, 35 character limit. Usually street number and street name (except for DHL Germany, see street_no).
     *
     * @return self
     */
    public function setStreet1($street1)
    {
        if (is_null($street1)) {
            throw new \InvalidArgumentException('non-nullable street1 cannot be null');
        }
        $this->container['street1'] = $street1;

        return $this;
    }

    /**
     * Gets street2
     *
     * @return string|null
     */
    public function getStreet2()
    {
        return $this->container['street2'];
    }

    /**
     * Sets street2
     *
     * @param string|null $street2 Second street line, 35 character limit.
     *
     * @return self
     */
    public function setStreet2($street2)
    {
        if (is_null($street2)) {
            throw new \InvalidArgumentException('non-nullable street2 cannot be null');
        }
        $this->container['street2'] = $street2;

        return $this;
    }

    /**
     * Gets street3
     *
     * @return string|null
     */
    public function getStreet3()
    {
        return $this->container['street3'];
    }

    /**
     * Sets street3
     *
     * @param string|null $street3 Third street line, 35 character limit.  Only accepted for USPS international shipments, UPS domestic and UPS international shipments.
     *
     * @return self
     */
    public function setStreet3($street3)
    {
        if (is_null($street3)) {
            throw new \InvalidArgumentException('non-nullable street3 cannot be null');
        }
        $this->container['street3'] = $street3;

        return $this;
    }

    /**
     * Gets street_no
     *
     * @return string|null
     */
    public function getStreetNo()
    {
        return $this->container['street_no'];
    }

    /**
     * Sets street_no
     *
     * @param string|null $street_no Street number of the addressed building.  This field can be included in street1 for all carriers except for DHL Germany.
     *
     * @return self
     */
    public function setStreetNo($street_no)
    {
        if (is_null($street_no)) {
            throw new \InvalidArgumentException('non-nullable street_no cannot be null');
        }
        $this->container['street_no'] = $street_no;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city **required for purchase**<br> Name of a city. When creating a Quote Address, sending a city is optional but will yield more accurate Rates.  Please bear in mind that city names may be ambiguous (there are 34 Springfields in the US). Pass in a state  or a ZIP code (see below), if known, it will yield more accurate results.
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state **required for purchase for some countries**<br> State/Province values are required for shipments from/to the US, AU, and CA. UPS requires province for some  countries (i.e Ireland). To receive more accurate quotes, passing this field is recommended. Most carriers  only accept two or three character state abbreviations.
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string|null
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string|null $zip **required for purchase**<br> Postal code of an Address. When creating a Quote Addresses, sending a ZIP is optional but will yield more  accurate Rates.
     *
     * @return self
     */
    public function setZip($zip)
    {
        if (is_null($zip)) {
            throw new \InvalidArgumentException('non-nullable zip cannot be null');
        }
        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country ISO 3166-1 alpha-2 country codes and country names can be used. For most consistent results, we reccomend using country codes like `US` or `DE`. If using country names, please ensure they are spelled correctly and in English. Country names are converted to country codes. Refer to this <a href=\"https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements\" target=\"_blank\">guide</a> for a list of country codes. Sending a country is always required.
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone Addresses containing a phone number allow carriers to call the recipient when delivering the Parcel. This  increases the probability of delivery and helps to avoid accessorial charges after a Parcel has been shipped.
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email E-mail address of the contact person, RFC3696/5321-compliant.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets is_residential
     *
     * @return bool|null
     */
    public function getIsResidential()
    {
        return $this->container['is_residential'];
    }

    /**
     * Sets is_residential
     *
     * @param bool|null $is_residential is_residential
     *
     * @return self
     */
    public function setIsResidential($is_residential)
    {
        if (is_null($is_residential)) {
            throw new \InvalidArgumentException('non-nullable is_residential cannot be null');
        }
        $this->container['is_residential'] = $is_residential;

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
     * @param string|null $metadata A string of up to 100 characters that can be filled with any additional information you want  to attach to the object.
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
     * Gets is_complete
     *
     * @return bool|null
     */
    public function getIsComplete()
    {
        return $this->container['is_complete'];
    }

    /**
     * Sets is_complete
     *
     * @param bool|null $is_complete Complete addresses contain all required values.<br><br>Incomplete addresses have failed one or multiple  validations.<br>Incomplete Addresses are eligible for requesting rates but lack at least one required  value for purchasing labels.
     *
     * @return self
     */
    public function setIsComplete($is_complete)
    {
        if (is_null($is_complete)) {
            throw new \InvalidArgumentException('non-nullable is_complete cannot be null');
        }
        $this->container['is_complete'] = $is_complete;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return \OpenAPI\Client\Model\AddressAllOfLatitude|null
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param \OpenAPI\Client\Model\AddressAllOfLatitude|null $latitude latitude
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        if (is_null($latitude)) {
            throw new \InvalidArgumentException('non-nullable latitude cannot be null');
        }
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return \OpenAPI\Client\Model\AddressAllOfLongitude|null
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param \OpenAPI\Client\Model\AddressAllOfLongitude|null $longitude longitude
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        if (is_null($longitude)) {
            throw new \InvalidArgumentException('non-nullable longitude cannot be null');
        }
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets object_created
     *
     * @return \DateTime|null
     */
    public function getObjectCreated()
    {
        return $this->container['object_created'];
    }

    /**
     * Sets object_created
     *
     * @param \DateTime|null $object_created Date and time of Address creation.
     *
     * @return self
     */
    public function setObjectCreated($object_created)
    {
        if (is_null($object_created)) {
            throw new \InvalidArgumentException('non-nullable object_created cannot be null');
        }
        $this->container['object_created'] = $object_created;

        return $this;
    }

    /**
     * Gets object_id
     *
     * @return string|null
     */
    public function getObjectId()
    {
        return $this->container['object_id'];
    }

    /**
     * Sets object_id
     *
     * @param string|null $object_id Unique identifier of the given Address object.  This ID is required to create a Shipment object.
     *
     * @return self
     */
    public function setObjectId($object_id)
    {
        if (is_null($object_id)) {
            throw new \InvalidArgumentException('non-nullable object_id cannot be null');
        }
        $this->container['object_id'] = $object_id;

        return $this;
    }

    /**
     * Gets object_owner
     *
     * @return string|null
     */
    public function getObjectOwner()
    {
        return $this->container['object_owner'];
    }

    /**
     * Sets object_owner
     *
     * @param string|null $object_owner Username of the user who created the Address object.
     *
     * @return self
     */
    public function setObjectOwner($object_owner)
    {
        if (is_null($object_owner)) {
            throw new \InvalidArgumentException('non-nullable object_owner cannot be null');
        }
        $this->container['object_owner'] = $object_owner;

        return $this;
    }

    /**
     * Gets object_updated
     *
     * @return \DateTime|null
     */
    public function getObjectUpdated()
    {
        return $this->container['object_updated'];
    }

    /**
     * Sets object_updated
     *
     * @param \DateTime|null $object_updated Date and time of last Address update. Since you cannot update Addresses after they were created, this time  stamp reflects the time when the Address was changed by Shippo's systems for the last time, e.g., during the  approximation of one or more values.
     *
     * @return self
     */
    public function setObjectUpdated($object_updated)
    {
        if (is_null($object_updated)) {
            throw new \InvalidArgumentException('non-nullable object_updated cannot be null');
        }
        $this->container['object_updated'] = $object_updated;

        return $this;
    }

    /**
     * Gets validation_results
     *
     * @return \OpenAPI\Client\Model\AddressValidationResults|null
     */
    public function getValidationResults()
    {
        return $this->container['validation_results'];
    }

    /**
     * Sets validation_results
     *
     * @param \OpenAPI\Client\Model\AddressValidationResults|null $validation_results validation_results
     *
     * @return self
     */
    public function setValidationResults($validation_results)
    {
        if (is_null($validation_results)) {
            throw new \InvalidArgumentException('non-nullable validation_results cannot be null');
        }
        $this->container['validation_results'] = $validation_results;

        return $this;
    }

    /**
     * Gets test
     *
     * @return bool|null
     */
    public function getTest()
    {
        return $this->container['test'];
    }

    /**
     * Sets test
     *
     * @param bool|null $test Indicates whether the object has been created in test mode.
     *
     * @return self
     */
    public function setTest($test)
    {
        if (is_null($test)) {
            throw new \InvalidArgumentException('non-nullable test cannot be null');
        }
        $this->container['test'] = $test;

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


