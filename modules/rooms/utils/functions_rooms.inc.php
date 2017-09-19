<?php
function validate_user($value) {
    $error = array();
    $valido = true;
    $filtro = array(
        'sdesc' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => '/^\D{2,30}$/')
        ),
        'name' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => '/^\D{2,30}$/')
        ),
        'date_start' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => '/(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/')
        ),
        'end_date' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => '/(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/')
        ),
        
        'email' => array(
            'filter' => FILTER_CALLBACK,
            'options' => 'valida_email'
        ),
    );
    

    $resultado = filter_var_array($value, $filtro);
    
    //no filter
    $resultado['maxguest'] = $value['maxguest'];
    $resultado['numbrooms'] = $value['numbrooms'];
    $resultado['numbbeds'] = $value['numbbeds'];
    $resultado['numbbaths'] = $value['numbbaths'];
    $resultado['dayprice'] = $value['dayprice'];
    $resultado['weeklyprice'] = $value['weeklyprice'];
    $resultado['country'] = $value['country'];
    $resultado['services'] = $value['services'];
    $resultado['components'] = $value['components'];

    /*if ($resultado['date_start']) {
        //validate to user's over 16
        $dates = validateAge($_POST['date_start']);

        if (!$dates) {
            $error['date_start'] = 'User must have more than 16 years';
            $valido = false;
        }
    }*/


    if ($value['date_start'] && $value['end_date']) {
        //compare date of birth with end_date
        $dates = valida_dates($value['date_start'], $value['end_date']);

        if (!$dates) {
            $error['end_date'] = 'Please, minimum 1 day';
            $valido = false;
        }
    }


    if ($resultado['maxguest'] === 'Select One') {
        $error['maxguest'] = "You haven't select the maximum guests.";
        $valido = false;
    }
    if ($resultado['numbrooms']=== 'Select One'){
        $error['numbrooms']="You haven't select the number of rooms.";
        $valido = false;
    }
    if($resultado['numbbeds'] === 'Select One'){
        $error['numbbeds'] = "You haven't select the number of beds";
        $valido = false;
    }
    if($resultado['numbbaths'] === 'Select One'){
        $error['numbbaths'] = "You haven't select the number of baths";
        $valido = false;
    }
    if($resultado['dayprice'] === 'Select One'){
        $error['dayprice'] = "You haven't select the daily price";
        $valido = false;
    }
    if($resultado['weeklyprice'] === 'Select One'){
        $error['weeklyprice'] = "You haven't select the weekly price";
        $valido = false;
    }
    if($resultado['country'] === 'Select One'){
        $error['country'] = "You haven't select the weekly price";
        $valido = false;
    }

    if(count($resultado['components']) <=1){
        
         
        $error['components'] = "Select 1 or more.";
        $valido = false;
    }
    if(count($resultado['services']) <=1){
       
        $error['services'] = "Select 1 or more.";
        $valido = false;
    }

    if ($resultado != null && $resultado) {


        if (!$value['sdesc']) {
            $error['sdesc'] = 'Name must be 2 to 20 letters';
            $valido = false;
        }

        

        if (!$value['email']) {
            $error['email'] = 'error format email (example@example.com)';
            $valido = false;
        }


        

        if (!$value['name']) {
            $error['name'] = 'Name must be 2 to 30 letters';
            $valido = false;
        }

        if (!$value['date_start']) {
            if($value['date_start'] == ""){
                $error['date_start'] = "this camp can't empty";
                $valido = false;  
            }else{
                $error['date_start'] = 'error format date (mm/dd/yyyy)';
                $valido = false;
            }
        }

        if (!$value['end_date']) {
            if($value['end_date'] == ""){
                $error['end_date'] = "this camp can't empty";
                $valido = false;  
            }else{
            $error['end_date'] = 'error format date (mm/dd/yyyy)';
            $valido = false;
            }
        }
    } else {
        $valido = false;
    };
    return $return = array('resultado' => $valido, 'error' => $error, 'datos' => $resultado);
}

function valida_dates($start_days, $dayslight) {

    /*$start_day = date("m/d/Y", strtotime($start_days));
    $daylight = date("m/d/Y", strtotime($dayslight));

    list($mes_one, $dia_one, $anio_one) = split('/', $start_day);
    list($mes_two, $dia_two, $anio_two) = split('/', $daylight);

    $dateOne = new DateTime($anio_one . "-" . $mes_one . "-" . $dia_one);
    $dateTwo = new DateTime($anio_two . "-" . $mes_two . "-" . $dia_two);
*/
    $date = date_create($start_days);
    $datetime1= date_format($date, 'Y-m-d');

    $datetwo = date_create($dayslight);
    $datetime2 = date_format($datetwo, 'Y-m-d');
    echo $datetime1;


   /*$datetime1 = new DateTime($start_days);
    $datetime2 = new DateTime($dayslight);
    $interval = $datetime1->diff($datetime2);
    echo $interval->format('%R%a días');*/
    if ($datetime1 < $datetime2) {
        return true;
    }
    return false;
}


// validate birthday
/*function validateAge($date_start, $date_end) {
    // $birthday can be UNIX_TIMESTAMP or just a string-date.
    if (is_string($date_start)) {
        $date_start = strtotime($date_start);
    }

    // check
    // 31536000 is the number of seconds in a 365 days year.
    if (time() - $date_start < $date_end * 86400) {
        return false;
    }

    return true;
}*/

//validate email
function valida_email($email) {
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (filter_var($email, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '/^.{5,50}$/')))) {
            return $email;
        }
    }
    return false;
}
