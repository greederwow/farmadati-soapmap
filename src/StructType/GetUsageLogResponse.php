<?php

namespace LorenzoG3M\FarmaDatiSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUsageLogResponse StructType
 * @subpackage Structs
 */
class GetUsageLogResponse extends AbstractStructBase
{
    /**
     * The GetUsageLogResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLog_Output
     */
    public $GetUsageLogResult;
    /**
     * Constructor method for GetUsageLogResponse
     * @uses GetUsageLogResponse::setGetUsageLogResult()
     * @param \LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLog_Output $getUsageLogResult
     */
    public function __construct(\LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLog_Output $getUsageLogResult = null)
    {
        $this
            ->setGetUsageLogResult($getUsageLogResult);
    }
    /**
     * Get GetUsageLogResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLog_Output|null
     */
    public function getGetUsageLogResult()
    {
        return isset($this->GetUsageLogResult) ? $this->GetUsageLogResult : null;
    }
    /**
     * Set GetUsageLogResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLog_Output $getUsageLogResult
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLogResponse
     */
    public function setGetUsageLogResult(\LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLog_Output $getUsageLogResult = null)
    {
        if (is_null($getUsageLogResult) || (is_array($getUsageLogResult) && empty($getUsageLogResult))) {
            unset($this->GetUsageLogResult);
        } else {
            $this->GetUsageLogResult = $getUsageLogResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLogResponse
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
