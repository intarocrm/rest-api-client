<?php

/**
 * PHP version 7.3
 *
 * @category SerializedOrderProduct
 * @package  RetailCrm\Api\Model\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Delivery;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SerializedOrderProduct
 *
 * @category SerializedOrderProduct
 * @package  RetailCrm\Api\Model\Entity\Delivery
 *
 * @SuppressWarnings(PHPMD.LongVariables)
 */
class SerializedOrderProduct
{
    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("initialPrice")
     */
    public $initialPrice;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("discountManualAmount")
     */
    public $discountManualAmount;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("discountManualPercent")
     */
    public $discountManualPercent;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("quantity")
     */
    public $quantity;
}