<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Finances;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

class ItemRelatedIdentifier implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    protected array $container = [];

    protected static string $openAPIModelName = 'ItemRelatedIdentifier';

    protected static array $openAPITypes = [
        'item_related_identifier_name' => 'string',
        'item_related_identifier_value' => 'string',
    ];

    protected static array $openAPIFormats = [
        'item_related_identifier_name' => null,
        'item_related_identifier_value' => null,
    ];

    protected static array $attributeMap = [
        'item_related_identifier_name' => 'itemRelatedIdentifierName',
        'item_related_identifier_value' => 'itemRelatedIdentifierValue',
    ];

    protected static array $setters = [
        'item_related_identifier_name' => 'setItemRelatedIdentifierName',
        'item_related_identifier_value' => 'setItemRelatedIdentifierValue',
    ];

    protected static array $getters = [
        'item_related_identifier_name' => 'getItemRelatedIdentifierName',
        'item_related_identifier_value' => 'getItemRelatedIdentifierValue',
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

    public function getItemRelatedIdentifierName(): ?string
    {
        return $this->container['item_related_identifier_name'];
    }

    public function setItemRelatedIdentifierName(?string $value): self
    {
        $this->container['item_related_identifier_name'] = $value;
        return $this;
    }

    public function getItemRelatedIdentifierValue(): ?string
    {
        return $this->container['item_related_identifier_value'];
    }

    public function setItemRelatedIdentifierValue(?string $value): self
    {
        $this->container['item_related_identifier_value'] = $value;
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
