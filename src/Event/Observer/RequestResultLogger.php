<?php

declare(strict_types = 1);

namespace EconoCargo\Event\Observer;

use EconoCargo\ConfigPool;
use EconoCargo\Framework\Data\SerializerInterface;
use TiagoSampaio\EventObserver\EventInterface;
use TiagoSampaio\EventObserver\Observer\ObserverAbstract;

/**
 * Class LogRequestResult
 */
class RequestResultLogger extends ObserverAbstract
{
    /**
     * @var array
     */
    protected $bindEvents = [
        'connection_request_result'
    ];

    /**
     * @var ConfigPool
     */
    private $configPool;

    /**
     * @var \EconoCargo\Logger\LoggerFactory
     */
    private $loggerFactory;

    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * RequestResultLogger constructor.
     *
     * @param ConfigPool                         $configPool
     * @param \EconoCargo\Logger\LoggerFactory               $loggerFactory
     * @param SerializerInterface $serializer
     */
    public function __construct(
        ConfigPool $configPool,
        \EconoCargo\Logger\LoggerFactory $loggerFactory,
        SerializerInterface $serializer
    ) {
        $this->configPool = $configPool;
        $this->loggerFactory = $loggerFactory;
        $this->serializer = $serializer;
    }

    /**
     * @param EventInterface $event
     *
     * @return bool
     */
    protected function canExecute(EventInterface $event)
    {
        if (!$this->configPool->debugger()->isEnabled()) {
            return false;
        }

        return parent::canExecute($event);
    }

    /**
     * @param EventInterface $event
     */
    protected function process(EventInterface $event)
    {
        try {
            /** @var \Psr\Log\LoggerInterface $logger */
            $logger = $this->loggerFactory->getLogger(
                'econocargo_log',
                $this->configPool->debugger()->getFullFilename()
            );

            $options = (array) $event->getData('options');
            unset($options['headers']['token']);

            /** @var \EconoCargo\Framework\Http\Response\ResponseInterface $response */
            $response = $event->getData('response');
            $body = $response ? $response->getBody() : null;

            $info = [
                'request' => $options,
                'result'  => $body,
            ];

            $logger->debug($this->serializer->serialize($info));
        } catch (\Exception $e) {
        }
    }
}
