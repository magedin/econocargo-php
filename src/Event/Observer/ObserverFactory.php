<?php

declare(strict_types=1);

namespace EconoCargo\Event\Observer;

use EconoCargo\Framework\ObjectManager;

/**
 * Class ObserverFactory
 */
class ObserverFactory
{
    /**
     * @var ObjectManager
     */
    private $objectManager;

    /**
     * ObserverFactory constructor.
     *
     * @param ObjectManager $objectManager
     */
    public function __construct(
        ObjectManager $objectManager
    ) {
        $this->objectManager = $objectManager;
    }

    /**
     * @return RequestResultLogger
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function createRequestResultLogger()
    {
        return $this->objectManager->create(RequestResultLogger::class);
    }
}
