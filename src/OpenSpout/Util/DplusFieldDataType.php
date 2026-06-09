<?php namespace Pauldro\Minicli\Spreadsheet\OpenSpout\Util;

class DplusFieldDataType {
    const Date = 'date';
    const Float = 'float';
    const Integer = 'integer';
    const String ='string';
    

    /**
     * Return FieldTypeJustify 
     * @param  string $fieldtype
     * @return string
     */
    public static function find(string $fieldtype) : string
    {
        $search = strtoupper($fieldtype);

        switch($search) {
            case 'C': 
                return self::String;
            case 'D': 
                return self::Date;
            case 'I': 
                return self::Integer;
            case 'N': 
                return self::Float;
            default: 
                return self::String;
        };
    }
}
