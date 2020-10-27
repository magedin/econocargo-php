<?php

declare(strict_types=1);

namespace EconoCargoTest\Logger;

use EconoCargo\Logger\LoggerFactory;
use EconoCargoTest\TestCase;

class LoggerFactoryTest extends TestCase
{
    /**
     * @var LoggerFactory
     */
    private $object;

    protected function setUp(): void
    {
        $this->object = $this->createObject(LoggerFactory::class);
    }

    /**
     * @test
     */
    public function getLogger()
    {
        $this->assertInstanceOf(
            \Psr\Log\LoggerInterface::class,
            $this->object->getLogger('debug', 'debug.log')
        );
    }
}
