<?php

declare(strict_types=1);

namespace EconoCargo\Config\Service;

/**
 * Class ProductionEnvironment
 */
class ProductionEnvironment extends AbstractEnvironment
{
    /**
     * @var string
     */
    protected $protocol = 'http';

    /**
     * @var string
     */
    protected $host = '52.67.21.41';

    /**
     * @var int
     */
    protected $port = 80;
}
