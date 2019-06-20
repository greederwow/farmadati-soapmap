<?php

namespace LorenzoG3M\FarmaDatiSoap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOrder ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfOrder
 * @subpackage Arrays
 */
class ArrayOfOrder extends AbstractStructArrayBase
{
    /**
     * The Order
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \LorenzoG3M\FarmaDatiSoap\StructType\Order[]
     */
    public $Order;
    /**
     * Constructor method for ArrayOfOrder
     * @uses ArrayOfOrder::setOrder()
     * @param \LorenzoG3M\FarmaDatiSoap\StructType\Order[] $order
     */
    public function __construct(array $order = array())
    {
        $this
            ->setOrder($order);
    }
    /**
     * Get Order value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Order[]|null
     */
    public function getOrder()
    {
        return isset($this->Order) ? $this->Order : null;
    }
    /**
     * This method is responsible for validating the values passed to the setOrder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderForArrayConstraintsFromSetOrder(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOrderOrderItem) {
            // validation for constraint: itemType
            if (!$arrayOfOrderOrderItem instanceof \LorenzoG3M\FarmaDatiSoap\StructType\Order) {
                $invalidValues[] = is_object($arrayOfOrderOrderItem) ? get_class($arrayOfOrderOrderItem) : sprintf('%s(%s)', gettype($arrayOfOrderOrderItem), var_export($arrayOfOrderOrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Order property can only contain items of type \LorenzoG3M\FarmaDatiSoap\StructType\Order, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Order value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \LorenzoG3M\FarmaDatiSoap\StructType\Order[] $order
     * @return \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfOrder
     */
    public function setOrder(array $order = array())
    {
        // validation for constraint: array
        if ('' !== ($orderArrayErrorMessage = self::validateOrderForArrayConstraintsFromSetOrder($order))) {
            throw new \InvalidArgumentException($orderArrayErrorMessage, __LINE__);
        }
        if (is_null($order) || (is_array($order) && empty($order))) {
            unset($this->Order);
        } else {
            $this->Order = $order;
        }
        return $this;
    }
    /**
     * Add item to Order value
     * @throws \InvalidArgumentException
     * @param \LorenzoG3M\FarmaDatiSoap\StructType\Order $item
     * @return \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfOrder
     */
    public function addToOrder(\LorenzoG3M\FarmaDatiSoap\StructType\Order $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \LorenzoG3M\FarmaDatiSoap\StructType\Order) {
            throw new \InvalidArgumentException(sprintf('The Order property can only contain items of type \LorenzoG3M\FarmaDatiSoap\StructType\Order, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Order[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Order|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Order|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Order|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Order|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Order|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Order
     */
    public function getAttributeName()
    {
        return 'Order';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfOrder
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
