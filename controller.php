<?php


use \PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use \PhpOffice\PhpSpreadsheet\Writer\Csv;
use \PhpOffice\PhpSpreadsheet\Reader\Xls;

require 'vendor/autoload.php';

//acessa a planilha
$xls_file = "data/planilha.xls";


$reader = new Xls();
//carregar os dados da planilha
$spreadsheet = $reader->load($xls_file);

//captura os campos da tabelas
$dataArray = $spreadsheet->getActiveSheet()
    ->rangeToArray(
        'A1:D11',     // O intervalo da planilha que queremos recuperar
        NULL,        // Valor que deve ser retornado para células vazias
        TRUE,        // As fórmulas devem ser calculadas (o equivalente a getCalculatedValue () para cada célula)
        TRUE,        // Os valores devem ser formatados (o equivalente a getFormattedValue () para cada célula)
        TRUE         // A matriz deve ser indexada por linha de célula e célula?
    );




 
 

 
    $dataArrayClientes= $spreadsheet->getActiveSheet()
    ->rangeToArray(
        'H1:P15',     // O intervalo da planilha que queremos recuperar
        NULL,        // Valor que deve ser retornado para células vazias
        TRUE,        // As fórmulas devem ser calculadas (o equivalente a getCalculatedValue () para cada célula)
        TRUE,        // Os valores devem ser formatados (o equivalente a getFormattedValue () para cada célula)
        TRUE         // A matriz deve ser indexada por linha de célula e célula?
    );


    
    


?>