<section class="mt-5 contenedor masthead">
	<div class="container">
		        <div class="center">
            <h2>MyRoom</h2>
            <p class="lead">Create or modify your MyRoom</p>
        </div>


            <div class="status alert alert-success" style="display: none"></div>
            <form id="form" class="formularion" method="post">
                <div class="row">
                    <!--Sort Description-->
                    <div class="col-12">
                        <div class="form-group ">
                            <label>Sort description *</label>
                            <input type="text" name="sdesc" id="sdesc" placeholder="Sort Description" class="form-control" value="<?php
                                if (!isset($error['sdesc'])) {
                                    echo $_POST ? $_POST['sdesc'] : "";
                                }
                                ?>">
                                <div id="e_sdesc"><?php
                                    if (isset($error['sdesc'])) {
                                        print("<BR><span style='color: #ff0000'>" . "* " . $error['sdesc'] . "</span><br/>");
                                    }
                                    ?>  
                                </div>
                            <small  class="form-text text-muted">Please, not enter more than 8 words.</small>
                        </div>
                    </div>
                </div>

                <!--EndRow-->

                <div class="row">
                    <div class="col-6">
                        <h3>Specifications</h3>
                    </div>
                    <div class="col-6">
                        <h3>Disponibilidad de MyRoom</h3>
                        <small id="sdesc" class="form-text text-muted">Please, minimum 1 day</small>
                    </div>
                </div>

                <!--EndRow-->

                <div class="row">
                    <!--Guests-->
                    <div class="col-3">
                        <div class="form-group">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <label for="exampleFormControlSelect1">Maximum guests</label>
                            <select class="form-control" id="maxguest" name="maxguest">
                                <option value="Select One">Select One</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            <div id="maxguest"><?php
                                if (isset($error['maxguest'])) {
                                    print ("<BR><span style='color: #ff0000'>" . "* " . $error['maxguest'] . "</span><br/>");
                                }
                            ?></div>
                        </div>
                    </div>
                    <!--Rooms-->
                    <div class="col-3">
                        <div class="form-group">
                            <i class="" src="../../../view/img/open-exit-door.svg" aria-hidden="true"></i>
                            <label for="exampleFormControlSelect1">Rooms</label>
                            <select class="form-control" id="numbrooms" name="numbrooms">
                                <option value="Select One">Select One</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                            <div id="numbrooms"><?php
                                if (isset($error['numbrooms'])) {
                                    print ("<BR><span style='color: #ff0000'>" . "* " . $error['numbrooms'] . "</span><br/>");
                                }
                            ?></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Date of start *</label><br />
                            <input  id="date_start" type="text" name="date_start"   class="form-control" placeholder="mm/dd/yyyy"  value="<?php
                                if (!isset($error['date_start'])) {
                                    echo $_POST ? $_POST['date_start'] : "";
                                }
                                ?>">
                                <div id="date_start"><?php
                                if (isset($error['date_start'])) {
                                    print("<BR><span style='color: #ff0000'>" . "* " . $error['date_start'] . "</span><br/>");
                                }
                                ?></div>
                        </div>
                    </div>
                </div>

                <!--End Row-->

                <div class="row">
                    <!--Beds-->
                    <div class="col-3">
                        <div class="form-group">
                            <i class="fa fa-bed" aria-hidden="true"></i>
                            <label for="exampleFormControlSelect1">Beds</label>
                            <select class="form-control" id="numbbeds" name="numbbeds">
                                <option value="Select One">Select One</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <div id="numbbeds"><?php
                                if (isset($error['numbbeds'])) {
                                    print ("<BR><span style='color: #ff0000'>" . "* " . $error['numbbeds'] . "</span><br/>");
                                }
                            ?></div>
                        </div>
                    </div>

                    <!--Baths-->
                    <div class="col-3">
                        <div class="form-group">
                            <i class="fa fa-shower" aria-hidden="true"></i>
                            <label for="exampleFormControlSelect1">Bath</label>
                            <select class="form-control" id="numbbaths" name="numbbaths">
                                <option value="Select One">Select One</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <div id="numbbaths"><?php
                                if (isset($error['numbbaths'])) {
                                    print ("<BR><span style='color: #ff0000'>" . "* " . $error['numbbaths'] . "</span><br/>");
                                }
                            ?></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Date of end *</label><br />
                            <input id="end_date" type="text" name="end_date" placeholder="mm/dd/yyyy"  class="form-control"  value="<?php
                                if (!isset($error['end_date'])) {
                                    echo $_POST ? $_POST['end_date'] : "";
                                }
                                ?>">
                                                        <div id="end_date"><?php
                                if (isset($error['end_date'])) {
                                    print("<BR><span style='color: #ff0000'>" . "* " . $error['end_date'] . "</span><br/>");
                                }
                                ?></div>
                        </div>
                    </div>
                </div>

                <!--End Row-->

                    <div class="row">
                        <div class="col-6">
                            <h3><i class="fa fa-eur" aria-hidden="true"></i>&nbsp;Prices </h3>
                        </div>
                        <div class="col-6">
                            <h3><i class="fa fa-shield" aria-hidden="true"></i>&nbsp;Security</h3>
                        </div>
                    </div>

                    <!--EndRow-->

                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                            
                                <label for="exampleFormControlSelect1">Day-Price</label>
                                <select class="form-control" id="dayprice" name="dayprice">
                                    <option value="Select One">Select One</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                                <div id="dayprice"><?php
                                if (isset($error['dayprice'])) {
                                    print ("<BR><span style='color: #ff0000'>" . "* " . $error['dayprice'] . "</span><br/>");
                                }
                            ?></div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Weekly-Price</label>
                                <select class="form-control" id="weeklyprice" name="weeklyprice">
                                    <option value="Select One">Select One</option>
                                    <option value="100">100</option>
                                    <option value="120">120</option>
                                    <option value="130">130</option>
                                    <option value="140">140</option>
                                    <option value="150">150</option>
                                </select>
                                <div id="weeklyprice"><?php
                                    if (isset($error['weeklyprice'])) {
                                        print ("<BR><span style='color: #ff0000'>" . "* " . $error['weeklyprice'] . "</span><br/>");
                                    }
                                ?></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Components  *</label><br>

                                Botiquin  <input type="checkbox" name="components[]" value="Botiquin" checked>
                                Pestillo en la puerta  <input type="checkbox" name="components[]" value="Pestillo en la puerta" checked>
                                Extintor de incendios  <input type="checkbox" name="components[]" value="Extintor de incendios" checked>
                                Ficha de instrucciones de seguridad   <input type="checkbox" name="components[]" value="Ficha de instrucciones de seguridad">
                                <div id="components"><?php
                                    if (isset($error['components'])) {
                                        print ("<BR><span style='color: #ff0000'>" . "* " . $error['components'] . "</span><br/>");
                                    }
                                ?></div>
                            </div>
                        </div>

                    </div>

                    <!--EndRow-->
                    <div class="row">
                        <div class="col-6">
                            <h3>Services</h3>
                        </div>
                        <div class="col-6">
                            <h3>MyUserRoom</h3>
                        </div>
                    </div>

                    <!--EndRow-->

                    <div class="row">
                        
                            <div class="col-6">
                                <div class="form-group">
                                    <!--Row1-->
                                    <div class="row justify-content-md-center">
                                        <div class="col-3">
                                            <input type="checkbox" name="services[]" value="Cocina" checked>
                                            <label for=""><i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<strong class="text-uppercase">Cocina</strong></label>  
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox" name="services[]" value="Internet" checked>
                                            <label for=""><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<strong class="text-uppercase">Internet</strong></label> 
                                        </div>
                                        <div class="col-2">
                                            <input type="checkbox" name="services[]" value="TV" checked>
                                            <label for=""><i class="fa fa-television" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<strong class="text-uppercase">TV</strong></label>
                                        </div>  
                                    </div><!--EndRow1?9-->

                                    <!--Row2-->
                                    <div class="row justify-content-md-center">
                                        <div class="col-4">
                                            <input type="checkbox" name="services[]" value="Calefaccion">
                                            <label for=""><i class="fa fa-thermometer-empty" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<strong class="text-uppercase">Calefaccion</strong></label>
                                        </div>
                                        <div class="col-6">
                                            <input type="checkbox" name="services[]" value="Aire Acondicionado">
                                            <label for=""><i class="fa fa-snowflake-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<strong class="text-uppercase">Aire Acondicionado</strong></label>
                                        </div> 
                                    </div><!--EndRow2?10-->

                                    <!--Row3-->
                                    <div class="row justify-content-md-center">
                                        <div class="col-4">
                                                <input type="checkbox" name="services[]" value="Mascotas">
                                                <label for=""><i class="fa fa-paw" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<strong class="text-uppercase">Mascotas</strong></label> 
                                        </div>
                                        
                                        <div class="col-5">
                                            <input type="checkbox" name="services[]" value="Elementos Basicos">
                                            <label for=""><i class="fa fa-wrench" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<strong class="text-uppercase">Elementos Basicos</strong></label> 
                                        </div>
                                    </div><!--EndRow3?9-->

                                    <!--Row4-->
                                    <div class="row justify-content-md-center">
                                        
                                        <div class="col-12">
                                            <input type="checkbox" name="services[]" value="FreeAparcamiento">
                                            <label for=""><i class="fa fa-car" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<strong class="text-uppercase">Aparcamiento gratuito dentro de las instalaciones</strong></label> 
                                        </div>
                                        
                                    </div>

                                    <!--Row5-->
                                    <div class="row justify-content-md-center">
                                        <div class="col-5">
                                            <input type="checkbox" name="services[]" value="Rutas proximas">
                                            <label for=""><i class="fa fa-bicycle" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<strong class="text-uppercase">Rutas proximas</strong></label> 
                                        </div>
                                        
                                    </div>
                                    <!--EndRow5-->

                                    <!--Row6-->
                                    <div class="row justify-content-md-center">
                                        <div class="col-12">

                                            <input type="checkbox" name="services[]" value="Accesoreducido">
                                            <label for=""><i class="fa fa-wheelchair" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<strong class="text-uppercase">Acceso para personas con movilidad reducida</strong></label>  
                                        </div>
                                    </div>  
                                    <div id="services"><?php
                                    if (isset($error['services'])) {
                                        print ("<BR><span style='color: #ff0000'>" . "* " . $error['services'] . "</span><br/>");
                                    }
                                ?></div>
                                </div><!--EndForm-Group-->   
                            </div><!--End DivCol-6-->

                            <div class="col-6">
                                <div class="row">

                                    <div class="col-6">
                                        <div class="form-group">
                                        <label>Name*</label>
                                        <input type="text" name="name" id="name" placeholder="name" class="form-control" value="<?php
                                            if (!isset($error['name'])) {
                                                echo $_POST ? $_POST['name'] : "";
                                            }
                                            ?>" >
                                            <div id="e_name"><?php
                                                if (isset($error['name'])) {
                                                    print("<BR><span style='color: #ff0000'>" . "* " . $error['name'] . "</span><br/>");
                                                }
                                            ?></div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                        <label>E-mail *</label>
                                        <input type="email" name="email" placeholder="e-mail" class="form-control"  value="<?php
                                            if (!isset($error['email'])) {
                                                echo $_POST ? $_POST['email'] : "";
                                            }
                                            ?>">
                                                                    <div id="e_email"><?php
                                            if (isset($error['email'])) {
                                                print("<BR><span style='color: #ff0000'>" . "* " . $error['email'] . "</span><br/>");
                                            }
                                            ?></div>
                                        </div>
                                    </div>


                                </div><!--EndRow-->
                                <div class="row">
                                    <div class="col-12">
                                        <h3>Room Location</h3>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Location*</label>
                                            <input type="text" name="location" placeholder="Ciudad/Provincia/Pais" class="form-control"  value="<?php
                                                if (!isset($error['location'])) {
                                                    echo $_POST ? $_POST['location'] : "";
                                                }
                                                ?>">
                                                                        <div id="e_last_name"><?php
                                                if (isset($error['location'])) {
                                                    print("<BR><span style='color: #ff0000'>" . "* " . $error['location'] . "</span><br/>");
                                                }
                                                ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="form-group">
                                <label>Name *</label>
                                <input type="text" id="name" name="name" placeholder="name" class="form-control" required="required" value="<?php
                                if (!isset($error['name'])) {
                                    echo $_POST ? $_POST['name'] : "";
                                }
                                ?>" >
                                <div id="e_name"><?php
                                    if (isset($error['name'])) {
                                        print ("<BR><span style='color: #ff0000'>" . "* " . $error['name'] . "</span><br/>");
                                    }
                                    ?></div>
                                </div>
                        </div>


                            </div><!--End col62-->
                        </div><!--EndRow-->

                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" name="SubmitRooms" id="SubmitRooms" class="btn btn-primary btn-lg" value="submit">Submit Message</button>
                            </div>
                        </div>
                    </div>
                <!--/.row-->
            </form>

    </div><!--/.container-->
	</div>
</section>