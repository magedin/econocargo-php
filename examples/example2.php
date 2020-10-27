<?php

require_once __DIR__ . '/../vendor/autoload.php';

try {
    $api = \EconoCargo\ApiFactory::create();

    /** Activating testing mode (API Sandbox). */
    $api->config()->service()->isTesting(true);
    $quote = $api->shipping()->quote();
    $quote->setCompanyCNPJ('05663266000219')
        ->setOrderNumber('123456')
        ->setDestinyId('9836')
        ->setDestinyUFName('SP')
        ->setDestinyIBGECode(0)
        ->setDestinyPostcode('06395-010')
        ->setSegmentId(5)
        ->setDestinyCNPJ("12345678901234")
        ->setDestinyCPF("01234567890")
        ->setDimensionsTotalValue(0.9)
        ->setWeightTotalValue(150)
        ->setInvoiceTotalValue(1500)
        ->setCheaperQuote(true)
        ->setResponseQuoteType(\EconoCargo\Options\Request\QuoteResponseType::TYPE_ALL)
    ;

    $result = $quote->execute();

    $shippingServices = $result->getShippingServices();
} catch (\DI\DependencyException $e) {
} catch (\DI\NotFoundException $e) {
}
