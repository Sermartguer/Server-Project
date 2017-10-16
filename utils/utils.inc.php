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
   function send_mailgun($email,$messag,$issue,$name){
      $ip = getRealIpAddr();
      $users = get_current_user();
      $config = array();
      $config['api_key'] = "key-6974acca6fa552a31e514682c2759394"; //API Key
      $config['api_url'] = "https://api.mailgun.net/v2/sandboxed6f57a2428d40c293b32ad2743b295c.mailgun.org/messages"; //API Base URL

      $message = array();
      $message['from'] = $email;
      $message['to'] = 'roomsglobal@gmail.com';
      $message['h:Reply-To'] = $email;
      $message['subject'] = 'Support '.$email.', '.$issue.' issue';
      $message['html'] = '' . $email . ' have a support issue opened <br> Type '.$issue.'<br>'. $messag .'<br>Name: '.$name.'';

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $config['api_url']);
      curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
      curl_setopt($ch, CURLOPT_USERPWD, "api:{$config['api_key']}");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS,$message);
      $result = curl_exec($ch);
      curl_close($ch);
      return $result;
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
