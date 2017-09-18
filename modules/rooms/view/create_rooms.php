<script type="text/javascript" src="modules/rooms/view/js/rooms.js"></script>
<section id="contact-page">
    <div class="container mt-5">
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
                            <input type="text" name="sdesc" id="sdesc" placeholder="Sort Description" class="form-control" value="<?php
                                if (!isset($error['sdesc'])) {
                                    echo $_POST ? $_POST['sdesc'] : "";
                                }
                                ?>" required="required">
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
                        <small id="sdesc" class="form-text text-muted">Please, minimum 1 day</small>
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
                            <div id="maxguest"><?php
                                if (isset($error['maxguest'])) {
                                    print ("<BR><span style='color: #ff0000'>" . "* " . $error['maxguest'] . "</span><br/>");
                                }
                            ?></div>
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
                            <div id="numbrooms"><?php
                                if (isset($error['numbrooms'])) {
                                    print ("<BR><span style='color: #ff0000'>" . "* " . $error['numbrooms'] . "</span><br/>");
                                }
                            ?></div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
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
                                        <input type="checkbox" name="components[]" value="Botiquin">
                                    </div>
                                    <div class="col-6 col-sm-3 col-md-4 col-lg-3 col-xl-3">
                                        <label for="">
                                            <strong class="text-uppercase">Latch</strong>
                                        </label>
                                        <input type="checkbox" name="components[]" value="Pestillo en la puerta">
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-6 col-lg-5 col-xl-4">
                                        <label for="">
                                            <strong class="text-uppercase">Extinguisher</strong>
                                        </label>
                                        <input type="checkbox" name="components[]" value="Extintor de incendios">
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-6 col-lg-5 col-xl-4">
                                        <label for="">
                                            <strong class="text-uppercase">Security File</strong>
                                        </label>
                                           <input type="checkbox" name="components[]" value="Ficha de instrucciones de seguridad">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <label for="">
                                            <strong class="text-uppercase" style="display: none">Security File</strong>
                                        </label>
                                           <input type="checkbox" name="components[]" value="Ficha de instrucciones de seguridad" style="display: none" checked>
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
                                            <input type="checkbox" name="services[]" value="Cocina">
                                            <label for=""><i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;&nbsp;<strong class="text-uppercase">Kitchen</strong></label>  
                                        </div>
                                        <div class="col-4 col-sm-4 col-md-5 col-lg-4 col-xl-4">
                                            <input type="checkbox" name="services[]" value="Internet">
                                            <label for=""><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;<strong class="text-uppercase">Internet</strong></label> 
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-4 col-lg-3 col-xl-2">
                                            <input type="checkbox" name="services[]" value="TV">
                                            <label for=""><i class="fa fa-television" aria-hidden="true"></i>&nbsp;&nbsp;<strong class="text-uppercase">TV</strong></label>
                                        </div>  

                                        <div class="col-4 col-sm-4 col-md-5 col-lg-4 col-xl-4">
                                            <input type="checkbox" name="services[]" value="Calefaccion">
                                            <label for=""><i class="fa fa-thermometer-empty" aria-hidden="true"></i>&nbsp;&nbsp;<strong class="text-uppercase">Heating</strong></label>
                                        </div>
                                        <div class="col-5 col-sm-5 col-md-8 col-lg-6 col-xl-5">
                                            <input type="checkbox" name="services[]" value="Aire Acondicionado">
                                            <label for=""><i class="fa fa-snowflake-o" aria-hidden="true"></i>&nbsp;&nbsp;<strong class="text-uppercase">Air conditioner</strong></label>
                                        </div> 

                                        <div class="col-3 col-sm-3 col-md-4 col-lg-3 col-xl-3">
                                                <input type="checkbox" name="services[]" value="Mascotas">
                                                <label for=""><i class="fa fa-paw" aria-hidden="true"></i>&nbsp;&nbsp;<strong class="text-uppercase">Pets</strong></label> 
                                        </div>
                                        
                                        <div class="col-5 col-sm-5 col-md-6 col-lg-5 col-xl-4">
                                            <input type="checkbox" name="services[]" value="Elementos Basicos">
                                            <label for=""><i class="fa fa-wrench" aria-hidden="true"></i>&nbsp;&nbsp;<strong class="text-uppercase">Core items</strong></label> 
                                        </div>

                                        <div class="col-6 col-sm-6 col-md-9 col-lg-7 col-xl-6">
                                            <input type="checkbox" name="services[]" value="FreeAparcamiento">
                                            <label for=""><i class="fa fa-car" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<strong class="text-uppercase">Free on-site parking</strong></label> 
                                        </div>

                                        <div class="col-5 col-sm-5 col-md-8 col-lg-6 col-xl-5">
                                            <input type="checkbox" name="services[]" value="Rutas proximas">
                                            <label for=""><i class="fa fa-bicycle" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<strong class="text-uppercase">Nearby Routes</strong></label> 
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <input type="checkbox" name="services[]" value="Rutas proximas" style="display: none" checked>
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

                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-group">
                                        <label>E-mail *</label>
                                        <input type="email" id="email" name="email" placeholder="email" class="form-control"  value="<?php
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
                                            <select class="form-control" name="country" id="country">
                                                <option value="Select One">Select One</option>
                                                <option value="AFG">Afghanistan</option>
                                                <option value="ALA">Åland Islands</option>
                                                <option value="ALB">Albania</option>
                                                <option value="DZA">Algeria</option>
                                                <option value="ASM">American Samoa</option>
                                                <option value="AND">Andorra</option>
                                                <option value="AGO">Angola</option>
                                                <option value="AIA">Anguilla</option>
                                                <option value="ATA">Antarctica</option>
                                                <option value="ATG">Antigua and Barbuda</option>
                                                <option value="ARG">Argentina</option>
                                                <option value="ARM">Armenia</option>
                                                <option value="ABW">Aruba</option>
                                                <option value="AUS">Australia</option>
                                                <option value="AUT">Austria</option>
                                                <option value="AZE">Azerbaijan</option>
                                                <option value="BHS">Bahamas</option>
                                                <option value="BHR">Bahrain</option>
                                                <option value="BGD">Bangladesh</option>
                                                <option value="BRB">Barbados</option>
                                                <option value="BLR">Belarus</option>
                                                <option value="BEL">Belgium</option>
                                                <option value="BLZ">Belize</option>
                                                <option value="BEN">Benin</option>
                                                <option value="BMU">Bermuda</option>
                                                <option value="BTN">Bhutan</option>
                                                <option value="BOL">Bolivia, Plurinational State of</option>
                                                <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="BIH">Bosnia and Herzegovina</option>
                                                <option value="BWA">Botswana</option>
                                                <option value="BVT">Bouvet Island</option>
                                                <option value="BRA">Brazil</option>
                                                <option value="IOT">British Indian Ocean Territory</option>
                                                <option value="BRN">Brunei Darussalam</option>
                                                <option value="BGR">Bulgaria</option>
                                                <option value="BFA">Burkina Faso</option>
                                                <option value="BDI">Burundi</option>
                                                <option value="KHM">Cambodia</option>
                                                <option value="CMR">Cameroon</option>
                                                <option value="CAN">Canada</option>
                                                <option value="CPV">Cape Verde</option>
                                                <option value="CYM">Cayman Islands</option>
                                                <option value="CAF">Central African Republic</option>
                                                <option value="TCD">Chad</option>
                                                <option value="CHL">Chile</option>
                                                <option value="CHN">China</option>
                                                <option value="CXR">Christmas Island</option>
                                                <option value="CCK">Cocos (Keeling) Islands</option>
                                                <option value="COL">Colombia</option>
                                                <option value="COM">Comoros</option>
                                                <option value="COG">Congo</option>
                                                <option value="COD">Congo, the Democratic Republic of the</option>
                                                <option value="COK">Cook Islands</option>
                                                <option value="CRI">Costa Rica</option>
                                                <option value="CIV">Côte d'Ivoire</option>
                                                <option value="HRV">Croatia</option>
                                                <option value="CUB">Cuba</option>
                                                <option value="CUW">Curaçao</option>
                                                <option value="CYP">Cyprus</option>
                                                <option value="CZE">Czech Republic</option>
                                                <option value="DNK">Denmark</option>
                                                <option value="DJI">Djibouti</option>
                                                <option value="DMA">Dominica</option>
                                                <option value="DOM">Dominican Republic</option>
                                                <option value="ECU">Ecuador</option>
                                                <option value="EGY">Egypt</option>
                                                <option value="SLV">El Salvador</option>
                                                <option value="GNQ">Equatorial Guinea</option>
                                                <option value="ERI">Eritrea</option>
                                                <option value="EST">Estonia</option>
                                                <option value="ETH">Ethiopia</option>
                                                <option value="FLK">Falkland Islands (Malvinas)</option>
                                                <option value="FRO">Faroe Islands</option>
                                                <option value="FJI">Fiji</option>
                                                <option value="FIN">Finland</option>
                                                <option value="FRA">France</option>
                                                <option value="GUF">French Guiana</option>
                                                <option value="PYF">French Polynesia</option>
                                                <option value="ATF">French Southern Territories</option>
                                                <option value="GAB">Gabon</option>
                                                <option value="GMB">Gambia</option>
                                                <option value="GEO">Georgia</option>
                                                <option value="DEU">Germany</option>
                                                <option value="GHA">Ghana</option>
                                                <option value="GIB">Gibraltar</option>
                                                <option value="GRC">Greece</option>
                                                <option value="GRL">Greenland</option>
                                                <option value="GRD">Grenada</option>
                                                <option value="GLP">Guadeloupe</option>
                                                <option value="GUM">Guam</option>
                                                <option value="GTM">Guatemala</option>
                                                <option value="GGY">Guernsey</option>
                                                <option value="GIN">Guinea</option>
                                                <option value="GNB">Guinea-Bissau</option>
                                                <option value="GUY">Guyana</option>
                                                <option value="HTI">Haiti</option>
                                                <option value="HMD">Heard Island and McDonald Islands</option>
                                                <option value="VAT">Holy See (Vatican City State)</option>
                                                <option value="HND">Honduras</option>
                                                <option value="HKG">Hong Kong</option>
                                                <option value="HUN">Hungary</option>
                                                <option value="ISL">Iceland</option>
                                                <option value="IND">India</option>
                                                <option value="IDN">Indonesia</option>
                                                <option value="IRN">Iran, Islamic Republic of</option>
                                                <option value="IRQ">Iraq</option>
                                                <option value="IRL">Ireland</option>
                                                <option value="IMN">Isle of Man</option>
                                                <option value="ISR">Israel</option>
                                                <option value="ITA">Italy</option>
                                                <option value="JAM">Jamaica</option>
                                                <option value="JPN">Japan</option>
                                                <option value="JEY">Jersey</option>
                                                <option value="JOR">Jordan</option>
                                                <option value="KAZ">Kazakhstan</option>
                                                <option value="KEN">Kenya</option>
                                                <option value="KIR">Kiribati</option>
                                                <option value="PRK">Korea, Democratic People's Republic of</option>
                                                <option value="KOR">Korea, Republic of</option>
                                                <option value="KWT">Kuwait</option>
                                                <option value="KGZ">Kyrgyzstan</option>
                                                <option value="LAO">Lao People's Democratic Republic</option>
                                                <option value="LVA">Latvia</option>
                                                <option value="LBN">Lebanon</option>
                                                <option value="LSO">Lesotho</option>
                                                <option value="LBR">Liberia</option>
                                                <option value="LBY">Libya</option>
                                                <option value="LIE">Liechtenstein</option>
                                                <option value="LTU">Lithuania</option>
                                                <option value="LUX">Luxembourg</option>
                                                <option value="MAC">Macao</option>
                                                <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                                                <option value="MDG">Madagascar</option>
                                                <option value="MWI">Malawi</option>
                                                <option value="MYS">Malaysia</option>
                                                <option value="MDV">Maldives</option>
                                                <option value="MLI">Mali</option>
                                                <option value="MLT">Malta</option>
                                                <option value="MHL">Marshall Islands</option>
                                                <option value="MTQ">Martinique</option>
                                                <option value="MRT">Mauritania</option>
                                                <option value="MUS">Mauritius</option>
                                                <option value="MYT">Mayotte</option>
                                                <option value="MEX">Mexico</option>
                                                <option value="FSM">Micronesia, Federated States of</option>
                                                <option value="MDA">Moldova, Republic of</option>
                                                <option value="MCO">Monaco</option>
                                                <option value="MNG">Mongolia</option>
                                                <option value="MNE">Montenegro</option>
                                                <option value="MSR">Montserrat</option>
                                                <option value="MAR">Morocco</option>
                                                <option value="MOZ">Mozambique</option>
                                                <option value="MMR">Myanmar</option>
                                                <option value="NAM">Namibia</option>
                                                <option value="NRU">Nauru</option>
                                                <option value="NPL">Nepal</option>
                                                <option value="NLD">Netherlands</option>
                                                <option value="NCL">New Caledonia</option>
                                                <option value="NZL">New Zealand</option>
                                                <option value="NIC">Nicaragua</option>
                                                <option value="NER">Niger</option>
                                                <option value="NGA">Nigeria</option>
                                                <option value="NIU">Niue</option>
                                                <option value="NFK">Norfolk Island</option>
                                                <option value="MNP">Northern Mariana Islands</option>
                                                <option value="NOR">Norway</option>
                                                <option value="OMN">Oman</option>
                                                <option value="PAK">Pakistan</option>
                                                <option value="PLW">Palau</option>
                                                <option value="PSE">Palestinian Territory, Occupied</option>
                                                <option value="PAN">Panama</option>
                                                <option value="PNG">Papua New Guinea</option>
                                                <option value="PRY">Paraguay</option>
                                                <option value="PER">Peru</option>
                                                <option value="PHL">Philippines</option>
                                                <option value="PCN">Pitcairn</option>
                                                <option value="POL">Poland</option>
                                                <option value="PRT">Portugal</option>
                                                <option value="PRI">Puerto Rico</option>
                                                <option value="QAT">Qatar</option>
                                                <option value="REU">Réunion</option>
                                                <option value="ROU">Romania</option>
                                                <option value="RUS">Russian Federation</option>
                                                <option value="RWA">Rwanda</option>
                                                <option value="BLM">Saint Barthélemy</option>
                                                <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option value="KNA">Saint Kitts and Nevis</option>
                                                <option value="LCA">Saint Lucia</option>
                                                <option value="MAF">Saint Martin (French part)</option>
                                                <option value="SPM">Saint Pierre and Miquelon</option>
                                                <option value="VCT">Saint Vincent and the Grenadines</option>
                                                <option value="WSM">Samoa</option>
                                                <option value="SMR">San Marino</option>
                                                <option value="STP">Sao Tome and Principe</option>
                                                <option value="SAU">Saudi Arabia</option>
                                                <option value="SEN">Senegal</option>
                                                <option value="SRB">Serbia</option>
                                                <option value="SYC">Seychelles</option>
                                                <option value="SLE">Sierra Leone</option>
                                                <option value="SGP">Singapore</option>
                                                <option value="SXM">Sint Maarten (Dutch part)</option>
                                                <option value="SVK">Slovakia</option>
                                                <option value="SVN">Slovenia</option>
                                                <option value="SLB">Solomon Islands</option>
                                                <option value="SOM">Somalia</option>
                                                <option value="ZAF">South Africa</option>
                                                <option value="SGS">South Georgia and the South Sandwich Islands</option>
                                                <option value="SSD">South Sudan</option>
                                                <option value="ESP">Spain</option>
                                                <option value="LKA">Sri Lanka</option>
                                                <option value="SDN">Sudan</option>
                                                <option value="SUR">Suriname</option>
                                                <option value="SJM">Svalbard and Jan Mayen</option>
                                                <option value="SWZ">Swaziland</option>
                                                <option value="SWE">Sweden</option>
                                                <option value="CHE">Switzerland</option>
                                                <option value="SYR">Syrian Arab Republic</option>
                                                <option value="TWN">Taiwan, Province of China</option>
                                                <option value="TJK">Tajikistan</option>
                                                <option value="TZA">Tanzania, United Republic of</option>
                                                <option value="THA">Thailand</option>
                                                <option value="TLS">Timor-Leste</option>
                                                <option value="TGO">Togo</option>
                                                <option value="TKL">Tokelau</option>
                                                <option value="TON">Tonga</option>
                                                <option value="TTO">Trinidad and Tobago</option>
                                                <option value="TUN">Tunisia</option>
                                                <option value="TUR">Turkey</option>
                                                <option value="TKM">Turkmenistan</option>
                                                <option value="TCA">Turks and Caicos Islands</option>
                                                <option value="TUV">Tuvalu</option>
                                                <option value="UGA">Uganda</option>
                                                <option value="UKR">Ukraine</option>
                                                <option value="ARE">United Arab Emirates</option>
                                                <option value="GBR">United Kingdom</option>
                                                <option value="USA">United States</option>
                                                <option value="UMI">United States Minor Outlying Islands</option>
                                                <option value="URY">Uruguay</option>
                                                <option value="UZB">Uzbekistan</option>
                                                <option value="VUT">Vanuatu</option>
                                                <option value="VEN">Venezuela, Bolivarian Republic of</option>
                                                <option value="VNM">Viet Nam</option>
                                                <option value="VGB">Virgin Islands, British</option>
                                                <option value="VIR">Virgin Islands, U.S.</option>
                                                <option value="WLF">Wallis and Futuna</option>
                                                <option value="ESH">Western Sahara</option>
                                                <option value="YEM">Yemen</option>
                                                <option value="ZMB">Zambia</option>
                                                <option value="ZWE">Zimbabwe</option>
                                            </select>
                                            <div id="country"><?php
                                                if (isset($error['country'])) {
                                                    print ("<BR><span style='color: #ff0000'>" . "* " . $error['country'] . "</span><br/>");
                                                }
                                                ?> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                


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