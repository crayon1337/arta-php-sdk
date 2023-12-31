<?php
/**
 * Log
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
 * Log Class Doc Comment
 *
 * @category Class
 * @package  Arta\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Log implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'log';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'api_key_id' => 'int',
        'arta_version' => 'string',
        'end_at' => 'string',
        'id' => 'int',
        'created_at' => 'string',
        'method' => 'string',
        'path' => 'string',
        'query_params' => 'string',
        'request_body' => 'string',
        'request_id' => 'string',
        'response_body' => 'string',
        'start_at' => 'string',
        'status' => 'int',
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
        'api_key_id' => 'int64',
        'arta_version' => null,
        'end_at' => null,
        'id' => 'int64',
        'created_at' => null,
        'method' => null,
        'path' => null,
        'query_params' => null,
        'request_body' => null,
        'request_id' => null,
        'response_body' => null,
        'start_at' => null,
        'status' => 'int64',
        'updated_at' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'api_key_id' => false,
		'arta_version' => false,
		'end_at' => false,
		'id' => false,
		'created_at' => false,
		'method' => false,
		'path' => false,
		'query_params' => false,
		'request_body' => false,
		'request_id' => false,
		'response_body' => false,
		'start_at' => false,
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
        'api_key_id' => 'api_key_id',
        'arta_version' => 'arta_version',
        'end_at' => 'end_at',
        'id' => 'id',
        'created_at' => 'created_at',
        'method' => 'method',
        'path' => 'path',
        'query_params' => 'query_params',
        'request_body' => 'request_body',
        'request_id' => 'request_id',
        'response_body' => 'response_body',
        'start_at' => 'start_at',
        'status' => 'status',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_key_id' => 'setApiKeyId',
        'arta_version' => 'setArtaVersion',
        'end_at' => 'setEndAt',
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'method' => 'setMethod',
        'path' => 'setPath',
        'query_params' => 'setQueryParams',
        'request_body' => 'setRequestBody',
        'request_id' => 'setRequestId',
        'response_body' => 'setResponseBody',
        'start_at' => 'setStartAt',
        'status' => 'setStatus',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_key_id' => 'getApiKeyId',
        'arta_version' => 'getArtaVersion',
        'end_at' => 'getEndAt',
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'method' => 'getMethod',
        'path' => 'getPath',
        'query_params' => 'getQueryParams',
        'request_body' => 'getRequestBody',
        'request_id' => 'getRequestId',
        'response_body' => 'getResponseBody',
        'start_at' => 'getStartAt',
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
        $this->setIfExists('api_key_id', $data ?? [], null);
        $this->setIfExists('arta_version', $data ?? [], null);
        $this->setIfExists('end_at', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('method', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('query_params', $data ?? [], null);
        $this->setIfExists('request_body', $data ?? [], null);
        $this->setIfExists('request_id', $data ?? [], null);
        $this->setIfExists('response_body', $data ?? [], null);
        $this->setIfExists('start_at', $data ?? [], null);
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
     * Gets api_key_id
     *
     * @return int|null
     */
    public function getApiKeyId()
    {
        return $this->container['api_key_id'];
    }

    /**
     * Sets api_key_id
     *
     * @param int|null $api_key_id api_key_id
     *
     * @return self
     */
    public function setApiKeyId($api_key_id)
    {
        if (is_null($api_key_id)) {
            throw new \InvalidArgumentException('non-nullable api_key_id cannot be null');
        }
        $this->container['api_key_id'] = $api_key_id;

        return $this;
    }

    /**
     * Gets arta_version
     *
     * @return string|null
     */
    public function getArtaVersion()
    {
        return $this->container['arta_version'];
    }

    /**
     * Sets arta_version
     *
     * @param string|null $arta_version arta_version
     *
     * @return self
     */
    public function setArtaVersion($arta_version)
    {
        if (is_null($arta_version)) {
            throw new \InvalidArgumentException('non-nullable arta_version cannot be null');
        }
        $this->container['arta_version'] = $arta_version;

        return $this;
    }

    /**
     * Gets end_at
     *
     * @return string|null
     */
    public function getEndAt()
    {
        return $this->container['end_at'];
    }

    /**
     * Sets end_at
     *
     * @param string|null $end_at end_at
     *
     * @return self
     */
    public function setEndAt($end_at)
    {
        if (is_null($end_at)) {
            throw new \InvalidArgumentException('non-nullable end_at cannot be null');
        }
        $this->container['end_at'] = $end_at;

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
     * Gets method
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string|null $method method
     *
     * @return self
     */
    public function setMethod($method)
    {
        if (is_null($method)) {
            throw new \InvalidArgumentException('non-nullable method cannot be null');
        }
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path path
     *
     * @return self
     */
    public function setPath($path)
    {
        if (is_null($path)) {
            throw new \InvalidArgumentException('non-nullable path cannot be null');
        }
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets query_params
     *
     * @return string|null
     */
    public function getQueryParams()
    {
        return $this->container['query_params'];
    }

    /**
     * Sets query_params
     *
     * @param string|null $query_params query_params
     *
     * @return self
     */
    public function setQueryParams($query_params)
    {
        if (is_null($query_params)) {
            throw new \InvalidArgumentException('non-nullable query_params cannot be null');
        }
        $this->container['query_params'] = $query_params;

        return $this;
    }

    /**
     * Gets request_body
     *
     * @return string|null
     */
    public function getRequestBody()
    {
        return $this->container['request_body'];
    }

    /**
     * Sets request_body
     *
     * @param string|null $request_body request_body
     *
     * @return self
     */
    public function setRequestBody($request_body)
    {
        if (is_null($request_body)) {
            throw new \InvalidArgumentException('non-nullable request_body cannot be null');
        }
        $this->container['request_body'] = $request_body;

        return $this;
    }

    /**
     * Gets request_id
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string|null $request_id request_id
     *
     * @return self
     */
    public function setRequestId($request_id)
    {
        if (is_null($request_id)) {
            throw new \InvalidArgumentException('non-nullable request_id cannot be null');
        }
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets response_body
     *
     * @return string|null
     */
    public function getResponseBody()
    {
        return $this->container['response_body'];
    }

    /**
     * Sets response_body
     *
     * @param string|null $response_body response_body
     *
     * @return self
     */
    public function setResponseBody($response_body)
    {
        if (is_null($response_body)) {
            throw new \InvalidArgumentException('non-nullable response_body cannot be null');
        }
        $this->container['response_body'] = $response_body;

        return $this;
    }

    /**
     * Gets start_at
     *
     * @return string|null
     */
    public function getStartAt()
    {
        return $this->container['start_at'];
    }

    /**
     * Sets start_at
     *
     * @param string|null $start_at start_at
     *
     * @return self
     */
    public function setStartAt($start_at)
    {
        if (is_null($start_at)) {
            throw new \InvalidArgumentException('non-nullable start_at cannot be null');
        }
        $this->container['start_at'] = $start_at;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int|null $status status
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


