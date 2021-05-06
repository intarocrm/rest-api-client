<?php

/**
 * PHP version 7.3
 *
 * @category ResponseTransformerInterface
 * @package  RetailCrm\Api\Interfaces
 */

namespace RetailCrm\Api\Interfaces;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;
use RetailCrm\Api\Interfaces\ResponseInterface as RetailCrmResponse;

/**
 * Interface ResponseTransformerInterface
 *
 * @category ResponseTransformerInterface
 * @package  RetailCrm\Api\Interfaces
 */
interface ResponseTransformerInterface
{
    /**
     * Transforms PSR-7 response into response model.
     *
     * This method should do the following operations:
     * - It should convert PSR-7 response object into the response model of provided type.
     * - It should automatically detect an API error and throw an `ApiExceptionInterface` instance.
     * - It can throw a `HandlerException` instance if necessary.
     *
     * @param string                              $baseUrl
     * @param \Psr\Http\Message\RequestInterface  $request
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param string                              $type
     *
     * @return RetailCrmResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     */
    public function createResponse(
        string $baseUrl,
        RequestInterface $request,
        ResponseInterface $response,
        string $type
    ): RetailCrmResponse;
}
