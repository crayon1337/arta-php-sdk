<?php
/**
 * Invoice
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Arta\Client
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

namespace Arta\Client\Model;

use \ArrayAccess;
use \Arta\Client\ObjectSerializer;

/**
 * Invoice Class Doc Comment
 *
 * @category Class
 * @package  Arta\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Invoice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount_owed' => 'string',
        'amount_owed_currency' => 'string',
        'amount_paid' => 'string',
        'amount_paid_currency' => 'string',
        'created_at' => 'string',
        'invoice_url' => 'string',
        'id' => 'int',
        'issued_on' => 'string',
        'shipment_id' => 'string',
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
        'amount_owed' => null,
        'amount_owed_currency' => null,
        'amount_paid' => null,
        'amount_paid_currency' => null,
        'created_at' => null,
        'invoice_url' => null,
        'id' => null,
        'issued_on' => null,
        'shipment_id' => null,
        'status' => null,
        'updated_at' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amount_owed' => false,
		'amount_owed_currency' => false,
		'amount_paid' => false,
		'amount_paid_currency' => false,
		'created_at' => false,
		'invoice_url' => true,
		'id' => false,
		'issued_on' => true,
		'shipment_id' => true,
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
        'amount_owed' => 'amount_owed',
        'amount_owed_currency' => 'amount_owed_currency',
        'amount_paid' => 'amount_paid',
        'amount_paid_currency' => 'amount_paid_currency',
        'created_at' => 'created_at',
        'invoice_url' => 'invoice_url',
        'id' => 'id',
        'issued_on' => 'issued_on',
        'shipment_id' => 'shipment_id',
        'status' => 'status',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount_owed' => 'setAmountOwed',
        'amount_owed_currency' => 'setAmountOwedCurrency',
        'amount_paid' => 'setAmountPaid',
        'amount_paid_currency' => 'setAmountPaidCurrency',
        'created_at' => 'setCreatedAt',
        'invoice_url' => 'setInvoiceUrl',
        'id' => 'setId',
        'issued_on' => 'setIssuedOn',
        'shipment_id' => 'setShipmentId',
        'status' => 'setStatus',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount_owed' => 'getAmountOwed',
        'amount_owed_currency' => 'getAmountOwedCurrency',
        'amount_paid' => 'getAmountPaid',
        'amount_paid_currency' => 'getAmountPaidCurrency',
        'created_at' => 'getCreatedAt',
        'invoice_url' => 'getInvoiceUrl',
        'id' => 'getId',
        'issued_on' => 'getIssuedOn',
        'shipment_id' => 'getShipmentId',
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
        $this->setIfExists('amount_owed', $data ?? [], null);
        $this->setIfExists('amount_owed_currency', $data ?? [], null);
        $this->setIfExists('amount_paid', $data ?? [], null);
        $this->setIfExists('amount_paid_currency', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('invoice_url', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('issued_on', $data ?? [], null);
        $this->setIfExists('shipment_id', $data ?? [], null);
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
     * Gets amount_owed
     *
     * @return string|null
     */
    public function getAmountOwed()
    {
        return $this->container['amount_owed'];
    }

    /**
     * Sets amount_owed
     *
     * @param string|null $amount_owed amount_owed
     *
     * @return self
     */
    public function setAmountOwed($amount_owed)
    {
        if (is_null($amount_owed)) {
            throw new \InvalidArgumentException('non-nullable amount_owed cannot be null');
        }
        $this->container['amount_owed'] = $amount_owed;

        return $this;
    }

    /**
     * Gets amount_owed_currency
     *
     * @return string|null
     */
    public function getAmountOwedCurrency()
    {
        return $this->container['amount_owed_currency'];
    }

    /**
     * Sets amount_owed_currency
     *
     * @param string|null $amount_owed_currency amount_owed_currency
     *
     * @return self
     */
    public function setAmountOwedCurrency($amount_owed_currency)
    {
        if (is_null($amount_owed_currency)) {
            throw new \InvalidArgumentException('non-nullable amount_owed_currency cannot be null');
        }
        $this->container['amount_owed_currency'] = $amount_owed_currency;

        return $this;
    }

    /**
     * Gets amount_paid
     *
     * @return string|null
     */
    public function getAmountPaid()
    {
        return $this->container['amount_paid'];
    }

    /**
     * Sets amount_paid
     *
     * @param string|null $amount_paid amount_paid
     *
     * @return self
     */
    public function setAmountPaid($amount_paid)
    {
        if (is_null($amount_paid)) {
            throw new \InvalidArgumentException('non-nullable amount_paid cannot be null');
        }
        $this->container['amount_paid'] = $amount_paid;

        return $this;
    }

    /**
     * Gets amount_paid_currency
     *
     * @return string|null
     */
    public function getAmountPaidCurrency()
    {
        return $this->container['amount_paid_currency'];
    }

    /**
     * Sets amount_paid_currency
     *
     * @param string|null $amount_paid_currency amount_paid_currency
     *
     * @return self
     */
    public function setAmountPaidCurrency($amount_paid_currency)
    {
        if (is_null($amount_paid_currency)) {
            throw new \InvalidArgumentException('non-nullable amount_paid_currency cannot be null');
        }
        $this->container['amount_paid_currency'] = $amount_paid_currency;

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
     * @param string|null $created_at created_at
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
     * Gets invoice_url
     *
     * @return string|null
     */
    public function getInvoiceUrl()
    {
        return $this->container['invoice_url'];
    }

    /**
     * Sets invoice_url
     *
     * @param string|null $invoice_url invoice_url
     *
     * @return self
     */
    public function setInvoiceUrl($invoice_url)
    {
        if (is_null($invoice_url)) {
            array_push($this->openAPINullablesSetToNull, 'invoice_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('invoice_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['invoice_url'] = $invoice_url;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
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
     * Gets issued_on
     *
     * @return string|null
     */
    public function getIssuedOn()
    {
        return $this->container['issued_on'];
    }

    /**
     * Sets issued_on
     *
     * @param string|null $issued_on issued_on
     *
     * @return self
     */
    public function setIssuedOn($issued_on)
    {
        if (is_null($issued_on)) {
            array_push($this->openAPINullablesSetToNull, 'issued_on');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('issued_on', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['issued_on'] = $issued_on;

        return $this;
    }

    /**
     * Gets shipment_id
     *
     * @return string|null
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param string|null $shipment_id shipment_id
     *
     * @return self
     */
    public function setShipmentId($shipment_id)
    {
        if (is_null($shipment_id)) {
            array_push($this->openAPINullablesSetToNull, 'shipment_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipment_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipment_id'] = $shipment_id;

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
     * @param string|null $updated_at updated_at
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


