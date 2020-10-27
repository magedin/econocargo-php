<?php

declare(strict_types=1);

namespace EconoCargoTest\Command\Shipping;

use EconoCargo\Command\Shipping\Quote;
use EconoCargoTest\TestCase;

class QuoteTest extends TestCase
{
    /**
     * @var Quote
     */
    private $object;

    protected function setUp() : void
    {
        $this->object = $this->createObject(Quote::class);
    }

    /**
     * @test
     */
    public function setCompanyCNPJ()
    {
        $field = Quote::FIELD_COMPANY_CNPJ;
        $expected = '12345678901234';

        $this->object->setCompanyCNPJ($expected);
        $this->assertEquals($expected, $this->object->getData($field));
        $this->assertEquals('{"'.$field.'":"'.$expected.'"}', $this->object->toJson());
        $this->assertEquals([$field => "12345678901234"], $this->object->toArray());
    }

    /**
     * @test
     */
    public function setOrderNumber()
    {
        $field = Quote::FIELD_ORDER_NUMBER;
        $expected = '12345678901234';

        $this->object->setOrderNumber($expected);
        $this->assertEquals($expected, $this->object->getData($field));
        $this->assertEquals('{"'.$field.'":"'.$expected.'"}', $this->object->toJson());
        $this->assertEquals([$field => $expected], $this->object->toArray());
    }

    /**
     * @test
     */
    public function setDestinyId()
    {
        $field = Quote::FIELD_LOCAL_DEST_ID;
        $expected = '54321';

        $this->object->setDestinyId($expected);
        $this->assertEquals($expected, $this->object->getData($field));
        $this->assertEquals('{"'.$field.'":"'.$expected.'"}', $this->object->toJson());
        $this->assertEquals([$field => $expected], $this->object->toArray());
    }

    /**
     * @test
     */
    public function setDestinyUFName()
    {
        $field = Quote::FIELD_LOCAL_DEST_NAME;
        $expected = 'SP';

        $this->object->setDestinyUFName($expected);
        $this->assertEquals($expected, $this->object->getData($field));
        $this->assertEquals('{"'.$field.'":"'.$expected.'"}', $this->object->toJson());
        $this->assertEquals([$field => $expected], $this->object->toArray());
    }

    /**
     * @test
     */
    public function setDestinyIBGECode()
    {
        $field = Quote::FIELD_LOCAL_DEST_IBGE;
        $expected = 'SP';

        $this->object->setDestinyIBGECode($expected);
        $this->assertEquals($expected, $this->object->getData($field));
        $this->assertEquals('{"'.$field.'":"'.$expected.'"}', $this->object->toJson());
        $this->assertEquals([$field => $expected], $this->object->toArray());
    }

    /**
     * @test
     */
    public function setDestinyPostcode()
    {
        $field = Quote::FIELD_LOCAL_DEST_POSTCODE;
        $expected = '06395-000';

        $this->object->setDestinyPostcode($expected);
        $this->assertEquals($expected, $this->object->getData($field));
        $this->assertEquals('{"'.$field.'":"'.$expected.'"}', $this->object->toJson());
        $this->assertEquals([$field => $expected], $this->object->toArray());
    }

    /**
     * @test
     */
    public function setSegmentId()
    {
        $field = Quote::FIELD_SEGMENT_ID;
        $expected = 5;

        $this->object->setSegmentId($expected);
        $this->assertEquals($expected, $this->object->getData($field));
        $this->assertEquals('{"'.$field.'":'.$expected.'}', $this->object->toJson());
        $this->assertEquals([$field => $expected], $this->object->toArray());
    }

    /**
     * @test
     */
    public function setDestinyCNPJ()
    {
        $field = Quote::FIELD_DEST_CNPJ;
        $expected = '12345678901234';

        $this->object->setDestinyCNPJ($expected);
        $this->assertEquals($expected, $this->object->getData($field));
        $this->assertEquals('{"'.$field.'":"'.$expected.'"}', $this->object->toJson());
        $this->assertEquals([$field => $expected], $this->object->toArray());
    }

    /**
     * @test
     */
    public function setDestinyCPF()
    {
        $field = Quote::FIELD_DEST_CPF;
        $expected = '01234567890';

        $this->object->setDestinyCPF($expected);
        $this->assertEquals($expected, $this->object->getData($field));
        $this->assertEquals('{"'.$field.'":"'.$expected.'"}', $this->object->toJson());
        $this->assertEquals([$field => $expected], $this->object->toArray());
    }

    /**
     * @test
     */
    public function setDimensionsTotalValue()
    {
        $field = Quote::FIELD_DIMENSIONS_TOTAL_VALUE;
        $expected = 15.99;

        $this->object->setDimensionsTotalValue($expected);
        $this->assertEquals($expected, $this->object->getData($field));
        $this->assertEquals('{"'.$field.'":'.$expected.'}', $this->object->toJson());
        $this->assertEquals([$field => $expected], $this->object->toArray());
    }

    /**
     * @test
     */
    public function setWeightTotalValue()
    {
        $field = Quote::FIELD_WEIGHT_TOTAL_VALUE;
        $expected = 17.99;

        $this->object->setWeightTotalValue($expected);
        $this->assertEquals($expected, $this->object->getData($field));
        $this->assertEquals('{"'.$field.'":'.$expected.'}', $this->object->toJson());
        $this->assertEquals([$field => $expected], $this->object->toArray());
    }

    /**
     * @test
     */
    public function setInvoiceTotalValue()
    {
        $field = Quote::FIELD_INVOICE_TOTAL_VALUE;
        $expected = 239.99;

        $this->object->setInvoiceTotalValue($expected);
        $this->assertEquals($expected, $this->object->getData($field));
        $this->assertEquals('{"'.$field.'":'.$expected.'}', $this->object->toJson());
        $this->assertEquals([$field => $expected], $this->object->toArray());
    }

    /**
     * @test
     */
    public function setCheaperQuoteTrue()
    {
        $field = Quote::FIELD_CHEAPER_QUOTE;
        $expected = true;

        $this->object->setCheaperQuote($expected);
        $this->assertEquals($expected, $this->object->getData($field));
        $this->assertEquals('{"'.$field.'":true}', $this->object->toJson());
        $this->assertEquals([$field => $expected], $this->object->toArray());
    }

    /**
     * @test
     */
    public function setCheaperQuoteFalse()
    {
        $field = Quote::FIELD_CHEAPER_QUOTE;
        $expected = false;

        $this->object->setCheaperQuote($expected);
        $this->assertEquals($expected, $this->object->getData($field));
        $this->assertEquals('{"'.$field.'":false}', $this->object->toJson());
        $this->assertEquals([$field => $expected], $this->object->toArray());
    }

    /**
     * @test
     */
    public function setResponseQuoteType()
    {
        $field = Quote::FIELD_RESPONSE_QUOTE_TYPE;
        $expected = 5;

        $this->object->setResponseQuoteType($expected);
        $this->assertEquals($expected, $this->object->getData($field));
        $this->assertEquals('{"'.$field.'":'.$expected.'}', $this->object->toJson());
        $this->assertEquals([$field => $expected], $this->object->toArray());
    }
}
