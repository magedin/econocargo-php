# econoCARGO PHP SDK

### About
This is the official SDK (Software Development Kit) for econoCARGO API. This SDK is intended to help with PHP systems and econoCARGO API.

### Installing

##### Installing with composer

To install using composer you'll need to have composer installed on your computer so you will be able to install this SDK into your project easily.

Once you have composer installed you just need to require this SDK:

```bash
> composer require magedin/econocargo-php
```

### Usage

To start using this SDK into your PHP system is really simple. Take a look in the example right below on how it's really easy to use:

```php
<?php

use EconoCargo\ApiFactory;
use EconoCargo\Options\Request\QuoteResponseType;

/**
 * Require composer autoload file.
 */
require_once __DIR__ . '/../vendor/autoload.php';

try {
    $api = ApiFactory::create();

    /** Activating testing mode (API Sandbox). */
    $api->config()->service()->isTesting(true);
    $quote = $api->shipping()->quote();
    $quote->setCompanyCNPJ('05663266000219')
        ->setOrderNumber('123456')
        ->setDestinyId('9836')
        ->setDestinyUFName('SP')
        ->setDestinyIBGECode(0)
        ->setDestinyPostcode('04100-000')
        ->setSegmentId(5)
        ->setDestinyCNPJ("12345678901234")
        ->setDestinyCPF("01234567890")
        ->setDimensionsTotalValue(0.9)
        ->setWeightTotalValue(150)
        ->setInvoiceTotalValue(1500)
        ->setCheaperQuote(true)
        ->setResponseQuoteType(QuoteResponseType::TYPE_ALL)
    ;

    $result = $quote->execute();

    $shippingServices = $result->getShippingServices();
} catch (\Exception $e) {
    echo "Some error has happened.";
}
```