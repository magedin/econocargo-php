<?php

declare(strict_types=1);

namespace EconoCargoTest\ObjectType\Entity\Shipping\Quote;

use EconoCargo\ObjectType\Entity\Shipping\Quote\Service;
use EconoCargoTest\TestCase;

class ServiceTest extends TestCase
{
    /**
     * @var Service
     */
    private $object;

    /**
     * @var string
     */
    private $serviceDataMock = '{
        "WS_Pedido_Cod": "123456",
        "WSOut_NotaS": "Sucesso: Fretes Calculados",
        "WSOut_DataH": "2020-10-27T20:43:45",
        "WSOut_Indic": 1,
        "WSOut_Frete_Val": "420.39",
        "WSOut_Prazo_Dias": 4,
        "WSOut_MovSim_ID": "192282",
        "WSOut_MovCot_ID": "1014429",
        "WSOut_Transp_CNPJ": "48740351001641",
        "WSOut_Transp_Nome": "BRASPRESS",
        "WSOut_Transp_Email": "vix.coleta01@braspress.com"
    }';

    protected function setUp() : void
    {
        $this->object = $this->createObject(Service::class, [
            'data' => (array) json_decode($this->serviceDataMock, true),
        ]);
    }

    /**
     * @test
     */
    public function getOrderNumber()
    {
        $this->assertEquals("123456", $this->object->getOrderNumber());
    }

    /**
     * @test
     */
    public function getMessage()
    {
        $this->assertEquals("Sucesso: Fretes Calculados", $this->object->getMessage());
    }

    /**
     * @test
     */
    public function getDatetime()
    {
        $this->assertEquals("2020-10-27T20:43:45", $this->object->getDatetime());
    }

    /**
     * @test
     */
    public function getIndication()
    {
        $this->assertEquals(1, $this->object->getIndication());
        $this->assertIsNumeric($this->object->getIndication());
        $this->assertIsInt($this->object->getIndication());
    }

    /**
     * @test
     */
    public function isError()
    {
        $this->assertEquals(false, $this->object->isError());
        $this->assertIsBool($this->object->isError());
    }

    /**
     * @test
     */
    public function getFreightValue()
    {
        $this->assertEquals(420.39, $this->object->getFreightValue());
        $this->assertIsFloat($this->object->getFreightValue());
    }

    /**
     * @test
     */
    public function getEstimationDays()
    {
        $this->assertEquals(4, $this->object->getEstimationDays());
        $this->assertIsInt($this->object->getEstimationDays());
    }

    /**
     * @test
     */
    public function getMovSimId()
    {
        $this->assertEquals("192282", $this->object->getMovSimId());
    }

    /**
     * @test
     */
    public function getMovCotId()
    {
        $this->assertEquals("1014429", $this->object->getMovCotId());
    }

    /**
     * @test
     */
    public function getTransporterCNPJ()
    {
        $this->assertEquals("48740351001641", $this->object->getTransporterCNPJ());
        $this->assertIsNumeric($this->object->getTransporterCNPJ());
    }

    /**
     * @test
     */
    public function getTransporterName()
    {
        $this->assertEquals("BRASPRESS", $this->object->getTransporterName());
    }

    /**
     * @test
     */
    public function getTransporterEmail()
    {
        $this->assertEquals("vix.coleta01@braspress.com", $this->object->getTransporterEmail());
    }
}
