<?php

declare(strict_types = 1);

namespace EconoCargo\Service\Response;

use EconoCargo\Framework\Http\Response\ResponseExceptionInterface;
use EconoCargo\Framework\Object\FactoryAbstract;

/**
 * Class ExceptionFactory
 */
class ExceptionFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = ResponseExceptionInterface::class;
}
