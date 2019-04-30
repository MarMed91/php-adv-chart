<?php
  include "database2.php";

  $montSalesList = [];
  $type = [];

  foreach ($graphs as $key => $value) {

    $monthSalesList[] = $elem["data"];
    $type[] = $elem["type"];
  }

  var_dump($monthSalesList);


 ?>
