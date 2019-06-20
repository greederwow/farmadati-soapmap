<?php

namespace LorenzoG3M\FarmaDatiSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSchemaDataSet_Output StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetSchemaDataSet_Output
 * @subpackage Structs
 */
class GetSchemaDataSet_Output extends AbstractStructBase
{
    /**
     * The CodEsito
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CodEsito;
    /**
     * The DescEsito
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DescEsito;
    /**
     * The Fields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfField
     */
    public $Fields;
    /**
     * The SchemaCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SchemaCode;
    /**
     * Constructor method for GetSchemaDataSet_Output
     * @uses GetSchemaDataSet_Output::setCodEsito()
     * @uses GetSchemaDataSet_Output::setDescEsito()
     * @uses GetSchemaDataSet_Output::setFields()
     * @uses GetSchemaDataSet_Output::setSchemaCode()
     * @param string $codEsito
     * @param string $descEsito
     * @param \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfField $fields
     * @param int $schemaCode
     */
    public function __construct($codEsito = null, $descEsito = null, \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfField $fields = null, $schemaCode = null)
    {
        $this
            ->setCodEsito($codEsito)
            ->setDescEsito($descEsito)
            ->setFields($fields)
            ->setSchemaCode($schemaCode);
    }
    /**
     * Get CodEsito value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCodEsito()
    {
        return isset($this->CodEsito) ? $this->CodEsito : null;
    }
    /**
     * Set CodEsito value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $codEsito
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetSchemaDataSet_Output
     */
    public function setCodEsito($codEsito = null)
    {
        // validation for constraint: string
        if (!is_null($codEsito) && !is_string($codEsito)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codEsito, true), gettype($codEsito)), __LINE__);
        }
        if (is_null($codEsito) || (is_array($codEsito) && empty($codEsito))) {
            unset($this->CodEsito);
        } else {
            $this->CodEsito = $codEsito;
        }
        return $this;
    }
    /**
     * Get DescEsito value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescEsito()
    {
        return isset($this->DescEsito) ? $this->DescEsito : null;
    }
    /**
     * Set DescEsito value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $descEsito
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetSchemaDataSet_Output
     */
    public function setDescEsito($descEsito = null)
    {
        // validation for constraint: string
        if (!is_null($descEsito) && !is_string($descEsito)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descEsito, true), gettype($descEsito)), __LINE__);
        }
        if (is_null($descEsito) || (is_array($descEsito) && empty($descEsito))) {
            unset($this->DescEsito);
        } else {
            $this->DescEsito = $descEsito;
        }
        return $this;
    }
    /**
     * Get Fields value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfField|null
     */
    public function getFields()
    {
        return isset($this->Fields) ? $this->Fields : null;
    }
    /**
     * Set Fields value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfField $fields
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetSchemaDataSet_Output
     */
    public function setFields(\LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfField $fields = null)
    {
        if (is_null($fields) || (is_array($fields) && empty($fields))) {
            unset($this->Fields);
        } else {
            $this->Fields = $fields;
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
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetSchemaDataSet_Output
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetSchemaDataSet_Output
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
