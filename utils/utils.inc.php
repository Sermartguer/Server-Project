<?php
    function debugPHP($array){
		echo "<pre>";
		print_r($array);
		echo "</pre><br>";
		//die(); no va
	}

	function redirect($url){
		die('<script>top.location.href="'.$url .'";</script>');
	}
  function close_session() {
      $_SESSION = array(); // Destruye todas las variables de la sesión
      session_destroy(); // Destruye la sesión
  }
  function amigable($url, $return = false) {
      $amigableson = URL_AMIGABLES;
      $link = "";
      if ($amigableson) {
          $url = explode("&", str_replace("?", "", $url));
          foreach ($url as $key => $value) {
              $aux = explode("=", $value);
              $link .=  $aux[1]."/";
          }
      } else {
          $link = "index.php" . $url;
      }
      if ($return) {
          return SITE_PATH . $link;

      }
      echo SITE_PATH . $link;
  }
   
    function getRealIpAddr(){
      $ipaddress = '';
      if ($_SERVER['HTTP_CLIENT_IP'])
          $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
      else if($_SERVER['HTTP_X_FORWARDED_FOR'])
          $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
      else if($_SERVER['HTTP_X_FORWARDED'])
          $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
      else if($_SERVER['HTTP_FORWARDED_FOR'])
          $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
      else if($_SERVER['HTTP_FORWARDED'])
          $ipaddress = $_SERVER['HTTP_FORWARDED'];
      else if($_SERVER['REMOTE_ADDR'])
          $ipaddress = $_SERVER['REMOTE_ADDR'];
      else
          $ipaddress = 'UNKNOWN';

      return $ipaddress;
}
