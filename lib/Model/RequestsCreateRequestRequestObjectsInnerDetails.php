<?php
/**
 * RequestsCreateRequestRequestObjectsInnerDetails
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
 * RequestsCreateRequestRequestObjectsInnerDetails Class Doc Comment
 *
 * @category Class
 * @package  Arta\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RequestsCreateRequestRequestObjectsInnerDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'requests_create_request_request_objects_inner_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'materials' => 'string[]',
        'creation_date' => 'string',
        'creator' => 'string',
        'notes' => 'string',
        'title' => 'string',
        'is_fragile' => 'bool',
        'is_cites' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'materials' => null,
        'creation_date' => null,
        'creator' => null,
        'notes' => null,
        'title' => null,
        'is_fragile' => null,
        'is_cites' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'materials' => false,
		'creation_date' => false,
		'creator' => false,
		'notes' => false,
		'title' => false,
		'is_fragile' => false,
		'is_cites' => false
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
        'materials' => 'materials',
        'creation_date' => 'creation_date',
        'creator' => 'creator',
        'notes' => 'notes',
        'title' => 'title',
        'is_fragile' => 'is_fragile',
        'is_cites' => 'is_cites'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'materials' => 'setMaterials',
        'creation_date' => 'setCreationDate',
        'creator' => 'setCreator',
        'notes' => 'setNotes',
        'title' => 'setTitle',
        'is_fragile' => 'setIsFragile',
        'is_cites' => 'setIsCites'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'materials' => 'getMaterials',
        'creation_date' => 'getCreationDate',
        'creator' => 'getCreator',
        'notes' => 'getNotes',
        'title' => 'getTitle',
        'is_fragile' => 'getIsFragile',
        'is_cites' => 'getIsCites'
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
        $this->setIfExists('materials', $data ?? [], null);
        $this->setIfExists('creation_date', $data ?? [], null);
        $this->setIfExists('creator', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('is_fragile', $data ?? [], false);
        $this->setIfExists('is_cites', $data ?? [], false);
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
     * Gets materials
     *
     * @return string[]|null
     * @deprecated
     */
    public function getMaterials()
    {
        return $this->container['materials'];
    }

    /**
     * Sets materials
     *
     * @param string[]|null $materials A list of IDs describing the types of materials used
     *
     * @return self
     * @deprecated
     */
    public function setMaterials($materials)
    {
        if (is_null($materials)) {
            throw new \InvalidArgumentException('non-nullable materials cannot be null');
        }
        $this->container['materials'] = $materials;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param string|null $creation_date Details about the timing in which an object was created
     *
     * @return self
     */
    public function setCreationDate($creation_date)
    {
        if (is_null($creation_date)) {
            throw new \InvalidArgumentException('non-nullable creation_date cannot be null');
        }
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return string|null
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param string|null $creator The creator of the object
     *
     * @return self
     */
    public function setCreator($creator)
    {
        if (is_null($creator)) {
            throw new \InvalidArgumentException('non-nullable creator cannot be null');
        }
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes Any notes about the item
     *
     * @return self
     */
    public function setNotes($notes)
    {
        if (is_null($notes)) {
            throw new \InvalidArgumentException('non-nullable notes cannot be null');
        }
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The object title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets is_fragile
     *
     * @return bool|null
     */
    public function getIsFragile()
    {
        return $this->container['is_fragile'];
    }

    /**
     * Sets is_fragile
     *
     * @param bool|null $is_fragile Set this flag to true is the item is fragile. This may effect packing and handling costs
     *
     * @return self
     */
    public function setIsFragile($is_fragile)
    {
        if (is_null($is_fragile)) {
            throw new \InvalidArgumentException('non-nullable is_fragile cannot be null');
        }
        $this->container['is_fragile'] = $is_fragile;

        return $this;
    }

    /**
     * Gets is_cites
     *
     * @return bool|null
     */
    public function getIsCites()
    {
        return $this->container['is_cites'];
    }

    /**
     * Sets is_cites
     *
     * @param bool|null $is_cites Set to true if the object is governed by the Convention on International Trade in Endangered Species of Wild Fauna and Flora
     *
     * @return self
     */
    public function setIsCites($is_cites)
    {
        if (is_null($is_cites)) {
            throw new \InvalidArgumentException('non-nullable is_cites cannot be null');
        }
        $this->container['is_cites'] = $is_cites;

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


