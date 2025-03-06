<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Finances;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

class Transaction implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;


    protected array $container = [];

    protected static string $openAPIModelName = 'Transaction';

    protected static array $openAPITypes = [
        'selling_partner_metadata' => '\AmazonPHP\SellingPartner\Model\Finances\SellingPartnerMetadata[]',
        'related_identifiers' => '\AmazonPHP\SellingPartner\Model\Finances\RelatedIdentifier[]',
        'transaction_type' => 'string',
        'transaction_id' => 'string',
        'transaction_status' => 'string',
        'description' => 'string',
        'posted_date' => '\DateTime',
        'total_amount' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'marketplace_details' => '\AmazonPHP\SellingPartner\Model\Finances\MarketplaceDetails',
        'items' => '\AmazonPHP\SellingPartner\Model\Finances\Item[]',
        'contexts' => '\AmazonPHP\SellingPartner\Model\Finances\Context[]',
        'breakdowns' => '\AmazonPHP\SellingPartner\Model\Finances\Breakdown[]',
    ];

    protected static array $openAPIFormats = [
        'selling_partner_metadata' => null,
        'related_identifiers' => null,
        'transaction_type' => null,
        'transaction_id' => null,
        'transaction_status' => null,
        'description' => null,
        'posted_date' => 'date-time',
        'total_amount' => null,
        'marketplace_details' => null,
        'items' => null,
        'contexts' => null,
        'breakdowns' => null,
    ];

    protected static array $attributeMap = [
        'selling_partner_metadata' => 'SellingPartnerMetadata',
        'related_identifiers' => 'RelatedIdentifiers',
        'transaction_type' => 'TransactionType',
        'transaction_id' => 'TransactionId',
        'transaction_status' => 'TransactionStatus',
        'description' => 'Description',
        'posted_date' => 'PostedDate',
        'total_amount' => 'TotalAmount',
        'marketplace_details' => 'MarketplaceDetails',
        'items' => 'Items',
        'contexts' => 'Contexts',
        'breakdowns' => 'Breakdowns',
    ];

    protected static array $setters = [
        'selling_partner_metadata' => 'setSellingPartnerMetadata',
        'related_identifiers' => 'setRelatedIdentifiers',
        'transaction_type' => 'setTransactionType',
        'transaction_id' => 'setTransactionId',
        'transaction_status' => 'setTransactionStatus',
        'description' => 'setDescription',
        'posted_date' => 'setPostedDate',
        'total_amount' => 'setTotalAmount',
        'marketplace_details' => 'setMarketplaceDetails',
        'items' => 'setItems',
        'contexts' => 'setContexts',
        'breakdowns' => 'setBreakdowns'
    ];

    protected static array $getters = [
        'selling_partner_metadata' => 'getSellingPartnerMetadata',
        'related_identifiers' => 'getRelatedIdentifiers',
        'transaction_type' => 'getTransactionType',
        'transaction_id' => 'getTransactionId',
        'transaction_status' => 'getTransactionStatus',
        'description' => 'getDescription',
        'posted_date' => 'getPostedDate',
        'total_amount' => 'getTotalAmount',
        'marketplace_details' => 'getMarketplaceDetails',
        'items' => 'getItems',
        'contexts' => 'getContexts',
        'breakdowns' => 'getBreakdowns'
    ];

    public function __construct(array $data = null)
    {
        foreach (self::$attributeMap as $property => $originalName) {
            $this->container[$property] = $data[$property] ?? null;
        }
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    public function getSellingPartnerMetadata()
    {
        return $this->container['selling_partner_metadata'];
    }

    public function setSellingPartnerMetadata($value)
    {
        $this->container['selling_partner_metadata'] = $value;
        return $this;
    }

    public function getRelatedIdentifiers()
    {
        return $this->container['related_identifiers'];
    }

    public function setRelatedIdentifiers($value)
    {
        $this->container['related_identifiers'] = $value;
        return $this;
    }

    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    public function setTransactionType($value)
    {
        $this->container['transaction_type'] = $value;
        return $this;
    }

    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    public function setTransactionId($value)
    {
        $this->container['transaction_id'] = $value;
        return $this;
    }

    public function getTransactionStatus()
    {
        return $this->container['transaction_status'];
    }

    public function setTransactionStatus($value)
    {
        $this->container['transaction_status'] = $value;
        return $this;
    }

    public function getDescription()
    {
        return $this->container['description'];
    }

    public function setDescription($value)
    {
        $this->container['description'] = $value;
        return $this;
    }

    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    public function setPostedDate($value)
    {
        $this->container['posted_date'] = $value;
        return $this;
    }

    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    public function setTotalAmount($value)
    {
        $this->container['total_amount'] = $value;
        return $this;
    }

    public function getMarketplaceDetails()
    {
        return $this->container['marketplace_details'];
    }

    public function setMarketplaceDetails($value)
    {
        $this->container['marketplace_details'] = $value;
        return $this;
    }

    public function getItems()
    {
        return $this->container['items'];
    }

    public function setItems($value)
    {
        $this->container['items'] = $value;
        return $this;
    }

    public function getContexts()
    {
        return $this->container['contexts'];
    }

    public function setContexts($value)
    {
        $this->container['contexts'] = $value;
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

    public function validate(): void
    {
        if ($this->container['total_amount'] !== null) {
            $this->container['total_amount']->validate();
        }
    }

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
