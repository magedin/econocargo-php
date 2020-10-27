<?php

declare(strict_types=1);

namespace EconoCargoTest\ObjectType\Entity\Shipping;

use EconoCargo\ObjectType\Entity\Shipping\Quote;
use EconoCargoTest\TestCase;

/**
 * Class QuoteTest
 */
class QuoteTest extends TestCase
{
    /**
     * @var Quote
     */
    private $object;

    /**
     * @var string
     */
    private $resultMock = '{
        "SDT_WSRetorno": {
            "Resultados": [
                {
                    "WS_Pedido_Cod": "123456",
                    "WSOut_NotaS": "Sucesso: Fretes Calculados",
                    "WSOut_DataH": "2020-10-27T20:43:45",
                    "WSOut_Indic": 1,
                    "WSOut_Frete_Val": "105.91",
                    "WSOut_Prazo_Dias": 3,
                    "WSOut_MovSim_ID": "192282",
                    "WSOut_MovCot_ID": "0",
                    "WSOut_Transp_CNPJ": "01125797001198",
                    "WSOut_Transp_Nome": "ATIVA LOG (RODO)",
                    "WSOut_Transp_Email": "coletavix@ativalog.com.br"
                },
                {
                    "WS_Pedido_Cod": "123456",
                    "WSOut_NotaS": "Sucesso: Fretes Calculados",
                    "WSOut_DataH": "2020-10-27T20:43:45",
                    "WSOut_Indic": 1,
                    "WSOut_Frete_Val": "219.38",
                    "WSOut_Prazo_Dias": 4,
                    "WSOut_MovSim_ID": "192282",
                    "WSOut_MovCot_ID": "1014426",
                    "WSOut_Transp_CNPJ": "08219203001661",
                    "WSOut_Transp_Nome": "DIRECIONAL",
                    "WSOut_Transp_Email": "comercialvix@direcionaltransportes.com.br"
                },
                {
                    "WS_Pedido_Cod": "123456",
                    "WSOut_NotaS": "Sucesso: Fretes Calculados",
                    "WSOut_DataH": "2020-10-27T20:43:45",
                    "WSOut_Indic": 1,
                    "WSOut_Frete_Val": "203.08",
                    "WSOut_Prazo_Dias": 3,
                    "WSOut_MovSim_ID": "192282",
                    "WSOut_MovCot_ID": "1014427",
                    "WSOut_Transp_CNPJ": "43244631003931",
                    "WSOut_Transp_Nome": "TA TRANS (RODO)",
                    "WSOut_Transp_Email": "brenda.pereira@tanet.com.br"
                },
                {
                    "WS_Pedido_Cod": "123456",
                    "WSOut_NotaS": "Sucesso: Fretes Calculados",
                    "WSOut_DataH": "2020-10-27T20:43:45",
                    "WSOut_Indic": 1,
                    "WSOut_Frete_Val": "213.53",
                    "WSOut_Prazo_Dias": 2,
                    "WSOut_MovSim_ID": "192282",
                    "WSOut_MovCot_ID": "1014428",
                    "WSOut_Transp_CNPJ": "20147617002608",
                    "WSOut_Transp_Nome": "JAMEF",
                    "WSOut_Transp_Email": "coleta@vix.jamef.com.br"
                },
                {
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
                }
            ]
        }
    }';

    protected function setUp() : void
    {
        $this->object = $this->createObject(Quote::class, [
            'data' => (array) json_decode($this->resultMock, true),
        ]);
    }

    /**
     * @test
     */
    public function countShippingServices()
    {
        $this->assertEquals(5, $this->object->countShippingServices());
    }

    /**
     * @test
     */
    public function verifyShippingServicesInstances()
    {
        foreach ($this->object->getShippingServices() as $shippingService) {
            $this->assertInstanceOf(Quote\Service::class, $shippingService);
        }
    }
}
