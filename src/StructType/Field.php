<?php

namespace LorenzoG3M\FarmaDatiSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Field StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Field
 * @subpackage Structs
 */
class Field extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Description;
    /**
     * The IdNum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $IdNum;
    /**
     * The Key
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Key;
    /**
     * The Length
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Length;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Type;
    /**
     * Constructor method for Field
     * @uses Field::setDescription()
     * @uses Field::setIdNum()
     * @uses Field::setKey()
     * @uses Field::setLength()
     * @uses Field::setType()
     * @param string $description
     * @param int $idNum
     * @param string $key
     * @param string $length
     * @param string $type
     */
    public function __construct($description = null, $idNum = null, $key = null, $length = null, $type = null)
    {
        $this
            ->setDescription($description)
            ->setIdNum($idNum)
            ->setKey($key)
            ->setLength($length)
            ->setType($type);
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription()
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Field
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        return $this;
    }
    /**
     * Get IdNum value
     * @return int|null
     */
    public function getIdNum()
    {
        return $this->IdNum;
    }
    /**
     * Set IdNum value
     * @param int $idNum
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Field
     */
    public function setIdNum($idNum = null)
    {
        // validation for constraint: int
        if (!is_null($idNum) && !(is_int($idNum) || ctype_digit($idNum))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idNum, true), gettype($idNum)), __LINE__);
        }
        $this->IdNum = $idNum;
        return $this;
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
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Field
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
     * Get Length value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLength()
    {
        return isset($this->Length) ? $this->Length : null;
    }
    /**
     * Set Length value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $length
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Field
     */
    public function setLength($length = null)
    {
        // validation for constraint: string
        if (!is_null($length) && !is_string($length)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        if (is_null($length) || (is_array($length) && empty($length))) {
            unset($this->Length);
        } else {
            $this->Length = $length;
        }
        return $this;
    }
    /**
     * Get Type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getType()
    {
        return isset($this->Type) ? $this->Type : null;
    }
    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $type
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Field
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->Type);
        } else {
            $this->Type = $type;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\Field
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
