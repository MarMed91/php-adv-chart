<?php
  include "database3.php";

  if ($_GET["level"]) {

    $level = $_GET["level"];

    $retGraph = [];

    foreach ($graphs as $key => $graph) {
      $gLevel = $graph["access"];

      if ($gLevel == "guest") {

          $retGraph[] = $graph;
      }
      if ($gLevel == "employee") {
        if ($Level == "employee" || $Level == "clevel" ) {

          $retGraph[] = $graph;
        }
      }
      if ($gLevel == "clevel" && $Level == "clevel") {

          $retGraph[] = $graph;
      }
    }
  }
  echo json_encode($retGraph);
 ?>
