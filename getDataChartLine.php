<?php
include "database2.php";

$montSalesList = [];

foreach ($graphs["fatturato"] as  $v1) {

  foreach ($v1 as $k2 => $v2) {
    $monthSalesList[] = $v2;
  }
}

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

echo json_encode($ret);
?>
