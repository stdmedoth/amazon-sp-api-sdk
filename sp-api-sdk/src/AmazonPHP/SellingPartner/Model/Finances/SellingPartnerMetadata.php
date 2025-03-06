<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Finances;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

class SellingPartnerMetadata implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    protected array $container = [];

    protected static string $openAPIModelName = 'SellingPartnerMetadata';

    protected static array $openAPITypes = [
        'selling_partner_id' => 'string',
        'account_type' => 'string',
        'marketplace_id' => 'string',
    ];

    protected static array $openAPIFormats = [
        'selling_partner_id' => null,
        'account_type' => null,
        'marketplace_id' => null,
    ];

    protected static array $attributeMap = [
        'selling_partner_id' => 'sellingPartnerId',
        'account_type' => 'accountType',
        'marketplace_id' => 'marketplaceId',
    ];

    protected static array $setters = [
        'selling_partner_id' => 'setSellingPartnerId',
        'account_type' => 'setAccountType',
        'marketplace_id' => 'setMarketplaceId',
    ];

    protected static array $getters = [
        'selling_partner_id' => 'getSellingPartnerId',
        'account_type' => 'getAccountType',
        'marketplace_id' => 'getMarketplaceId',
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

    public function getSellingPartnerId(): ?string
    {
        return $this->container['selling_partner_id'];
    }

    public function setSellingPartnerId(?string $value): self
    {
        $this->container['selling_partner_id'] = $value;
        return $this;
    }

    public function getAccountType(): ?string
    {
        return $this->container['account_type'];
    }

    public function setAccountType(?string $value): self
    {
        $this->container['account_type'] = $value;
        return $this;
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
