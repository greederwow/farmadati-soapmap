<?php

namespace LorenzoG3M\FarmaDatiSoap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfField ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfField
 * @subpackage Arrays
 */
class ArrayOfField extends AbstractStructArrayBase
{
    /**
     * The Field
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \LorenzoG3M\FarmaDatiSoap\StructType\Field[]
     */
    public $Field;
    /**
     * Constructor method for ArrayOfField
     * @uses ArrayOfField::setField()
     * @param \LorenzoG3M\FarmaDatiSoap\StructType\Field[] $field
     */
    public function __construct(array $field = array())
    {
        $this
            ->setField($field);
    }
    /**
     * Get Field value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Field[]|null
     */
    public function getField()
    {
        return isset($this->Field) ? $this->Field : null;
    }
    /**
     * This method is responsible for validating the values passed to the setField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setField method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFieldForArrayConstraintsFromSetField(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFieldFieldItem) {
            // validation for constraint: itemType
            if (!$arrayOfFieldFieldItem instanceof \LorenzoG3M\FarmaDatiSoap\StructType\Field) {
                $invalidValues[] = is_object($arrayOfFieldFieldItem) ? get_class($arrayOfFieldFieldItem) : sprintf('%s(%s)', gettype($arrayOfFieldFieldItem), var_export($arrayOfFieldFieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Field property can only contain items of type \LorenzoG3M\FarmaDatiSoap\StructType\Field, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Field value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \LorenzoG3M\FarmaDatiSoap\StructType\Field[] $field
     * @return \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfField
     */
    public function setField(array $field = array())
    {
        // validation for constraint: array
        if ('' !== ($fieldArrayErrorMessage = self::validateFieldForArrayConstraintsFromSetField($field))) {
            throw new \InvalidArgumentException($fieldArrayErrorMessage, __LINE__);
        }
        if (is_null($field) || (is_array($field) && empty($field))) {
            unset($this->Field);
        } else {
            $this->Field = $field;
        }
        return $this;
    }
    /**
     * Add item to Field value
     * @throws \InvalidArgumentException
     * @param \LorenzoG3M\FarmaDatiSoap\StructType\Field $item
     * @return \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfField
     */
    public function addToField(\LorenzoG3M\FarmaDatiSoap\StructType\Field $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \LorenzoG3M\FarmaDatiSoap\StructType\Field) {
            throw new \InvalidArgumentException(sprintf('The Field property can only contain items of type \LorenzoG3M\FarmaDatiSoap\StructType\Field, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Field[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Field|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Field|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Field|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Field|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Field|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Field
     */
    public function getAttributeName()
    {
        return 'Field';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfField
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
