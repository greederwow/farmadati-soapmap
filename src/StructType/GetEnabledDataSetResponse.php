<?php

namespace LorenzoG3M\FarmaDatiSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEnabledDataSetResponse StructType
 * @subpackage Structs
 */
class GetEnabledDataSetResponse extends AbstractStructBase
{
    /**
     * The GetEnabledDataSetResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \LorenzoG3M\FarmaDatiSoap\StructType\GetEnabledDataSet_Output
     */
    public $GetEnabledDataSetResult;
    /**
     * Constructor method for GetEnabledDataSetResponse
     * @uses GetEnabledDataSetResponse::setGetEnabledDataSetResult()
     * @param \LorenzoG3M\FarmaDatiSoap\StructType\GetEnabledDataSet_Output $getEnabledDataSetResult
     */
    public function __construct(\LorenzoG3M\FarmaDatiSoap\StructType\GetEnabledDataSet_Output $getEnabledDataSetResult = null)
    {
        $this
            ->setGetEnabledDataSetResult($getEnabledDataSetResult);
    }
    /**
     * Get GetEnabledDataSetResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetEnabledDataSet_Output|null
     */
    public function getGetEnabledDataSetResult()
    {
        return isset($this->GetEnabledDataSetResult) ? $this->GetEnabledDataSetResult : null;
    }
    /**
     * Set GetEnabledDataSetResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \LorenzoG3M\FarmaDatiSoap\StructType\GetEnabledDataSet_Output $getEnabledDataSetResult
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetEnabledDataSetResponse
     */
    public function setGetEnabledDataSetResult(\LorenzoG3M\FarmaDatiSoap\StructType\GetEnabledDataSet_Output $getEnabledDataSetResult = null)
    {
        if (is_null($getEnabledDataSetResult) || (is_array($getEnabledDataSetResult) && empty($getEnabledDataSetResult))) {
            unset($this->GetEnabledDataSetResult);
        } else {
            $this->GetEnabledDataSetResult = $getEnabledDataSetResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetEnabledDataSetResponse
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
