<?php
    function loadModel($model_path, $model_name, $function, $arrArgument = '') {
        $model = $model_path . $model_name . '.class.singleton.php';
        // echo '<script>';
        // echo 'console.log("LoadModel1")';
        // echo '</script>';
        if (file_exists($model)) {
            include_once($model);
            // echo '<script>';
            // echo 'console.log("LoadModelExist")';
            // echo '</script>';
            $modelClass = $model_name;
            if (!method_exists($modelClass, $function)){
                die($function . ' function not found in Model ' . $model_name);
            }
            // echo '<script>';
            // echo 'console.log("Por webs")';
            // echo '</script>';
            $obj = $modelClass::getInstance();
            if (isset($arrArgument)) {
                return $obj->$function($arrArgument);
            }


        } else {
          // echo '<script>';
          // echo 'console.log("Fail on common")';
          // echo '</script>';
            die($model_name . ' Model Not Found under Model Folder');
        }
    }
    function loadView($rutaVista, $templateName, $arrPassValue = '') {
    		$view_path = $rutaVista . $templateName;
    		$arrData = '';

    		if (file_exists($view_path)) {
    			if (isset($arrPassValue))
    				$arrData = $arrPassValue;
    			include_once($view_path);
    		} else {
    			//die($templateName . ' Template Not Found under View Folder');
    			// $message = "NO TEMPLATE FOUND";
    			// $arrData = $message;
    			// require_once 'view/inc/404.php';
    			// die();
    		}
    	}
