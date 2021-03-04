<?php

/**
 * PHP version 7.3
 *
 * @category PriceUploadInput
 * @package  RetailCrm\Api\Model\Entity\Inventories
 */

namespace RetailCrm\Api\Model\Entity\Inventories;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class PriceUploadInput
 *
 * @category PriceUploadInput
 * @package  RetailCrm\Api\Model\Entity\Inventories
 */
class PriceUploadInput
{
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
     * @JMS\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Inventories\PriceUploadPricesInput[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Inventories\PriceUploadPricesInput>")
     * @JMS\SerializedName("prices")
     */
    public $prices;
}
