<?php
/**
 * ShipmentPackagesInner
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
 * ShipmentPackagesInner Class Doc Comment
 *
 * @category Class
 * @package  Arta\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipmentPackagesInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'shipment_packages_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'depth' => 'string',
        'eta' => 'string',
        'handle_with_care' => 'bool',
        'height' => 'string',
        'id' => 'int',
        'is_sufficiently_packed' => 'bool',
        'objects' => '\Arta\Client\Model\ShipmentPackagesInnerObjectsInner[]',
        'packing_materials' => 'string[]',
        'status' => 'string',
        'unit_of_measurement' => 'string',
        'weight' => 'string',
        'weight_unit' => 'string',
        'width' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'depth' => null,
        'eta' => null,
        'handle_with_care' => null,
        'height' => null,
        'id' => null,
        'is_sufficiently_packed' => null,
        'objects' => null,
        'packing_materials' => null,
        'status' => null,
        'unit_of_measurement' => null,
        'weight' => null,
        'weight_unit' => null,
        'width' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'depth' => false,
		'eta' => true,
		'handle_with_care' => false,
		'height' => false,
		'id' => false,
		'is_sufficiently_packed' => false,
		'objects' => false,
		'packing_materials' => false,
		'status' => true,
		'unit_of_measurement' => false,
		'weight' => false,
		'weight_unit' => false,
		'width' => false
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
        'depth' => 'depth',
        'eta' => 'eta',
        'handle_with_care' => 'handle_with_care',
        'height' => 'height',
        'id' => 'id',
        'is_sufficiently_packed' => 'is_sufficiently_packed',
        'objects' => 'objects',
        'packing_materials' => 'packing_materials',
        'status' => 'status',
        'unit_of_measurement' => 'unit_of_measurement',
        'weight' => 'weight',
        'weight_unit' => 'weight_unit',
        'width' => 'width'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'depth' => 'setDepth',
        'eta' => 'setEta',
        'handle_with_care' => 'setHandleWithCare',
        'height' => 'setHeight',
        'id' => 'setId',
        'is_sufficiently_packed' => 'setIsSufficientlyPacked',
        'objects' => 'setObjects',
        'packing_materials' => 'setPackingMaterials',
        'status' => 'setStatus',
        'unit_of_measurement' => 'setUnitOfMeasurement',
        'weight' => 'setWeight',
        'weight_unit' => 'setWeightUnit',
        'width' => 'setWidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'depth' => 'getDepth',
        'eta' => 'getEta',
        'handle_with_care' => 'getHandleWithCare',
        'height' => 'getHeight',
        'id' => 'getId',
        'is_sufficiently_packed' => 'getIsSufficientlyPacked',
        'objects' => 'getObjects',
        'packing_materials' => 'getPackingMaterials',
        'status' => 'getStatus',
        'unit_of_measurement' => 'getUnitOfMeasurement',
        'weight' => 'getWeight',
        'weight_unit' => 'getWeightUnit',
        'width' => 'getWidth'
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

    public const STATUS_PENDING = 'pending';
    public const STATUS_TRANSIT = 'transit';
    public const STATUS_OUT_FOR_DELIVERY = 'out_for_delivery';
    public const STATUS_DELIVERED = 'delivered';
    public const STATUS_UNKNOWN = 'unknown';
    public const STATUS_NOTFOUND = 'notfound';
    public const STATUS_UNDELIVERED = 'undelivered';
    public const STATUS_EXCEPTION = 'exception';
    public const STATUS_EXPIRED = 'expired';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_TRANSIT,
            self::STATUS_OUT_FOR_DELIVERY,
            self::STATUS_DELIVERED,
            self::STATUS_UNKNOWN,
            self::STATUS_NOTFOUND,
            self::STATUS_UNDELIVERED,
            self::STATUS_EXCEPTION,
            self::STATUS_EXPIRED,
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
        $this->setIfExists('depth', $data ?? [], null);
        $this->setIfExists('eta', $data ?? [], null);
        $this->setIfExists('handle_with_care', $data ?? [], null);
        $this->setIfExists('height', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('is_sufficiently_packed', $data ?? [], null);
        $this->setIfExists('objects', $data ?? [], null);
        $this->setIfExists('packing_materials', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('unit_of_measurement', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('weight_unit', $data ?? [], null);
        $this->setIfExists('width', $data ?? [], null);
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
     * Gets depth
     *
     * @return string|null
     */
    public function getDepth()
    {
        return $this->container['depth'];
    }

    /**
     * Sets depth
     *
     * @param string|null $depth depth
     *
     * @return self
     */
    public function setDepth($depth)
    {
        if (is_null($depth)) {
            throw new \InvalidArgumentException('non-nullable depth cannot be null');
        }
        $this->container['depth'] = $depth;

        return $this;
    }

    /**
     * Gets eta
     *
     * @return string|null
     */
    public function getEta()
    {
        return $this->container['eta'];
    }

    /**
     * Sets eta
     *
     * @param string|null $eta The expected delivery date for this package in the `MM/DD/YYYY` format
     *
     * @return self
     */
    public function setEta($eta)
    {
        if (is_null($eta)) {
            array_push($this->openAPINullablesSetToNull, 'eta');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('eta', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['eta'] = $eta;

        return $this;
    }

    /**
     * Gets handle_with_care
     *
     * @return bool|null
     */
    public function getHandleWithCare()
    {
        return $this->container['handle_with_care'];
    }

    /**
     * Sets handle_with_care
     *
     * @param bool|null $handle_with_care handle_with_care
     *
     * @return self
     */
    public function setHandleWithCare($handle_with_care)
    {
        if (is_null($handle_with_care)) {
            throw new \InvalidArgumentException('non-nullable handle_with_care cannot be null');
        }
        $this->container['handle_with_care'] = $handle_with_care;

        return $this;
    }

    /**
     * Gets height
     *
     * @return string|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param string|null $height height
     *
     * @return self
     */
    public function setHeight($height)
    {
        if (is_null($height)) {
            throw new \InvalidArgumentException('non-nullable height cannot be null');
        }
        $this->container['height'] = $height;

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
     * @param int|null $id The ID of the package
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
     * Gets is_sufficiently_packed
     *
     * @return bool|null
     */
    public function getIsSufficientlyPacked()
    {
        return $this->container['is_sufficiently_packed'];
    }

    /**
     * Sets is_sufficiently_packed
     *
     * @param bool|null $is_sufficiently_packed is_sufficiently_packed
     *
     * @return self
     */
    public function setIsSufficientlyPacked($is_sufficiently_packed)
    {
        if (is_null($is_sufficiently_packed)) {
            throw new \InvalidArgumentException('non-nullable is_sufficiently_packed cannot be null');
        }
        $this->container['is_sufficiently_packed'] = $is_sufficiently_packed;

        return $this;
    }

    /**
     * Gets objects
     *
     * @return \Arta\Client\Model\ShipmentPackagesInnerObjectsInner[]|null
     */
    public function getObjects()
    {
        return $this->container['objects'];
    }

    /**
     * Sets objects
     *
     * @param \Arta\Client\Model\ShipmentPackagesInnerObjectsInner[]|null $objects objects
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
     * Gets packing_materials
     *
     * @return string[]|null
     */
    public function getPackingMaterials()
    {
        return $this->container['packing_materials'];
    }

    /**
     * Sets packing_materials
     *
     * @param string[]|null $packing_materials The list of materials used in this package's constuction
     *
     * @return self
     */
    public function setPackingMaterials($packing_materials)
    {
        if (is_null($packing_materials)) {
            throw new \InvalidArgumentException('non-nullable packing_materials cannot be null');
        }
        $this->container['packing_materials'] = $packing_materials;

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
     * @param string|null $status The current delivery status for this package
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
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
     * Gets unit_of_measurement
     *
     * @return string|null
     */
    public function getUnitOfMeasurement()
    {
        return $this->container['unit_of_measurement'];
    }

    /**
     * Sets unit_of_measurement
     *
     * @param string|null $unit_of_measurement unit_of_measurement
     *
     * @return self
     */
    public function setUnitOfMeasurement($unit_of_measurement)
    {
        if (is_null($unit_of_measurement)) {
            throw new \InvalidArgumentException('non-nullable unit_of_measurement cannot be null');
        }
        $this->container['unit_of_measurement'] = $unit_of_measurement;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return string|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param string|null $weight weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            throw new \InvalidArgumentException('non-nullable weight cannot be null');
        }
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets weight_unit
     *
     * @return string|null
     */
    public function getWeightUnit()
    {
        return $this->container['weight_unit'];
    }

    /**
     * Sets weight_unit
     *
     * @param string|null $weight_unit weight_unit
     *
     * @return self
     */
    public function setWeightUnit($weight_unit)
    {
        if (is_null($weight_unit)) {
            throw new \InvalidArgumentException('non-nullable weight_unit cannot be null');
        }
        $this->container['weight_unit'] = $weight_unit;

        return $this;
    }

    /**
     * Gets width
     *
     * @return string|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param string|null $width width
     *
     * @return self
     */
    public function setWidth($width)
    {
        if (is_null($width)) {
            throw new \InvalidArgumentException('non-nullable width cannot be null');
        }
        $this->container['width'] = $width;

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


