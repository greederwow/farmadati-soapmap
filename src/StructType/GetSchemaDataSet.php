<?php

namespace LorenzoG3M\FarmaDatiSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSchemaDataSet StructType
 * @subpackage Structs
 */
class GetSchemaDataSet extends AbstractStructBase
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
     * Constructor method for GetSchemaDataSet
     * @uses GetSchemaDataSet::setUsername()
     * @uses GetSchemaDataSet::setPassword()
     * @uses GetSchemaDataSet::setCodiceSetDati()
     * @param string $username
     * @param string $password
     * @param string $codiceSetDati
     */
    public function __construct($username = null, $password = null, $codiceSetDati = null)
    {
        $this
            ->setUsername($username)
            ->setPassword($password)
            ->setCodiceSetDati($codiceSetDati);
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
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetSchemaDataSet
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
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetSchemaDataSet
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
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetSchemaDataSet
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \LorenzoG3M\FarmaDatiSoap\StructType\GetSchemaDataSet
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
