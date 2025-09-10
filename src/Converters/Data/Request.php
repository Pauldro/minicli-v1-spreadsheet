<?php namespace Pauldro\Minicli\PhpSpreadsheet\Converters\Data;
// Pauldro Minicli
use Pauldro\Minicli\Util\Data;

/**
 * Container for spreadsheet conversion data
 * 
 * @property array $fields
 */
class Request extends Data {
    public function __construct() {
        $this->fields = [];
    }
}