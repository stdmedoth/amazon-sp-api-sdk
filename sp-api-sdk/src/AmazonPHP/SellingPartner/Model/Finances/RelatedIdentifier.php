<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Finances;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

class RelatedIdentifier implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    protected array $container = [];

    protected static string $openAPIModelName = 'RelatedIdentifier';

    protected static array $openAPITypes = [
        'related_identifier_name' => 'string',
        'related_identifier_value' => 'string',
    ];

    protected static array $openAPIFormats = [
        'related_identifier_name' => null,
        'related_identifier_value' => null,
    ];

    protected static array $attributeMap = [
        'related_identifier_name' => 'relatedIdentifierName',
        'related_identifier_value' => 'relatedIdentifierValue',
    ];

    protected static array $setters = [
        'related_identifier_name' => 'setRelatedIdentifierName',
        'related_identifier_value' => 'setRelatedIdentifierValue',
    ];

    protected static array $getters = [
        'related_identifier_name' => 'getRelatedIdentifierName',
        'related_identifier_value' => 'getRelatedIdentifierValue',
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

    public function getRelatedIdentifierName(): ?string
    {
        return $this->container['related_identifier_name'];
    }

    public function setRelatedIdentifierName(?string $value): self
    {
        $this->container['related_identifier_name'] = $value;
        return $this;
    }

    public function getRelatedIdentifierValue(): ?string
    {
        return $this->container['related_identifier_value'];
    }

    public function setRelatedIdentifierValue(?string $value): self
    {
        $this->container['related_identifier_value'] = $value;
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
