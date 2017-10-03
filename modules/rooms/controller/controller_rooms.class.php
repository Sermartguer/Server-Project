<?php
	session_start();

	include ($_SERVER['DOCUMENT_ROOT'] . "/a/Server-Project/modules/rooms/utils/functions_rooms.inc.php");
	include ($_SERVER['DOCUMENT_ROOT'] . "/a/Server-Project/utils/upload.php");
	include ($_SERVER['DOCUMENT_ROOT'] . "/a/Server-Project/utils/common.inc.php");
	//echo "<br>";

	//echo "<br>";

	//////////////////////////////////////////////////////////////// upload
		if ((isset($_GET["upload"])) && ($_GET["upload"] == true)) {
		  $result_avatar = upload_files();
		   $_SESSION['result_avatar'] = $result_avatar;
		    //echo debug($_SESSION['result_avatar']); //se mostraría en alert(response); de dropzone.js
		}

		//////////////////////////////////////////////////////////////// alta_users_json
		if ((isset($_POST['alta_rooms_json']))) {
		    alta_users();
		}


	//include 'modules/rooms/utils/functions_rooms.inc.php';



	function alta_users() {



			$jsondata = array();
	    $usersJSON = json_decode($_POST["alta_rooms_json"], true);
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
			$path_model = $_SERVER['DOCUMENT_ROOT'] . '/a/Server-Project/modules/rooms/model/model/';
			$arrValue = loadModel($path_model, "user_model", "create_user", $arrArgument);
			// echo '<script>';
			// echo "console.log('ArrValue'+'$arrValue')";
			// echo '</script>';
			/*echo json_encode($arrValue);
			die();*/

			if ($arrValue){
					$mensaje = "Su registro se ha efectuado correctamente, para finalizar compruebe que ha recibido un correo de validacion y siga sus instrucciones";
			}else{
					$mensaje = "No se ha podido realizar su alta. Intentelo mas tarde";
				}

			//$mensaje = "User has been successfully registered";

			$_SESSION['rooms'] = $arrArgument;
			$_SESSION['msje'] = $mensaje;

			$callback = "index.php?module=rooms&view=results_rooms";
			$jsondata["success"] = true;
	        $jsondata["redirect"] = $callback;
					// echo '<script>';
					// echo "console.log('ArrValue')";
					// echo '</script>';
	        echo json_encode($jsondata);
        	exit;
		} else {

			//$error = $result['error'];
        //$error_avatar = $result_avatar['error'];
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

		//////////////////////////////////////////////////////////////// delete
if (isset($_GET["delete"]) && $_GET["delete"] == true) {
    $_SESSION['result_avatar'] = array();
    $result = remove_files();
    if ($result === true) {
        echo json_encode(array("res" => true));
    } else {
        echo json_encode(array("res" => false));
    }
}

//////////////////////////////////////////////////////////////// load
if (isset($_GET["load"]) && $_GET["load"] == true) {
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

function close_session() {
    unset($_SESSION['rooms']);
    unset($_SESSION['msje']);
    $_SESSION = array(); // Destruye todas las variables de la sesión
    session_destroy(); // Destruye la sesión
}

/////////////////////////////////////////////////// load_data
if ((isset($_GET["load_data"])) && ($_GET["load_data"] == true)) {
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

/////////////////////////////////////////////////// load_country
if(  (isset($_GET["load_country"])) && ($_GET["load_country"] == true)  ){
		$json = array();

    	$url = 'http://www.oorsprong.org/websamples.countryinfo/CountryInfoService.wso/ListOfCountryNamesByName/JSON';
		$path_model=$_SERVER['DOCUMENT_ROOT'] . '/a/Server-Project/modules/rooms/model/model/';
		$json = loadModel($path_model, "user_model", "obtain_countries", $url);

		if($json){
			echo $json;
			exit;
		}else{
			$json = "error";
			echo $json;
			exit;
		}
	}

/////////////////////////////////////////////////// load_provinces
if(  (isset($_GET["load_provinces"])) && ($_GET["load_provinces"] == true)  ){
    	$jsondata = array();
        $json = array();

		$path_model=$_SERVER['DOCUMENT_ROOT'] . '/a/Server-Project/modules/rooms/model/model/';
		$json = loadModel($path_model, "user_model", "obtain_provinces");

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

/////////////////////////////////////////////////// load_cities
if(  isset($_POST['idPoblac']) ){
	    $jsondata = array();
        $json = array();

		$path_model=$_SERVER['DOCUMENT_ROOT'] . '/a/Server-Project/modules/rooms/model/model/';
		$json = loadModel($path_model, "user_model", "obtain_cities", $_POST['idPoblac']);

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
