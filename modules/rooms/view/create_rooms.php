<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css">

<script type="text/javascript" src="modules/rooms/view/js/rooms.js"></script>
<section id="contact-page">
    <div class="container mt-5" style="padding-top:50px;">
        <div class="center">
            <h2>MyRoom</h2>
            <p class="lead">Create or modify your MyRoom</p>
        </div>


            <div class="status alert alert-success" style="display: none"></div>
            <form id="form_rooms" method="post">
                <div class="row">
                    <!--Sort Description-->
                    <div class="col-12">
                        <div class="form-group ">
                            <label>Sort description *</label>
                            <input type="text" name="sdesc" id="sdesc" placeholder="Sort Description" class="form-control" value="asdsadas" required="required">
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
                    <div class="col-6 col-sm-12 col-xl-6">
                        <h3>Specifications</h3>
                    </div>
                    <div class="col-6 col-sm-12 col-xl-6">
                        <h3>Disponibilidad de MyRoom</h3>
                        <small id="a" class="form-text text-muted">Please, minimum 1 day</small>
                    </div>
                </div>

                <!--EndRow-->

                <div class="row">
                    <!--Guests-->
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
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
                            <div id="maxguest"></div>
                        </div>
                    </div>
                    <!--Rooms-->
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
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
                            <div id="numbrooms"></div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group">
                            <label>Date of start *</label><br />
                            <input  id="date_start" type="text" name="date_start"   class="form-control" placeholder="mm/dd/yyyy"  value="09/20/2017" readonly>
                                <div id="date_start" ><?php
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
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
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
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
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
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group">
                            <label>Date of end *</label><br />
                            <input id="end_date" type="text" name="end_date" placeholder="mm/dd/yyyy"  class="form-control"  value="09/30/2017" readonly>
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
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
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
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
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
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label>Components  *</label><br>
                                <div class="row justify-content-center">
                                    <div class="col-6 col-sm-4 col-md-6 col-lg-4 col-xl-4">
                                        <label for="">
                                            <strong class="text-uppercase">First aid kit</strong>
                                        </label>
                                        <input type="checkbox" name="components[]" class="msjcompo" value="Botiquin" checked="checked">
                                    </div>
                                    <div class="col-6 col-sm-3 col-md-4 col-lg-3 col-xl-3">
                                        <label for="">
                                            <strong class="text-uppercase">Latch</strong>
                                        </label>
                                        <input type="checkbox" name="components[]" class="msjcompo" value="Pestillo en la puerta" checked="checked">
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-6 col-lg-5 col-xl-4">
                                        <label for="">
                                            <strong class="text-uppercase">Extinguisher</strong>
                                        </label>
                                        <input type="checkbox" name="components[]" class="msjcompo" value="Extintor de incendios">
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-6 col-lg-5 col-xl-4">
                                        <label for="">
                                            <strong class="text-uppercase">Security File</strong>
                                        </label>
                                           <input type="checkbox" name="components[]" class="msjcompo" value="Ficha de instrucciones de seguridad">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <label for="">
                                            <strong class="text-uppercase" style="display: none">Security File</strong>
                                        </label>
                                           <input type="checkbox" name="components[]" class="msjcompo" value="Ficha de instrucciones de seguridad" style="display: none" checked>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <label for="">
                                            <strong class="text-uppercase" style="display: none">Security File</strong>
                                        </label>
                                           <input type="checkbox" name="components[]" class="msjcompo" value="Ficha de instrucciones de seguridad" style="display: none" checked>
                                    </div>
                                </div>
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
                            <h3>MyRoomProfile</h3>
                        </div>
                    </div>

                    <!--EndRow-->

                    <div class="row ">

                            <div class="col-6 col-sm-12 col-md-6 col-xl-6">
                                <div class="form-group">
                                    <!--Row1-->
                                    <div class="row justify-content-md-center">
                                        <div class="col-4 col-sm-4 col-md-5 col-lg-4 col-xl-4">
                                            <input type="checkbox" name="services[]" class="msjservices" value="Cocina" checked="checked">
                                            <label for=""><i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;&nbsp;<strong class="text-uppercase">Kitchen</strong></label>
                                        </div>
                                        <div class="col-4 col-sm-4 col-md-5 col-lg-4 col-xl-4">
                                            <input type="checkbox" name="services[]" class="msjservices" value="Internet" checked="checked" >
                                            <label for=""><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;<strong class="text-uppercase">Internet</strong></label>
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-4 col-lg-3 col-xl-2">
                                            <input type="checkbox" name="services[]" class="msjservices" value="TV">
                                            <label for=""><i class="fa fa-television" aria-hidden="true"></i>&nbsp;&nbsp;<strong class="text-uppercase">TV</strong></label>
                                        </div>

                                        <div class="col-4 col-sm-4 col-md-5 col-lg-4 col-xl-4">
                                            <input type="checkbox" name="services[]" class="msjservices" value="Calefaccion">
                                            <label for=""><i class="fa fa-thermometer-empty" aria-hidden="true"></i>&nbsp;&nbsp;<strong class="text-uppercase">Heating</strong></label>
                                        </div>
                                        <div class="col-5 col-sm-5 col-md-8 col-lg-6 col-xl-5">
                                            <input type="checkbox" name="services[]" class="msjservices" value="Aire Acondicionado">
                                            <label for=""><i class="fa fa-snowflake-o" aria-hidden="true"></i>&nbsp;&nbsp;<strong class="text-uppercase">Air conditioner</strong></label>
                                        </div>

                                        <div class="col-3 col-sm-3 col-md-4 col-lg-3 col-xl-3">
                                                <input type="checkbox" name="services[]" class="msjservices" value="Mascotas">
                                                <label for=""><i class="fa fa-paw" aria-hidden="true"></i>&nbsp;&nbsp;<strong class="text-uppercase">Pets</strong></label>
                                        </div>

                                        <div class="col-5 col-sm-5 col-md-6 col-lg-5 col-xl-4">
                                            <input type="checkbox" name="services[]" class="msjservices" value="Elementos Basicos">
                                            <label for=""><i class="fa fa-wrench" aria-hidden="true"></i>&nbsp;&nbsp;<strong class="text-uppercase">Core items</strong></label>
                                        </div>

                                        <div class="col-6 col-sm-6 col-md-9 col-lg-7 col-xl-6">
                                            <input type="checkbox" name="services[]" class="msjservices" value="FreeAparcamiento">
                                            <label for=""><i class="fa fa-car" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<strong class="text-uppercase">Free on-site parking</strong></label>
                                        </div>

                                        <div class="col-5 col-sm-5 col-md-8 col-lg-6 col-xl-5">
                                            <input type="checkbox" name="services[]" class="msjservices" value="Rutas proximas">
                                            <label for=""><i class="fa fa-bicycle" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<strong class="text-uppercase">Nearby Routes</strong></label>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <input type="checkbox" name="services[]" class="msjservices" value="Rutas proximas" style="display: none" checked>
                                            <label for="" style="display: none"><i class="fa fa-bicycle" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<strong class="text-uppercase" style="display: none"></strong></label>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <input type="checkbox" name="services[]" class="msjservices" value="Rutas proximas" style="display: none" checked>
                                            <label for="" style="display: none"><i class="fa fa-bicycle" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<strong class="text-uppercase" style="display: none"></strong></label>
                                        </div>

                                    </div>
                                    <div id="services"><?php
                                    if (isset($error['services'])) {
                                        print ("<BR><span style='color: #ff0000'>" . "* " . $error['services'] . "</span><br/>");
                                    }
                                ?></div>
                                </div><!--EndForm-Group-->
                            </div><!--End DivCol-6-->

                            <div class="col-6 col-sm-12 col-md-6 col-xl-6">
                                <div class="row">

                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-group">
                                        <label>Name*</label>
                                        <input type="text" name="name" id="name" placeholder="name" class="form-control" value="sergio" >
                                            <div id="e_name"><?php
                                                if (isset($error['name'])) {
                                                    print("<BR><span style='color: #ff0000'>" . "* " . $error['name'] . "</span><br/>");
                                                }
                                            ?></div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-group">
                                        <label>E-mail *</label>
                                        <input type="email" id="email" name="email" placeholder="email" class="form-control"  value="sergiete103@gmail.com">
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



                              <div class="row justify-content-center">
                                <div class="col-10">
                                    <div class="row">
                                        <h4>Country:</h4>
                                        <div id="error_country">
                                			    <select name="country" id="country">
                                			        <option selected>Select country</option>
                                			     </select>
                                		</div>
                                    </div>
                                    <div class="row">
                                        <h4>Province:</h4>
                                        <div id="error_province">
                                			<select name="province" id="province">
                                			    <option selected>Select province</option>
                                			</select>

                                		</div>
                                    </div>
                                    <div class="row">
                                        <h4>City:</h4>
                                        <div id="error_city">
                                            <select name="city" id="city">
                                                <option selected>Select city</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>

                              </div><!--EndRow-->

                    <div class="form-group" id="progress">
                        <div id="bar"></div>
                        <div id="percent">0%</div >
                    </div>

                    <div class="msg"></div>
                    <br/>
                    <div id="dropzone" class="dropzone"></div><br/>
              

                    </div><!--End col62-->
                        </div><!--EndRow-->

                    <div class="row justify-content-center">
                        <div class="col-2">
                            <div class="form-group">
                                <button type="button" name="SubmitRooms" id="SubmitRooms" class="btn btn-primary btn-lg" value="submit">Submit Message</button>
                            </div>
                        </div>
                    </div>
                <!--/.row-->
            </form>

    </div><!--/.container-->
</section><!--/#contact-page-->
