<?php

declare(strict_types = 1);

use function \DI\autowire;
use EconoCargo\ObjectType\Entity;
use EconoCargo\Framework;
use EconoCargo\Service;
use EconoCargo\Command;

return [
    /** Api Object */
    \EconoCargo\ApiInterface::class => autowire(\EconoCargo\Api::class),

    /** Other Objects */
    \GuzzleHttp\ClientInterface::class => autowire(\GuzzleHttp\Client::class),
    \Psr\Log\LoggerInterface::class => autowire(\Monolog\Logger::class),
];
