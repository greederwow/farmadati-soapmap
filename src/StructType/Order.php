<?php

namespace LorenzoG3M\FarmaDatiSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Order StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Order
 * @subpackage Structs
 */
class Order extends AbstractStructBase
{
    /**
     * The Key
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Key;
    /**
     * The OrderType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OrderType;
    /**
     * Constructor method for Order
     * @uses Order::setKey()
     * @uses Order::setOrderType()
     * @param string $key
     * @param string $orderType
     */
    public function __construct($key = null, $orderType = null)
    {
        $this
            ->setKey($key)
            ->setOrderType($orderType);
    }
    /**
     * Get Key value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getKey()
    {
        return isset($this->Key) ? $this->Key : null;
    }
    /**
     * Set Key value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $key
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Order
     */
    public function setKey($key = null)
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        if (is_null($key) || (is_array($key) && empty($key))) {
            unset($this->Key);
        } else {
            $this->Key = $key;
        }
        return $this;
    }
    /**
     * Get OrderType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrderType()
    {
        return isset($this->OrderType) ? $this->OrderType : null;
    }
    /**
     * Set OrderType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $orderType
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Order
     */
    public function setOrderType($orderType = null)
    {
        // validation for constraint: string
        if (!is_null($orderType) && !is_string($orderType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderType, true), gettype($orderType)), __LINE__);
        }
        if (is_null($orderType) || (is_array($orderType) && empty($orderType))) {
            unset($this->OrderType);
        } else {
            $this->OrderType = $orderType;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Order
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
