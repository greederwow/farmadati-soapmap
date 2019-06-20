<?php

namespace LorenzoG3M\FarmaDatiSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteQueryResponse StructType
 * @subpackage Structs
 */
class ExecuteQueryResponse extends AbstractStructBase
{
    /**
     * The ExecuteQueryResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQuery_Output
     */
    public $ExecuteQueryResult;
    /**
     * Constructor method for ExecuteQueryResponse
     * @uses ExecuteQueryResponse::setExecuteQueryResult()
     * @param \LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQuery_Output $executeQueryResult
     */
    public function __construct(\LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQuery_Output $executeQueryResult = null)
    {
        $this
            ->setExecuteQueryResult($executeQueryResult);
    }
    /**
     * Get ExecuteQueryResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQuery_Output|null
     */
    public function getExecuteQueryResult()
    {
        return isset($this->ExecuteQueryResult) ? $this->ExecuteQueryResult : null;
    }
    /**
     * Set ExecuteQueryResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQuery_Output $executeQueryResult
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQueryResponse
     */
    public function setExecuteQueryResult(\LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQuery_Output $executeQueryResult = null)
    {
        if (is_null($executeQueryResult) || (is_array($executeQueryResult) && empty($executeQueryResult))) {
            unset($this->ExecuteQueryResult);
        } else {
            $this->ExecuteQueryResult = $executeQueryResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQueryResponse
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
