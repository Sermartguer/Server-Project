<br><br>
<section id="contact-page ">
    <div class="container mt-5">
		    <div class="row">
			    <div class="col-lg-8 mx-auto">
					<?php

						//echo "<pre>";
						//print_r($_POST);
						//echo "</pre>";
						//debugPHP($_POST);
							
							
						//echo "<pre>";
						//print_r($_SESSION);
						//echo "</pre>";
						//debugPHP($_SESSION);
						//die();


					//Validacio PHP
						/*$rooms = $_SESSION['rooms'];
						$msage = $_SESSION['msje'];
			
						foreach ($rooms as $indice => $valor) {
							if (($indice === 'services')|| ($indice ==='components')) {
								
								if($indice==='services'){
									echo "<br><b>Services:</b><br>";
									$services = $rooms['services'];
								}else if ($indice==='components'){
									echo "<br><b>Components:</b><br>";
									$services = $rooms['components'];
								}
								
								foreach ($services as $indice => $valor) {
									echo "<b>---> $indice</b>: $valor<br>";
								}
							} else {
								echo "<br><b>$indice</b>: $valor";
							}
						}
						echo "<br>" . "<b style='color:green'>" . $msage;
						
*/

						//Validacio JS
						
						$rooms = $_SESSION['rooms'];
						$msage = $_SESSION['msje'];
			
						foreach ($rooms as $indice => $valor) {
							if (($indice === 'services')|| ($indice ==='components')) {
								
								if($indice==='services'){
									echo "<br><b>Services:</b><br>";
									$services = $rooms['services'];
								}else if ($indice==='components'){
									echo "<br><b>Components:</b><br>";
									$services = $rooms['components'];
								}
								
								foreach ($services as $indice => $valor) {
									echo "<b>---> $indice</b>: $valor<br>";
								}
							} else {
								echo "<br><b>$indice</b>: $valor";
							}
						}
						echo "<br>" . "<b style='color:green'>" . $msage;
						


							/*foreach ($_SESSION as $indice => $valor){
								
									if($indice==="components"){
										echo "<br>Componentes:<br>";
										$components = $_SESSION["components"];
										$services=$_SESSION["services"];
										foreach ($components as $indice => $valor)
											echo "$indice: $valor<br>";
									}else if($indice==="services"){
										echo "<br>Services:<br>";
										foreach ($services as $indice => $valor){ 
										echo "$indice: $valor<br>";}
									}else{
										echo "$indice: $valor<br>";
									}
								}*/
							
						
					?>
				</div>
			</div>
	</div>
</section>