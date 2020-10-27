<?php

declare(strict_types=1);

namespace EconoCargo\Service;

use EconoCargo\Framework\Http\Response;
use EconoCargo\ObjectType\EntityInterface;

/**
 * Interface ResultInterface
 */
interface ResultInterface
{
    /**
     * @return Response\ResponseExceptionInterface|Response\ResponseSuccessInterface
     */
    public function getResponse();

    /**
     * @return EntityInterface
     */
    public function parse();
}
