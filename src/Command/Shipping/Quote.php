<?php

declare(strict_types=1);

namespace EconoCargo\Command\Shipping;

use EconoCargo\Command\CommandAbstract;
use EconoCargo\Framework\Data\SerializerInterface;
use EconoCargo\Service\ConnectionInterface;
use TiagoSampaio\Formatter\OnlyNumbers;

/**
 * Class Quote
 */
class Quote extends CommandAbstract implements QuoteInterface
{
    /**
     * @var string
     */
    protected $urlPath = 'rest/WSFFracRest01';

    /**
     * Quote constructor.
     *
     * @param ConnectionInterface                                 $connection
     * @param SerializerInterface                                 $serializer
     * @param \EconoCargo\ObjectType\Entity\Shipping\QuoteFactory $typeFactory
     */
    public function __construct(
        ConnectionInterface $connection,
        SerializerInterface $serializer,
        \EconoCargo\ObjectType\Entity\Shipping\QuoteFactory $typeFactory
    ) {
        parent::__construct($connection, $serializer, $typeFactory);
    }

    /**
     * @inheritDoc
     */
    public function setCompanyCNPJ(string $cnpj): QuoteInterface
    {
        return $this->setData(self::FIELD_COMPANY_CNPJ, OnlyNumbers::format($cnpj));
    }

    /**
     * @inheritDoc
     */
    public function setOrderNumber(string $orderNumber): QuoteInterface
    {
        return $this->setData(self::FIELD_ORDER_NUMBER, $orderNumber);
    }

    /**
     * @inheritDoc
     */
    public function setDestinyId(string $id): QuoteInterface
    {
        return $this->setData(self::FIELD_LOCAL_DEST_ID, $id);
    }

    /**
     * @inheritDoc
     */
    public function setDestinyUFName(string $name): QuoteInterface
    {
        return $this->setData(self::FIELD_LOCAL_DEST_NAME, $name);
    }

    /**
     * @inheritDoc
     */
    public function setDestinyIBGECode(int $code): QuoteInterface
    {
        return $this->setData(self::FIELD_LOCAL_DEST_IBGE, $code);
    }

    /**
     * @inheritDoc
     */
    public function setDestinyPostcode(string $postcode): QuoteInterface
    {
        return $this->setData(self::FIELD_LOCAL_DEST_POSTCODE, OnlyNumbers::format($postcode));
    }

    /**
     * @inheritDoc
     */
    public function setSegmentId(int $segmentId): QuoteInterface
    {
        return $this->setData(self::FIELD_SEGMENT_ID, $segmentId);
    }

    /**
     * @inheritDoc
     */
    public function setDestinyCNPJ(string $cnpj): QuoteInterface
    {
        return $this->setData(self::FIELD_DEST_CNPJ, OnlyNumbers::format($cnpj));
    }

    /**
     * @inheritDoc
     */
    public function setDestinyCPF(string $cpf): QuoteInterface
    {
        return $this->setData(self::FIELD_DEST_CPF, OnlyNumbers::format($cpf));
    }

    /**
     * @inheritDoc
     */
    public function setDimensionsTotalValue(float $value): QuoteInterface
    {
        return $this->setData(self::FIELD_DIMENSIONS_TOTAL_VALUE, $value);
    }

    /**
     * @inheritDoc
     */
    public function setWeightTotalValue(float $value): QuoteInterface
    {
        return $this->setData(self::FIELD_WEIGHT_TOTAL_VALUE, $value);
    }

    /**
     * @inheritDoc
     */
    public function setInvoiceTotalValue(float $value): QuoteInterface
    {
        return $this->setData(self::FIELD_INVOICE_TOTAL_VALUE, $value);
    }

    /**
     * @inheritDoc
     */
    public function setCheaperQuote(bool $cheaperQuote): QuoteInterface
    {
        return $this->setData(self::FIELD_CHEAPER_QUOTE, $cheaperQuote);
    }

    /**
     * @inheritDoc
     */
    public function setResponseQuoteType(int $type): QuoteInterface
    {
        return $this->setData(self::FIELD_RESPONSE_QUOTE_TYPE, $type);
    }
}
