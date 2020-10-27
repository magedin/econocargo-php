<?php

declare(strict_types = 1);

namespace EconoCargo\Framework\Object;

/**
 * Class FactoryAbstract
 */
abstract class FactoryAbstract implements FactoryInterface
{
    /**
     * @var string
     */
    protected $objectClass = null;

    /**
     * @var \EconoCargo\Framework\ObjectManager
     */
    private $objectManager;

    /**
     * FactoryAbstract constructor.
     * @param \EconoCargo\Framework\ObjectManager $objectManager
     */
    public function __construct(
        \Frenet\Framework\ObjectManager $objectManager
    ) {
        $this->objectManager = $objectManager;
    }

    /**
     * @param array $parameters
     * @return mixed
     */
    public function create(array $parameters = [])
    {
        try {
            /** @var \GuzzleHttp\ClientInterface $instance */
            $instance = $this->objectManager->create($this->objectClass, $parameters);
        } catch (\Exception $e) {
            /** @todo debug error or throw exception. */
            return false;
        }

        return $instance;
    }
}
