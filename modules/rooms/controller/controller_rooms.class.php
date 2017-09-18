<?php
	echo "<br>";echo "<br>";
	

	
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
