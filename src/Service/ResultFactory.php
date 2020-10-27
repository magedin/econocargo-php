<?php

declare(strict_types = 1);

namespace EconoCargo\Service;

use EconoCargo\Framework\Object\FactoryAbstract;

/**
 * Class ResultFactory
 */
class ResultFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = ResultInterface::class;
}
