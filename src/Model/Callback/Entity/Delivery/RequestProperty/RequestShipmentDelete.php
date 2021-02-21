<?php

/**
 * PHP version 7.3
 *
 * @category RequestShipmentDelete
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty;

use JMS\Serializer\Annotation as JMS;

/**
 * Class RequestShipmentDelete
 *
 * @category RequestShipmentDelete
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty
 */
class RequestShipmentDelete
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("shipmentId")
     */
    public $shipmentId;

    /**
     * @var mixed[][]
     *
     * @JMS\Type("array<array<string, mixed>>")
     * @JMS\SerializedName("extraData")
     */
    public $extraData;
}