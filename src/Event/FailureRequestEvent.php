<?php

/**
 * PHP version 7.3
 *
 * @category FailureRequestEvent
 * @package  RetailCrm\Api\Event
 */

namespace RetailCrm\Api\Event;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RetailCrm\Api\Exception\ApiException;
use RetailCrm\Api\Exception\ClientException;

/**
 * Class FailureRequestEvent
 *
 * @category FailureRequestEvent
 * @package  RetailCrm\Api\Event
 */
class FailureRequestEvent extends AbstractRequestEvent
{
    /** @var ApiException|ClientException */
    private $exception;

    /**
     * FailureRequestEvent constructor.
     *
     * @param string                                   $baseUrl
     * @param \Psr\Http\Message\RequestInterface       $request
     * @param \Psr\Http\Message\ResponseInterface|null $response
     * @param ApiException|ClientException             $exception
     */
    public function __construct(string $baseUrl, RequestInterface $request, ?ResponseInterface $response, $exception)
    {
        parent::__construct($baseUrl, $request, $response);

        $this->exception = $exception;
    }

    /**
     * @return \RetailCrm\Api\Exception\ApiException|\RetailCrm\Api\Exception\ClientException
     */
    public function getException()
    {
        return $this->exception;
    }
}