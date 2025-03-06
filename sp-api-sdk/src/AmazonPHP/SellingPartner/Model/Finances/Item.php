<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Finances;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

class Item implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    protected array $container = [];

    protected static string $openAPIModelName = 'Item';

    protected static array $openAPITypes = [
        'description' => 'string',
        'related_identifiers' => 'ItemRelatedIdentifiers',
        'total_amount' => 'Currency',
        'breakdowns' => '\AmazonPHP\SellingPartner\Model\Finances\Breakdown[]',
        'contexts' => '\AmazonPHP\SellingPartner\Model\Finances\Context[]',
    ];

    protected static array $openAPIFormats = [
        'description' => null,
        'related_identifiers' => null,
        'total_amount' => null,
        'breakdowns' => null,
        'contexts' => null,
    ];

    protected static array $attributeMap = [
        'description' => 'description',
        'related_identifiers' => 'relatedIdentifiers',
        'total_amount' => 'totalAmount',
        'breakdowns' => 'breakdowns',
        'contexts' => 'contexts',
    ];

    protected static array $setters = [
        'description' => 'setDescription',
        'related_identifiers' => 'setRelatedIdentifiers',
        'total_amount' => 'setTotalAmount',
        'breakdowns' => 'setBreakdowns',
        'contexts' => 'setContexts',
    ];

    protected static array $getters = [
        'description' => 'getDescription',
        'related_identifiers' => 'getRelatedIdentifiers',
        'total_amount' => 'getTotalAmount',
        'breakdowns' => 'getBreakdowns',
        'contexts' => 'getContexts',
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

    public function getDescription(): ?string
    {
        return $this->container['description'];
    }

    public function setDescription(?string $value): self
    {
        $this->container['description'] = $value;
        return $this;
    }

    public function getRelatedIdentifiers(): ?ItemRelatedIdentifiers
    {
        return $this->container['related_identifiers'];
    }

    public function setRelatedIdentifiers(?ItemRelatedIdentifiers $value): self
    {
        $this->container['related_identifiers'] = $value;
        return $this;
    }

    public function getTotalAmount(): ?Currency
    {
        return $this->container['total_amount'];
    }

    public function setTotalAmount(?Currency $value): self
    {
        $this->container['total_amount'] = $value;
        return $this;
    }

    public function getBreakdowns(): ?array
    {
        return $this->container['breakdowns'];
    }

    public function setBreakdowns(?array $value): self
    {
        $this->container['breakdowns'] = $value;
        return $this;
    }

    public function getContexts(): ?array
    {
        return $this->container['contexts'];
    }

    public function setContexts(?array $value): self
    {
        $this->container['contexts'] = $value;
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
