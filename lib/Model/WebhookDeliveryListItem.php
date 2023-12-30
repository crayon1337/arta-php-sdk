<?php
/**
 * WebhookDeliveryListItem
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
 * WebhookDeliveryListItem Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebhookDeliveryListItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'webhookDeliveryListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'created_at' => 'string',
        'next_retry' => 'string',
        'id' => 'string',
        'resource_id' => 'string',
        'resource_type' => 'string',
        'response_status_code' => 'float',
        'status' => 'string',
        'type' => 'string',
        'webhook_id' => 'int',
        'webhook_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'created_at' => null,
        'next_retry' => null,
        'id' => null,
        'resource_id' => null,
        'resource_type' => null,
        'response_status_code' => null,
        'status' => null,
        'type' => null,
        'webhook_id' => null,
        'webhook_url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'created_at' => false,
		'next_retry' => true,
		'id' => false,
		'resource_id' => false,
		'resource_type' => false,
		'response_status_code' => false,
		'status' => false,
		'type' => false,
		'webhook_id' => false,
		'webhook_url' => false
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
        'created_at' => 'created_at',
        'next_retry' => 'next_retry',
        'id' => 'id',
        'resource_id' => 'resource_id',
        'resource_type' => 'resource_type',
        'response_status_code' => 'response_status_code',
        'status' => 'status',
        'type' => 'type',
        'webhook_id' => 'webhook_id',
        'webhook_url' => 'webhook_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'next_retry' => 'setNextRetry',
        'id' => 'setId',
        'resource_id' => 'setResourceId',
        'resource_type' => 'setResourceType',
        'response_status_code' => 'setResponseStatusCode',
        'status' => 'setStatus',
        'type' => 'setType',
        'webhook_id' => 'setWebhookId',
        'webhook_url' => 'setWebhookUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'next_retry' => 'getNextRetry',
        'id' => 'getId',
        'resource_id' => 'getResourceId',
        'resource_type' => 'getResourceType',
        'response_status_code' => 'getResponseStatusCode',
        'status' => 'getStatus',
        'type' => 'getType',
        'webhook_id' => 'getWebhookId',
        'webhook_url' => 'getWebhookUrl'
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

    public const RESOURCE_TYPE_PING = 'ping';
    public const RESOURCE_TYPE_REQUEST = 'request';
    public const RESOURCE_TYPE_SHIPMENT = 'shipment';
    public const STATUS_DELIVERED = 'delivered';
    public const STATUS_FAILED = 'failed';
    public const TYPE_PING = 'ping';
    public const TYPE_REQUEST_CREATED = 'request.created';
    public const TYPE_REQUEST_SHARED = 'request.shared';
    public const TYPE_REQUEST_STATUS_UPDATED = 'request.status.updated';
    public const TYPE_REQUEST_UPDATED = 'request.updated';
    public const TYPE_SHIPMENT_CREATED = 'shipment.created';
    public const TYPE_SHIPMENT_EEI_FORM_STATUS_UPDATED = 'shipment.eei_form_status.updated';
    public const TYPE_SHIPMENT_EXCEPTIONS_UPDATED = 'shipment.exceptions.updated';
    public const TYPE_SHIPMENT_SCHEDULE_UPDATED = 'shipment.schedule.updated';
    public const TYPE_SHIPMENT_STATUS_UPDATED = 'shipment.status.updated';
    public const TYPE_SHIPMENT_TRACKING_UPDATED = 'shipment.tracking.updated';
    public const TYPE_SHIPMENT_UPDATED = 'shipment.updated';
    public const TYPE_SHIPMENT_EXCEPTION_CREATED = 'shipment_exception.created';
    public const TYPE_SHIPMENT_EXCEPTION_STATUS_UPDATED = 'shipment_exception.status.updated';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_PING,
            self::RESOURCE_TYPE_REQUEST,
            self::RESOURCE_TYPE_SHIPMENT,
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
            self::STATUS_DELIVERED,
            self::STATUS_FAILED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PING,
            self::TYPE_REQUEST_CREATED,
            self::TYPE_REQUEST_SHARED,
            self::TYPE_REQUEST_STATUS_UPDATED,
            self::TYPE_REQUEST_UPDATED,
            self::TYPE_SHIPMENT_CREATED,
            self::TYPE_SHIPMENT_EEI_FORM_STATUS_UPDATED,
            self::TYPE_SHIPMENT_EXCEPTIONS_UPDATED,
            self::TYPE_SHIPMENT_SCHEDULE_UPDATED,
            self::TYPE_SHIPMENT_STATUS_UPDATED,
            self::TYPE_SHIPMENT_TRACKING_UPDATED,
            self::TYPE_SHIPMENT_UPDATED,
            self::TYPE_SHIPMENT_EXCEPTION_CREATED,
            self::TYPE_SHIPMENT_EXCEPTION_STATUS_UPDATED,
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
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('next_retry', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('resource_id', $data ?? [], null);
        $this->setIfExists('resource_type', $data ?? [], null);
        $this->setIfExists('response_status_code', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('webhook_id', $data ?? [], null);
        $this->setIfExists('webhook_url', $data ?? [], null);
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

        $allowedValues = $this->getResourceTypeAllowableValues();
        if (!is_null($this->container['resource_type']) && !in_array($this->container['resource_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'resource_type', must be one of '%s'",
                $this->container['resource_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets next_retry
     *
     * @return string|null
     */
    public function getNextRetry()
    {
        return $this->container['next_retry'];
    }

    /**
     * Sets next_retry
     *
     * @param string|null $next_retry The UTC timestamp describing when a follow up webhook delivery event will be attempted if this one has failed
     *
     * @return self
     */
    public function setNextRetry($next_retry)
    {
        if (is_null($next_retry)) {
            array_push($this->openAPINullablesSetToNull, 'next_retry');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('next_retry', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['next_retry'] = $next_retry;

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
     * @param string|null $id The string ID for this webhook delivery resource
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
     * Gets resource_id
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->container['resource_id'];
    }

    /**
     * Sets resource_id
     *
     * @param string|null $resource_id The ID of the resource that triggered the webhook event
     *
     * @return self
     */
    public function setResourceId($resource_id)
    {
        if (is_null($resource_id)) {
            throw new \InvalidArgumentException('non-nullable resource_id cannot be null');
        }
        $this->container['resource_id'] = $resource_id;

        return $this;
    }

    /**
     * Gets resource_type
     *
     * @return string|null
     */
    public function getResourceType()
    {
        return $this->container['resource_type'];
    }

    /**
     * Sets resource_type
     *
     * @param string|null $resource_type The type of resource that triggered the webhook event
     *
     * @return self
     */
    public function setResourceType($resource_type)
    {
        if (is_null($resource_type)) {
            throw new \InvalidArgumentException('non-nullable resource_type cannot be null');
        }
        $allowedValues = $this->getResourceTypeAllowableValues();
        if (!in_array($resource_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'resource_type', must be one of '%s'",
                    $resource_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['resource_type'] = $resource_type;

        return $this;
    }

    /**
     * Gets response_status_code
     *
     * @return float|null
     */
    public function getResponseStatusCode()
    {
        return $this->container['response_status_code'];
    }

    /**
     * Sets response_status_code
     *
     * @param float|null $response_status_code response_status_code
     *
     * @return self
     */
    public function setResponseStatusCode($response_status_code)
    {
        if (is_null($response_status_code)) {
            throw new \InvalidArgumentException('non-nullable response_status_code cannot be null');
        }
        $this->container['response_status_code'] = $response_status_code;

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
     * @param string|null $status The status of the webhook delivery event
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
     * @param string|null $type The type of webhook delivery sent to your endpoint
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets webhook_id
     *
     * @return int|null
     */
    public function getWebhookId()
    {
        return $this->container['webhook_id'];
    }

    /**
     * Sets webhook_id
     *
     * @param int|null $webhook_id The ID belonging to your webhook endpoint in Arta's system
     *
     * @return self
     */
    public function setWebhookId($webhook_id)
    {
        if (is_null($webhook_id)) {
            throw new \InvalidArgumentException('non-nullable webhook_id cannot be null');
        }
        $this->container['webhook_id'] = $webhook_id;

        return $this;
    }

    /**
     * Gets webhook_url
     *
     * @return string|null
     */
    public function getWebhookUrl()
    {
        return $this->container['webhook_url'];
    }

    /**
     * Sets webhook_url
     *
     * @param string|null $webhook_url The URL belonging to your webhook endpoint in Arta's system at the time Arta attempted delivery of the webhook event
     *
     * @return self
     */
    public function setWebhookUrl($webhook_url)
    {
        if (is_null($webhook_url)) {
            throw new \InvalidArgumentException('non-nullable webhook_url cannot be null');
        }
        $this->container['webhook_url'] = $webhook_url;

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


