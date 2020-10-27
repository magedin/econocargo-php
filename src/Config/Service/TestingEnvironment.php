<?php

declare(strict_types=1);

namespace EconoCargo\Config\Service;

/**
 * Class TestingEnvironment
 */
class TestingEnvironment extends AbstractEnvironment
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
    protected $port = 8081;
}
