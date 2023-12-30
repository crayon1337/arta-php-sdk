<?php
/**
 * ShipmentInsurancePolicy
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
 * ShipmentInsurancePolicy Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipmentInsurancePolicy implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'shipment_insurance_policy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'amount_currency' => 'string',
        'id' => 'string',
        'insured_value' => 'string',
        'insured_value_currency' => 'string'
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
        'amount_currency' => null,
        'id' => null,
        'insured_value' => null,
        'insured_value_currency' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amount' => false,
		'amount_currency' => false,
		'id' => false,
		'insured_value' => false,
		'insured_value_currency' => false
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
        'amount_currency' => 'amount_currency',
        'id' => 'id',
        'insured_value' => 'insured_value',
        'insured_value_currency' => 'insured_value_currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'amount_currency' => 'setAmountCurrency',
        'id' => 'setId',
        'insured_value' => 'setInsuredValue',
        'insured_value_currency' => 'setInsuredValueCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'amount_currency' => 'getAmountCurrency',
        'id' => 'getId',
        'insured_value' => 'getInsuredValue',
        'insured_value_currency' => 'getInsuredValueCurrency'
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('amount_currency', $data ?? [], 'USD');
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('insured_value', $data ?? [], null);
        $this->setIfExists('insured_value_currency', $data ?? [], 'USD');
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

        if (!is_null($this->container['amount_currency']) && (mb_strlen($this->container['amount_currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'amount_currency', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['amount_currency']) && (mb_strlen($this->container['amount_currency']) < 3)) {
            $invalidProperties[] = "invalid value for 'amount_currency', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['amount_currency']) && !preg_match("/^[A-Z]{3}$/", $this->container['amount_currency'])) {
            $invalidProperties[] = "invalid value for 'amount_currency', must be conform to the pattern /^[A-Z]{3}$/.";
        }

        if (!is_null($this->container['insured_value_currency']) && (mb_strlen($this->container['insured_value_currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'insured_value_currency', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['insured_value_currency']) && (mb_strlen($this->container['insured_value_currency']) < 3)) {
            $invalidProperties[] = "invalid value for 'insured_value_currency', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['insured_value_currency']) && !preg_match("/^[A-Z]{3}$/", $this->container['insured_value_currency'])) {
            $invalidProperties[] = "invalid value for 'insured_value_currency', must be conform to the pattern /^[A-Z]{3}$/.";
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
     * @param string|null $amount amount
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
     * Gets amount_currency
     *
     * @return string|null
     */
    public function getAmountCurrency()
    {
        return $this->container['amount_currency'];
    }

    /**
     * Sets amount_currency
     *
     * @param string|null $amount_currency The currency of the insurance amount. Formatted as ISO 4217 three-letter alphabetic currency code
     *
     * @return self
     */
    public function setAmountCurrency($amount_currency)
    {
        if (is_null($amount_currency)) {
            throw new \InvalidArgumentException('non-nullable amount_currency cannot be null');
        }
        if ((mb_strlen($amount_currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $amount_currency when calling ShipmentInsurancePolicy., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($amount_currency) < 3)) {
            throw new \InvalidArgumentException('invalid length for $amount_currency when calling ShipmentInsurancePolicy., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/^[A-Z]{3}$/", ObjectSerializer::toString($amount_currency)))) {
            throw new \InvalidArgumentException("invalid value for \$amount_currency when calling ShipmentInsurancePolicy., must conform to the pattern /^[A-Z]{3}$/.");
        }

        $this->container['amount_currency'] = $amount_currency;

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
     * Gets insured_value
     *
     * @return string|null
     */
    public function getInsuredValue()
    {
        return $this->container['insured_value'];
    }

    /**
     * Sets insured_value
     *
     * @param string|null $insured_value insured_value
     *
     * @return self
     */
    public function setInsuredValue($insured_value)
    {
        if (is_null($insured_value)) {
            throw new \InvalidArgumentException('non-nullable insured_value cannot be null');
        }
        $this->container['insured_value'] = $insured_value;

        return $this;
    }

    /**
     * Gets insured_value_currency
     *
     * @return string|null
     */
    public function getInsuredValueCurrency()
    {
        return $this->container['insured_value_currency'];
    }

    /**
     * Sets insured_value_currency
     *
     * @param string|null $insured_value_currency The currency of the insurance amount. Formatted as ISO 4217 three-letter alphabetic currency code
     *
     * @return self
     */
    public function setInsuredValueCurrency($insured_value_currency)
    {
        if (is_null($insured_value_currency)) {
            throw new \InvalidArgumentException('non-nullable insured_value_currency cannot be null');
        }
        if ((mb_strlen($insured_value_currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $insured_value_currency when calling ShipmentInsurancePolicy., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($insured_value_currency) < 3)) {
            throw new \InvalidArgumentException('invalid length for $insured_value_currency when calling ShipmentInsurancePolicy., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/^[A-Z]{3}$/", ObjectSerializer::toString($insured_value_currency)))) {
            throw new \InvalidArgumentException("invalid value for \$insured_value_currency when calling ShipmentInsurancePolicy., must conform to the pattern /^[A-Z]{3}$/.");
        }

        $this->container['insured_value_currency'] = $insured_value_currency;

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

