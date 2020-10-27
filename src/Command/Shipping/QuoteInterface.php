<?php

declare(strict_types = 1);

namespace EconoCargo\Command\Shipping;

/**
 * Class QuoteInterface
 * @package EconoCargo\Command\Shipping
 */
interface QuoteInterface
{
    /**
     * @const string
     */
    const FIELD_COMPANY_CNPJ = 'WS_Empresa_CNPJ';

    /**
     * @const string
     */
    const FIELD_ORDER_NUMBER = 'WS_Pedido_Cod';

    /**
     * @const string
     */
    const FIELD_LOCAL_DEST_ID = 'WS_Local_Dest_ID';

    /**
     * @const string
     */
    const FIELD_LOCAL_DEST_NAME = 'WS_Local_Dest_UFNome';

    /**
     * @const string
     */
    const FIELD_LOCAL_DEST_IBGE = 'WS_Local_Dest_CodIBGE';

    /**
     * @const string
     */
    const FIELD_LOCAL_DEST_POSTCODE = 'WS_Local_Dest_CEP';

    /**
     * @const string
     */
    const FIELD_SEGMENT_ID = 'WS_Seguimento_ID';

    /**
     * @const string
     */
    const FIELD_DEST_CNPJ = 'WS_Dest_CNPJ';

    /**
     * @const string
     */
    const FIELD_DEST_CPF = 'WS_Dest_CPF';

    /**
     * @const string
     */
    const FIELD_DIMENSIONS_TOTAL_VALUE = 'WS_Dim_ValTot';

    /**
     * @const string
     */
    const FIELD_WEIGHT_TOTAL_VALUE = 'WS_Peso_ValTot';

    /**
     * @const string
     */
    const FIELD_INVOICE_TOTAL_VALUE = 'WS_NFiscal_ValTot';

    /**
     * @const string
     */
    const FIELD_CHEAPER_QUOTE = 'IsMenorCotacao';

    /**
     * @const string
     */
    const FIELD_RESPONSE_QUOTE_TYPE = 'WS_TpRespCot';

    /**
     * @param string $cnpj
     *
     * @return $this
     */
    public function setCompanyCNPJ(string $cnpj) : self;

    /**
     * @param string $orderNumber
     *
     * @return $this
     */
    public function setOrderNumber(string $orderNumber) : self;

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setDestinyId(string $id) : self;

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setDestinyUFName(string $name) : self;

    /**
     * @param string $code
     *
     * @return $this
     */
    public function setDestinyIBGECode(string $code) : self;

    /**
     * @param string $postcode
     *
     * @return $this
     */
    public function setDestinyPostcode(string $postcode) : self;

    /**
     * @param int $segmentId
     *
     * @return $this
     */
    public function setSegmentId(int $segmentId) : self;

    /**
     * @param string $cnpj
     *
     * @return $this
     */
    public function setDestinyCNPJ(string $cnpj) : self;

    /**
     * @param string $cpf
     *
     * @return $this
     */
    public function setDestinyCPF(string $cpf) : self;

    /**
     * @param float $value
     *
     * @return $this
     */
    public function setDimensionsTotalValue(float $value) : self;

    /**
     * @param float $value
     *
     * @return $this
     */
    public function setWeightTotalValue(float $value) : self;

    /**
     * @param float $value
     *
     * @return $this
     */
    public function setInvoiceTotalValue(float $value) : self;

    /**
     * @param bool $cheaperQuote
     *
     * @return $this
     */
    public function setCheaperQuote(bool $cheaperQuote) : self;

    /**
     * @param int $type
     *
     * @return $this
     */
    public function setResponseQuoteType(int $type) : self;
}
