<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Finances;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

class MarketplaceDetails implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    protected array $container = [];

    protected static string $openAPIModelName = 'MarketplaceDetails';

    protected static array $openAPITypes = [
        'marketplace_id' => 'string',
        'marketplace_name' => 'string',
    ];

    protected static array $openAPIFormats = [
        'marketplace_id' => null,
        'marketplace_name' => null,
    ];

    protected static array $attributeMap = [
        'marketplace_id' => 'marketplaceId',
        'marketplace_name' => 'marketplaceName',
    ];

    protected static array $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'marketplace_name' => 'setMarketplaceName',
    ];

    protected static array $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'marketplace_name' => 'getMarketplaceName',
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

    public function getMarketplaceId(): ?string
    {
        return $this->container['marketplace_id'];
    }

    public function setMarketplaceId(?string $value): self
    {
        $this->container['marketplace_id'] = $value;
        return $this;
    }

    public function getMarketplaceName(): ?string
    {
        return $this->container['marketplace_name'];
    }

    public function setMarketplaceName(?string $value): self
    {
        $this->container['marketplace_name'] = $value;
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
