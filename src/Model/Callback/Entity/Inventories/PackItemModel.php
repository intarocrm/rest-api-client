<?php

/**
 * PHP version 7.3
 *
 * @category PackItemModel
 * @package  RetailCrm\Api\Model\Callback\Entity\Inventories
 */

namespace RetailCrm\Api\Model\Callback\Entity\Inventories;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class PackItemModel
 *
 * @category PackItemModel
 * @package  RetailCrm\Api\Model\Callback\Entity\Inventories
 */
class PackItemModel
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var \RetailCrm\Api\Model\Entity\CodeValueModel[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\CodeValueModel>")
     * @JMS\SerializedName("externalIds")
     */
    public $externalIds;
}
