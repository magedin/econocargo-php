<?php

declare(strict_types=1);

use EconoCargo\ObjectType\Entity;
use EconoCargo\Framework;
use EconoCargo\Service;
use EconoCargo\Command;
use TiagoSampaio\EventObserver;

use function DI\autowire;

return [
    /** Api Object */
    \EconoCargo\ApiInterface::class => autowire(\EconoCargo\Api::class),

    /** Entity Objects */
    Entity\Shipping\QuoteInterface::class => autowire(Entity\Shipping\Quote::class),
    Entity\Shipping\Quote\ServiceInterface::class => autowire(Entity\Shipping\Quote\Service::class),

    /** Commands */
    Command\ShippingInterface::class => autowire(Command\Shipping::class),

    /** Command Methods */
    Command\Shipping\QuoteInterface::class => autowire(Command\Shipping\Quote::class),

    /** Service Objects */
    Service\ConnectionInterface::class => autowire(Service\Connection::class),
    Service\ResultInterface::class => autowire(Service\Result::class),
    Framework\Http\Response\ResponseSuccessInterface::class => autowire(Service\Response\Success::class),
    Framework\Http\Response\ResponseExceptionInterface::class => autowire(Service\Response\Exception::class),

    /** Framework Objects */
    Framework\Data\SerializerInterface::class => autowire(Framework\Data\Serializer::class),
    Framework\Data\DataObjectInterface::class => autowire(Framework\Data\DataObject::class),
    Framework\Object\FactoryInterface::class => autowire(Framework\Object\GodFactory::class),

    /** Other Objects */
    \GuzzleHttp\ClientInterface::class => autowire(\GuzzleHttp\Client::class),
    \Psr\Log\LoggerInterface::class => autowire(\Monolog\Logger::class),
    EventObserver\EventDispatcherInterface::class => autowire(EventObserver\EventDispatcher::class),
];
