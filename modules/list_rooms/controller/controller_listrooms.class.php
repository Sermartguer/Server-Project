<?php
	session_start();
  include ($_SERVER['DOCUMENT_ROOT'] . "/a/Server-Project/utils/common.inc.php");

  if ((isset($_GET["get_data"])) && ($_GET["get_data"] == true)) {

          $jsondata = array();
          $jsondata["rooms"] = "ASD";
          echo json_encode($jsondata);
          exit;

  }

  ?>
