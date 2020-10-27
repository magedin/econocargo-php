<?php

declare(strict_types=1);

namespace EconoCargo\Service;

use EconoCargo\Framework\Http\Response\ResponseInterface;
use EconoCargo\Framework\Object\FactoryInterface;
use EconoCargo\Framework\Object\GodFactory;

/**
 * Class Result
 */
class Result implements ResultInterface
{
    /**
     * @var ResponseInterface
     */
    private $response;

    /**
     * @var GodFactory
     */
    private $godFactory;

    /**
     * @var string
     */
    private $objectTypeClass;

    /**
     * Result constructor.
     *
     * @param GodFactory        $godFactory
     * @param ResponseInterface $response
     * @param string            $objectTypeClass
     */
    public function __construct(
        GodFactory $godFactory,
        ResponseInterface $response,
        $objectTypeClass = null
    ) {
        $this->godFactory = $godFactory;
        $this->response = $response;
        $this->objectTypeClass = $objectTypeClass;
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * {@inheritdoc}
     */
    public function parse()
    {
        if (!$this->response->canParse() || empty($this->objectTypeClass)) {
            return false;
        }

        /** @var array $body */
        $body = $this->getResponse()->getBody();

        $objectType = $this->godFactory->createObject($this->objectTypeClass, [
            'data' => $body['result']
        ]);

        return $objectType;
    }
}
