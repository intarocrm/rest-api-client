<?php

/**
 * PHP version 7.3
 *
 * @category UsersTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use Http\Client\Curl\Client;
use RetailCrm\Api\Enum\NumericBoolean;
use RetailCrm\Api\Enum\PaginationLimit;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Enum\Users\UserStatus;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;
use RetailCrm\Api\Model\Filter\Users\ApiUserFilter;
use RetailCrm\Api\Model\Request\Users\UserGroupsRequest;
use RetailCrm\Api\Model\Request\Users\UsersRequest;
use RetailCrm\Api\Model\Request\Users\UsersStatusRequest;
use RetailCrm\Dev\TestUtils\Factory\TestClientFactory;
use RetailCrm\Dev\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class UsersTest
 *
 * @category UsersTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class UsersTest extends AbstractApiResourceGroupTestCase
{
    public function testUserGroups(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "pagination": {
    "limit": 20,
    "totalCount": 2,
    "currentPage": 1,
    "totalPageCount": 1
  },
  "groups": [
    {
      "id": 26,
      "name": "Руководители",
      "code": "director",
      "isManager": false,
      "isPosManager": false,
      "isDeliveryMen": false,
      "deliveryTypes": [

      ],
      "breakdownOrderTypes": [

      ],
      "breakdownSites": [

      ],
      "breakdownOrderMethods": [

      ],
      "grantedOrderTypes": [
        "eshop-individual",
        "test",
        "eshop-legal",
        "mc-order",
        "1"
      ],
      "grantedSites": [
        "test"
      ]
    },
    {
      "id": 25,
      "name": "Менеджеры",
      "code": "manager",
      "isManager": true,
      "isPosManager": true,
      "isDeliveryMen": false,
      "deliveryTypes": [

      ],
      "breakdownOrderTypes": [
        "test"
      ],
      "breakdownSites": [
        "aliexpress",
      ],
      "breakdownOrderMethods": [
        "2",
        "one-click",
        "price-decrease-request",
        "landing-page",
        "messenger",
        "app",
        "live-chat",
        "offline",
        "phone",
        "missed-call",
        "terminal",
        "shopping-cart"
      ],
      "grantedOrderTypes": [
        "eshop-individual",
        "test",
        "eshop-legal",
        "mc-order",
        "1"
      ],
      "grantedSites": [
        "aliexpress"
      ]
    }
  ]
}
EOF;

        $request        = new UserGroupsRequest();
        $request->page  = 1;
        $request->limit = PaginationLimit::LIMIT_20;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('user-groups')
                ->setMethod(RequestMethod::GET)
                ->setQueryParams(self::encodeFormArray($request)),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->users->userGroups($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testList(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "pagination": {
    "limit": 20,
    "totalCount": 8,
    "currentPage": 1,
    "totalPageCount": 1
  },
  "users": [
    {
      "id": 28,
      "createdAt": "2020-05-25 12:49:00",
      "active": true,
      "email": "programmer@retailcrm.ru",
      "firstName": "programmer",
      "status": "free",
      "online": true,
      "isAdmin": true,
      "isManager": true,
      "groups": [
        {
          "id": 25,
          "name": "Менеджеры",
          "code": "manager"
        },
        {
          "id": 26,
          "name": "Руководители",
          "code": "director"
        }
      ],
      "mgUserId": 305
    }
  ]
}
EOF;

        $request                  = new UsersRequest();
        $request->filter          = new ApiUserFilter();
        $request->filter->active  = NumericBoolean::TRUE;
        $request->filter->isAdmin = NumericBoolean::TRUE;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('users')
                ->setMethod(RequestMethod::GET)
                ->setQueryParams(self::encodeFormArray($request)),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->users->list($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testGet(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "user": {
    "id": 28,
    "createdAt": "2020-05-25 12:49:00",
    "active": true,
    "email": "programmer@retailcrm.ru",
    "firstName": "programmer",
    "status": "free",
    "online": true,
    "isAdmin": true,
    "isManager": true,
    "groups": [
      {
        "id": 25,
        "name": "Менеджеры",
        "code": "manager"
      },
      {
        "id": 26,
        "name": "Руководители",
        "code": "director"
      }
    ],
    "mgUserId": 305
  }
}
EOF;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('users/28')
                ->setMethod(RequestMethod::GET),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->users->get(28);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testStatus(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $request = new UsersStatusRequest(UserStatus::BUSY);

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('users/28/status')
                ->setMethod(RequestMethod::POST)
                ->setBody(self::encodeForm($request)),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient(new Client());
        $response = $client->users->status(28, $request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
