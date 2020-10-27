<?php

declare(strict_types = 1);

namespace EconoCargo\Framework\Http\Response;

/**
 * Class ResponseAbstract
 */
abstract class ResponseAbstract implements ResponseInterface
{
    /**
     * @return bool
     */
    public function canParse()
    {
        return (bool) $this->success();
    }
}
