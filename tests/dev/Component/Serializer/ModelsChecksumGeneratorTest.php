<?php

/**
 * PHP version 7.3
 *
 * @category ModelsChecksumGeneratorTest
 * @package  RetailCrm\DevTests\Component\Serializer
 */

namespace RetailCrm\DevTests\Component\Serializer;

use PHPUnit\Framework\TestCase;
use RetailCrm\Dev\Component\Serializer\ModelsChecksumGenerator;

/**
 * Class ModelsChecksumGeneratorTest
 *
 * @category ModelsChecksumGeneratorTest
 * @package  RetailCrm\DevTests\Component\Serializer
 */
class ModelsChecksumGeneratorTest extends TestCase
{
    public function testChecksumsCorrect(): void
    {
        self::assertTrue(
            ModelsChecksumGenerator::verifyChecksum(),
            'The checksums for models are not valid. Perhaps, you forgot to update models? ' .
            'Use "bin/console models:generate" command to do that.'
        );
    }
}