<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorInvoices;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Retail Procurement Payments.
 *
 * The Selling Partner API for Retail Procurement Payments provides programmatic access to vendors payments data.
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
class AllowanceDetails implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const TYPE_DISCOUNT = 'Discount';

    final public const TYPE_DISCOUNT_INCENTIVE = 'DiscountIncentive';

    final public const TYPE_DEFECTIVE = 'Defective';

    final public const TYPE_PROMOTIONAL = 'Promotional';

    final public const TYPE_UNSALEABLE_MERCHANDISE = 'UnsaleableMerchandise';

    final public const TYPE_SPECIAL = 'Special';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'AllowanceDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'type' => 'string',
        'description' => 'string',
        'allowance_amount' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\Money',
        'tax_details' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\TaxDetails[]',
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
        'type' => null,
        'description' => null,
        'allowance_amount' => null,
        'tax_details' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'type' => 'type',
        'description' => 'description',
        'allowance_amount' => 'allowanceAmount',
        'tax_details' => 'taxDetails',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'type' => 'setType',
        'description' => 'setDescription',
        'allowance_amount' => 'setAllowanceAmount',
        'tax_details' => 'setTaxDetails',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'type' => 'getType',
        'description' => 'getDescription',
        'allowance_amount' => 'getAllowanceAmount',
        'tax_details' => 'getTaxDetails',
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['allowance_amount'] = $data['allowance_amount'] ?? null;
        $this->container['tax_details'] = $data['tax_details'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getTypeAllowableValues() : array
    {
        return [
            self::TYPE_DISCOUNT,
            self::TYPE_DISCOUNT_INCENTIVE,
            self::TYPE_DEFECTIVE,
            self::TYPE_PROMOTIONAL,
            self::TYPE_UNSALEABLE_MERCHANDISE,
            self::TYPE_SPECIAL,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['type'] === null) {
            throw new AssertionException("'type' can't be null");
        }

        $allowedValues = $this->getTypeAllowableValues();

        if (null !== $this->container['type'] && !\in_array($this->container['type'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'type', must be one of '%s'",
                    $this->container['type'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['allowance_amount'] === null) {
            throw new AssertionException("'allowance_amount' can't be null");
        }

        $this->container['allowance_amount']->validate();
    }

    /**
     * Gets type.
     */
    public function getType() : string
    {
        return $this->container['type'];
    }

    /**
     * Sets type.
     *
     * @param string $type type of the allowance applied
     */
    public function setType(string $type) : self
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets description.
     */
    public function getDescription() : ?string
    {
        return $this->container['description'];
    }

    /**
     * Sets description.
     *
     * @param null|string $description description of the allowance
     */
    public function setDescription(?string $description) : self
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets allowance_amount.
     */
    public function getAllowanceAmount() : Money
    {
        return $this->container['allowance_amount'];
    }

    /**
     * Sets allowance_amount.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorInvoices\Money $allowance_amount allowance_amount
     */
    public function setAllowanceAmount(Money $allowance_amount) : self
    {
        $this->container['allowance_amount'] = $allowance_amount;

        return $this;
    }

    /**
     * Gets tax_details.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorInvoices\TaxDetails[]
     */
    public function getTaxDetails() : ?array
    {
        return $this->container['tax_details'];
    }

    /**
     * Sets tax_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorInvoices\TaxDetails[] $tax_details tax amount details applied on this allowance
     */
    public function setTaxDetails(?array $tax_details) : self
    {
        $this->container['tax_details'] = $tax_details;

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
