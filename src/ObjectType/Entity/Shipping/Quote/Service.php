<?php

declare(strict_types=1);

namespace EconoCargo\ObjectType\Entity\Shipping\Quote;

use EconoCargo\ObjectType\EntityAbstract;

/**
 * Class Service
 */
class Service extends EntityAbstract implements ServiceInterface
{
    /**
     * @var array
     */
    protected $fieldMapping = [
        'WS_Pedido_Cod' => self::FIELD_ORDER_NUMBER,
        'WSOut_NotaS' => self::FIELD_MESSAGE,
        'WSOut_DataH' => self::FIELD_DATETIME,
        'WSOut_Indic' => self::FIELD_INDICATION,
        'WSOut_Frete_Val' => self::FIELD_FREIGHT_VALUE,
        'WSOut_Prazo_Dias' => self::FIELD_ESTIMATION_DAYS,
        'WSOut_MovSim_ID' => self::FIELD_MOVSIM_ID,
        'WSOut_MovCot_ID' => self::FIELD_MOVCOT_ID,
        'WSOut_Transp_CNPJ' => self::FIELD_TRANSPORTER_CNPJ,
        'WSOut_Transp_Nome' => self::FIELD_TRANSPORTER_NAME,
        'WSOut_Transp_Email' => self::FIELD_TRANSPORTER_EMAIL,
    ];

    /**
     * @inheritDoc
     */
    public function getOrderNumber() : string
    {
        return $this->getData(self::FIELD_ORDER_NUMBER);
    }

    /**
     * @inheritDoc
     */
    public function getMessage() : string
    {
        return $this->getData(self::FIELD_MESSAGE);
    }

    /**
     * @inheritDoc
     */
    public function getDatetime() : string
    {
        return $this->getData(self::FIELD_DATETIME);
    }

    /**
     * @inheritDoc
     */
    public function getIndication() : int
    {
        return $this->getData(self::FIELD_INDICATION);
    }

    /**
     * @inheritDoc
     */
    public function getFreightValue() : float
    {
        return (float) $this->getData(self::FIELD_FREIGHT_VALUE);
    }

    /**
     * @inheritDoc
     */
    public function getEstimationDays() : int
    {
        return (int) $this->getData(self::FIELD_ESTIMATION_DAYS);
    }

    /**
     * @inheritDoc
     */
    public function getMovSimId() : string
    {
        return $this->getData(self::FIELD_MOVSIM_ID);
    }

    /**
     * @inheritDoc
     */
    public function getMovCotId() : string
    {
        return $this->getData(self::FIELD_MOVCOT_ID);
    }

    /**
     * @inheritDoc
     */
    public function getTransporterCNPJ() : string
    {
        return $this->getData(self::FIELD_TRANSPORTER_CNPJ);
    }

    /**
     * @inheritDoc
     */
    public function getTransporterName() : string
    {
        return $this->getData(self::FIELD_TRANSPORTER_NAME);
    }

    /**
     * @inheritDoc
     */
    public function getTransporterEmail() : string
    {
        return $this->getData(self::FIELD_TRANSPORTER_EMAIL);
    }

    /**
     * @inheritDoc
     */
    public function isError() : bool
    {
        return $this->getIndication() === 0;
    }
}
