<?php namespace Pauldro\Minicli\PhpSpreadsheet\Cells;
// PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Cell\DataType;

class DplusFieldDataType {
    const TYPES = [
        'string' => DataType::TYPE_STRING,
        'number' => DataType::TYPE_NUMERIC
    ];

    public static function find(string $fieldtype) : string
    {
        $search = strtoupper($fieldtype);

        switch ($search) {
            case 'C':
                return self::TYPES['string'];
            case 'D':
            case 'I':
            case 'N':
                return self::TYPES['number'];
            default:
                return self::TYPES['string'];
        }
    }
}