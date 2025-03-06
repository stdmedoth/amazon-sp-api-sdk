<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Finances;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

class Breakdown implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    protected array $container = [];

    protected static string $openAPIModelName = 'Breakdown';

    protected static array $openAPITypes = [
        'breakdown_type' => 'string',
        'breakdown_amount' => 'Currency',
        'breakdowns' => '\AmazonPHP\SellingPartner\Model\Finances\Breakdown[]',
    ];

    protected static array $openAPIFormats = [
        'breakdown_type' => null,
        'breakdown_amount' => null,
        'breakdowns' => null,
    ];

    protected static array $attributeMap = [
        'breakdown_type' => 'breakdownType',
        'breakdown_amount' => 'breakdownAmount',
        'breakdowns' => 'breakdowns',
    ];

    protected static array $setters = [
        'breakdown_type' => 'setBreakdownType',
        'breakdown_amount' => 'setBreakdownAmount',
        'breakdowns' => 'setBreakdowns',
    ];

    protected static array $getters = [
        'breakdown_type' => 'getBreakdownType',
        'breakdown_amount' => 'getBreakdownAmount',
        'breakdowns' => 'getBreakdowns',
    ];

    public function __construct(array $data = null)
    {
        foreach (self::$attributeMap as $property => $originalName) {
            $this->container[$property] = $data[$property] ?? null;
        }
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

    public function getBreakdownType()
    {
        return $this->container['breakdown_type'];
    }

    public function setBreakdownType($value)
    {
        $this->container['breakdown_type'] = $value;
        return $this;
    }

    public function getBreakdownAmount()
    {
        return $this->container['breakdown_amount'];
    }

    public function setBreakdownAmount($value)
    {
        $this->container['breakdown_amount'] = $value;
        return $this;
    }

    public function getBreakdowns()
    {
        return $this->container['breakdowns'];
    }

    public function setBreakdowns($value)
    {
        $this->container['breakdowns'] = $value;
        return $this;
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
