<?php

namespace LorenzoG3M\FarmaDatiSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSchemaDataSetResponse StructType
 * @subpackage Structs
 */
class GetSchemaDataSetResponse extends AbstractStructBase
{
    /**
     * The GetSchemaDataSetResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \LorenzoG3M\FarmaDatiSoap\StructType\GetSchemaDataSet_Output
     */
    public $GetSchemaDataSetResult;
    /**
     * Constructor method for GetSchemaDataSetResponse
     * @uses GetSchemaDataSetResponse::setGetSchemaDataSetResult()
     * @param \LorenzoG3M\FarmaDatiSoap\StructType\GetSchemaDataSet_Output $getSchemaDataSetResult
     */
    public function __construct(\LorenzoG3M\FarmaDatiSoap\StructType\GetSchemaDataSet_Output $getSchemaDataSetResult = null)
    {
        $this
            ->setGetSchemaDataSetResult($getSchemaDataSetResult);
    }
    /**
     * Get GetSchemaDataSetResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetSchemaDataSet_Output|null
     */
    public function getGetSchemaDataSetResult()
    {
        return isset($this->GetSchemaDataSetResult) ? $this->GetSchemaDataSetResult : null;
    }
    /**
     * Set GetSchemaDataSetResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \LorenzoG3M\FarmaDatiSoap\StructType\GetSchemaDataSet_Output $getSchemaDataSetResult
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetSchemaDataSetResponse
     */
    public function setGetSchemaDataSetResult(\LorenzoG3M\FarmaDatiSoap\StructType\GetSchemaDataSet_Output $getSchemaDataSetResult = null)
    {
        if (is_null($getSchemaDataSetResult) || (is_array($getSchemaDataSetResult) && empty($getSchemaDataSetResult))) {
            unset($this->GetSchemaDataSetResult);
        } else {
            $this->GetSchemaDataSetResult = $getSchemaDataSetResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetSchemaDataSetResponse
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
