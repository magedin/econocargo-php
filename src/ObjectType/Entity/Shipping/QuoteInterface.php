<?php

declare(strict_types=1);

namespace EconoCargo\ObjectType\Entity\Shipping;

/**
 * Class QuoteInterface
 */
interface QuoteInterface
{
    /**
     * @var string
     */
    public const FIELD_SHIPPING_SERVICES = 'shipping_services';

    /**
     * @return array
     */
    public function getShippingServices();
}
