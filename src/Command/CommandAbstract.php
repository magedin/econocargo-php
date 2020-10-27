<?php

declare(strict_types=1);

namespace EconoCargo\Command;

use EconoCargo\Framework\Data\DataObject;
use EconoCargo\Framework\Data\SerializerInterface;
use EconoCargo\Framework\Object\FactoryInterface;
use EconoCargo\ObjectType\EntityInterface;
use EconoCargo\Service\ConnectionInterface;

/**
 * Class MethodAbstract
 */
abstract class CommandAbstract extends DataObject implements CommandInterface
{
    /**
     * @var string
     */
    protected $urlPath = null;

    /**
     * @var boolean
     */
    protected $exportMultipart = false;

    /**
     * @var string
     */
    protected $contentType = 'json';

    /**
     * @var ConnectionInterface
     */
    protected $connection;

    /**
     * @var string
     */
    protected $requestMethod = self::REQUEST_METHOD_POST;

    /**
     * @var array
     */
    protected $optionalConfig = [];

    /**
     * @var FactoryInterface
     */
    protected $typeFactory;

    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * CommandAbstract constructor.
     *
     * @param ConnectionInterface $connection
     * @param SerializerInterface $serializer
     * @param FactoryInterface    $typeFactory
     */
    public function __construct(
        ConnectionInterface $connection,
        SerializerInterface $serializer,
        FactoryInterface $typeFactory
    ) {
        $this->connection = $connection;
        $this->serializer = $serializer;
        $this->typeFactory = $typeFactory;
    }

    /**
     * @return string
     */
    public function getUrlPath()
    {
        return $this->urlPath;
    }

    /**
     * @return string
     */
    public function getRequestMethod()
    {
        return $this->requestMethod;
    }

    /**
     * {@inheritdoc}
     */
    public function setOptionalConfig(array $optionalConfig = [])
    {
        $this->optionalConfig = $optionalConfig;

        /**
         * @var string $key
         * @var mixed  $value
         */
        foreach ($this->optionalConfig as $key => $value) {
            if ('' === $key) {
                continue;
            }

            $this->setData($key, $value);
        }

        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->export();
    }

    /**
     * {@inheritdoc}
     */
    public function toJson()
    {
        return $this->serializer->serialize($this->toArray());
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $response = $this->connection->request($this->getRequestMethod(), $this->getUrlPath(), $this->toArray());

        /** @var EntityInterface $type */
        $type = $this->typeFactory->create(['data' => (array) $response->getBody()]);

        return $type;
    }
}
