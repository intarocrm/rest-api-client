<?php

/**
 * PHP version 7.3
 *
 * @category CustomSerialization
 * @package  RetailCrm\Api\Component\Serializer\Template
 */

namespace RetailCrm\Api\Component\Serializer\Template;

use Twig\Environment;
use Twig\Loader\ArrayLoader;

/**
 * Class CustomSerialization
 *
 * @category CustomSerialization
 * @package  RetailCrm\Api\Component\Serializer\Template
 * @internal
 */
class CustomSerialization extends AbstractTemplate
{
    private const TMPL_CUSTOMER_INTERFACE = <<<'EOT'
$jsonData{{jsonPath}} = [];

if (0 === \count($jsonData{{jsonPath}})) {
    $jsonData{{jsonPath}} = $emptyObject;
}

if ({{modelPath}} instanceof \RetailCrm\Api\Model\Entity\Customers\Customer) {
    {{customerCode}}
} elseif ({{modelPath}} instanceof \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate) {
    {{corporateCode}}
}

EOT;

    /**
     * @param string $jsonPath
     * @param string $modelPath
     * @param string $customerCode
     * @param string $corporateCode
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\SyntaxError
     */
    public function renderCustomerInterface(
        string $jsonPath,
        string $modelPath,
        string $customerCode,
        string $corporateCode
    ): string {
        return $this->render(self::TMPL_CUSTOMER_INTERFACE, [
            'jsonPath' => $jsonPath,
            'modelPath' => $modelPath,
            'customerCode' => $customerCode,
            'corporateCode' => $corporateCode,
        ]);
    }
}
