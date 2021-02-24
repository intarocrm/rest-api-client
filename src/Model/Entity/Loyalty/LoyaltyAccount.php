<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyAccount
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use DateTime;
use JMS\Serializer\Annotation as JMS;

/**
 * Class LoyaltyAccount
 *
 * @category LoyaltyAccount
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */
class LoyaltyAccount
{
    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("phoneNumber")
     */
    public $phoneNumber;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("cardNumber")
     */
    public $cardNumber;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("amount")
     */
    public $amount;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("activatedAt")
     */
    public $activatedAt;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("confirmedPhoneAt")
     */
    public $confirmedPhoneAt;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("lastCheckId")
     */
    public $lastCheckId;

    /**
     * @var array<string, mixed>
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("customFields")
     */
    public $customFields;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer")
     * @JMS\SerializedName("customer")
     */
    public $customer;
}