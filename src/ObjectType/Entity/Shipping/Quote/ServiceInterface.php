<?php

declare(strict_types=1);

namespace EconoCargo\ObjectType\Entity\Shipping\Quote;

/**
 * Class ServiceInterface
 */
interface ServiceInterface
{
    const FIELD_ORDER_NUMBER = 'order_number';
    const FIELD_MESSAGE = 'message';
    const FIELD_DATETIME = 'datetime';
    const FIELD_INDICATION = 'indication';
    const FIELD_FREIGHT_VALUE = 'freight_value';
    const FIELD_ESTIMATION_DAYS = 'estimation_days';
    const FIELD_MOVSIM_ID = 'movsim_id';
    const FIELD_MOVCOT_ID = 'movcot_id';
    const FIELD_TRANSPORTER_CNPJ = 'transporter_cnpj';
    const FIELD_TRANSPORTER_NAME = 'transporter_name';
    const FIELD_TRANSPORTER_EMAIL = 'transporter_email';

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
