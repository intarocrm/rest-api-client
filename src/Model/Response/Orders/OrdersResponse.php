<?php

/**
 * PHP version 7.3
 *
 * @category OrdersResponse
 * @package  RetailCrm\Api\Model\Response\Orders
 */

namespace RetailCrm\Api\Model\Response\Orders;

use JMS\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class OrdersResponse
 *
 * @category OrdersResponse
 * @package  RetailCrm\Api\Model\Response\Orders
 */
class OrdersResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Order\Order[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Order\Order>")
     * @JMS\SerializedName("orders")
     */
    public $orders;
}