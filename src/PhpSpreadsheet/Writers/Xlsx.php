<?php namespace Pauldro\Minicli\Spreadsheet\PhpSpreadsheet\Writers;
// PhpSpreadsheet Library
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\BaseWriter;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx as WriterXlsx;
// Dplus Spreadsheets
use Pauldro\Minicli\Spreadsheet\PhpSpreadsheet\Writers\AbstractWriter;

/**
 * Writer\Xlsx
 * Handles Writing Xlsx files
 */
class Xlsx extends AbstractWriter {
	const EXTENSION = 'xlsx';

	/**
	 * Return Spreadsheet File Writer
	 * @return WriterXlsx
	 */
	protected function getWriter(Spreadsheet $spreadsheet) : BaseWriter
	{
		$writer = new WriterXlsx($spreadsheet);
		return $writer;
	}
}
