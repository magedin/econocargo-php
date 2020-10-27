<?php

declare(strict_types = 1);

namespace EconoCargo\ObjectType\Entity\Shipping\Quote;

use EconoCargo\Framework\Object\FactoryAbstract;

/**
 * Class ServiceFactory
 */
class ServiceFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = ServiceInterface::class;
}
