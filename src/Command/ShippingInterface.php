<?php

declare(strict_types=1);

namespace EconoCargo\Command;

/**
 * Class ShippingInterface
 * @package EconoCargo\Command
 */
interface ShippingInterface
{
    /**
     * @return Shipping\QuoteInterface|CommandInterface
     */
    public function quote();
}
