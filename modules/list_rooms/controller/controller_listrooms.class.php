<?php
	session_start();
  include ($_SERVER['DOCUMENT_ROOT'] . "/a/Server-Project/utils/common.inc.php");


$jsondata = array();
$arrValue = false;

//DETAILS
if ((isset($_GET["list_id"])) && (is_numeric($_GET["list_id"]))){

	/*$path_model = $_SERVER['DOCUMENT_ROOT'] . '/a/Server-Project/modules/list_rooms/model/model/';
	$arrValue = loadModel($path_model, "listrooms_model", "select_one_rooms",$_GET["detail_room"]);
	$_SESSION["detail_room"] = $arrValue;*/
 	$_SESSION["id"] = $_GET["list_id"];

	$callback = "index.php?module=list_rooms&view=details_rooms";
	$jsondata["redirect"] = $callback;

	echo json_encode($jsondata);
	exit;
}

if (isset($_GET["detail_rooms"])){
// $id = $_SESSION["id"];
$path_model = $_SERVER['DOCUMENT_ROOT'] . '/a/Server-Project/modules/list_rooms/model/model/';
$arrValue = loadModel($path_model, "listrooms_model", "select_one_rooms",$_SESSION["id"]);
// $_SESSION["detail_room"] = $arrValue;
	if($arrValue){
		echo json_encode($arrValue);
		exit;
	}else{

	}

}




//LIST
	if ((isset($_GET["get_data"])) && ($_GET["get_data"] == true)) {

			$path_model = $_SERVER['DOCUMENT_ROOT'] . '/a/Server-Project/modules/list_rooms/model/model/';
			$arrValue = loadModel($path_model, "listrooms_model", "select_rooms");

			if ($arrValue) {
				$jsondata["results"] = $arrValue;
				echo json_encode($jsondata);
				exit;
    } else {
        // $message = "NOT PRODUCTS";
        // loadView('view/inc/', '404.php', $message);
    }


  }else {
		  header('HTTP/1.0 400 Bad error');
			echo json_encode($jsondata);
	}

	if (isset($_GET["load_details"])) {

    $room = $_SESSION["detail_room"];
		$json_encode["result"] = $room;

    echo json_encode("hola");
    exit;
}

if (isset($_GET["save_id"])){
	$_SESSION["id"] = $_GET["save_id"];
	echo json_encode($_SESSION["id"]);
	exit;
}


  ?>
