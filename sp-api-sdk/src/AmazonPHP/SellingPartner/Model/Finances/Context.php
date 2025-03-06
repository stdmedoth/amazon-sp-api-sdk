<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Finances;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

class Context implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    protected array $container = [];

    protected static string $openAPIModelName = 'Context';

    protected static array $openAPITypes = [
        'context_type' => 'string',
        'store_name' => 'string',
        'order_type' => 'string',
        'channel' => 'string',
        'asin' => 'string',
        'sku' => 'string',
        'quantity_shipped' => 'int',
        'fulfillment_network' => 'string',
        'payment_type' => 'string',
        'payment_method' => 'string',
        'payment_reference' => 'string',
        'payment_date' => '\DateTime',
        'deferral_reason' => 'string',
        'maturity_date' => '\DateTime',
        'deferral_status' => 'string',
        'start_time' => '\DateTime',
        'end_time' => '\DateTime',
    ];

    protected static array $openAPIFormats = [
        'payment_date' => 'date',
        'maturity_date' => 'date',
        'start_time' => 'date',
        'end_time' => 'date',
    ];

    protected static array $attributeMap = [
        'context_type' => 'contextType',
        'store_name' => 'storeName',
        'order_type' => 'orderType',
        'channel' => 'channel',
        'asin' => 'asin',
        'sku' => 'sku',
        'quantity_shipped' => 'quantityShipped',
        'fulfillment_network' => 'fulfillmentNetwork',
        'payment_type' => 'paymentType',
        'payment_method' => 'paymentMethod',
        'payment_reference' => 'paymentReference',
        'payment_date' => 'paymentDate',
        'deferral_reason' => 'deferralReason',
        'maturity_date' => 'maturityDate',
        'deferral_status' => 'deferralStatus',
        'start_time' => 'startTime',
        'end_time' => 'endTime',
    ];

    protected static array $setters = [
        'context_type' => 'setContextType',
        'store_name' => 'setStoreName',
        'order_type' => 'setOrderType',
        'channel' => 'setChannel',
        'asin' => 'setAsin',
        'sku' => 'setSku',
        'quantity_shipped' => 'setQuantityShipped',
        'fulfillment_network' => 'setFulfillmentNetwork',
        'payment_type' => 'setPaymentType',
        'payment_method' => 'setPaymentMethod',
        'payment_reference' => 'setPaymentReference',
        'payment_date' => 'setPaymentDate',
        'deferral_reason' => 'setDeferralReason',
        'maturity_date' => 'setMaturityDate',
        'deferral_status' => 'setDeferralStatus',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
    ];

    protected static array $getters = [
        'context_type' => 'getContextType',
        'store_name' => 'getStoreName',
        'order_type' => 'getOrderType',
        'channel' => 'getChannel',
        'asin' => 'getAsin',
        'sku' => 'getSku',
        'quantity_shipped' => 'getQuantityShipped',
        'fulfillment_network' => 'getFulfillmentNetwork',
        'payment_type' => 'getPaymentType',
        'payment_method' => 'getPaymentMethod',
        'payment_reference' => 'getPaymentReference',
        'payment_date' => 'getPaymentDate',
        'deferral_reason' => 'getDeferralReason',
        'maturity_date' => 'getMaturityDate',
        'deferral_status' => 'getDeferralStatus',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
    ];


    public function __construct(array $data = null)
    {
        foreach (self::$attributeMap as $property => $originalName) {
            $this->container[$property] = $data[$property] ?? null;
        }
    }

    public function __toString(): string
    {
        return (string) \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }

    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    public static function setters(): array
    {
        return self::$setters;
    }

    public static function getters(): array
    {
        return self::$getters;
    }


    public function getContextType()
    {
        return $this->container['context_type'];
    }

    public function setContextType($value)
    {
        $this->container['context_type'] = $value;
        return $this;
    }

    public function getStoreName()
    {
        return $this->container['store_name'];
    }

    public function setStoreName($value)
    {
        $this->container['store_name'] = $value;
        return $this;
    }

    public function getOrderType()
    {
        return $this->container['order_type'];
    }

    public function setOrderType($value)
    {
        $this->container['order_type'] = $value;
        return $this;
    }

    public function getChannel()
    {
        return $this->container['channel'];
    }

    public function setChannel($value)
    {
        $this->container['channel'] = $value;
        return $this;
    }

    public function getAsin()
    {
        return $this->container['asin'];
    }

    public function setAsin($value)
    {
        $this->container['asin'] = $value;
        return $this;
    }

    public function getSku()
    {
        return $this->container['sku'];
    }

    public function setSku($value)
    {
        $this->container['sku'] = $value;
        return $this;
    }

    public function getQuantityShipped()
    {
        return $this->container['quantity_shipped'];
    }

    public function setQuantityShipped($value)
    {
        $this->container['quantity_shipped'] = $value;
        return $this;
    }

    public function getFulfillmentNetwork()
    {
        return $this->container['fulfillment_network'];
    }

    public function setFulfillmentNetwork($value)
    {
        $this->container['fulfillment_network'] = $value;
        return $this;
    }

    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    public function setPaymentType($value)
    {
        $this->container['payment_type'] = $value;
        return $this;
    }

    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    public function setPaymentMethod($value)
    {
        $this->container['payment_method'] = $value;
        return $this;
    }

    public function getPaymentReference()
    {
        return $this->container['payment_reference'];
    }

    public function setPaymentReference($value)
    {
        $this->container['payment_reference'] = $value;
        return $this;
    }

    public function getPaymentDate()
    {
        return $this->container['payment_date'];
    }

    public function setPaymentDate($value)
    {
        $this->container['payment_date'] = $value;
        return $this;
    }

    public function getDeferralReason()
    {
        return $this->container['deferral_reason'];
    }

    public function setDeferralReason($value)
    {
        $this->container['deferral_reason'] = $value;
        return $this;
    }

    public function getMaturityDate()
    {
        return $this->container['maturity_date'];
    }

    public function setMaturityDate($value)
    {
        $this->container['maturity_date'] = $value;
        return $this;
    }

    public function getDeferralStatus()
    {
        return $this->container['deferral_status'];
    }

    public function setDeferralStatus($value)
    {
        $this->container['deferral_status'] = $value;
        return $this;
    }

    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    public function setStartTime($value)
    {
        $this->container['start_time'] = $value;
        return $this;
    }

    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    public function setEndTime($value)
    {
        $this->container['end_time'] = $value;
        return $this;
    }

    public function validate(): void {}

    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    public function offsetSet($offset, $value): void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    public function jsonSerialize(): string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    public function toHeaderValue(): string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
