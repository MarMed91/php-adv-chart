<?php
  include "database2.php";

  $sales = [];
  $salesmen = [];
  $type = [];

  foreach ($graphs["fatturato_by_agent"] as $value) {

   $type[] = $value["type"];
   foreach ($value["data"] as $elem) {
     $salesmen[] = $elem[""]
   }
  }
var_dump($value["data"]);
 ?>
