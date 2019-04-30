<?php
  include "database2.php";

  $sales = [];
  $salesmen = [];


  foreach ($graphs["fatturato_by_agent"] as $value) {

    foreach ($value as $k1 => $v1) {

      $salesmen[] = $k1;
      $sales[] = $v1;
    }
  }

  $ret2 = [

    "type" => "pie",

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
