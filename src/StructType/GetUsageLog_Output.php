<?php

namespace LorenzoG3M\FarmaDatiSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUsageLog_Output StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetUsageLog_Output
 * @subpackage Structs
 */
class GetUsageLog_Output extends AbstractStructBase
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
     * The LogOutput
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LogOutput;
    /**
     * Constructor method for GetUsageLog_Output
     * @uses GetUsageLog_Output::setCodEsito()
     * @uses GetUsageLog_Output::setDescEsito()
     * @uses GetUsageLog_Output::setLogOutput()
     * @param string $codEsito
     * @param string $descEsito
     * @param string $logOutput
     */
    public function __construct($codEsito = null, $descEsito = null, $logOutput = null)
    {
        $this
            ->setCodEsito($codEsito)
            ->setDescEsito($descEsito)
            ->setLogOutput($logOutput);
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
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLog_Output
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
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLog_Output
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
     * Get LogOutput value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLogOutput()
    {
        return isset($this->LogOutput) ? $this->LogOutput : null;
    }
    /**
     * Set LogOutput value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $logOutput
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLog_Output
     */
    public function setLogOutput($logOutput = null)
    {
        // validation for constraint: string
        if (!is_null($logOutput) && !is_string($logOutput)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logOutput, true), gettype($logOutput)), __LINE__);
        }
        if (is_null($logOutput) || (is_array($logOutput) && empty($logOutput))) {
            unset($this->LogOutput);
        } else {
            $this->LogOutput = $logOutput;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLog_Output
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
