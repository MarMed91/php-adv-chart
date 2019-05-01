<?php

  include "database3.php";

  $level_guest = $_GET["level"];

  $type = [];
  $data = [];
  $access = [];

  foreach ($graphs["fatturato"] as $value) {

    foreach ($value as $k1 => $v1) {

      $type[] = $v1["type"];
      $data[] = $v1["data"] ;
      $access[] = $v1["access"];
    }

  }


if ($level_guest == "guest") {

} elseif ($level_guest == "employee") {

} elseif ($level_guest == "clevel") {
  // code...
}
 ?>
