<?php

declare(strict_types=1);

namespace EconoCargo\Options\Request;

class QuoteResponseType
{
    /**
     * @const int
     * Resposta = 1 Cotação.
     * Retorna os dados da Cotação de Menor Valor de Frete (R$)
     */
    public const TYPE_CHEAPER = 1;

    /**
     * @const int
     * Resposta = 1 Cotação.
     * Retorna os dados da Cotação de Menor Prazo Estimado (Dias) de entrega ao Destinatário
     */
    public const TYPE_FASTEST = 2;

    /**
     * @const int
     * Resposta = Todas as Cotações.
     * Retorna todas as Cotações de Fretes que foram geradas, com o mínimo de 1 cotação
     */
    public const TYPE_ALL = 3;

    /**
     * @const int
     * Analítica 01: Resposta = 1 Cotação.
     * Retorna os dados da Cotação de acordo com [Valor Predefinido] pelo cliente, sendo:
     *  - Se a {Diferença de Prazos} <= [Valor Predefinido] - Cotação enviada é a de Menor Valor
     *  - Se a {Diferença de Prazos} > [Valor Predefinido] - Cotação enviada é a de Menor Prazo
     */
    public const TYPE_ANALYTIC = 4;

    /**
     * @const int
     * Analítica 02: Resposta = 2 Cotações.
     * Retorna os dados da Cotação de Menor Prazo e a Cotação de Menor Valor.
     */
    public const TYPE_CHEAPER_AND_FASTEST = 5;
}
