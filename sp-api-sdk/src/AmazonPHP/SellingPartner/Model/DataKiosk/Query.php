<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\DataKiosk;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Data Kiosk.
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Query implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const PROCESSING_STATUS_CANCELLED = 'CANCELLED';

    final public const PROCESSING_STATUS_DONE = 'DONE';

    final public const PROCESSING_STATUS_FATAL = 'FATAL';

    final public const PROCESSING_STATUS_IN_PROGRESS = 'IN_PROGRESS';

    final public const PROCESSING_STATUS_IN_QUEUE = 'IN_QUEUE';


    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Query';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'query_id' => 'string',
        'query' => 'string',
        'created_time' => '\DateTimeInterface',
        'processing_status' => 'string',
        'processing_start_time' => '\DateTimeInterface',
        'processing_end_time' => '\DateTimeInterface',
        'data_document_id' => 'string',
        'error_document_id' => 'string',
        'pagination' => '\AmazonPHP\SellingPartner\Model\DataKiosk\Pagination',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'query_id' => null,
        'query' => null,
        'created_time' => 'date-time',
        'processing_status' => null,
        'processing_start_time' => 'date-time',
        'processing_end_time' => 'date-time',
        'data_document_id' => null,
        'error_document_id' => null,
        'pagination' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'query_id' => 'queryId',
        'query' => 'query',
        'created_time' => 'createdTime',
        'processing_status' => 'processingStatus',
        'processing_start_time' => 'processingStartTime',
        'processing_end_time' => 'processingEndTime',
        'data_document_id' => 'dataDocumentId',
        'error_document_id' => 'errorDocumentId',
        'pagination' => 'pagination',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'query_id' => 'setQueryId',
        'query' => 'setQuery',
        'created_time' => 'setCreatedTime',
        'processing_status' => 'setProcessingStatus',
        'processing_start_time' => 'setProcessingStartTime',
        'processing_end_time' => 'setProcessingEndTime',
        'data_document_id' => 'setDataDocumentId',
        'error_document_id' => 'setErrorDocumentId',
        'pagination' => 'setPagination',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'query_id' => 'getQueryId',
        'query' => 'getQuery',
        'created_time' => 'getCreatedTime',
        'processing_status' => 'getProcessingStatus',
        'processing_start_time' => 'getProcessingStartTime',
        'processing_end_time' => 'getProcessingEndTime',
        'data_document_id' => 'getDataDocumentId',
        'error_document_id' => 'getErrorDocumentId',
        'pagination' => 'getPagination',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param null|mixed[] $data Associated array of property values
     *                           initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['query_id'] = $data['query_id'] ?? null;
        $this->container['query'] = $data['query'] ?? null;
        $this->container['created_time'] = $data['created_time'] ?? null;
        $this->container['processing_status'] = $data['processing_status'] ?? null;
        $this->container['processing_start_time'] = $data['processing_start_time'] ?? null;
        $this->container['processing_end_time'] = $data['processing_end_time'] ?? null;
        $this->container['data_document_id'] = $data['data_document_id'] ?? null;
        $this->container['error_document_id'] = $data['error_document_id'] ?? null;
        $this->container['pagination'] = $data['pagination'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return (string) \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
    }

    /**
     * Gets granularity_type.
     */
    public function getQueryId() : ?string
    {
        return $this->container['query_id'];
    }

    /**
     * Sets granularity_type.
     *
     * @param null|string $granularity_type the granularity type for the inventory aggregation level
     */
    public function setQueryId(?string $query_id) : self
    {
        $this->container['query_id'] = $query_id;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    public function getProcessingStatusAllowableValues() : array
    {
        return [
            self::PROCESSING_STATUS_CANCELLED,
            self::PROCESSING_STATUS_DONE,
            self::PROCESSING_STATUS_FATAL,
            self::PROCESSING_STATUS_IN_PROGRESS,
            self::PROCESSING_STATUS_IN_QUEUE,
        ];
    }

    public function setQuery($query)
    {
        $this->container['query'] = $query;
    }
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;
    }
    public function setProcessingStatus($processing_status)
    {
        $this->container['processing_status'] = $processing_status;
    }
    public function setProcessingStartTime($processing_start_time)
    {
        $this->container['processing_start_time'] = $processing_start_time;
    }
    public function setProcessingEndTime($processing_end_time)
    {
        $this->container['processing_end_time'] = $processing_end_time;
    }
    public function setDataDocumentId($data_document_id)
    {
        $this->container['data_document_id'] = $data_document_id;
    }
    public function setErrorDocumentId($error_document_id)
    {
        $this->container['error_document_id'] = $error_document_id;
    }
    public function setPagination(Pagination $pagination)
    {
        $this->container['pagination'] = $pagination;
    }

    public function getQuery()
    {
        return $this->container['query'];
    }
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }
    public function getProcessingStatus()
    {
        return $this->container['processing_status'];
    }
    public function getProcessingStartTime()
    {
        return $this->container['processing_start_time'];
    }
    public function getProcessingEndTime()
    {
        return $this->container['processing_end_time'];
    }
    public function getDataDocumentId()
    {
        return $this->container['data_document_id'];
    }
    public function getErrorDocumentId()
    {
        return $this->container['error_document_id'];
    }
    public function getPagination()
    {
        return $this->container['pagination'];
    }

        /**
     * Gets offset.
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset) : mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }


    /**
     * Unsets offset.
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
