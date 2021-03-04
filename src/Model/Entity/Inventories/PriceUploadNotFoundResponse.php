<?php

/**
 * PHP version 7.3
 *
 * @category PriceUploadNotFoundResponse
 * @package  RetailCrm\Api\Model\Entity\Inventories
 */

namespace RetailCrm\Api\Model\Entity\Inventories;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class PriceUploadNotFoundResponse
 *
 * @category PriceUploadNotFoundResponse
 * @package  RetailCrm\Api\Model\Entity\Inventories
 */
class PriceUploadNotFoundResponse
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("xmlId")
     */
    public $xmlId;
}
