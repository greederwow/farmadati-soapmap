<?php

namespace LorenzoG3M\FarmaDatiSoap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Execute ServiceType
 * @subpackage Services
 */
class Execute extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ExecuteQuery
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQuery $parameters
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQueryResponse|bool
     */
    public function ExecuteQuery(\LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQuery $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ExecuteQuery($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQueryResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
