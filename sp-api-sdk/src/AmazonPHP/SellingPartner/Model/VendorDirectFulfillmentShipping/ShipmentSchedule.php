<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Direct Fulfillment Shipping.
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
 *
 * The version of the OpenAPI document: 2021-12-28
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ShipmentSchedule implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ShipmentSchedule';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'estimated_delivery_date_time' => '\DateTimeInterface',
        'appt_window_start_date_time' => '\DateTimeInterface',
        'appt_window_end_date_time' => '\DateTimeInterface',
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
        'estimated_delivery_date_time' => 'date-time',
        'appt_window_start_date_time' => 'date-time',
        'appt_window_end_date_time' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'estimated_delivery_date_time' => 'estimatedDeliveryDateTime',
        'appt_window_start_date_time' => 'apptWindowStartDateTime',
        'appt_window_end_date_time' => 'apptWindowEndDateTime',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'estimated_delivery_date_time' => 'setEstimatedDeliveryDateTime',
        'appt_window_start_date_time' => 'setApptWindowStartDateTime',
        'appt_window_end_date_time' => 'setApptWindowEndDateTime',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'estimated_delivery_date_time' => 'getEstimatedDeliveryDateTime',
        'appt_window_start_date_time' => 'getApptWindowStartDateTime',
        'appt_window_end_date_time' => 'getApptWindowEndDateTime',
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
        $this->container['estimated_delivery_date_time'] = $data['estimated_delivery_date_time'] ?? null;
        $this->container['appt_window_start_date_time'] = $data['appt_window_start_date_time'] ?? null;
        $this->container['appt_window_end_date_time'] = $data['appt_window_end_date_time'] ?? null;
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
     * Gets estimated_delivery_date_time.
     */
    public function getEstimatedDeliveryDateTime() : ?\DateTimeInterface
    {
        return $this->container['estimated_delivery_date_time'];
    }

    /**
     * Sets estimated_delivery_date_time.
     *
     * @param null|\DateTimeInterface $estimated_delivery_date_time Date on which the shipment is expected to reach the customer delivery location. This field is expected to be in ISO-8601 date/time format, with UTC time zone or UTC offset. For example, 2020-07-16T23:00:00Z or 2020-07-16T23:00:00+01:00.
     */
    public function setEstimatedDeliveryDateTime(?\DateTimeInterface $estimated_delivery_date_time) : self
    {
        $this->container['estimated_delivery_date_time'] = $estimated_delivery_date_time;

        return $this;
    }

    /**
     * Gets appt_window_start_date_time.
     */
    public function getApptWindowStartDateTime() : ?\DateTimeInterface
    {
        return $this->container['appt_window_start_date_time'];
    }

    /**
     * Sets appt_window_start_date_time.
     *
     * @param null|\DateTimeInterface $appt_window_start_date_time This field indicates the date and time at the start of the appointment window scheduled to deliver the shipment. This field is expected to be in ISO-8601 date/time format, with UTC time zone or UTC offset. For example, 2020-07-16T23:00:00Z or 2020-07-16T23:00:00+01:00.
     */
    public function setApptWindowStartDateTime(?\DateTimeInterface $appt_window_start_date_time) : self
    {
        $this->container['appt_window_start_date_time'] = $appt_window_start_date_time;

        return $this;
    }

    /**
     * Gets appt_window_end_date_time.
     */
    public function getApptWindowEndDateTime() : ?\DateTimeInterface
    {
        return $this->container['appt_window_end_date_time'];
    }

    /**
     * Sets appt_window_end_date_time.
     *
     * @param null|\DateTimeInterface $appt_window_end_date_time This field indicates the date and time at the end of the appointment window scheduled to deliver the shipment. This field is expected to be in ISO-8601 date/time format, with UTC time zone or UTC offset. For example, 2020-07-16T23:00:00Z or 2020-07-16T23:00:00+01:00.
     */
    public function setApptWindowEndDateTime(?\DateTimeInterface $appt_window_end_date_time) : self
    {
        $this->container['appt_window_end_date_time'] = $appt_window_end_date_time;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
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
