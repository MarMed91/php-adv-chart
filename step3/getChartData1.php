<?php

  include "database3.php";

  $level_guest = $_GET["level"];

  $type = [];
  $data = [];
  $access = [];

  foreach ($graphs["fatturato"] as $va) {

    foreach ($va as $k1a => $v1a) {

      $type[] = $v1a["type"];
      $dataa[] = $v1a["data"] ;
      $guest[] = $v1a["access"];
    }
  }

  foreach ($graphs["fatturato_by_agent"] as $vb) {

    foreach ($vb as $k1b => $v1b) {

      $type[] = $v1b["type"];
      $datab[] = $v1b["data"] ;
      $employee[] = $v1b["access"];
    }
  }

  foreach ($graphs["team_efficiency"] as $valuec
    foreach ($vc as $k1c => $v1c) {

      $type[] = $v1c["type"];
      $datac[] = $v1c["data"] ;
      $clevel[] = $v1c["access"];
    }
  }


if ($level_guest == "guest") {

  $ret = [

   "type" => $type,

   "data" => [
       "labels" => ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"],
       "datasets" => [
         [
           "label" => 'Month Sales',
           "backgroundColor" => ['red'],
           "borderColor" => ['blue'],
           "data" => $dataa
         ]
       ]
   ]
  ];



} elseif ($level_guest == "employee") {

} elseif ($level_guest == "clevel") {
  // code...
}
 ?>
