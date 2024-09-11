<?php
/**
 * Rate
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
 * Rate Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Rate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Rate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'amount_local' => 'string',
        'currency' => 'string',
        'currency_local' => 'string',
        'arrives_by' => 'string',
        'attributes' => 'string[]',
        'carrier_account' => 'string',
        'duration_terms' => 'string',
        'estimated_days' => 'int',
        'included_insurance_price' => 'string',
        'messages' => '\OpenAPI\Client\Model\ResponseMessage[]',
        'object_created' => '\DateTime',
        'object_id' => 'string',
        'object_owner' => 'string',
        'provider' => 'string',
        'provider_image_75' => 'string',
        'provider_image_200' => 'string',
        'servicelevel' => '\OpenAPI\Client\Model\ServiceLevelWithParent',
        'shipment' => 'string',
        'test' => 'bool',
        'zone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'amount_local' => null,
        'currency' => null,
        'currency_local' => null,
        'arrives_by' => null,
        'attributes' => null,
        'carrier_account' => null,
        'duration_terms' => null,
        'estimated_days' => 'int64',
        'included_insurance_price' => null,
        'messages' => null,
        'object_created' => 'date-time',
        'object_id' => null,
        'object_owner' => null,
        'provider' => null,
        'provider_image_75' => null,
        'provider_image_200' => null,
        'servicelevel' => null,
        'shipment' => null,
        'test' => null,
        'zone' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amount' => false,
        'amount_local' => false,
        'currency' => false,
        'currency_local' => false,
        'arrives_by' => false,
        'attributes' => false,
        'carrier_account' => false,
        'duration_terms' => false,
        'estimated_days' => false,
        'included_insurance_price' => false,
        'messages' => false,
        'object_created' => false,
        'object_id' => false,
        'object_owner' => false,
        'provider' => false,
        'provider_image_75' => false,
        'provider_image_200' => false,
        'servicelevel' => false,
        'shipment' => false,
        'test' => false,
        'zone' => false
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
        'amount' => 'amount',
        'amount_local' => 'amount_local',
        'currency' => 'currency',
        'currency_local' => 'currency_local',
        'arrives_by' => 'arrives_by',
        'attributes' => 'attributes',
        'carrier_account' => 'carrier_account',
        'duration_terms' => 'duration_terms',
        'estimated_days' => 'estimated_days',
        'included_insurance_price' => 'included_insurance_price',
        'messages' => 'messages',
        'object_created' => 'object_created',
        'object_id' => 'object_id',
        'object_owner' => 'object_owner',
        'provider' => 'provider',
        'provider_image_75' => 'provider_image_75',
        'provider_image_200' => 'provider_image_200',
        'servicelevel' => 'servicelevel',
        'shipment' => 'shipment',
        'test' => 'test',
        'zone' => 'zone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'amount_local' => 'setAmountLocal',
        'currency' => 'setCurrency',
        'currency_local' => 'setCurrencyLocal',
        'arrives_by' => 'setArrivesBy',
        'attributes' => 'setAttributes',
        'carrier_account' => 'setCarrierAccount',
        'duration_terms' => 'setDurationTerms',
        'estimated_days' => 'setEstimatedDays',
        'included_insurance_price' => 'setIncludedInsurancePrice',
        'messages' => 'setMessages',
        'object_created' => 'setObjectCreated',
        'object_id' => 'setObjectId',
        'object_owner' => 'setObjectOwner',
        'provider' => 'setProvider',
        'provider_image_75' => 'setProviderImage75',
        'provider_image_200' => 'setProviderImage200',
        'servicelevel' => 'setServicelevel',
        'shipment' => 'setShipment',
        'test' => 'setTest',
        'zone' => 'setZone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'amount_local' => 'getAmountLocal',
        'currency' => 'getCurrency',
        'currency_local' => 'getCurrencyLocal',
        'arrives_by' => 'getArrivesBy',
        'attributes' => 'getAttributes',
        'carrier_account' => 'getCarrierAccount',
        'duration_terms' => 'getDurationTerms',
        'estimated_days' => 'getEstimatedDays',
        'included_insurance_price' => 'getIncludedInsurancePrice',
        'messages' => 'getMessages',
        'object_created' => 'getObjectCreated',
        'object_id' => 'getObjectId',
        'object_owner' => 'getObjectOwner',
        'provider' => 'getProvider',
        'provider_image_75' => 'getProviderImage75',
        'provider_image_200' => 'getProviderImage200',
        'servicelevel' => 'getServicelevel',
        'shipment' => 'getShipment',
        'test' => 'getTest',
        'zone' => 'getZone'
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

    public const ATTRIBUTES_BESTVALUE = 'BESTVALUE';
    public const ATTRIBUTES_CHEAPEST = 'CHEAPEST';
    public const ATTRIBUTES_FASTEST = 'FASTEST';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAttributesAllowableValues()
    {
        return [
            self::ATTRIBUTES_BESTVALUE,
            self::ATTRIBUTES_CHEAPEST,
            self::ATTRIBUTES_FASTEST,
        ];
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('amount_local', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('currency_local', $data ?? [], null);
        $this->setIfExists('arrives_by', $data ?? [], null);
        $this->setIfExists('attributes', $data ?? [], null);
        $this->setIfExists('carrier_account', $data ?? [], null);
        $this->setIfExists('duration_terms', $data ?? [], null);
        $this->setIfExists('estimated_days', $data ?? [], null);
        $this->setIfExists('included_insurance_price', $data ?? [], null);
        $this->setIfExists('messages', $data ?? [], null);
        $this->setIfExists('object_created', $data ?? [], null);
        $this->setIfExists('object_id', $data ?? [], null);
        $this->setIfExists('object_owner', $data ?? [], null);
        $this->setIfExists('provider', $data ?? [], null);
        $this->setIfExists('provider_image_75', $data ?? [], null);
        $this->setIfExists('provider_image_200', $data ?? [], null);
        $this->setIfExists('servicelevel', $data ?? [], null);
        $this->setIfExists('shipment', $data ?? [], null);
        $this->setIfExists('test', $data ?? [], null);
        $this->setIfExists('zone', $data ?? [], null);
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

        if ($this->container['attributes'] === null) {
            $invalidProperties[] = "'attributes' can't be null";
        }
        if ($this->container['carrier_account'] === null) {
            $invalidProperties[] = "'carrier_account' can't be null";
        }
        if ($this->container['object_created'] === null) {
            $invalidProperties[] = "'object_created' can't be null";
        }
        if ($this->container['object_id'] === null) {
            $invalidProperties[] = "'object_id' can't be null";
        }
        if ($this->container['object_owner'] === null) {
            $invalidProperties[] = "'object_owner' can't be null";
        }
        if ($this->container['provider'] === null) {
            $invalidProperties[] = "'provider' can't be null";
        }
        if ($this->container['servicelevel'] === null) {
            $invalidProperties[] = "'servicelevel' can't be null";
        }
        if ($this->container['shipment'] === null) {
            $invalidProperties[] = "'shipment' can't be null";
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
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount Final Rate price, expressed in the currency used in the sender's country.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amount_local
     *
     * @return string|null
     */
    public function getAmountLocal()
    {
        return $this->container['amount_local'];
    }

    /**
     * Sets amount_local
     *
     * @param string|null $amount_local Final Rate price, expressed in the currency used in the recipient's country.
     *
     * @return self
     */
    public function setAmountLocal($amount_local)
    {
        if (is_null($amount_local)) {
            throw new \InvalidArgumentException('non-nullable amount_local cannot be null');
        }
        $this->container['amount_local'] = $amount_local;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Currency used in the sender's country, refers to `amount`.  The <a href=\"http://www.xe.com/iso4217.php\">official ISO 4217</a> currency codes are used, e.g. `USD` or `EUR`.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets currency_local
     *
     * @return string|null
     */
    public function getCurrencyLocal()
    {
        return $this->container['currency_local'];
    }

    /**
     * Sets currency_local
     *
     * @param string|null $currency_local Currency used in the recipient's country, refers to `amount_local`.  The <a href=\"http://www.xe.com/iso4217.php\">official ISO 4217</a> currency codes are used, e.g. `USD` or \"EUR\".
     *
     * @return self
     */
    public function setCurrencyLocal($currency_local)
    {
        if (is_null($currency_local)) {
            throw new \InvalidArgumentException('non-nullable currency_local cannot be null');
        }
        $this->container['currency_local'] = $currency_local;

        return $this;
    }

    /**
     * Gets arrives_by
     *
     * @return string|null
     */
    public function getArrivesBy()
    {
        return $this->container['arrives_by'];
    }

    /**
     * Sets arrives_by
     *
     * @param string|null $arrives_by Predicted time the carrier will deliver the package in the destination's local time zone. In the format `HH:MM:SS`.
     *
     * @return self
     */
    public function setArrivesBy($arrives_by)
    {
        if (is_null($arrives_by)) {
            throw new \InvalidArgumentException('non-nullable arrives_by cannot be null');
        }
        $this->container['arrives_by'] = $arrives_by;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return string[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param string[] $attributes An array containing specific attributes of this Rate in context of the entire shipment.  Attributes can be assigned `CHEAPEST`, `FASTEST`, or `BESTVALUE`.
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        if (is_null($attributes)) {
            throw new \InvalidArgumentException('non-nullable attributes cannot be null');
        }
        $allowedValues = $this->getAttributesAllowableValues();
        if (array_diff($attributes, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'attributes', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['attributes'] = $attributes;

        return $this;
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
     * @param string $carrier_account Object ID of the carrier account that has been used to retrieve the rate.
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
     * Gets duration_terms
     *
     * @return string|null
     */
    public function getDurationTerms()
    {
        return $this->container['duration_terms'];
    }

    /**
     * Sets duration_terms
     *
     * @param string|null $duration_terms Further clarification of the transit times.  Often, this includes notes that the transit time as given in \"days\" is only an average, not a guaranteed time.
     *
     * @return self
     */
    public function setDurationTerms($duration_terms)
    {
        if (is_null($duration_terms)) {
            throw new \InvalidArgumentException('non-nullable duration_terms cannot be null');
        }
        $this->container['duration_terms'] = $duration_terms;

        return $this;
    }

    /**
     * Gets estimated_days
     *
     * @return int|null
     */
    public function getEstimatedDays()
    {
        return $this->container['estimated_days'];
    }

    /**
     * Sets estimated_days
     *
     * @param int|null $estimated_days Estimated transit time (duration) in days of the Parcel at the given servicelevel.  Please note that this is not binding, but only an average value as given by the provider.  Shippo is not able to guarantee any transit times.
     *
     * @return self
     */
    public function setEstimatedDays($estimated_days)
    {
        if (is_null($estimated_days)) {
            throw new \InvalidArgumentException('non-nullable estimated_days cannot be null');
        }
        $this->container['estimated_days'] = $estimated_days;

        return $this;
    }

    /**
     * Gets included_insurance_price
     *
     * @return string|null
     */
    public function getIncludedInsurancePrice()
    {
        return $this->container['included_insurance_price'];
    }

    /**
     * Sets included_insurance_price
     *
     * @param string|null $included_insurance_price Cost to the user to insure the Rate for the requested amount of coverage, if insurance coverage was requested.  Expressed in the currency used in the sender's country. Will be null if no insurance coverage was requested, or if insurance is requested from a non-standard insurance provider.  Please note this price is already included in the `amount` and `amount_local` fields on the Rate. Do not add this field to them.
     *
     * @return self
     */
    public function setIncludedInsurancePrice($included_insurance_price)
    {
        if (is_null($included_insurance_price)) {
            throw new \InvalidArgumentException('non-nullable included_insurance_price cannot be null');
        }
        $this->container['included_insurance_price'] = $included_insurance_price;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return \OpenAPI\Client\Model\ResponseMessage[]|null
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param \OpenAPI\Client\Model\ResponseMessage[]|null $messages messages
     *
     * @return self
     */
    public function setMessages($messages)
    {
        if (is_null($messages)) {
            throw new \InvalidArgumentException('non-nullable messages cannot be null');
        }
        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets object_created
     *
     * @return \DateTime
     */
    public function getObjectCreated()
    {
        return $this->container['object_created'];
    }

    /**
     * Sets object_created
     *
     * @param \DateTime $object_created Date and time of Rate creation.
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
     * @return string
     */
    public function getObjectId()
    {
        return $this->container['object_id'];
    }

    /**
     * Sets object_id
     *
     * @param string $object_id Unique identifier of the given Rate object.
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
     * @return string
     */
    public function getObjectOwner()
    {
        return $this->container['object_owner'];
    }

    /**
     * Sets object_owner
     *
     * @param string $object_owner Username of the user who created the rate object.
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
     * Gets provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string $provider Carrier offering the rate, e.g., `FedEx` or `Deutsche Post DHL`.
     *
     * @return self
     */
    public function setProvider($provider)
    {
        if (is_null($provider)) {
            throw new \InvalidArgumentException('non-nullable provider cannot be null');
        }
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets provider_image_75
     *
     * @return string|null
     */
    public function getProviderImage75()
    {
        return $this->container['provider_image_75'];
    }

    /**
     * Sets provider_image_75
     *
     * @param string|null $provider_image_75 URL to the provider logo with max. dimensions of 75*75px.  Please refer to the provider's Logo Usage Guidelines before using the logo.
     *
     * @return self
     */
    public function setProviderImage75($provider_image_75)
    {
        if (is_null($provider_image_75)) {
            throw new \InvalidArgumentException('non-nullable provider_image_75 cannot be null');
        }
        $this->container['provider_image_75'] = $provider_image_75;

        return $this;
    }

    /**
     * Gets provider_image_200
     *
     * @return string|null
     */
    public function getProviderImage200()
    {
        return $this->container['provider_image_200'];
    }

    /**
     * Sets provider_image_200
     *
     * @param string|null $provider_image_200 URL to the provider logo with max. dimensions of 200*200px.  Please refer to the provider's Logo Usage Guidelines before using the logo.
     *
     * @return self
     */
    public function setProviderImage200($provider_image_200)
    {
        if (is_null($provider_image_200)) {
            throw new \InvalidArgumentException('non-nullable provider_image_200 cannot be null');
        }
        $this->container['provider_image_200'] = $provider_image_200;

        return $this;
    }

    /**
     * Gets servicelevel
     *
     * @return \OpenAPI\Client\Model\ServiceLevelWithParent
     */
    public function getServicelevel()
    {
        return $this->container['servicelevel'];
    }

    /**
     * Sets servicelevel
     *
     * @param \OpenAPI\Client\Model\ServiceLevelWithParent $servicelevel servicelevel
     *
     * @return self
     */
    public function setServicelevel($servicelevel)
    {
        if (is_null($servicelevel)) {
            throw new \InvalidArgumentException('non-nullable servicelevel cannot be null');
        }
        $this->container['servicelevel'] = $servicelevel;

        return $this;
    }

    /**
     * Gets shipment
     *
     * @return string
     */
    public function getShipment()
    {
        return $this->container['shipment'];
    }

    /**
     * Sets shipment
     *
     * @param string $shipment shipment
     *
     * @return self
     */
    public function setShipment($shipment)
    {
        if (is_null($shipment)) {
            throw new \InvalidArgumentException('non-nullable shipment cannot be null');
        }
        $this->container['shipment'] = $shipment;

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
     * Gets zone
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->container['zone'];
    }

    /**
     * Sets zone
     *
     * @param string|null $zone The parcel's transit zone token. These tokens can vary depending on the provider.
     *
     * @return self
     */
    public function setZone($zone)
    {
        if (is_null($zone)) {
            throw new \InvalidArgumentException('non-nullable zone cannot be null');
        }
        $this->container['zone'] = $zone;

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


