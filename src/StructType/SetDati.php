<?php

namespace LorenzoG3M\FarmaDatiSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetDati StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SetDati
 * @subpackage Structs
 */
class SetDati extends AbstractStructBase
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
     * The Key
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Key;
    /**
     * The SchemaCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SchemaCode;
    /**
     * The UrlNews
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UrlNews;
    /**
     * Constructor method for SetDati
     * @uses SetDati::setDescription()
     * @uses SetDati::setKey()
     * @uses SetDati::setSchemaCode()
     * @uses SetDati::setUrlNews()
     * @param string $description
     * @param string $key
     * @param int $schemaCode
     * @param string $urlNews
     */
    public function __construct($description = null, $key = null, $schemaCode = null, $urlNews = null)
    {
        $this
            ->setDescription($description)
            ->setKey($key)
            ->setSchemaCode($schemaCode)
            ->setUrlNews($urlNews);
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
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\SetDati
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
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\SetDati
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
     * Get SchemaCode value
     * @return int|null
     */
    public function getSchemaCode()
    {
        return $this->SchemaCode;
    }
    /**
     * Set SchemaCode value
     * @param int $schemaCode
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\SetDati
     */
    public function setSchemaCode($schemaCode = null)
    {
        // validation for constraint: int
        if (!is_null($schemaCode) && !(is_int($schemaCode) || ctype_digit($schemaCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($schemaCode, true), gettype($schemaCode)), __LINE__);
        }
        $this->SchemaCode = $schemaCode;
        return $this;
    }
    /**
     * Get UrlNews value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUrlNews()
    {
        return isset($this->UrlNews) ? $this->UrlNews : null;
    }
    /**
     * Set UrlNews value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $urlNews
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\SetDati
     */
    public function setUrlNews($urlNews = null)
    {
        // validation for constraint: string
        if (!is_null($urlNews) && !is_string($urlNews)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($urlNews, true), gettype($urlNews)), __LINE__);
        }
        if (is_null($urlNews) || (is_array($urlNews) && empty($urlNews))) {
            unset($this->UrlNews);
        } else {
            $this->UrlNews = $urlNews;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\SetDati
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
