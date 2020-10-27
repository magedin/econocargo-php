<?php

declare(strict_types = 1);

namespace EconoCargo;

use EconoCargo\Service\ConnectionInterface;

/**
 * Class Api
 */
class Api implements ApiInterface
{
    /**
     * @var ConnectionInterface
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
     * @param Command\ShippingInterface   $shipping
     * @param ConfigPool                  $configPool
     * @param string|null                 $token
     */
    public function __construct(
        Service\ConnectionInterface $connection,
        Command\ShippingInterface $shipping,
        ConfigPool $configPool,
        string $token = null
    ) {
        $this->connection = $connection;
        $this->shipping = $shipping;
        $this->configPool = $configPool;

        /** Set the token to config. */
        if ($token) {
            $this->config()->credentials()->setToken($token);
        }
    }

    /**
     * @inheritdoc
     */
    public function shipping()
    {
        return $this->shipping;
    }

    /**
     * @return ConfigPool
     */
    public function config()
    {
        return $this->configPool;
    }
}
