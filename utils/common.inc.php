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
