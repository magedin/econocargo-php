<?php

use EconoCargo\ApiFactory;
use EconoCargo\ObjectType\Entity\Shipping\Quote;
use EconoCargo\ObjectType\Entity\Shipping\Quote\Service;
use EconoCargo\Options\Request\QuoteResponseType;

require_once __DIR__ . '/../vendor/autoload.php';

$data = [
    "WS_Empresa_CNPJ" => "05663266000219",
    "WS_Pedido_Cod" => "123456",
    "WS_Local_Dest_ID" => "9836",
    "WS_Local_Dest_UFNome" => "SP",
    "WS_Local_Dest_CodIBGE" => 0,
    "WS_Local_Dest_CEP" => "06395-010",
    "WS_Seguimento_ID" => 5,
    "WS_Dest_CNPJ" => "12345678901234",
    "WS_Dest_CPF" => "01234567890",
    "WS_Dim_ValTot" => 0.9,
    "WS_Peso_ValTot" => 150,
    "WS_NFiscal_ValTot" => 1500,
    "IsMenorCotacao" => true,
    "WS_TpRespCot" => QuoteResponseType::TYPE_ALL
];

try {
    $api = ApiFactory::create();

    /** Activating testing mode (API Sandbox). */
    $api->config()->service()->isTesting(true);
    $quote = $api->shipping()->quote();
    $quote->setData($data);

    /** @var Quote $result */
    $result = $quote->execute();

    /** @var Service[] $shippingServices */
    $shippingServices = $result->getShippingServices();
    echo $result->countShippingServices();
} catch (\DI\DependencyException $e) {
} catch (\DI\NotFoundException $e) {
}
