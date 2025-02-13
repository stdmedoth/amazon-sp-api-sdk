<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class PrepInstruction
{
    /**
     * Possible values of this enum.
     */
    final public const POLYBAGGING = 'Polybagging';

    final public const BUBBLE_WRAPPING = 'BubbleWrapping';

    final public const TAPING = 'Taping';

    final public const BLACK_SHRINK_WRAPPING = 'BlackShrinkWrapping';

    final public const LABELING = 'Labeling';

    final public const HANG_GARMENT = 'HangGarment';

    final public const SET_CREATION = 'SetCreation';

    final public const BOXING = 'Boxing';

    final public const REMOVE_FROM_HANGER = 'RemoveFromHanger';

    final public const DEBUNDLE = 'Debundle';

    final public const SUFFOCATION_STICKERING = 'SuffocationStickering';

    final public const CAP_SEALING = 'CapSealing';

    final public const SET_STICKERING = 'SetStickering';

    final public const BLANK_STICKERING = 'BlankStickering';

    final public const NO_PREP = 'NoPrep';

    public function __construct(private readonly string $value)
    {
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues() : array
    {
        return [
            self::POLYBAGGING,
            self::BUBBLE_WRAPPING,
            self::TAPING,
            self::BLACK_SHRINK_WRAPPING,
            self::LABELING,
            self::HANG_GARMENT,
            self::SET_CREATION,
            self::BOXING,
            self::REMOVE_FROM_HANGER,
            self::DEBUNDLE,
            self::SUFFOCATION_STICKERING,
            self::CAP_SEALING,
            self::SET_STICKERING,
            self::BLANK_STICKERING,
            self::NO_PREP,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
