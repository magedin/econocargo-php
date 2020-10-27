<?php

declare(strict_types=1);

namespace EconoCargo\ObjectType\Entity\Shipping;

use EconoCargo\Framework\Data\SerializerInterface;
use EconoCargo\ObjectType\EntityAbstract;

/**
 * Class Quote
 */
class Quote extends EntityAbstract implements QuoteInterface
{
    /**
     * @var Quote\ServiceFactory
     */
    private $serviceFactory;

    /**
     * @var array
     */
    protected $fieldMapping = [
        'SDT_WSRetorno' => 'shipping_services',
    ];

    public function __construct(
        SerializerInterface $serializer,
        Quote\ServiceFactory $serviceFactory,
        array $data = []
    ) {
        parent::__construct($serializer, $data);
        $this->serviceFactory = $serviceFactory;
    }

    /**
     * @return int
     */
    public function countShippingServices(): int
    {
        return (int) count($this->getShippingServices());
    }

    /**
     * @return array
     */
    public function getShippingServices()
    {
        return $this->prepareShippingServices();
    }

    /**
     * @inheritDoc
     */
    protected function prepareNewData(string $field = null, $data = null)
    {
        return $data['Resultados'] ?? [];
    }

    /**
     * @return array
     */
    private function prepareShippingServices()
    {
        $services = (array) $this->getData(self::FIELD_SHIPPING_SERVICES);
        $result = [];

        /** @var array $service */
        foreach ($services as $service) {
            $result[] = $this->serviceFactory->create(['data' => (array) $service]);
        }

        return $result;
    }
}
