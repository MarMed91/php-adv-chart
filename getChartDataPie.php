<?php
  include "database2.php";

  $sales = [];
  $salesmen = [];
  $pie = [];

  foreach ($graphs["fatturato_by_agent"] as $value) {

    $pie[] = $value["type"];
    foreach ($value as $k1 => $v1) {

      $salesmen[] = $k1;
      var_dump($k1)
      $sales[] = $v1;
    }
  }
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
