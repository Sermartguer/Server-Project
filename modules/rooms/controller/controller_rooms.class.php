<?php
	session_start();
	include ($_SERVER['DOCUMENT_ROOT'] . "/Server-Project/modules/rooms/utils/functions_rooms.inc.php");
	include ($_SERVER['DOCUMENT_ROOT'] . "/Server-Project/utils/upload.php");

	echo "<br>";echo "<br>";
	
	//////////////////////////////////////////////////////////////// upload
		if ((isset($_GET["upload"])) && ($_GET["upload"] == true)) {
		    $result_avatar = upload_files();
		    $_SESSION['result_avatar'] = $result_avatar;
		    //echo debug($_SESSION['result_avatar']); //se mostraría en alert(response); de dropzone.js
		}

		//////////////////////////////////////////////////////////////// alta_users_json
		if ((isset($_POST['alta_users_json']))) {
		    alta_users();
		}

	include 'modules/rooms/utils/functions_rooms.inc.php';
	
	if ($_POST) {
		
		$result = validate_user();
		
		if ($result['resultado']) {
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


				
			);
	
			$mensaje = "User has been successfully registered";
	
			$_SESSION['rooms'] = $arrArgument;
			$_SESSION['msje'] = $mensaje;
	
			$callback = "index.php?module=rooms&view=results_rooms";
			redirect($callback);
		} else {
			$error = $result['error'];

		}
	}
	
	include 'modules/rooms/view/create_rooms.php';















	/*if (isset($_POST['SubmitRooms'])) {
		$_SESSION=$_POST;

		$callback="index.php?module=rooms&view=results_rooms";
		//die('<script>window.location.href="'.$callback .'";</script>');

		redirect($callback);
	}		
	include ('modules/rooms/view/create_rooms.php');*/
