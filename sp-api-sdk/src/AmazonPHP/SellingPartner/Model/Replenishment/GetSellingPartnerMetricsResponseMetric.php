<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Replenishment;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Data Kiosk.
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network.
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
class GetSellingPartnerMetricsResponseMetric implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;



    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'GetSellingPartnerMetricsResponseMetric';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'not_delivered_due_to_oos' => 'double',
        'total_subscription_revenue' => 'double',
        'shipped_subscription_units' => 'double',
        'ative_subscriptions' => 'double',
        'subscriber_average_revenue' => 'double',
        'non_subscriber_average_revenue' => 'double',
        'lost_revenue_due_to_oos' => 'double',
        'subscriber_average_reorders' => 'double',
        'non_subscriber_average_reorders' => 'double',
        'coupons_revenue_penetration' => 'double',
        'revenue_from_subscriptions_with_multiple_deliveries' => 'double',
        'revenue_from_active_subscriptions_with_single_delivery' => 'double',
        'revenue_from_cancelled_subscriptions_after_single_delivery' => 'double',
        'subscriber_retention_for_30_days' => 'double',
        'subscriber_retention_for_90_days' => 'double',
        'revenue_penetration_for_0_percent_seller_funding' => 'double',
        'revenue_penetration_for_5_percent_seller_funding' => 'double',
        'revenue_penetration_for_10_percent_seller_funding' => 'double',
        'revenue_penetration_for_5_plus_percent_seller_funding' => 'double',
        'share_of_coupon_subscriptions' => 'double',
        'time_interval' => 'double',
        'currency_code' => 'double',
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
        'not_delivered_due_to_oos' => null,
        'total_subscription_revenue' => null,
        'shipped_subscription_units' => null,
        'ative_subscriptions' => null,
        'subscriber_average_revenue' => null,
        'non_subscriber_average_revenue' => null,
        'lost_revenue_due_to_oos' => null,
        'subscriber_average_reorders' => null,
        'non_subscriber_average_reorders' => null,
        'coupons_revenue_penetration' => null,
        'revenue_from_subscriptions_with_multiple_deliveries' => null,
        'revenue_from_active_subscriptions_with_single_delivery' => null,
        'revenue_from_cancelled_subscriptions_after_single_delivery' => null,
        'subscriber_retention_for_30_days' => null,
        'subscriber_retention_for_90_days' => null,
        'revenue_penetration_for_0_percent_seller_funding' => null,
        'revenue_penetration_for_5_percent_seller_funding' => null,
        'revenue_penetration_for_10_percent_seller_funding' => null,
        'revenue_penetration_for_5_plus_percent_seller_funding' => null,
        'share_of_coupon_subscriptions' => null,
        'time_interval' => null,
        'currency_code' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'not_delivered_due_to_oos' => 'notDeliveredDueToOOS',
        'total_subscription_revenue' => 'totalSubscriptionsRevenue',
        'shipped_subscription_units' => 'shippedSubscriptionUnits',
        'ative_subscriptions' => 'activeSubscriptions',
        'subscriber_average_revenue' => 'subscriberAverageRevenue',
        'non_subscriber_average_revenue' => 'nonSubscriberAverageRevenue',
        'lost_revenue_due_to_oos' => 'lostRevenueDueToOOS',
        'subscriber_average_reorders' => 'subscriberAverageReorders',
        'non_subscriber_average_reorders' => 'nonSubscriberAverageReorders',
        'coupons_revenue_penetration' => 'couponsRevenuePenetration',
        'revenue_from_subscriptions_with_multiple_deliveries' => 'revenueFromSubscriptionsWithMultipleDeliveries',
        'revenue_from_active_subscriptions_with_single_delivery' => 'revenueFromActiveSubscriptionsWithSingleDelivery',
        'revenue_from_cancelled_subscriptions_after_single_delivery' => 'revenueFromCancelledSubscriptionsAfterSingleDelivery',
        'subscriber_retention_for_30_days' => 'subscriberRetentionFor30Days',
        'subscriber_retention_for_90_days' => 'subscriberRetentionFor90Days',
        'revenue_penetration_for_0_percent_seller_funding' => 'revenuePenetrationFor0PercentSellerFunding',
        'revenue_penetration_for_5_percent_seller_funding' => 'revenuePenetrationFor5PercentSellerFunding',
        'revenue_penetration_for_10_percent_seller_funding' => 'revenuePenetrationFor10PercentSellerFunding',
        'revenue_penetration_for_5_plus_percent_seller_funding' => 'revenuePenetrationFor5PlusPercentSellerFunding',
        'share_of_coupon_subscriptions' => 'shareOfCouponSubscriptions',
        'time_interval' => 'timeInterval',
        'currency_code' => 'currencyCode',
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'not_delivered_due_to_oos' => 'setNotDeliveredDueToOOS',
        'total_subscription_revenue' => 'setTotalSubscriptionsRevenue',
        'shipped_subscription_units' => 'setShippedSubscriptionUnits',
        'ative_subscriptions' => 'setActiveSubscriptions',
        'subscriber_average_revenue' => 'setSubscriberAverageRevenue',
        'non_subscriber_average_revenue' => 'setNonSubscriberAverageRevenue',
        'lost_revenue_due_to_oos' => 'setLostRevenueDueToOOS',
        'subscriber_average_reorders' => 'setSubscriberAverageReorders',
        'non_subscriber_average_reorders' => 'setNonSubscriberAverageReorders',
        'coupons_revenue_penetration' => 'setCouponsRevenuePenetration',
        'revenue_from_subscriptions_with_multiple_deliveries' => 'setRevenueFromSubscriptionsWithMultipleDeliveries',
        'revenue_from_active_subscriptions_with_single_delivery' => 'setRevenueFromActiveSubscriptionsWithSingleDelivery',
        'revenue_from_cancelled_subscriptions_after_single_delivery' => 'setRevenueFromCancelledSubscriptionsAfterSingleDelivery',
        'subscriber_retention_for_30_days' => 'setSubscriberRetentionFor30Days',
        'subscriber_retention_for_90_days' => 'setSubscriberRetentionFor90Days',
        'revenue_penetration_for_0_percent_seller_funding' => 'setRevenuePenetrationFor0PercentSellerFunding',
        'revenue_penetration_for_5_percent_seller_funding' => 'setRevenuePenetrationFor5PercentSellerFunding',
        'revenue_penetration_for_10_percent_seller_funding' => 'setRevenuePenetrationFor10PercentSellerFunding',
        'revenue_penetration_for_5_plus_percent_seller_funding' => 'setRevenuePenetrationFor5PlusPercentSellerFunding',
        'share_of_coupon_subscriptions' => 'setShareOfCouponSubscriptions',
        'time_interval' => 'setTimeInterval',
        'currency_code' => 'setCurrencyCode',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'not_delivered_due_to_oos' => 'getNotDeliveredDueToOOS',
        'total_subscription_revenue' => 'getTotalSubscriptionsRevenue',
        'shipped_subscription_units' => 'getShippedSubscriptionUnits',
        'ative_subscriptions' => 'getActiveSubscriptions',
        'subscriber_average_revenue' => 'getSubscriberAverageRevenue',
        'non_subscriber_average_revenue' => 'getNonSubscriberAverageRevenue',
        'lost_revenue_due_to_oos' => 'getLostRevenueDueToOOS',
        'subscriber_average_reorders' => 'getSubscriberAverageReorders',
        'non_subscriber_average_reorders' => 'getNonSubscriberAverageReorders',
        'coupons_revenue_penetration' => 'getCouponsRevenuePenetration',
        'revenue_from_subscriptions_with_multiple_deliveries' => 'getRevenueFromSubscriptionsWithMultipleDeliveries',
        'revenue_from_active_subscriptions_with_single_delivery' => 'getRevenueFromActiveSubscriptionsWithSingleDelivery',
        'revenue_from_cancelled_subscriptions_after_single_delivery' => 'getRevenueFromCancelledSubscriptionsAfterSingleDelivery',
        'subscriber_retention_for_30_days' => 'getSubscriberRetentionFor30Days',
        'subscriber_retention_for_90_days' => 'getSubscriberRetentionFor90Days',
        'revenue_penetration_for_0_percent_seller_funding' => 'getRevenuePenetrationFor0PercentSellerFunding',
        'revenue_penetration_for_5_percent_seller_funding' => 'getRevenuePenetrationFor5PercentSellerFunding',
        'revenue_penetration_for_10_percent_seller_funding' => 'getRevenuePenetrationFor10PercentSellerFunding',
        'revenue_penetration_for_5_plus_percent_seller_funding' => 'getRevenuePenetrationFor5PlusPercentSellerFunding',
        'share_of_coupon_subscriptions' => 'getShareOfCouponSubscriptions',
        'time_interval' => 'getTimeInterval',
        'currency_code' => 'getCurrencyCode',
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
        $this->container['query_id'] = $data['query_id'] ?? null;
        $this->container['query'] = $data['query'] ?? null;
        $this->container['created_time'] = $data['created_time'] ?? null;
        $this->container['processing_status'] = $data['processing_status'] ?? null;
        $this->container['processing_start_time'] = $data['processing_start_time'] ?? null;
        $this->container['processing_end_time'] = $data['processing_end_time'] ?? null;
        $this->container['data_document_id'] = $data['data_document_id'] ?? null;
        $this->container['error_document_id'] = $data['error_document_id'] ?? null;
        $this->container['pagination'] = $data['pagination'] ?? null;
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
    public function validate(): void {}

    // Métodos setters
    public function setNotDeliveredDueToOOS($value): void
    {
        $this->container['not_delivered_due_to_oos'] = $value;
    }

    public function setTotalSubscriptionsRevenue($value): void
    {
        $this->container['total_subscription_revenue'] = $value;
    }

    public function setShippedSubscriptionUnits($value): void
    {
        $this->container['shipped_subscription_units'] = $value;
    }

    public function setActiveSubscriptions($value): void
    {
        $this->container['ative_subscriptions'] = $value;
    }

    public function setSubscriberAverageRevenue($value): void
    {
        $this->container['subscriber_average_revenue'] = $value;
    }

    public function setNonSubscriberAverageRevenue($value): void
    {
        $this->container['non_subscriber_average_revenue'] = $value;
    }

    public function setLostRevenueDueToOOS($value): void
    {
        $this->container['lost_revenue_due_to_oos'] = $value;
    }

    public function setSubscriberAverageReorders($value): void
    {
        $this->container['subscriber_average_reorders'] = $value;
    }

    public function setNonSubscriberAverageReorders($value): void
    {
        $this->container['non_subscriber_average_reorders'] = $value;
    }

    public function setCouponsRevenuePenetration($value): void
    {
        $this->container['coupons_revenue_penetration'] = $value;
    }

    public function setRevenueFromSubscriptionsWithMultipleDeliveries($value): void
    {
        $this->container['revenue_from_subscriptions_with_multiple_deliveries'] = $value;
    }

    public function setRevenueFromActiveSubscriptionsWithSingleDelivery($value): void
    {
        $this->container['revenue_from_active_subscriptions_with_single_delivery'] = $value;
    }

    public function setRevenueFromCancelledSubscriptionsAfterSingleDelivery($value): void
    {
        $this->container['revenue_from_cancelled_subscriptions_after_single_delivery'] = $value;
    }

    public function setSubscriberRetentionFor30Days($value): void
    {
        $this->container['subscriber_retention_for_30_days'] = $value;
    }

    public function setSubscriberRetentionFor90Days($value): void
    {
        $this->container['subscriber_retention_for_90_days'] = $value;
    }

    public function setRevenuePenetrationFor0PercentSellerFunding($value): void
    {
        $this->container['revenue_penetration_for_0_percent_seller_funding'] = $value;
    }

    public function setRevenuePenetrationFor5PercentSellerFunding($value): void
    {
        $this->container['revenue_penetration_for_5_percent_seller_funding'] = $value;
    }

    public function setRevenuePenetrationFor10PercentSellerFunding($value): void
    {
        $this->container['revenue_penetration_for_10_percent_seller_funding'] = $value;
    }

    public function setRevenuePenetrationFor5PlusPercentSellerFunding($value): void
    {
        $this->container['revenue_penetration_for_5_plus_percent_seller_funding'] = $value;
    }

    public function setShareOfCouponSubscriptions($value): void
    {
        $this->container['share_of_coupon_subscriptions'] = $value;
    }

    public function setTimeInterval($value): void
    {
        $this->container['time_interval'] = $value;
    }

    public function setCurrencyCode($value): void
    {
        $this->container['currency_code'] = $value;
    }

    // Métodos getters
    public function getNotDeliveredDueToOOS()
    {
        return $this->container['not_delivered_due_to_oos'] ?? null;
    }

    public function getTotalSubscriptionsRevenue()
    {
        return $this->container['total_subscription_revenue'] ?? null;
    }

    public function getShippedSubscriptionUnits()
    {
        return $this->container['shipped_subscription_units'] ?? null;
    }

    public function getActiveSubscriptions()
    {
        return $this->container['ative_subscriptions'] ?? null;
    }

    public function getSubscriberAverageRevenue()
    {
        return $this->container['subscriber_average_revenue'] ?? null;
    }

    public function getNonSubscriberAverageRevenue()
    {
        return $this->container['non_subscriber_average_revenue'] ?? null;
    }

    public function getLostRevenueDueToOOS()
    {
        return $this->container['lost_revenue_due_to_oos'] ?? null;
    }

    public function getSubscriberAverageReorders()
    {
        return $this->container['subscriber_average_reorders'] ?? null;
    }

    public function getNonSubscriberAverageReorders()
    {
        return $this->container['non_subscriber_average_reorders'] ?? null;
    }

    public function getCouponsRevenuePenetration()
    {
        return $this->container['coupons_revenue_penetration'] ?? null;
    }

    public function getRevenueFromSubscriptionsWithMultipleDeliveries()
    {
        return $this->container['revenue_from_subscriptions_with_multiple_deliveries'] ?? null;
    }

    public function getRevenueFromActiveSubscriptionsWithSingleDelivery()
    {
        return $this->container['revenue_from_active_subscriptions_with_single_delivery'] ?? null;
    }

    public function getRevenueFromCancelledSubscriptionsAfterSingleDelivery()
    {
        return $this->container['revenue_from_cancelled_subscriptions_after_single_delivery'] ?? null;
    }

    public function getSubscriberRetentionFor30Days()
    {
        return $this->container['subscriber_retention_for_30_days'] ?? null;
    }

    public function getSubscriberRetentionFor90Days()
    {
        return $this->container['subscriber_retention_for_90_days'] ?? null;
    }

    public function getRevenuePenetrationFor0PercentSellerFunding()
    {
        return $this->container['revenue_penetration_for_0_percent_seller_funding'] ?? null;
    }

    public function getRevenuePenetrationFor5PercentSellerFunding()
    {
        return $this->container['revenue_penetration_for_5_percent_seller_funding'] ?? null;
    }

    public function getRevenuePenetrationFor10PercentSellerFunding()
    {
        return $this->container['revenue_penetration_for_10_percent_seller_funding'] ?? null;
    }

    public function getRevenuePenetrationFor5PlusPercentSellerFunding()
    {
        return $this->container['revenue_penetration_for_5_plus_percent_seller_funding'] ?? null;
    }

    public function getShareOfCouponSubscriptions()
    {
        return $this->container['share_of_coupon_subscriptions'] ?? null;
    }

    public function getTimeInterval()
    {
        return $this->container['time_interval'] ?? null;
    }

    public function getCurrencyCode()
    {
        return $this->container['currency_code'] ?? null;
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
