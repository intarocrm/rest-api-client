<?php

/**
 * PHP version 7.3
 *
 * @category PhpFilesIterator
 * @package  RetailCrm\DevTests\Component
 */

namespace RetailCrm\DevTests\Component;

use PHPUnit\Framework\TestCase;
use RetailCrm\Dev\Component\PhpFilesIterator;

/**
 * Class PhpFilesIterator
 *
 * @category PhpFilesIterator
 * @package  RetailCrm\DevTests\Component
 */
class PhpFilesIteratorTest extends TestCase
{
    public function testIterate(): void
    {
        $iterator = new PhpFilesIterator(__DIR__);

        foreach ($iterator as $item) {
            self::assertArrayHasKey('file', $item);
            self::assertArrayHasKey('namespace', $item);
            self::assertArrayHasKey('fqn', $item);
            self::assertTrue(class_exists($item['fqn']));
        }
    }
}