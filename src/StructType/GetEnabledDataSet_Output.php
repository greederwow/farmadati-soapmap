<?php

namespace LorenzoG3M\FarmaDatiSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEnabledDataSet_Output StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetEnabledDataSet_Output
 * @subpackage Structs
 */
class GetEnabledDataSet_Output extends AbstractStructBase
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
     * The SetDatiAbilitati
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfSetDati
     */
    public $SetDatiAbilitati;
    /**
     * Constructor method for GetEnabledDataSet_Output
     * @uses GetEnabledDataSet_Output::setCodEsito()
     * @uses GetEnabledDataSet_Output::setDescEsito()
     * @uses GetEnabledDataSet_Output::setSetDatiAbilitati()
     * @param string $codEsito
     * @param string $descEsito
     * @param \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfSetDati $setDatiAbilitati
     */
    public function __construct($codEsito = null, $descEsito = null, \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfSetDati $setDatiAbilitati = null)
    {
        $this
            ->setCodEsito($codEsito)
            ->setDescEsito($descEsito)
            ->setSetDatiAbilitati($setDatiAbilitati);
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
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetEnabledDataSet_Output
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
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetEnabledDataSet_Output
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
     * Get SetDatiAbilitati value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfSetDati|null
     */
    public function getSetDatiAbilitati()
    {
        return isset($this->SetDatiAbilitati) ? $this->SetDatiAbilitati : null;
    }
    /**
     * Set SetDatiAbilitati value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfSetDati $setDatiAbilitati
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetEnabledDataSet_Output
     */
    public function setSetDatiAbilitati(\LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfSetDati $setDatiAbilitati = null)
    {
        if (is_null($setDatiAbilitati) || (is_array($setDatiAbilitati) && empty($setDatiAbilitati))) {
            unset($this->SetDatiAbilitati);
        } else {
            $this->SetDatiAbilitati = $setDatiAbilitati;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetEnabledDataSet_Output
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
