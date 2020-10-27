<?php

declare(strict_types=1);

namespace EconoCargoTest;

use EconoCargo\ConfigPool;

class ConfigPoolTest extends TestCase
{
    /**
     * @var ConfigPool
     */
    private $object;

    protected function setUp() : void
    {
        $this->object = new ConfigPool();
    }
}
