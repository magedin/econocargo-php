<?php

declare(strict_types=1);

namespace EconoCargo\Command;

/**
 * Class Shipping
 */
class Shipping implements ShippingInterface
{
    /**
     * @var Shipping\Quote
     */
    private $quoteFactory;

    /**
     * Shipping constructor.
     *
     * @param Shipping\QuoteFactory $quoteFactory
     */
    public function __construct(
        Shipping\QuoteFactory $quoteFactory
    ) {
        $this->quoteFactory = $quoteFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function quote()
    {
        /** @var Shipping\QuoteInterface|CommandInterface $quote */
        $quote = $this->quoteFactory->create();
        return $quote;
    }
}
