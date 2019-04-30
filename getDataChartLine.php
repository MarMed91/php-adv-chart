<?php
  include "database2.php";

  $montSalesList = [];
  $type = [];

  //foreach ($graphs["fatturato"] as  $elem) {

  //   $monthSalesList[] = $elem["type"];
  //   $type[] = $elem["type"];
  //}

  foreach ($graphs["fatturato"] as  $k1 => $v1) {

    foreach ($v1 as $k2 => $v2) {
      $monthSalesList[] = $v2["data"];
      $type[] = $v2["type"];
    }
  }
 var_dump($type);

 $ret = [

   "type" => $type,

   "data" => [
       "labels" => ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"],
       "datasets" => [
         [
           "label" => 'Income',
           "backgroundColor" => ['red', 'blue',  'yellow'],
           "borderColor" => ['red', 'blue', 'yellow'],
           "data" => $monthSalesList
         ]
       ]
   ]
 ];

 echo json_encode($ret);
 ?>
