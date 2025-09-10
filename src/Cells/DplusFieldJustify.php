<?php namespace Pauldro\Minicli\PhpSpreadsheet\Cells;


class DplusFieldJustify {
    const TYPES = ['left' => 'left', 'right' => 'right'];

    public static function find(string $fieldtype) : string
    {
        $search = strtoupper($fieldtype);

        switch ($search) {
            case 'C':
                return self::TYPES['left'];
            case 'D':
                return self::TYPES['left'];
            case 'I':
            case 'N':
                return self::TYPES['right'];
            default:
                return self::TYPES['left'];
        }
    }
}
