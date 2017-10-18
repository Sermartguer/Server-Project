
<?php
    class controller_contact {

        public function __construct() {
            $_SESSION['module'] = "contact";
            include(UTILS . "mail.inc.php");
        }

        public function view_contact() {
          require_once(VIEW_PATH_INC ."top_page.php");
    			require_once(VIEW_PATH_INC ."menu.php");

            loadView("modules/contact/view/", 'contact.php');

            require_once(VIEW_PATH_INC . "footer.php");
      			require_once(VIEW_PATH_INC ."bottom_page.php");
        }
        public function send_mail(){
          $jsondata = array();
    	    $mail_content = json_decode($_POST["data_contact"], true);
          if($mail_content){
            //$json = send_mailgun($mail_content['email']);
             $json = send_mailgun($mail_content['email'],$mail_content['message'],$mail_content['subject'],$mail_content['name']);
            $jsondata['success'] = $json;
          }else{
            $jsondata['success'] = $json;
          }
          echo json_encode($jsondata);
        }

      /*  public function process_contact() {
            if($_POST['token'] === "contact_form"){

                //////////////// Envio del correo al usuario
                $arrArgument = array(
									'type' => 'contact',
									'token' => '',
									'inputName' => $_POST['inputName'],
									'inputEmail' => $_POST['inputEmail'],
									'inputSubject' => $_POST['inputSubject'],
									'inputMessage' => $_POST['inputMessage']
								);
				set_error_handler('ErrorHandler');
				try{
                    echo "<div class='alert alert-success'>".enviar_email($arrArgument)." </div>";
				} catch (Exception $e) {
					echo "<div class='alert alert-error'>Server error. Try later...</div>";
				}
				restore_error_handler();


                //////////////// Envio del correo al admin de la web
                $arrArgument = array(
									'type' => 'admin',
									'token' => '',
									'inputName' => $_POST['inputName'],
									'inputEmail' => $_POST['inputEmail'],
									'inputSubject' => $_POST['inputSubject'],
									'inputMessage' => $_POST['inputMessage']
								);
                set_error_handler('ErrorHandler');
				try{
                    sleep(5);
                    echo "<div class='alert alert-success'>".enviar_email($arrArgument)." </div>";
				} catch (Exception $e) {
					echo "<div class='alert alert-error'>Server error. Try later...</div>";
				}
				restore_error_handler();

            }else{
                echo "<div class='alert alert-error'>Server error. Try later...</div>";
            }
        }*/
    }
