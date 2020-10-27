<?php

declare(strict_types = 1);

namespace EconoCargo\Framework\Http\Response;

use Exception;

/**
 * Class ResponseExceptionAbstract
 */
abstract class ResponseExceptionAbstract extends ResponseAbstract implements ResponseExceptionInterface
{
    /**
     * @var Exception
     */
    private $exception;

    /**
     * Exception constructor.
     * @param Exception $exception
     */
    public function __construct(
        Exception $exception
    ) {
        $this->exception = $exception;
    }

    /**
     * {@inheritdoc}
     */
    public function getBody()
    {
        return (string) $this->exception->getMessage();
    }

    /**
     * @return bool
     */
    public function success()
    {
        return false;
    }

    /**
     * @return bool
     */
    public function exception()
    {
        return true;
    }
}
