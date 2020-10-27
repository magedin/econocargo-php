<?php

declare(strict_types=1);

namespace EconoCargo\Service;

use EconoCargo\Framework\Object\FactoryAbstract;

/**
 * Class ClientFactory
 */
class ClientFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = \GuzzleHttp\ClientInterface::class;
}
