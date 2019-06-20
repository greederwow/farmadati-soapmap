<?php

namespace LorenzoG3M\FarmaDatiSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteQuery StructType
 * @subpackage Structs
 */
class ExecuteQuery extends AbstractStructBase
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
     * The CodiceSetDati
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CodiceSetDati;
    /**
     * The CampiDaEstrarre
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfstring
     */
    public $CampiDaEstrarre;
    /**
     * The Filtri
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfFilter
     */
    public $Filtri;
    /**
     * The Ordinamento
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfOrder
     */
    public $Ordinamento;
    /**
     * The Distinct
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Distinct;
    /**
     * The Count
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Count;
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
     * Constructor method for ExecuteQuery
     * @uses ExecuteQuery::setUsername()
     * @uses ExecuteQuery::setPassword()
     * @uses ExecuteQuery::setCodiceSetDati()
     * @uses ExecuteQuery::setCampiDaEstrarre()
     * @uses ExecuteQuery::setFiltri()
     * @uses ExecuteQuery::setOrdinamento()
     * @uses ExecuteQuery::setDistinct()
     * @uses ExecuteQuery::setCount()
     * @uses ExecuteQuery::setPageN()
     * @uses ExecuteQuery::setPagingN()
     * @param string $username
     * @param string $password
     * @param string $codiceSetDati
     * @param \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfstring $campiDaEstrarre
     * @param \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfFilter $filtri
     * @param \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfOrder $ordinamento
     * @param bool $distinct
     * @param bool $count
     * @param int $pageN
     * @param int $pagingN
     */
    public function __construct($username = null, $password = null, $codiceSetDati = null, \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfstring $campiDaEstrarre = null, \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfFilter $filtri = null, \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfOrder $ordinamento = null, $distinct = null, $count = null, $pageN = null, $pagingN = null)
    {
        $this
            ->setUsername($username)
            ->setPassword($password)
            ->setCodiceSetDati($codiceSetDati)
            ->setCampiDaEstrarre($campiDaEstrarre)
            ->setFiltri($filtri)
            ->setOrdinamento($ordinamento)
            ->setDistinct($distinct)
            ->setCount($count)
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
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQuery
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
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQuery
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
     * Get CodiceSetDati value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCodiceSetDati()
    {
        return isset($this->CodiceSetDati) ? $this->CodiceSetDati : null;
    }
    /**
     * Set CodiceSetDati value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $codiceSetDati
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQuery
     */
    public function setCodiceSetDati($codiceSetDati = null)
    {
        // validation for constraint: string
        if (!is_null($codiceSetDati) && !is_string($codiceSetDati)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codiceSetDati, true), gettype($codiceSetDati)), __LINE__);
        }
        if (is_null($codiceSetDati) || (is_array($codiceSetDati) && empty($codiceSetDati))) {
            unset($this->CodiceSetDati);
        } else {
            $this->CodiceSetDati = $codiceSetDati;
        }
        return $this;
    }
    /**
     * Get CampiDaEstrarre value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfstring|null
     */
    public function getCampiDaEstrarre()
    {
        return isset($this->CampiDaEstrarre) ? $this->CampiDaEstrarre : null;
    }
    /**
     * Set CampiDaEstrarre value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfstring $campiDaEstrarre
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQuery
     */
    public function setCampiDaEstrarre(\LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfstring $campiDaEstrarre = null)
    {
        if (is_null($campiDaEstrarre) || (is_array($campiDaEstrarre) && empty($campiDaEstrarre))) {
            unset($this->CampiDaEstrarre);
        } else {
            $this->CampiDaEstrarre = $campiDaEstrarre;
        }
        return $this;
    }
    /**
     * Get Filtri value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfFilter|null
     */
    public function getFiltri()
    {
        return isset($this->Filtri) ? $this->Filtri : null;
    }
    /**
     * Set Filtri value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfFilter $filtri
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQuery
     */
    public function setFiltri(\LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfFilter $filtri = null)
    {
        if (is_null($filtri) || (is_array($filtri) && empty($filtri))) {
            unset($this->Filtri);
        } else {
            $this->Filtri = $filtri;
        }
        return $this;
    }
    /**
     * Get Ordinamento value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfOrder|null
     */
    public function getOrdinamento()
    {
        return isset($this->Ordinamento) ? $this->Ordinamento : null;
    }
    /**
     * Set Ordinamento value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfOrder $ordinamento
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQuery
     */
    public function setOrdinamento(\LorenzoG3M\FarmaDatiSoap\ArrayType\ArrayOfOrder $ordinamento = null)
    {
        if (is_null($ordinamento) || (is_array($ordinamento) && empty($ordinamento))) {
            unset($this->Ordinamento);
        } else {
            $this->Ordinamento = $ordinamento;
        }
        return $this;
    }
    /**
     * Get Distinct value
     * @return bool|null
     */
    public function getDistinct()
    {
        return $this->Distinct;
    }
    /**
     * Set Distinct value
     * @param bool $distinct
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQuery
     */
    public function setDistinct($distinct = null)
    {
        // validation for constraint: boolean
        if (!is_null($distinct) && !is_bool($distinct)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($distinct, true), gettype($distinct)), __LINE__);
        }
        $this->Distinct = $distinct;
        return $this;
    }
    /**
     * Get Count value
     * @return bool|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param bool $count
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQuery
     */
    public function setCount($count = null)
    {
        // validation for constraint: boolean
        if (!is_null($count) && !is_bool($count)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
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
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQuery
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
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQuery
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
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\ExecuteQuery
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
