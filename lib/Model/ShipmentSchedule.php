<?php
/**
 * ShipmentSchedule
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
 * ShipmentSchedule Class Doc Comment
 *
 * @category Class
 * @package  Arta\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipmentSchedule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'shipment_schedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'delivery_end' => 'string',
        'delivery_start' => 'string',
        'delivery_window_modifier' => 'string',
        'pickup_end' => 'string',
        'pickup_start' => 'string',
        'pickup_window_modifier' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'delivery_end' => null,
        'delivery_start' => null,
        'delivery_window_modifier' => null,
        'pickup_end' => null,
        'pickup_start' => null,
        'pickup_window_modifier' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'delivery_end' => true,
		'delivery_start' => true,
		'delivery_window_modifier' => false,
		'pickup_end' => true,
		'pickup_start' => true,
		'pickup_window_modifier' => false
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
        'delivery_end' => 'delivery_end',
        'delivery_start' => 'delivery_start',
        'delivery_window_modifier' => 'delivery_window_modifier',
        'pickup_end' => 'pickup_end',
        'pickup_start' => 'pickup_start',
        'pickup_window_modifier' => 'pickup_window_modifier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_end' => 'setDeliveryEnd',
        'delivery_start' => 'setDeliveryStart',
        'delivery_window_modifier' => 'setDeliveryWindowModifier',
        'pickup_end' => 'setPickupEnd',
        'pickup_start' => 'setPickupStart',
        'pickup_window_modifier' => 'setPickupWindowModifier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_end' => 'getDeliveryEnd',
        'delivery_start' => 'getDeliveryStart',
        'delivery_window_modifier' => 'getDeliveryWindowModifier',
        'pickup_end' => 'getPickupEnd',
        'pickup_start' => 'getPickupStart',
        'pickup_window_modifier' => 'getPickupWindowModifier'
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
        $this->setIfExists('delivery_end', $data ?? [], null);
        $this->setIfExists('delivery_start', $data ?? [], null);
        $this->setIfExists('delivery_window_modifier', $data ?? [], null);
        $this->setIfExists('pickup_end', $data ?? [], null);
        $this->setIfExists('pickup_start', $data ?? [], null);
        $this->setIfExists('pickup_window_modifier', $data ?? [], null);
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
     * Gets delivery_end
     *
     * @return string|null
     */
    public function getDeliveryEnd()
    {
        return $this->container['delivery_end'];
    }

    /**
     * Sets delivery_end
     *
     * @param string|null $delivery_end delivery_end
     *
     * @return self
     */
    public function setDeliveryEnd($delivery_end)
    {
        if (is_null($delivery_end)) {
            array_push($this->openAPINullablesSetToNull, 'delivery_end');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('delivery_end', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['delivery_end'] = $delivery_end;

        return $this;
    }

    /**
     * Gets delivery_start
     *
     * @return string|null
     */
    public function getDeliveryStart()
    {
        return $this->container['delivery_start'];
    }

    /**
     * Sets delivery_start
     *
     * @param string|null $delivery_start delivery_start
     *
     * @return self
     */
    public function setDeliveryStart($delivery_start)
    {
        if (is_null($delivery_start)) {
            array_push($this->openAPINullablesSetToNull, 'delivery_start');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('delivery_start', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['delivery_start'] = $delivery_start;

        return $this;
    }

    /**
     * Gets delivery_window_modifier
     *
     * @return string|null
     */
    public function getDeliveryWindowModifier()
    {
        return $this->container['delivery_window_modifier'];
    }

    /**
     * Sets delivery_window_modifier
     *
     * @param string|null $delivery_window_modifier A qualifying word indicating how delivery_start and delivery_end together shape the delivery window. When present, values may be \"after,\" \"by,\" \"on,\" or \"between\"
     *
     * @return self
     */
    public function setDeliveryWindowModifier($delivery_window_modifier)
    {
        if (is_null($delivery_window_modifier)) {
            throw new \InvalidArgumentException('non-nullable delivery_window_modifier cannot be null');
        }
        $this->container['delivery_window_modifier'] = $delivery_window_modifier;

        return $this;
    }

    /**
     * Gets pickup_end
     *
     * @return string|null
     */
    public function getPickupEnd()
    {
        return $this->container['pickup_end'];
    }

    /**
     * Sets pickup_end
     *
     * @param string|null $pickup_end pickup_end
     *
     * @return self
     */
    public function setPickupEnd($pickup_end)
    {
        if (is_null($pickup_end)) {
            array_push($this->openAPINullablesSetToNull, 'pickup_end');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pickup_end', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pickup_end'] = $pickup_end;

        return $this;
    }

    /**
     * Gets pickup_start
     *
     * @return string|null
     */
    public function getPickupStart()
    {
        return $this->container['pickup_start'];
    }

    /**
     * Sets pickup_start
     *
     * @param string|null $pickup_start pickup_start
     *
     * @return self
     */
    public function setPickupStart($pickup_start)
    {
        if (is_null($pickup_start)) {
            array_push($this->openAPINullablesSetToNull, 'pickup_start');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pickup_start', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pickup_start'] = $pickup_start;

        return $this;
    }

    /**
     * Gets pickup_window_modifier
     *
     * @return string|null
     */
    public function getPickupWindowModifier()
    {
        return $this->container['pickup_window_modifier'];
    }

    /**
     * Sets pickup_window_modifier
     *
     * @param string|null $pickup_window_modifier A qualifying word indicating how pickup_start and pickup_end together shape the pickup window. When present, values may be \"after,\" \"by,\" \"on,\" or \"between\"
     *
     * @return self
     */
    public function setPickupWindowModifier($pickup_window_modifier)
    {
        if (is_null($pickup_window_modifier)) {
            throw new \InvalidArgumentException('non-nullable pickup_window_modifier cannot be null');
        }
        $this->container['pickup_window_modifier'] = $pickup_window_modifier;

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


