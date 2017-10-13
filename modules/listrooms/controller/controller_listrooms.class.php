<?php
class controller_listrooms {
    function __construct() {
    }

		function list_rooms() {
			require_once(VIEW_PATH_INC ."top_page.php");
			require_once(VIEW_PATH_INC ."menu.php");

		 loadView('modules/listrooms/view/', 'list_rooms.php');

			require_once(VIEW_PATH_INC . "footer.php");
			require_once(VIEW_PATH_INC ."bottom_page.php");
		    }

		function get_data(){
			//LIST
						$_SESSION['limit'] =  $_GET["aux"];

						//$path_model = $_SERVER['DOCUMENT_ROOT'] . '/a/Server-Project/modules/list_rooms/model/model/';
						$arrValue = loadModel(MODEL_listrooms, "listrooms_model", "select_rooms",$_SESSION['limit']);

						if ($arrValue) {
							$jsondata['limit'] = $_SESSION['limit'];

							$jsondata["results"] = $arrValue;
							echo json_encode($jsondata);
							exit;
			    } else {
			        // $message = "NOT PRODUCTS";
			        // loadView('view/inc/', '404.php', $message);
			    }


		}
		function list_id(){
			 	$_SESSION["id"] = $_GET["aux"];
				$callback = "?module=listrooms&function=details_rooms";
				$jsondata["redirect"] = $callback;

				echo json_encode($jsondata);
				exit;

		}
		function details_rooms(){
			require_once(VIEW_PATH_INC ."top_page.php");
			require_once(VIEW_PATH_INC ."menu.php");

		 loadView('modules/listrooms/view/', 'details_rooms.php');

			require_once(VIEW_PATH_INC . "footer.php");
			require_once(VIEW_PATH_INC ."bottom_page.php");
		}
		function load_details(){
			$arrValue = loadModel(MODEL_listrooms, "listrooms_model", "select_one_rooms",$_SESSION["id"]);
				$_SESSION["details_room"] = $arrValue;
				if($arrValue){
						echo json_encode($arrValue);
						exit;
					}else{

					}
		}
		// function detail_rooms(){
		//
		// 	 $id = $_SESSION["id"];
		// 	//$path_model = $_SERVER['DOCUMENT_ROOT'] . '/a/Server-Project/modules/list_rooms/model/model/';
		// 	$arrValue = loadModel(MODEL_listrooms, "listrooms_model", "select_one_rooms",$_SESSION["id"]);
		// 	$_SESSION["detail_room"] = $arrValue;
		// 	/if($arrValue){
		// 			echo json_encode($arrValue);
		// 			exit;
		// 		}else{
		//
		// 		}
		// }
}
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
