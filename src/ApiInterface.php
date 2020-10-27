<?php

declare(strict_types=1);

namespace EconoCargo;

/**
 * Class ApiInterface
 */
interface ApiInterface
{
    /**
     * @return Command\ShippingInterface
     */
    public function shipping();

    /**
     * @return ConfigPool
     */
    public function config();
}
