<?php
include "database2.php";

$montSalesList = [];

foreach ($graphs["fatturato"] as  $v1) {

    $monthSalesList[] = $v1;
}
var_dump($v1);
$ret = [

 "type" => "line",

 "data" => [
     "labels" => ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"],
     "datasets" => [
       [
         "label" => 'Month Sales',
         "backgroundColor" => ['red'],
         "borderColor" => ['blue'],
         "data" => $monthSalesList
       ]
     ]
 ]
];

//echo json_encode($ret);
?>
