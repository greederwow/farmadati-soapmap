<?php

namespace LorenzoG3M\FarmaDatiSoap;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'GetEnabledDataSet' => '\\LorenzoG3M\\FarmaDatiSoap\\StructType\\GetEnabledDataSet',
            'GetEnabledDataSetResponse' => '\\LorenzoG3M\\FarmaDatiSoap\\StructType\\GetEnabledDataSetResponse',
            'GetSchemaDataSet' => '\\LorenzoG3M\\FarmaDatiSoap\\StructType\\GetSchemaDataSet',
            'GetSchemaDataSetResponse' => '\\LorenzoG3M\\FarmaDatiSoap\\StructType\\GetSchemaDataSetResponse',
            'ExecuteQuery' => '\\LorenzoG3M\\FarmaDatiSoap\\StructType\\ExecuteQuery',
            'ExecuteQueryResponse' => '\\LorenzoG3M\\FarmaDatiSoap\\StructType\\ExecuteQueryResponse',
            'GetUsageLog' => '\\LorenzoG3M\\FarmaDatiSoap\\StructType\\GetUsageLog',
            'GetUsageLogResponse' => '\\LorenzoG3M\\FarmaDatiSoap\\StructType\\GetUsageLogResponse',
            'GetEnabledDataSet_Output' => '\\LorenzoG3M\\FarmaDatiSoap\\StructType\\GetEnabledDataSet_Output',
            'ArrayOfSetDati' => '\\LorenzoG3M\\FarmaDatiSoap\\ArrayType\\ArrayOfSetDati',
            'SetDati' => '\\LorenzoG3M\\FarmaDatiSoap\\StructType\\SetDati',
            'GetSchemaDataSet_Output' => '\\LorenzoG3M\\FarmaDatiSoap\\StructType\\GetSchemaDataSet_Output',
            'ArrayOfField' => '\\LorenzoG3M\\FarmaDatiSoap\\ArrayType\\ArrayOfField',
            'Field' => '\\LorenzoG3M\\FarmaDatiSoap\\StructType\\Field',
            'ArrayOfFilter' => '\\LorenzoG3M\\FarmaDatiSoap\\ArrayType\\ArrayOfFilter',
            'Filter' => '\\LorenzoG3M\\FarmaDatiSoap\\StructType\\Filter',
            'ArrayOfOrder' => '\\LorenzoG3M\\FarmaDatiSoap\\ArrayType\\ArrayOfOrder',
            'Order' => '\\LorenzoG3M\\FarmaDatiSoap\\StructType\\Order',
            'ExecuteQuery_Output' => '\\LorenzoG3M\\FarmaDatiSoap\\StructType\\ExecuteQuery_Output',
            'GetUsageLog_Output' => '\\LorenzoG3M\\FarmaDatiSoap\\StructType\\GetUsageLog_Output',
            'ArrayOfstring' => '\\LorenzoG3M\\FarmaDatiSoap\\ArrayType\\ArrayOfstring',
        );
    }
}
