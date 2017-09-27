<?php
class userDAO {
    static $_instance;

    private function __construct() {

    }

    public static function getInstance() {
      // echo '<script>';
      // echo 'console.log("UserDAO")';
      // echo '</script>';
        if (!(self::$_instance instanceof self))
            self::$_instance = new self();
        return self::$_instance;
    }

    public function create_user_DAO($db, $arrArgument) {
      // echo '<script>';
      // echo 'console.log("A crear")';
      // echo '</script>';
      //Normal fields
        $sdesc = $arrArgument['sdesc'];
        $maxguest = $arrArgument['maxguest'];
        $numbrooms = $arrArgument['numbrooms'];
        $date_start = $arrArgument['date_start'];
        $numbbeds = $arrArgument['numbbeds'];
        $numbbaths = $arrArgument['numbbaths'];
        $end_date = $arrArgument['end_date'];
        $dayprice = $arrArgument['dayprice'];
        $weeklyprice = $arrArgument['weeklyprice'];
        $country = $arrArgument['country'];
        $province = $arrArgument['province'];
        $city = $arrArgument['city'];



        $components = $arrArgument['components'];


        //Checkbox field
        $botiquin = 0;
        $pestillo = 0;
        $extintor = 0;
        $ficha = 0;

        //Components
        foreach ($components as $indice) {
            if ($indice === 'Botiquin')
                $botiquin = 1;
            if ($indice === 'Pestillo en la puerta')
                $pestillo = 1;
            if ($indice === 'Extintor de incendios')
                $extintor = 1;
            if ($indice === 'Ficha de instrucciones de seguridad')
                $ficha = 1;
        }
        $services = $arrArgument['services'];
        $cocina = 0;
        $internet = 0;
        $tv = 0;
        $calefaccion = 0;
        $aire = 0;
        $mascotas = 0;
        $basicos = 0;
        $parking = 0;
        $rutas = 0;
        //Services
        foreach ($services as $indice) {
            if ($indice === 'Cocina')
                $cocina = 1;
            if ($indice === 'Internet')
                $internet = 1;
            if ($indice === 'TV')
                $tv = 1;
            if ($indice === 'Calefaccion')
                $calefaccion = 1;
            if ($indice === 'Aire Acondicionado')
                $aire = 1;
            if ($indice === 'Mascotas')
                $mascotas = 1;
            if ($indice === 'Elementos Basicos')
                $basicos = 1;
            if ($indice === 'FreeAparcamiento')
                $parking = 1;
            if ($indice === 'Rutas proximas')
                $rutas = 1;
        }
        $name = $arrArgument['name'];
        $email = $arrArgument['email'];
        $country = $arrArgument['country'];
        $avatar = $arrArgument['avatar'];

        $sql = "INSERT INTO rooms (sdesc, maxguest, numbrooms, date_start,"
                . " numbbeds, numbbaths, end_date, dayprice, weeklyprice,botiquin,pestillo,extintor,ficha,cocina,internet,tv,calefaccion,aire,mascotas,basicos,parking,rutas,country,province,city,name,email, avatar"
                . " ) VALUES ('$sdesc', '$maxguest', '$numbrooms',"
                . " '$date_start', '$numbbeds', '$numbbaths', '$end_date', '$dayprice', '$weeklyprice','$botiquin','$pestillo','$extintor','$ficha','$cocina','$internet','$tv','$calefaccion','$aire','$mascotas','$basicos','$parking','$rutas','$country','$province','$city','$name','$email', '$avatar')";

                // echo '<script>';
                // echo "console.log('$sql')";
                // echo '</script>';
                  return $db->ejecutar($sql);




    }
    public function obtain_countries_DAO($url){
          $ch = curl_init();
          curl_setopt ($ch, CURLOPT_URL, $url);
          curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
          $file_contents = curl_exec($ch);

          $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
          curl_close($ch);
          $accepted_response = array(200, 301, 302);
          if(!in_array($httpcode, $accepted_response)){
            return FALSE;
          }else{
            return ($file_contents) ? $file_contents : FALSE;
          }
    }

    public function obtain_provinces_DAO(){
          $json = array();
          $tmp = array();

          $provincias = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/a/Server-Project/resources/provinciasypoblaciones.xml');
          $result = $provincias->xpath("/lista/provincia/nombre | /lista/provincia/@id");
          for ($i=0; $i<count($result); $i+=2) {
            $e=$i+1;
            $provincia=$result[$e];

            $tmp = array(
              'id' => (string) $result[$i], 'nombre' => (string) $provincia
            );
            array_push($json, $tmp);
          }
              return $json;

    }

    public function obtain_cities_DAO($arrArgument){
          $json = array();
          $tmp = array();

          $filter = (string)$arrArgument;
          $xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/a/Server-Project/resources/provinciasypoblaciones.xml');
          $result = $xml->xpath("/lista/provincia[@id='$filter']/localidades");

          for ($i=0; $i<count($result[0]); $i++) {
              $tmp = array(
                'poblacion' => (string) $result[0]->localidad[$i]
              );
              array_push($json, $tmp);
          }
          return $json;
    }
}
