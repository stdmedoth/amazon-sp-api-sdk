<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\CatalogItem;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Catalog Items.
 *
 * The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog.  For more information, refer to the [Catalog Items API Use Case Guide](doc:catalog-items-api-v2022-04-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2022-04-01
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ListOfCategories implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ListOfCategories';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'product_category_id' => 'string',
        'product_category_name' => 'string',
        'parent' => '\AmazonPHP\SellingPartner\Model\CatalogItem\ListOfCategories'
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
        'product_category_id' => null,
        'product_category_name' => null,
        'parent' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'product_category_id' => 'ProductCategoryId',
        'product_category_name' => 'ProductCategoryName',
        'parent' => 'parent',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'product_category_id' => 'setProductCategoryId',
        'product_category_name' => 'setProductCategoryName',
        'parent' => 'setParent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'product_category_id' => 'getProductCategoryId',
        'product_category_name' => 'getProductCategoryName',
        'parent' => 'getParent'
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
        $this->container['product_category_id'] = $data['product_category_id'] ?? null;
        $this->container['product_category_name'] = $data['product_category_name'] ?? null;
        $this->container['parent'] = $data['parent'] ?? null;
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

    /**
     * Gets the string presentation of the object.
     */
    public function __toString(): string
    {
        return (string) \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate(): void
    {
        if ($this->container['display_name'] === null) {
            throw new AssertionException("'display_name' can't be null");
        }

        if ($this->container['classification_id'] === null) {
            throw new AssertionException("'classification_id' can't be null");
        }
    }

    /**
     * Gets display_name.
     */
    public function getProductCategoryId(): ?string
    {
        return $this->container['product_category_id'];
    }

    /**
     * Sets display_name.
     *
     * @param string $display_name display name for the classification
     */
    public function setProductCategoryId(?string $product_category_id): self
    {
        $this->container['product_category_id'] = $product_category_id;

        return $this;
    }

    /**
     * Gets display_name.
     */
    public function getProductCategoryName(): ?string
    {
        return $this->container['product_category_name'];
    }

    /**
     * Sets display_name.
     *
     * @param string $display_name display name for the classification
     */
    public function setProductCategoryName(?string $product_category_name): self
    {
        $this->container['product_category_name'] = $product_category_name;

        return $this;
    }


    /**
     * Gets display_name.
     */
    public function getParent(): ?Object
    {
        return $this->container['parent'];
    }

    /**
     * Sets display_name.
     *
     * @param string $display_name display name for the classification
     */
    public function setParent(?Object $parent): self
    {
        $this->container['parent'] = $parent;

        return $this;
    }


    /**
     * Returns true if offset exists. False otherwise.
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    public function jsonSerialize(): string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue(): string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
