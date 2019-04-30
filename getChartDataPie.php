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

  $ret2 = [

    "type" => $type2,

    "data" => $salesmen
        "labels" => $pie,
        "datasets" => [
          [
            "label" => 'Income',
            "backgroundColor" => ['red', 'blue',  'yellow'],
            "borderColor" => ['red', 'blue', 'yellow'],
            "data" => $sales
          ]
        ]
    ]
  ];

  echo json_encode($ret);

 ?>
