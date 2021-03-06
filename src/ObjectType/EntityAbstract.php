<?php

namespace EconoCargo\ObjectType;

use EconoCargo\Framework\Data\DataObject;
use EconoCargo\Framework\Data\SerializerInterface;

/**
 * Class EntityAbstract
 */
abstract class EntityAbstract extends DataObject implements EntityInterface
{
    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * @var array
     */
    protected $fieldMapping = [];

    /**
     * EntityAbstract constructor.
     *
     * @param SerializerInterface $serializer
     * @param array               $data
     */
    public function __construct(
        SerializerInterface $serializer,
        array $data = []
    ) {
        $this->serializer = $serializer;
        parent::__construct($data);
        $this->applyMappings();
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return $this->serializer->serialize($this->data);
    }

    /**
     * @param string|null       $field
     * @param array|string|null $data
     *
     * @return array
     */
    protected function prepareNewData(string $field = null, $data = null)
    {
        return $data;
    }

    /**
     * @return void
     */
    private function applyMappings()
    {
        $data = $this->getData();
        $newData = [];

        foreach ($data as $key => $value) {
            if (!$this->isMappingKeyAvailable($key)) {
                continue;
            }

            $field = $this->fieldMapping[$key];
            $newData[$field] = $this->prepareNewData($field, $value);
        }

        $this->setData($newData);
    }

    /**
     * @param string $key
     * @return bool
     */
    private function isMappingKeyAvailable($key)
    {
        $key = $this->normalizeKey($key);
        $fieldMapping = $this->convertArrayKeysToLowercase($this->fieldMapping);

        if (array_key_exists($key, $fieldMapping) || !empty($fieldMapping[$key])) {
            return true;
        }

        return false;
    }

    /**
     * @param array $data
     * @return array
     */
    private function convertArrayKeysToLowercase(array $data)
    {
        foreach ($data as $key => $value) {
            unset($data[$key]);
            $data[$this->normalizeKey($key)] = $value;
        }

        return $data;
    }

    /**
     * @param string $key
     * @return string
     */
    private function normalizeKey($key)
    {
        return trim(strtolower($key));
    }
}
