<?php

declare(strict_types=1);

namespace EconoCargo\Command\Shipping;

use EconoCargo\Framework\Object\FactoryAbstract;

/**
 * Class QuoteFactory
 */
class QuoteFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = QuoteInterface::class;
}
