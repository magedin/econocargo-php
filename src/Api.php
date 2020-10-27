<?php

declare(strict_types = 1);

namespace EconoCargo;

/**
 * Class Api
 */
class Api implements ApiInterface
{
    /**
     * @var \EconoCargo\Service\ConnectionInterface
     */
    private $connection;

    /**
     * @var Command\ShippingInterface
     */
    private $shipping;

    /**
     * @var ConfigPool
     */
    private $configPool;

    /**
     * Api constructor.
     *
     * @param Service\ConnectionInterface $connection
     * @param Command\PostcodeInterface   $postcode
     * @param Command\ShippingInterface   $shipping
     * @param Command\TrackingInterface   $tracking
     * @param string                      $token
     */
    public function __construct(
        Service\ConnectionInterface $connection,
        Command\PostcodeInterface $postcode,
        Command\ShippingInterface $shipping,
        Command\TrackingInterface $tracking,
        ConfigPool $configPool,
        string $token
    ) {
        $this->connection = $connection;

        $this->postcode = $postcode;
        $this->shipping = $shipping;
        $this->tracking = $tracking;
        $this->configPool = $configPool;

        /** Set the token to config. */
        $this->config()->credentials()->setToken($token);
    }

    /**
     * @inheritdoc
     */
    public function shipping()
    {
        return $this->shipping;
    }

    public function config()
    {
        // TODO: Implement config() method.
    }
}
