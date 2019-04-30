<?php
  include "database2.php";

  $sales = [];
  $salesmen = [];
  $type = [];

  foreach ($graphs["fatturato_by_agent"] as $value) {

    $pie[] = $value["type"];
    foreach ($value as $k1 => $v1) {

      $salesmen[] = $k1;
      $sales[] = $v1;
    }
  }
var_dump($graphs["fatturato_by_agent"]);
  $ret2 = [

    "type" => $pie,

    "data" => [
        "labels" => $salesmen,
        "datasets" => [
          [
            "label" => 'Income',
            "backgroundColor" => ['red', 'blue',  'yellow', 'green'],
            "borderColor" => ['red', 'blue', 'yellow', 'green'],
            "data" => $sales
          ]
        ]
    ]
  ];

  echo json_encode($ret2);

 ?>
