<?php
/**
 * RequestObjectsInner
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
 * RequestObjectsInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RequestObjectsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'request_objects_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'current_packing' => 'string[]',
        'depth' => 'string',
        'details' => '\OpenAPI\Client\Model\RequestObjectsInnerDetails',
        'height' => 'string',
        'id' => 'int',
        'images' => 'string[]',
        'internal_reference' => 'string',
        'public_reference' => 'string',
        'subtype' => 'string',
        'type' => 'string',
        'width' => 'string',
        'weight' => 'string',
        'unit_of_measurement' => 'string',
        'value' => 'string',
        'value_currency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'current_packing' => null,
        'depth' => null,
        'details' => null,
        'height' => null,
        'id' => null,
        'images' => 'uri',
        'internal_reference' => null,
        'public_reference' => null,
        'subtype' => null,
        'type' => null,
        'width' => null,
        'weight' => null,
        'unit_of_measurement' => null,
        'value' => null,
        'value_currency' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'current_packing' => false,
		'depth' => false,
		'details' => false,
		'height' => false,
		'id' => false,
		'images' => false,
		'internal_reference' => true,
		'public_reference' => true,
		'subtype' => false,
		'type' => false,
		'width' => false,
		'weight' => false,
		'unit_of_measurement' => false,
		'value' => false,
		'value_currency' => false
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
        'current_packing' => 'current_packing',
        'depth' => 'depth',
        'details' => 'details',
        'height' => 'height',
        'id' => 'id',
        'images' => 'images',
        'internal_reference' => 'internal_reference',
        'public_reference' => 'public_reference',
        'subtype' => 'subtype',
        'type' => 'type',
        'width' => 'width',
        'weight' => 'weight',
        'unit_of_measurement' => 'unit_of_measurement',
        'value' => 'value',
        'value_currency' => 'value_currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_packing' => 'setCurrentPacking',
        'depth' => 'setDepth',
        'details' => 'setDetails',
        'height' => 'setHeight',
        'id' => 'setId',
        'images' => 'setImages',
        'internal_reference' => 'setInternalReference',
        'public_reference' => 'setPublicReference',
        'subtype' => 'setSubtype',
        'type' => 'setType',
        'width' => 'setWidth',
        'weight' => 'setWeight',
        'unit_of_measurement' => 'setUnitOfMeasurement',
        'value' => 'setValue',
        'value_currency' => 'setValueCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_packing' => 'getCurrentPacking',
        'depth' => 'getDepth',
        'details' => 'getDetails',
        'height' => 'getHeight',
        'id' => 'getId',
        'images' => 'getImages',
        'internal_reference' => 'getInternalReference',
        'public_reference' => 'getPublicReference',
        'subtype' => 'getSubtype',
        'type' => 'getType',
        'width' => 'getWidth',
        'weight' => 'getWeight',
        'unit_of_measurement' => 'getUnitOfMeasurement',
        'value' => 'getValue',
        'value_currency' => 'getValueCurrency'
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

    public const UNIT_OF_MEASUREMENT_IN = 'in';
    public const UNIT_OF_MEASUREMENT_CM = 'cm';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitOfMeasurementAllowableValues()
    {
        return [
            self::UNIT_OF_MEASUREMENT_IN,
            self::UNIT_OF_MEASUREMENT_CM,
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
        $this->setIfExists('current_packing', $data ?? [], null);
        $this->setIfExists('depth', $data ?? [], null);
        $this->setIfExists('details', $data ?? [], null);
        $this->setIfExists('height', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('images', $data ?? [], null);
        $this->setIfExists('internal_reference', $data ?? [], null);
        $this->setIfExists('public_reference', $data ?? [], null);
        $this->setIfExists('subtype', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('width', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('unit_of_measurement', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('value_currency', $data ?? [], 'USD');
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

        if (!is_null($this->container['internal_reference']) && (mb_strlen($this->container['internal_reference']) > 255)) {
            $invalidProperties[] = "invalid value for 'internal_reference', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['public_reference']) && (mb_strlen($this->container['public_reference']) > 255)) {
            $invalidProperties[] = "invalid value for 'public_reference', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['subtype']) && !preg_match("/^[0-9a-z_]{1,56}$/", $this->container['subtype'])) {
            $invalidProperties[] = "invalid value for 'subtype', must be conform to the pattern /^[0-9a-z_]{1,56}$/.";
        }

        if (!is_null($this->container['type']) && !preg_match("/^[0-9a-z_]{1,56}$/", $this->container['type'])) {
            $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^[0-9a-z_]{1,56}$/.";
        }

        $allowedValues = $this->getUnitOfMeasurementAllowableValues();
        if (!is_null($this->container['unit_of_measurement']) && !in_array($this->container['unit_of_measurement'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'unit_of_measurement', must be one of '%s'",
                $this->container['unit_of_measurement'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['value']) && !preg_match("/^(0|([1-9]+[0-9]*))(\\.[0-9]{1,2})?$/", $this->container['value'])) {
            $invalidProperties[] = "invalid value for 'value', must be conform to the pattern /^(0|([1-9]+[0-9]*))(\\.[0-9]{1,2})?$/.";
        }

        if (!is_null($this->container['value_currency']) && (mb_strlen($this->container['value_currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'value_currency', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['value_currency']) && (mb_strlen($this->container['value_currency']) < 3)) {
            $invalidProperties[] = "invalid value for 'value_currency', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['value_currency']) && !preg_match("/^[A-Z]{3}$/", $this->container['value_currency'])) {
            $invalidProperties[] = "invalid value for 'value_currency', must be conform to the pattern /^[A-Z]{3}$/.";
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
     * Gets current_packing
     *
     * @return string[]|null
     */
    public function getCurrentPacking()
    {
        return $this->container['current_packing'];
    }

    /**
     * Sets current_packing
     *
     * @param string[]|null $current_packing A list of packing subtype IDs describing how the item is currently packed. Options are defined in the Packing Types metadata endpoint
     *
     * @return self
     */
    public function setCurrentPacking($current_packing)
    {
        if (is_null($current_packing)) {
            throw new \InvalidArgumentException('non-nullable current_packing cannot be null');
        }
        $this->container['current_packing'] = $current_packing;

        return $this;
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
     * @param string|null $depth The depth of the object
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
     * Gets details
     *
     * @return \OpenAPI\Client\Model\RequestObjectsInnerDetails|null
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \OpenAPI\Client\Model\RequestObjectsInnerDetails|null $details details
     *
     * @return self
     */
    public function setDetails($details)
    {
        if (is_null($details)) {
            throw new \InvalidArgumentException('non-nullable details cannot be null');
        }
        $this->container['details'] = $details;

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
     * @param string|null $height The height of the object
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
     * @param int|null $id The system-generated ID for this object
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
     * Gets images
     *
     * @return string[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param string[]|null $images A list image urls of the object
     *
     * @return self
     */
    public function setImages($images)
    {
        if (is_null($images)) {
            throw new \InvalidArgumentException('non-nullable images cannot be null');
        }
        $this->container['images'] = $images;

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
     * @param string|null $internal_reference This field can be used to pass through any data about the object you may want returned unaltered for your own later usage
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
            throw new \InvalidArgumentException('invalid length for $internal_reference when calling RequestObjectsInner., must be smaller than or equal to 255.');
        }

        $this->container['internal_reference'] = $internal_reference;

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
     * @param string|null $public_reference A user defined name of the object
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
            throw new \InvalidArgumentException('invalid length for $public_reference when calling RequestObjectsInner., must be smaller than or equal to 255.');
        }

        $this->container['public_reference'] = $public_reference;

        return $this;
    }

    /**
     * Gets subtype
     *
     * @return string|null
     */
    public function getSubtype()
    {
        return $this->container['subtype'];
    }

    /**
     * Sets subtype
     *
     * @param string|null $subtype The object subtype id
     *
     * @return self
     */
    public function setSubtype($subtype)
    {
        if (is_null($subtype)) {
            throw new \InvalidArgumentException('non-nullable subtype cannot be null');
        }

        if ((!preg_match("/^[0-9a-z_]{1,56}$/", ObjectSerializer::toString($subtype)))) {
            throw new \InvalidArgumentException("invalid value for \$subtype when calling RequestObjectsInner., must conform to the pattern /^[0-9a-z_]{1,56}$/.");
        }

        $this->container['subtype'] = $subtype;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The object type id
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }

        if ((!preg_match("/^[0-9a-z_]{1,56}$/", ObjectSerializer::toString($type)))) {
            throw new \InvalidArgumentException("invalid value for \$type when calling RequestObjectsInner., must conform to the pattern /^[0-9a-z_]{1,56}$/.");
        }

        $this->container['type'] = $type;

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
     * @param string|null $width The width of the object
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
     * @param string|null $weight The height of the object
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
        $allowedValues = $this->getUnitOfMeasurementAllowableValues();
        if (!in_array($unit_of_measurement, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'unit_of_measurement', must be one of '%s'",
                    $unit_of_measurement,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['unit_of_measurement'] = $unit_of_measurement;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value value
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }

        if ((!preg_match("/^(0|([1-9]+[0-9]*))(\\.[0-9]{1,2})?$/", ObjectSerializer::toString($value)))) {
            throw new \InvalidArgumentException("invalid value for \$value when calling RequestObjectsInner., must conform to the pattern /^(0|([1-9]+[0-9]*))(\\.[0-9]{1,2})?$/.");
        }

        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets value_currency
     *
     * @return string|null
     */
    public function getValueCurrency()
    {
        return $this->container['value_currency'];
    }

    /**
     * Sets value_currency
     *
     * @param string|null $value_currency ISO 4217 three-letter alphabetic currency code. Options are defined in the Currencies metadata endpoint
     *
     * @return self
     */
    public function setValueCurrency($value_currency)
    {
        if (is_null($value_currency)) {
            throw new \InvalidArgumentException('non-nullable value_currency cannot be null');
        }
        if ((mb_strlen($value_currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $value_currency when calling RequestObjectsInner., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($value_currency) < 3)) {
            throw new \InvalidArgumentException('invalid length for $value_currency when calling RequestObjectsInner., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/^[A-Z]{3}$/", ObjectSerializer::toString($value_currency)))) {
            throw new \InvalidArgumentException("invalid value for \$value_currency when calling RequestObjectsInner., must conform to the pattern /^[A-Z]{3}$/.");
        }

        $this->container['value_currency'] = $value_currency;

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


