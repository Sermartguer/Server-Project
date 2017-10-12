<?php
class controller_rooms{
	function __constructor(){
		        $_SESSION['module'] = "rooms";
	}
	function form_rooms(){
		require_once(VIEW_PATH_INC ."top_page.php");
		require_once(VIEW_PATH_INC ."menu.php");
		loadView('modules/rooms/view/', 'create_rooms.php');
		require_once(VIEW_PATH_INC . "footer.php");
		require_once(VIEW_PATH_INC ."bottom_page.php");
	}
	function results_rooms() {
		require_once(VIEW_PATH_INC ."top_page.php");
		require_once(VIEW_PATH_INC ."menu.php");
			 loadView('modules/rooms/view/', 'results_rooms.php');
		require_once(VIEW_PATH_INC . "footer.php");
		require_once(VIEW_PATH_INC ."bottom_page.php");
	 }
function load_countries(){
	/////////////////////////////////////////////////// load_country

			$json = array();

	    	$url = 'http://www.oorsprong.org/websamples.countryinfo/CountryInfoService.wso/ListOfCountryNamesByName/JSON';
			//$path_model=$_SERVER['DOCUMENT_ROOT'] . '/a/Server-Project/modules/rooms/model/model/';
			$json = loadModel(MODEL_rooms, "rooms_model", "obtain_countries", $url);

			if($json){
				echo $json;
				exit;
			}else{
				$json = "error";
				echo $json;
				exit;
			}
		}

function load_provinces(){
	/////////////////////////////////////////////////// load_provinces

	    	$jsondata = array();
	        $json = array();

			//$path_model=$_SERVER['DOCUMENT_ROOT'] . '/a/Server-Project/modules/rooms/model/model/';
			$json = loadModel(MODEL_rooms, "rooms_model", "obtain_provinces");

			if($json){
				$jsondata["provinces"] = $json;
				echo json_encode($jsondata);
				exit;
			}else{
				$jsondata["provinces"] = "error";
				echo json_encode($jsondata);
				exit;
			}

}
function load_towns(){
	/////////////////////////////////////////////////// load_cities

		    $jsondata = array();
	        $json = array();

			//$path_model=$_SERVER['DOCUMENT_ROOT'] . '/a/Server-Project/modules/rooms/model/model/';
			$json = loadModel(MODEL_rooms, "rooms_model", "obtain_cities", $_POST['aux']);

			if($json){
				$jsondata["cities"] = $json;
				echo json_encode($jsondata);
				exit;
			}else{
				$jsondata["cities"] = "error";
				echo json_encode($jsondata);
				exit;
			}

}

function load_data() {
	    $jsondata = array();
	    if (isset($_SESSION['rooms'])) {
	        $jsondata["rooms"] = $_SESSION['rooms'];
	        echo json_encode($jsondata);
	        exit;
	    } else {
	        $jsondata["rooms"] = "";
	        echo json_encode($jsondata);
	        exit;
	    }
}


	function alta_users() {
		include(FUNCTIONS_rooms . "functions_rooms.inc.php");
			$jsondata = array();
	    $usersJSON = json_decode($_POST["alta_users_json"], true);
	    $result = validate_user($usersJSON);

	    if (empty($_SESSION['result_avatar'])) {
        	$_SESSION['result_avatar'] = array('resultado' => true, 'error' => "", 'datos' => 'media/default-avatar.png');
    	}
    	$result_avatar = $_SESSION['result_avatar'];

		if (($result['resultado']) && ($result_avatar['resultado'])) {

			$arrArgument = array(
				'sdesc' => ucfirst($result['datos']['sdesc']),
				'maxguest' => strtoupper($result['datos']['maxguest']),
				'numbrooms' => strtoupper($result['datos']['numbrooms']),
				'date_start' => $result['datos']['date_start'],
				'numbbeds' => strtoupper($result['datos']['numbbeds']),
				'numbbaths' => strtoupper($result['datos']['numbbaths']),
				'end_date' => $result['datos']['end_date'],
				'dayprice' => strtoupper($result['datos']['dayprice']),
				'weeklyprice' => strtoupper($result['datos']['weeklyprice']),
				'components' => $result['datos']['components'],
				'services' => $result['datos']['services'],
				'name' => ucfirst($result['datos']['name']),
				'email' => $result['datos']['email'],
				'country' => $result['datos']['country'],
        'province' => $result['datos']['province'],
        'city' => $result['datos']['city'],
				'avatar' => $result_avatar['datos']

			);
			$arrValue = false;
			//$path_model = $_SERVER['DOCUMENT_ROOT'] . '/a/Server-Project/modules/rooms/model/model/';
			$arrValue = loadModel(MODEL_rooms, "rooms_model", "create_rooms", $arrArgument);

			if ($arrValue){
					$mensaje = "Su registro se ha efectuado correctamente, para finalizar compruebe que ha recibido un correo de validacion y siga sus instrucciones";
			}else{
					$mensaje = "No se ha podido realizar su alta. Intentelo mas tarde";
				}
			$_SESSION['rooms'] = $arrArgument;
			$_SESSION['msje'] = $mensaje;

			$callback = "../../rooms/results_rooms/";
			$jsondata["success"] = true;
	    $jsondata["redirect"] = $callback;
	        echo json_encode($jsondata);
        	exit;
		} else {
        $jsondata["success"] = false;
        $jsondata["error"] = $result['error'];
        $jsondata["error_avatar"] = $result_avatar['error'];

        $jsondata["success1"] = false;
        if ($result_avatar['resultado']) {
            $jsondata["success1"] = true;
            $jsondata["img_avatar"] = $result_avatar['datos'];
        }
        header('HTTP/1.0 400 Bad error');
        echo json_encode($jsondata);
        //exit;
    }
}


function loadlist(){
    $jsondata = array();
    if (isset($_SESSION['rooms'])) {
        //echo debug($_SESSION['user']);
        $jsondata["rooms"] = $_SESSION['rooms'];
    }
    if (isset($_SESSION['msje'])) {
        //echo $_SESSION['msje'];
        $jsondata["msje"] = $_SESSION['msje'];
    }
    close_session();
    echo json_encode($jsondata);
    exit;

}
function upload_rooms() {
	 include(UTILS . "upload.php");
            $result_avatar = upload_files();
            $_SESSION['result_avatar'] = $result_avatar;
            echo debugPHP($_SESSION['result_avatar']); // show it   in alert(response) dropzone
        }
function delete_rooms(){
	 include(UTILS . "upload.php");
						$_SESSION['result_avatar'] = array();
					$result = remove_files();
					if ($result === true) {
							echo json_encode(array("res" => true));
					} else {
							echo json_encode(array("res" => false));
					}


}
}

		//////////////////////////////////////////////////////////////// delete
