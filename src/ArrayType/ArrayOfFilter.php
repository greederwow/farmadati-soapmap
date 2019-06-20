<?php

namespace LorenzoG3M\FarmaDatiSoap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFilter ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFilter
 * @subpackage Arrays
 */
class ArrayOfFilter extends AbstractStructArrayBase
{
    /**
     * The Filter
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \LorenzoG3M\FarmaDatiSoap\StructType\Filter[]
     */
    public $Filter;
    /**
     * Constructor method for ArrayOfFilter
     * @uses ArrayOfFilter::setFilter()
     * @param \LorenzoG3M\FarmaDatiSoap\StructType\Filter[] $filter
     */
    public function __construct(array $filter = array())
    {
        $this
            ->setFilter($filter);
    }
    /**
     * Get Filter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Filter[]|null
     */
    public function getFilter()
    {
        return isset($this->Filter) ? $this->Filter : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFilter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFilter method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFilterForArrayConstraintsFromSetFilter(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFilterFilterItem) {
            // validation for constraint: itemType
            if (!$arrayOfFilterFilterItem instanceof \LorenzoG3M\FarmaDatiSoap\StructType\Filter) {
                $invalidValues[] = is_object($arrayOfFilterFilterItem) ? get_class($arrayOfFilterFilterItem) : sprintf('%s(%s)', gettype($arrayOfFilterFilterItem), var_export($arrayOfFilterFilterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Filter property can only contain items of type \LorenzoG3M\FarmaDatiSoap\StructType\Filter, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Filter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \LorenzoG3M\FarmaDatiSoap\StructType\Filter[] $filter
     * @return \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfFilter
     */
    public function setFilter(array $filter = array())
    {
        // validation for constraint: array
        if ('' !== ($filterArrayErrorMessage = self::validateFilterForArrayConstraintsFromSetFilter($filter))) {
            throw new \InvalidArgumentException($filterArrayErrorMessage, __LINE__);
        }
        if (is_null($filter) || (is_array($filter) && empty($filter))) {
            unset($this->Filter);
        } else {
            $this->Filter = $filter;
        }
        return $this;
    }
    /**
     * Add item to Filter value
     * @throws \InvalidArgumentException
     * @param \LorenzoG3M\FarmaDatiSoap\StructType\Filter $item
     * @return \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfFilter
     */
    public function addToFilter(\LorenzoG3M\FarmaDatiSoap\StructType\Filter $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \LorenzoG3M\FarmaDatiSoap\StructType\Filter) {
            throw new \InvalidArgumentException(sprintf('The Filter property can only contain items of type \LorenzoG3M\FarmaDatiSoap\StructType\Filter, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Filter[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Filter|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Filter|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Filter|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Filter|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Filter|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Filter
     */
    public function getAttributeName()
    {
        return 'Filter';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfFilter
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
