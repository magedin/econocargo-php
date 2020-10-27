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
        $this->assertEquals($expected, $this->object->getData(Quote::FIELD_COMPANY_CNPJ));
        $this->assertEquals('{"'.$field.'":"'.$expected.'"}', $this->object->toJson());
        $this->assertEquals(["WS_Empresa_CNPJ" => "12345678901234"], $this->object->toArray());
    }
}
