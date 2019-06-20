<?php

namespace LorenzoG3M\FarmaDatiSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUsageLog StructType
 * @subpackage Structs
 */
class GetUsageLog extends AbstractStructBase
{
    /**
     * The Username
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Username;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Password;
    /**
     * The dataInizio
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $dataInizio;
    /**
     * The Conteggio
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Conteggio;
    /**
     * The PageN
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PageN;
    /**
     * The PagingN
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PagingN;
    /**
     * Constructor method for GetUsageLog
     * @uses GetUsageLog::setUsername()
     * @uses GetUsageLog::setPassword()
     * @uses GetUsageLog::setDataInizio()
     * @uses GetUsageLog::setConteggio()
     * @uses GetUsageLog::setPageN()
     * @uses GetUsageLog::setPagingN()
     * @param string $username
     * @param string $password
     * @param string $dataInizio
     * @param bool $conteggio
     * @param int $pageN
     * @param int $pagingN
     */
    public function __construct($username = null, $password = null, $dataInizio = null, $conteggio = null, $pageN = null, $pagingN = null)
    {
        $this
            ->setUsername($username)
            ->setPassword($password)
            ->setDataInizio($dataInizio)
            ->setConteggio($conteggio)
            ->setPageN($pageN)
            ->setPagingN($pagingN);
    }
    /**
     * Get Username value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUsername()
    {
        return isset($this->Username) ? $this->Username : null;
    }
    /**
     * Set Username value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $username
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLog
     */
    public function setUsername($username = null)
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        if (is_null($username) || (is_array($username) && empty($username))) {
            unset($this->Username);
        } else {
            $this->Username = $username;
        }
        return $this;
    }
    /**
     * Get Password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassword()
    {
        return isset($this->Password) ? $this->Password : null;
    }
    /**
     * Set Password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLog
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->Password);
        } else {
            $this->Password = $password;
        }
        return $this;
    }
    /**
     * Get dataInizio value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDataInizio()
    {
        return isset($this->dataInizio) ? $this->dataInizio : null;
    }
    /**
     * Set dataInizio value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dataInizio
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLog
     */
    public function setDataInizio($dataInizio = null)
    {
        // validation for constraint: string
        if (!is_null($dataInizio) && !is_string($dataInizio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataInizio, true), gettype($dataInizio)), __LINE__);
        }
        if (is_null($dataInizio) || (is_array($dataInizio) && empty($dataInizio))) {
            unset($this->dataInizio);
        } else {
            $this->dataInizio = $dataInizio;
        }
        return $this;
    }
    /**
     * Get Conteggio value
     * @return bool|null
     */
    public function getConteggio()
    {
        return $this->Conteggio;
    }
    /**
     * Set Conteggio value
     * @param bool $conteggio
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLog
     */
    public function setConteggio($conteggio = null)
    {
        // validation for constraint: boolean
        if (!is_null($conteggio) && !is_bool($conteggio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($conteggio, true), gettype($conteggio)), __LINE__);
        }
        $this->Conteggio = $conteggio;
        return $this;
    }
    /**
     * Get PageN value
     * @return int|null
     */
    public function getPageN()
    {
        return $this->PageN;
    }
    /**
     * Set PageN value
     * @param int $pageN
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLog
     */
    public function setPageN($pageN = null)
    {
        // validation for constraint: int
        if (!is_null($pageN) && !(is_int($pageN) || ctype_digit($pageN))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageN, true), gettype($pageN)), __LINE__);
        }
        $this->PageN = $pageN;
        return $this;
    }
    /**
     * Get PagingN value
     * @return int|null
     */
    public function getPagingN()
    {
        return $this->PagingN;
    }
    /**
     * Set PagingN value
     * @param int $pagingN
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLog
     */
    public function setPagingN($pagingN = null)
    {
        // validation for constraint: int
        if (!is_null($pagingN) && !(is_int($pagingN) || ctype_digit($pagingN))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pagingN, true), gettype($pagingN)), __LINE__);
        }
        $this->PagingN = $pagingN;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetUsageLog
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
