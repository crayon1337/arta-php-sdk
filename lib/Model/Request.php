<?php
/**
 * Request
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Arta Public API
 *
 * The Arta Public API provides quote generation, transport booking, and tracking capabilities. Additionally the API enables Arta partner organizations to configure email and webhook notifications for their accounts.
 *
 * The version of the OpenAPI document: 2021-01-01
 * Contact: hello@arta.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0
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
 * Request Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Request implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_services' => 'string[]',
        'bookable' => '\OpenAPI\Client\Model\RequestBookable',
        'created_at' => 'string',
        'currency' => 'string',
        'destination' => '\OpenAPI\Client\Model\Location',
        'disqualifications' => '\OpenAPI\Client\Model\RequestDisqualificationsInner[]',
        'hosted_session_id' => 'int',
        'id' => 'string',
        'insurance' => 'string',
        'internal_reference' => 'string',
        'log_request_id' => 'string',
        'object_count' => 'float',
        'objects' => '\OpenAPI\Client\Model\RequestObjectsInner[]',
        'origin' => '\OpenAPI\Client\Model\Location',
        'payment_process' => 'string',
        'preferred_quote_types' => 'string[]',
        'public_reference' => 'string',
        'quote_types' => 'string[]',
        'quotes' => '\OpenAPI\Client\Model\RequestQuotesInner[]',
        'shipping_notes' => 'string',
        'shortcode' => 'string',
        'status' => 'string',
        'updated_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additional_services' => null,
        'bookable' => null,
        'created_at' => null,
        'currency' => null,
        'destination' => null,
        'disqualifications' => null,
        'hosted_session_id' => null,
        'id' => null,
        'insurance' => null,
        'internal_reference' => null,
        'log_request_id' => null,
        'object_count' => null,
        'objects' => null,
        'origin' => null,
        'payment_process' => null,
        'preferred_quote_types' => null,
        'public_reference' => null,
        'quote_types' => null,
        'quotes' => null,
        'shipping_notes' => null,
        'shortcode' => null,
        'status' => null,
        'updated_at' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'additional_services' => false,
		'bookable' => false,
		'created_at' => false,
		'currency' => false,
		'destination' => false,
		'disqualifications' => false,
		'hosted_session_id' => true,
		'id' => false,
		'insurance' => true,
		'internal_reference' => true,
		'log_request_id' => false,
		'object_count' => false,
		'objects' => false,
		'origin' => false,
		'payment_process' => false,
		'preferred_quote_types' => false,
		'public_reference' => true,
		'quote_types' => false,
		'quotes' => false,
		'shipping_notes' => true,
		'shortcode' => false,
		'status' => false,
		'updated_at' => false
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
        'additional_services' => 'additional_services',
        'bookable' => 'bookable',
        'created_at' => 'created_at',
        'currency' => 'currency',
        'destination' => 'destination',
        'disqualifications' => 'disqualifications',
        'hosted_session_id' => 'hosted_session_id',
        'id' => 'id',
        'insurance' => 'insurance',
        'internal_reference' => 'internal_reference',
        'log_request_id' => 'log_request_id',
        'object_count' => 'object_count',
        'objects' => 'objects',
        'origin' => 'origin',
        'payment_process' => 'payment_process',
        'preferred_quote_types' => 'preferred_quote_types',
        'public_reference' => 'public_reference',
        'quote_types' => 'quote_types',
        'quotes' => 'quotes',
        'shipping_notes' => 'shipping_notes',
        'shortcode' => 'shortcode',
        'status' => 'status',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_services' => 'setAdditionalServices',
        'bookable' => 'setBookable',
        'created_at' => 'setCreatedAt',
        'currency' => 'setCurrency',
        'destination' => 'setDestination',
        'disqualifications' => 'setDisqualifications',
        'hosted_session_id' => 'setHostedSessionId',
        'id' => 'setId',
        'insurance' => 'setInsurance',
        'internal_reference' => 'setInternalReference',
        'log_request_id' => 'setLogRequestId',
        'object_count' => 'setObjectCount',
        'objects' => 'setObjects',
        'origin' => 'setOrigin',
        'payment_process' => 'setPaymentProcess',
        'preferred_quote_types' => 'setPreferredQuoteTypes',
        'public_reference' => 'setPublicReference',
        'quote_types' => 'setQuoteTypes',
        'quotes' => 'setQuotes',
        'shipping_notes' => 'setShippingNotes',
        'shortcode' => 'setShortcode',
        'status' => 'setStatus',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_services' => 'getAdditionalServices',
        'bookable' => 'getBookable',
        'created_at' => 'getCreatedAt',
        'currency' => 'getCurrency',
        'destination' => 'getDestination',
        'disqualifications' => 'getDisqualifications',
        'hosted_session_id' => 'getHostedSessionId',
        'id' => 'getId',
        'insurance' => 'getInsurance',
        'internal_reference' => 'getInternalReference',
        'log_request_id' => 'getLogRequestId',
        'object_count' => 'getObjectCount',
        'objects' => 'getObjects',
        'origin' => 'getOrigin',
        'payment_process' => 'getPaymentProcess',
        'preferred_quote_types' => 'getPreferredQuoteTypes',
        'public_reference' => 'getPublicReference',
        'quote_types' => 'getQuoteTypes',
        'quotes' => 'getQuotes',
        'shipping_notes' => 'getShippingNotes',
        'shortcode' => 'getShortcode',
        'status' => 'getStatus',
        'updated_at' => 'getUpdatedAt'
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

    public const PAYMENT_PROCESS_CHECKOUT = 'checkout';
    public const PAYMENT_PROCESS_INVOICING = 'invoicing';
    public const STATUS_QUOTED = 'quoted';
    public const STATUS_IN_PROGRESS = 'in_progress';
    public const STATUS_CANCELLED = 'cancelled';
    public const STATUS_CLOSED = 'closed';
    public const STATUS_DISQUALIFIED = 'disqualified';
    public const STATUS_EXPIRED = 'expired';
    public const STATUS_PENDING = 'pending';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentProcessAllowableValues()
    {
        return [
            self::PAYMENT_PROCESS_CHECKOUT,
            self::PAYMENT_PROCESS_INVOICING,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_QUOTED,
            self::STATUS_IN_PROGRESS,
            self::STATUS_CANCELLED,
            self::STATUS_CLOSED,
            self::STATUS_DISQUALIFIED,
            self::STATUS_EXPIRED,
            self::STATUS_PENDING,
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
        $this->setIfExists('additional_services', $data ?? [], null);
        $this->setIfExists('bookable', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], 'USD');
        $this->setIfExists('destination', $data ?? [], null);
        $this->setIfExists('disqualifications', $data ?? [], null);
        $this->setIfExists('hosted_session_id', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('insurance', $data ?? [], null);
        $this->setIfExists('internal_reference', $data ?? [], null);
        $this->setIfExists('log_request_id', $data ?? [], null);
        $this->setIfExists('object_count', $data ?? [], null);
        $this->setIfExists('objects', $data ?? [], null);
        $this->setIfExists('origin', $data ?? [], null);
        $this->setIfExists('payment_process', $data ?? [], null);
        $this->setIfExists('preferred_quote_types', $data ?? [], null);
        $this->setIfExists('public_reference', $data ?? [], null);
        $this->setIfExists('quote_types', $data ?? [], null);
        $this->setIfExists('quotes', $data ?? [], null);
        $this->setIfExists('shipping_notes', $data ?? [], null);
        $this->setIfExists('shortcode', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) < 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['currency']) && !preg_match("/^[A-Z]{3}$/", $this->container['currency'])) {
            $invalidProperties[] = "invalid value for 'currency', must be conform to the pattern /^[A-Z]{3}$/.";
        }

        if (!is_null($this->container['internal_reference']) && (mb_strlen($this->container['internal_reference']) > 255)) {
            $invalidProperties[] = "invalid value for 'internal_reference', the character length must be smaller than or equal to 255.";
        }

        $allowedValues = $this->getPaymentProcessAllowableValues();
        if (!is_null($this->container['payment_process']) && !in_array($this->container['payment_process'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_process', must be one of '%s'",
                $this->container['payment_process'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['payment_process']) && (mb_strlen($this->container['payment_process']) > 255)) {
            $invalidProperties[] = "invalid value for 'payment_process', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['public_reference']) && (mb_strlen($this->container['public_reference']) > 255)) {
            $invalidProperties[] = "invalid value for 'public_reference', the character length must be smaller than or equal to 255.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
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
     * Gets additional_services
     *
     * @return string[]|null
     */
    public function getAdditionalServices()
    {
        return $this->container['additional_services'];
    }

    /**
     * Sets additional_services
     *
     * @param string[]|null $additional_services Any desired services, such as unpacking, installation, etc. can be sent through in the request and will be treated as if that requested service is required. Requested services may disqualify certain segments of shipping services offered by Arta depending on location and object details.
     *
     * @return self
     */
    public function setAdditionalServices($additional_services)
    {
        if (is_null($additional_services)) {
            throw new \InvalidArgumentException('non-nullable additional_services cannot be null');
        }
        $this->container['additional_services'] = $additional_services;

        return $this;
    }

    /**
     * Gets bookable
     *
     * @return \OpenAPI\Client\Model\RequestBookable|null
     */
    public function getBookable()
    {
        return $this->container['bookable'];
    }

    /**
     * Sets bookable
     *
     * @param \OpenAPI\Client\Model\RequestBookable|null $bookable bookable
     *
     * @return self
     */
    public function setBookable($bookable)
    {
        if (is_null($bookable)) {
            throw new \InvalidArgumentException('non-nullable bookable cannot be null');
        }
        $this->container['bookable'] = $bookable;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at A NaiveDatetime-formatted timestamp describing when the resource was created with microsecond precision
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

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
     * @param string|null $currency ISO 4217 three-letter alphabetic currency code. Options are defined in the Currencies metadata endpoint
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        if ((mb_strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling Request., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($currency) < 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling Request., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/^[A-Z]{3}$/", ObjectSerializer::toString($currency)))) {
            throw new \InvalidArgumentException("invalid value for \$currency when calling Request., must conform to the pattern /^[A-Z]{3}$/.");
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return \OpenAPI\Client\Model\Location|null
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param \OpenAPI\Client\Model\Location|null $destination destination
     *
     * @return self
     */
    public function setDestination($destination)
    {
        if (is_null($destination)) {
            throw new \InvalidArgumentException('non-nullable destination cannot be null');
        }
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets disqualifications
     *
     * @return \OpenAPI\Client\Model\RequestDisqualificationsInner[]|null
     */
    public function getDisqualifications()
    {
        return $this->container['disqualifications'];
    }

    /**
     * Sets disqualifications
     *
     * @param \OpenAPI\Client\Model\RequestDisqualificationsInner[]|null $disqualifications The list of reasons for which particular quote types were disqulified
     *
     * @return self
     */
    public function setDisqualifications($disqualifications)
    {
        if (is_null($disqualifications)) {
            throw new \InvalidArgumentException('non-nullable disqualifications cannot be null');
        }
        $this->container['disqualifications'] = $disqualifications;

        return $this;
    }

    /**
     * Gets hosted_session_id
     *
     * @return int|null
     */
    public function getHostedSessionId()
    {
        return $this->container['hosted_session_id'];
    }

    /**
     * Sets hosted_session_id
     *
     * @param int|null $hosted_session_id The ID of the HostedSession through which this shipment was created
     *
     * @return self
     */
    public function setHostedSessionId($hosted_session_id)
    {
        if (is_null($hosted_session_id)) {
            array_push($this->openAPINullablesSetToNull, 'hosted_session_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hosted_session_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['hosted_session_id'] = $hosted_session_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets insurance
     *
     * @return string|null
     */
    public function getInsurance()
    {
        return $this->container['insurance'];
    }

    /**
     * Sets insurance
     *
     * @param string|null $insurance The id of an insurance type. If requesting Arta insurance, object values must be provided.
     *
     * @return self
     */
    public function setInsurance($insurance)
    {
        if (is_null($insurance)) {
            array_push($this->openAPINullablesSetToNull, 'insurance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('insurance', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['insurance'] = $insurance;

        return $this;
    }

    /**
     * Gets internal_reference
     *
     * @return string|null
     */
    public function getInternalReference()
    {
        return $this->container['internal_reference'];
    }

    /**
     * Sets internal_reference
     *
     * @param string|null $internal_reference This field can be used to pass through any data about the request you may want returned unaltered for your own later usage
     *
     * @return self
     */
    public function setInternalReference($internal_reference)
    {
        if (is_null($internal_reference)) {
            array_push($this->openAPINullablesSetToNull, 'internal_reference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('internal_reference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($internal_reference) && (mb_strlen($internal_reference) > 255)) {
            throw new \InvalidArgumentException('invalid length for $internal_reference when calling Request., must be smaller than or equal to 255.');
        }

        $this->container['internal_reference'] = $internal_reference;

        return $this;
    }

    /**
     * Gets log_request_id
     *
     * @return string|null
     */
    public function getLogRequestId()
    {
        return $this->container['log_request_id'];
    }

    /**
     * Sets log_request_id
     *
     * @param string|null $log_request_id The request ID for the API call that created the resource. This request ID maps to the Log resource's \"request_id\" field
     *
     * @return self
     */
    public function setLogRequestId($log_request_id)
    {
        if (is_null($log_request_id)) {
            throw new \InvalidArgumentException('non-nullable log_request_id cannot be null');
        }
        $this->container['log_request_id'] = $log_request_id;

        return $this;
    }

    /**
     * Gets object_count
     *
     * @return float|null
     */
    public function getObjectCount()
    {
        return $this->container['object_count'];
    }

    /**
     * Sets object_count
     *
     * @param float|null $object_count The count of objects included in the initial request payload
     *
     * @return self
     */
    public function setObjectCount($object_count)
    {
        if (is_null($object_count)) {
            throw new \InvalidArgumentException('non-nullable object_count cannot be null');
        }
        $this->container['object_count'] = $object_count;

        return $this;
    }

    /**
     * Gets objects
     *
     * @return \OpenAPI\Client\Model\RequestObjectsInner[]|null
     */
    public function getObjects()
    {
        return $this->container['objects'];
    }

    /**
     * Sets objects
     *
     * @param \OpenAPI\Client\Model\RequestObjectsInner[]|null $objects objects
     *
     * @return self
     */
    public function setObjects($objects)
    {
        if (is_null($objects)) {
            throw new \InvalidArgumentException('non-nullable objects cannot be null');
        }
        $this->container['objects'] = $objects;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return \OpenAPI\Client\Model\Location|null
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param \OpenAPI\Client\Model\Location|null $origin origin
     *
     * @return self
     */
    public function setOrigin($origin)
    {
        if (is_null($origin)) {
            throw new \InvalidArgumentException('non-nullable origin cannot be null');
        }
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets payment_process
     *
     * @return string|null
     */
    public function getPaymentProcess()
    {
        return $this->container['payment_process'];
    }

    /**
     * Sets payment_process
     *
     * @param string|null $payment_process The primary method by which payment to Arta will be handled for any shipment booked from this request
     *
     * @return self
     */
    public function setPaymentProcess($payment_process)
    {
        if (is_null($payment_process)) {
            throw new \InvalidArgumentException('non-nullable payment_process cannot be null');
        }
        $allowedValues = $this->getPaymentProcessAllowableValues();
        if (!in_array($payment_process, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_process', must be one of '%s'",
                    $payment_process,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($payment_process) > 255)) {
            throw new \InvalidArgumentException('invalid length for $payment_process when calling Request., must be smaller than or equal to 255.');
        }

        $this->container['payment_process'] = $payment_process;

        return $this;
    }

    /**
     * Gets preferred_quote_types
     *
     * @return string[]|null
     */
    public function getPreferredQuoteTypes()
    {
        return $this->container['preferred_quote_types'];
    }

    /**
     * Sets preferred_quote_types
     *
     * @param string[]|null $preferred_quote_types An optional field presenting the list of quote types the caller instructed Arta to return as part of the quote request
     *
     * @return self
     */
    public function setPreferredQuoteTypes($preferred_quote_types)
    {
        if (is_null($preferred_quote_types)) {
            throw new \InvalidArgumentException('non-nullable preferred_quote_types cannot be null');
        }
        $this->container['preferred_quote_types'] = $preferred_quote_types;

        return $this;
    }

    /**
     * Gets public_reference
     *
     * @return string|null
     */
    public function getPublicReference()
    {
        return $this->container['public_reference'];
    }

    /**
     * Sets public_reference
     *
     * @param string|null $public_reference A client defined name for the resource. The value provided for the public_reference field may appear in notification emails and public web pages
     *
     * @return self
     */
    public function setPublicReference($public_reference)
    {
        if (is_null($public_reference)) {
            array_push($this->openAPINullablesSetToNull, 'public_reference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('public_reference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($public_reference) && (mb_strlen($public_reference) > 255)) {
            throw new \InvalidArgumentException('invalid length for $public_reference when calling Request., must be smaller than or equal to 255.');
        }

        $this->container['public_reference'] = $public_reference;

        return $this;
    }

    /**
     * Gets quote_types
     *
     * @return string[]|null
     */
    public function getQuoteTypes()
    {
        return $this->container['quote_types'];
    }

    /**
     * Sets quote_types
     *
     * @param string[]|null $quote_types The list of quote types returned as part of the quotes in this quote request
     *
     * @return self
     */
    public function setQuoteTypes($quote_types)
    {
        if (is_null($quote_types)) {
            throw new \InvalidArgumentException('non-nullable quote_types cannot be null');
        }
        $this->container['quote_types'] = $quote_types;

        return $this;
    }

    /**
     * Gets quotes
     *
     * @return \OpenAPI\Client\Model\RequestQuotesInner[]|null
     */
    public function getQuotes()
    {
        return $this->container['quotes'];
    }

    /**
     * Sets quotes
     *
     * @param \OpenAPI\Client\Model\RequestQuotesInner[]|null $quotes The list of quotes returned for the request
     *
     * @return self
     */
    public function setQuotes($quotes)
    {
        if (is_null($quotes)) {
            throw new \InvalidArgumentException('non-nullable quotes cannot be null');
        }
        $this->container['quotes'] = $quotes;

        return $this;
    }

    /**
     * Gets shipping_notes
     *
     * @return string|null
     */
    public function getShippingNotes()
    {
        return $this->container['shipping_notes'];
    }

    /**
     * Sets shipping_notes
     *
     * @param string|null $shipping_notes This field can be used to pass through any notes to Arta that a customer might want to provide about the request
     *
     * @return self
     */
    public function setShippingNotes($shipping_notes)
    {
        if (is_null($shipping_notes)) {
            array_push($this->openAPINullablesSetToNull, 'shipping_notes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipping_notes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipping_notes'] = $shipping_notes;

        return $this;
    }

    /**
     * Gets shortcode
     *
     * @return string|null
     */
    public function getShortcode()
    {
        return $this->container['shortcode'];
    }

    /**
     * Sets shortcode
     *
     * @param string|null $shortcode A brief and unique string identifier for the request resource
     *
     * @return self
     */
    public function setShortcode($shortcode)
    {
        if (is_null($shortcode)) {
            throw new \InvalidArgumentException('non-nullable shortcode cannot be null');
        }
        $this->container['shortcode'] = $shortcode;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at A NaiveDatetime-formatted timestamp describing when the resource was last updated with microsecond precision
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

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


