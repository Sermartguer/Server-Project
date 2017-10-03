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



            <form id="form_rooms" method="post">

                    <!--Sort Description-->

                <div class="row align-items-start">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                      <div  class="row card">
                        <div class="col-12 description">
                          <label>Sort description *</label>
                          <input type="text" name="sdesc" id="sdesc" placeholder="Sort Description" class="form-control" value="asdsadas">
                          <div id="e_sdesc"></div>
                          <small  class="form-text text-muted">Please, not enter more than 8 words.</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="row card">
                          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                              <div class="form-group">
                                  <label>Date of start *</label><br />
                                  <input  id="date_start" type="text" name="date_start"   class="form-control" placeholder="mm/dd/yyyy"  value="09/20/2017" readonly>
                                      <div id="date_start" ></div>
                              </div>
                          </div>
                          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                              <div class="form-group">
                                  <label>Date of end *</label><br />
                                  <input id="end_date" type="text" name="end_date" placeholder="mm/dd/yyyy"  class="form-control"  value="09/30/2017" readonly>
                                    <div id="end_date"</div>
                              </div>
                          </div>
                          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
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
                                    <div class="col-6 col-sm-4 col-md-6 col-lg-5 col-xl-5">
                                        <label for="">
                                            <strong class="text-uppercase">Extinguisher</strong>
                                        </label>
                                        <input type="checkbox" name="components[]" class="msjcompo" value="Extintor de incendios">
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-6 col-lg-5 col-xl-5">
                                        <label for="">
                                            <strong class="text-uppercase">Security File</strong>
                                        </label>
                                           <input type="checkbox" name="components[]" class="msjcompo" value="Ficha de instrucciones de seguridad">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                           <input type="checkbox" name="components[]" class="msjcompo" value="Ficha de instrucciones de seguridad" style="display: none" checked>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                           <input type="checkbox" name="components[]" class="msjcompo" value="Ficha de instrucciones de seguridad" style="display: none" checked>
                                    </div>
                                </div>
                                <div id="components"></div>
                            </div>
                          </div>


                        </div>
                    </div>
                  </div>
                </div><!--EndRow-->

                <div class="row">
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="row card al">
                      <div class="col-12">
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
                      <div class="col-12">
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
                      <div class="col-12">
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
                      <div class="col-12">
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

                    </div>
                  </div><!--EndCol-->
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="row card chino">
                        <h3><i class="fa fa-eur" aria-hidden="true"></i>&nbsp;Prices </h3>
                      <label for="exampleFormControlSelect1">Day-Price</label>
                      <div class="col-md-10 offset-md-10">
                          <div class="input-group" id="spinner">
                            <span class="input-group-btn btn-group-sm">
                               <button type="button" class="btn btn-danger" data-action="decrement"><span class="fa fa-minus"></span></button>
                           </span>
                           <input name="qty" id="qty" type="text" class="form-control text-center" value="1" min="1" max="100" >
                           <span class="input-group-btn btn-group-sm">
                               <button type="button" class="btn btn-success" data-action="increment"><span class="fa fa-plus"></span></button>
                           </span>
                          </div>
                      </div>
                      <label for="exampleFormControlSelect1">Weekly-Price</label>
                      <div class="col-md-10 offset-md-10">
                          <div class="input-group" id="spinner">
                            <span class="input-group-btn btn-group-sm">
                               <button type="button" class="btn btn-danger" data-action="decrement"><span class="fa fa-minus"></span></button>
                           </span>
                           <input name="qty" id="qty2" type="text" class="form-control text-center" value="1" min="50" max="10000" >
                           <span class="input-group-btn btn-group-sm">
                               <button type="button" class="btn btn-success" data-action="increment"><span class="fa fa-plus"></span></button>
                           </span>
                          </div>
                      </div>

                      <div class="col-12 mt-5">
                        <h3>Services</h3>
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
                                <div class="col-3 col-sm-3 col-md-4 col-lg-3 col-xl-3">
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
                                    <label for=""><i class="fa fa-car" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<strong class="text-uppercase">Parking</strong></label>
                                </div>

                                <div class="col-5 col-sm-5 col-md-8 col-lg-6 col-xl-6">
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
                            <div id="services"></div>
                        </div><!--EndForm-Group-->
                      </div>
                    </div>
                  </div>
                </div><!--EndRow-->
                <div class="row">
                  <div class="col-6">
                    <div class="row card up pb-4 pt-4" id="up">
                          <div class="col-12">
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


                    </div>
                  </div>

                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="row card">
                      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                          <div class="form-group">
                          <label>Name*</label>
                          <input type="text" name="name" id="name" placeholder="name" class="form-control" value="sergio" >
                              <div id="e_name"></div>
                          </div>
                      </div>

                      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                          <div class="form-group">
                          <label>E-mail *</label>
                          <input type="email" id="email" name="email" placeholder="email" class="form-control"  value="sergiete103@gmail.com">
                              <div id="e_email"></div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="row card">
                      <div class="form-group" id="progress">
                          <div id="bar"></div>
                          <div id="percent">0%</div >
                      </div>

                      <div class="msg"></div>
                      <br/>
                      <div id="dropzone" class="dropzone"></div><br/>


                      </div><!--End col62-->
                    </div>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-2 mt-4">
                    <div class="form-group">
                        <button type="button" name="SubmitRooms" id="SubmitRooms" class="btn btn-primary btn-lg" value="submit">Submit Message</button>
                    </div>
                  </div>
                </div>





                <!--<div class="row card">
                  <div class="col-12">
                    <label>Sort description *</label>
                    <input type="text" name="sdesc" id="sdesc" placeholder="Sort Description" class="form-control" value="asdsadas" required="required">
                    <div id="e_sdesc"></div>
                    <small  class="form-text text-muted">Please, not enter more than 8 words.</small>
                  </div>
                </div>-->



                <!--EndRow

                <div class="row">
                    <div class="col-6 col-sm-12 col-xl-6">
                        <h3>Specifications</h3>
                    </div>
                    <div class="col-6 col-sm-12 col-xl-6">
                        <h3>Disponibilidad de MyRoom</h3>
                        <small id="a" class="form-text text-muted">Please, minimum 1 day</small>
                    </div>
                </div>-->

                <!--EndRow-->


            </form>

    </div><!--/.container-->
</section><!--/#contact-page-->
