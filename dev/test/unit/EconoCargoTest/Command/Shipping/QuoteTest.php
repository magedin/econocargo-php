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

    protected function setUp(): void
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
        $this->assertEquals('{"' . $field . '":"' . $expected . '"}', $this->object->toJson());
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
        $this->assertEquals('{"' . $field . '":"' . $expected . '"}', $this->object->toJson());
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
        $this->assertEquals('{"' . $field . '":"' . $expected . '"}', $this->object->toJson());
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
        $this->assertEquals('{"' . $field . '":"' . $expected . '"}', $this->object->toJson());
        $this->assertEquals([$field => $expected], $this->object->toArray());
    }

    /**
     * @test
     */
    public function setDestinyIBGECode()
    {
        $field = Quote::FIELD_LOCAL_DEST_IBGE;
        $expected = 12345;

        $this->object->setDestinyIBGECode($expected);
        $this->assertEquals($expected, $this->object->getData($field));
        $this->assertEquals('{"' . $field . '":' . $expected . '}', $this->object->toJson());
        $this->assertEquals([$field => $expected], $this->object->toArray());
    }

    /**
     * @test
     */
    public function setDestinyPostcode()
    {
        $field = Quote::FIELD_LOCAL_DEST_POSTCODE;
        $value = '06395-000';
        $expected = '06395000';

        $this->object->setDestinyPostcode($value);
        $this->assertEquals($expected, $this->object->getData($field));
        $this->assertEquals('{"' . $field . '":"' . $expected . '"}', $this->object->toJson());
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
        $this->assertEquals('{"' . $field . '":' . $expected . '}', $this->object->toJson());
        $this->assertEquals([$field => $expected], $this->object->toArray());
    }

    /**
     * @test
     */
    public function setDestinyCNPJ()
    {
        $field = Quote::FIELD_DEST_CNPJ;
        $value = '12.345.678/9012-34';
        $expected = '12345678901234';

        $this->object->setDestinyCNPJ($value);
        $this->assertEquals($expected, $this->object->getData($field));
        $this->assertEquals('{"' . $field . '":"' . $expected . '"}', $this->object->toJson());
        $this->assertEquals([$field => $expected], $this->object->toArray());
    }

    /**
     * @test
     */
    public function setDestinyCPF()
    {
        $field = Quote::FIELD_DEST_CPF;
        $value = '012.345.678-90';
        $expected = '01234567890';

        $this->object->setDestinyCPF($value);
        $this->assertEquals($expected, $this->object->getData($field));
        $this->assertEquals('{"' . $field . '":"' . $expected . '"}', $this->object->toJson());
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
        $this->assertEquals('{"' . $field . '":' . $expected . '}', $this->object->toJson());
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
        $this->assertEquals('{"' . $field . '":' . $expected . '}', $this->object->toJson());
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
        $this->assertEquals('{"' . $field . '":' . $expected . '}', $this->object->toJson());
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
        $this->assertTrue($this->object->getData($field));
        $this->assertEquals('{"' . $field . '":true}', $this->object->toJson());
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
        $this->assertFalse($this->object->getData($field));
        $this->assertEquals('{"' . $field . '":false}', $this->object->toJson());
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
        $this->assertEquals('{"' . $field . '":' . $expected . '}', $this->object->toJson());
        $this->assertEquals([$field => $expected], $this->object->toArray());
    }

    /**
     * @test
     */
    public function fullTest()
    {
        $expectedArray = [
            "WS_Empresa_CNPJ" => "05663266000219",
            "WS_Pedido_Cod" => "123456",
            "WS_Local_Dest_ID" => "9836",
            "WS_Local_Dest_UFNome" => "SP",
            "WS_Local_Dest_CodIBGE" => 0,
            "WS_Local_Dest_CEP" => "06395010",
            "WS_Seguimento_ID" => 5,
            "WS_Dest_CNPJ" => "12345678901234",
            "WS_Dest_CPF" => "01234567890",
            "WS_Dim_ValTot" => 0.9,
            "WS_Peso_ValTot" => 150.0,
            "WS_NFiscal_ValTot" => 1500.0,
            "IsMenorCotacao" => true,
            "WS_TpRespCot" => 3
        ];

        $this->object
            ->setCompanyCNPJ('05663266000219')
            ->setOrderNumber('123456')
            ->setDestinyId('9836')
            ->setDestinyUFName('SP')
            ->setDestinyIBGECode(0)
            ->setDestinyPostcode('06395-010')
            ->setSegmentId(5)
            ->setDestinyCNPJ('12345678901234')
            ->setDestinyCPF('01234567890')
            ->setDimensionsTotalValue(0.9)
            ->setWeightTotalValue(150)
            ->setInvoiceTotalValue(1500)
            ->setCheaperQuote(true)
            ->setResponseQuoteType(3);

        $this->assertEquals($expectedArray, $this->object->toArray());
        $this->assertEquals(json_encode($expectedArray), $this->object->toJson());
    }
}
