<?php

declare(strict_types=1);

namespace EconoCargo\ObjectType\Entity\Shipping\Quote;

/**
 * Class ServiceInterface
 */
interface ServiceInterface
{
    /**
     * @const string
     */
    public const FIELD_ORDER_NUMBER = 'order_number';

    /**
     * @const string
     */
    public const FIELD_MESSAGE = 'message';

    /**
     * @const string
     */
    public const FIELD_DATETIME = 'datetime';

    /**
     * @const string
     */
    public const FIELD_INDICATION = 'indication';

    /**
     * @const string
     */
    public const FIELD_FREIGHT_VALUE = 'freight_value';

    /**
     * @const string
     */
    public const FIELD_ESTIMATION_DAYS = 'estimation_days';

    /**
     * @const string
     */
    public const FIELD_MOVSIM_ID = 'movsim_id';

    /**
     * @const string
     */
    public const FIELD_MOVCOT_ID = 'movcot_id';

    /**
     * @const string
     */
    public const FIELD_TRANSPORTER_CNPJ = 'transporter_cnpj';

    /**
     * @const string
     */
    public const FIELD_TRANSPORTER_NAME = 'transporter_name';

    /**
     * @const string
     */
    public const FIELD_TRANSPORTER_EMAIL = 'transporter_email';

    /**
     * @return string
     */
    public function getOrderNumber(): string;

    /**
     * @return string
     */
    public function getMessage(): string;

    /**
     * @return string
     */
    public function getDatetime(): string;

    /**
     * @return int
     */
    public function getIndication(): int;

    /**
     * @return float
     */
    public function getFreightValue(): float;

    /**
     * @return int
     */
    public function getEstimationDays(): int;

    /**
     * @return string
     */
    public function getMovSimId(): string;

    /**
     * @return string
     */
    public function getMovCotId(): string;

    /**
     * @return string
     */
    public function getTransporterCNPJ(): string;

    /**
     * @return string
     */
    public function getTransporterName(): string;

    /**
     * @return string
     */
    public function getTransporterEmail(): string;

    /**
     * @return bool
     */
    public function isError(): bool;
}
