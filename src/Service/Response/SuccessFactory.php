<?php

declare(strict_types = 1);

namespace EconoCargo\Service\Response;

use EconoCargo\Framework\Http\Response\ResponseSuccessInterface;
use EconoCargo\Framework\Object\FactoryAbstract;

/**
 * Class SuccessFactory
 */
class SuccessFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = ResponseSuccessInterface::class;
}
