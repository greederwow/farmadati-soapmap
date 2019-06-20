<?php

namespace LorenzoG3M\FarmaDatiSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Filter StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Filter
 * @subpackage Structs
 */
class Filter extends AbstractStructBase
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
     * The Operator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Operator;
    /**
     * The OrGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $OrGroup;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Value;
    /**
     * Constructor method for Filter
     * @uses Filter::setKey()
     * @uses Filter::setOperator()
     * @uses Filter::setOrGroup()
     * @uses Filter::setValue()
     * @param string $key
     * @param string $operator
     * @param int $orGroup
     * @param string $value
     */
    public function __construct($key = null, $operator = null, $orGroup = null, $value = null)
    {
        $this
            ->setKey($key)
            ->setOperator($operator)
            ->setOrGroup($orGroup)
            ->setValue($value);
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
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Filter
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
     * Get Operator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOperator()
    {
        return isset($this->Operator) ? $this->Operator : null;
    }
    /**
     * Set Operator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $operator
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Filter
     */
    public function setOperator($operator = null)
    {
        // validation for constraint: string
        if (!is_null($operator) && !is_string($operator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operator, true), gettype($operator)), __LINE__);
        }
        if (is_null($operator) || (is_array($operator) && empty($operator))) {
            unset($this->Operator);
        } else {
            $this->Operator = $operator;
        }
        return $this;
    }
    /**
     * Get OrGroup value
     * @return int|null
     */
    public function getOrGroup()
    {
        return $this->OrGroup;
    }
    /**
     * Set OrGroup value
     * @param int $orGroup
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Filter
     */
    public function setOrGroup($orGroup = null)
    {
        // validation for constraint: int
        if (!is_null($orGroup) && !(is_int($orGroup) || ctype_digit($orGroup))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orGroup, true), gettype($orGroup)), __LINE__);
        }
        $this->OrGroup = $orGroup;
        return $this;
    }
    /**
     * Get Value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValue()
    {
        return isset($this->Value) ? $this->Value : null;
    }
    /**
     * Set Value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $value
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Filter
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->Value);
        } else {
            $this->Value = $value;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Filter
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
