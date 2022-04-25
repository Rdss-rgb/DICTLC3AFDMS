<?php
/**
 * PHPExcelFormatter example 1
 *
 * @author     Rene Korss <rene.korss@gmail.com>
 */


use RKD\PHPExcelFormatter\PHPExcelFormatter;
use RKD\PHPExcelFormatter\Exception\PHPExcelFormatterException;

try
{
    // Load file
    $formatter = new PHPExcelFormatter('lfupload/Consumer price index (1).xls');

    // Print array
    echo '<pre>'.print_r($output, true).'</pre>';

    // Set MySQL table
    $formatter->setMySQLTableName('users');

    // Output as mysql query
    $output = $formatter->output('m');

    // Print mysql query
    echo '<pre>'.print_r($output, true).'</pre>';

}
catch(PHPExcelFormatterException $e)
{
    echo 'Error: '.$e->getMessage();
}

?>
