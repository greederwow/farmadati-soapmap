<?php

namespace LorenzoG3M\FarmaDatiSoap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetEnabledDataSet
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \LorenzoG3M\FarmaDatiSoap\StructType\GetEnabledDataSet $parameters
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetEnabledDataSetResponse|bool
     */
    public function GetEnabledDataSet(\LorenzoG3M\FarmaDatiSoap\StructType\GetEnabledDataSet $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetEnabledDataSet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSchemaDataSet
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \LorenzoG3M\FarmaDatiSoap\StructType\GetSchemaDataSet $parameters
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetSchemaDataSetResponse|bool
     */
    public function GetSchemaDataSet(\LorenzoG3M\FarmaDatiSoap\StructType\GetSchemaDataSet $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSchemaDataSet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUsageLog
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLog $parameters
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLogResponse|bool
     */
    public function GetUsageLog(\LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLog $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetUsageLog($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetEnabledDataSetResponse|\LorenzoG3M\FarmaDatiSoap\StructType\GetSchemaDataSetResponse|\LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLogResponse
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
