<?php

/**
 * PHP version 7.3
 *
 * @category AbstractApiResourceGroupTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Dev\TestUtils\ArrayLogger;
use RetailCrm\Dev\TestUtils\Factory\TestClientFactory;
use RetailCrm\Dev\TestUtils\TestCase\AbstractApiResourceGroupTestCase;
use RetailCrm\Dev\TestUtils\TestConfig;

/**
 * Class AbstractApiResourceGroupTest
 *
 * @category AbstractApiResourceGroupTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class AbstractApiResourceGroupTest extends AbstractApiResourceGroupTestCase
{
    public function testLogging(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "versions": [
    "3.0",
    "4.0",
    "5.0"
  ]
}
EOF;
        $host = parse_url(TestConfig::getApiUrl(), PHP_URL_HOST);
        $logs = [
            [
                'level' => 'debug',
                'message' => sprintf('[RetailCRM API Request]: GET URL: "https://%s/api/api-versions", ', $host) .
                    'Headers: "{"Host":["' . $host . '"],' .
                    '"User-Agent":["RetailCRM PHP API Client \/ v6.x"],"Accept":["application\/json"],' .
                    '"X-Api-Key":["' . TestConfig::getApiKey() . '"]}", ' .
                    'Body: ""',
                'context' => []
            ],
            [
                'level' => 'debug',
                'message' => '[RetailCRM API Response]: Status: "200", Body: "{
  "success": true,
  "versions": [
    "3.0",
    "4.0",
    "5.0"
  ]
}"',
                'context' => []
            ],
        ];
        $logger = new ArrayLogger();
        $mock = static::getMockClient();
        $mock->on(
            static::createUnversionedRequestMatcher('api-versions')->setMethod(RequestMethod::GET),
            static::responseJson(200, $json)
        );

        $client = TestClientFactory::createClient($mock, $logger);
        $client->api->apiVersions();

        self::assertEquals($logs, $logger->getMessages());
    }
}