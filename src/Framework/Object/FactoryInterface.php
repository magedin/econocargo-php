<?php

declare(strict_types = 1);

namespace EconoCargo\Framework\Object;

/**
 * Interface FactoryInterface
 */
interface FactoryInterface
{
    /**
     * @param array $parameters
     * @return mixed
     */
    public function create(array $parameters = []);
}
