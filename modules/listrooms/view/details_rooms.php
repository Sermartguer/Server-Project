<script type="text/javascript" src="<?php echo listrooms_JS_PATH ?>detail_room.js" ></script>
<section id="contact-page">
    <div class="containera mt-5">
        <div class="row">
          <div class="col-12 imga" >

          </div>

        </div>
        <div class="row">
          <div class="col-12">
            <div class="row justify-content-md-center">
              <div class="col-5 mt-2 ml-1 mr-1 mb-2" style="background-color:#fff;">
                <div class="row">
                  <div class="col-8">
                    <div class="row pl-4 pt-4">
                      <div class="descripcion" id="descripcion"></div>
                    </div>
                    <div class="row pl-2">
                      <div class="col-12">
                        <div class="country" id="country" style="display:inline-block;"></div>,
                        <div class="province" id="province"  style="display:inline-block;"></div>,
                        <div class="city" id="city"  style="display:inline-block;"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">

                    <div class="profile-header-container">
                    <div class="profile-header-img">
                            <img class="img-circle" src="" id="avatar" />

                            <div class="rank-label-container">
                                <span class="label label-default rank-label" id="name">100 puntos</span>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-5 mt-2 ml-1 mr-1 mb-2 " style="background-color:#fff;">
                <div class="row prices">
                    <div class="dayprice" id="dayprice"></div>
                </div>
                <div class="row prices">
                  <div class="weeklyprice" id="weeklyprice"></div>
                </div>
                <div class="row mt-2">
                    <div class="row" style="margin: 0 auto;">
                      Availability:  &nbsp

                      <div class="date_start" id="date_start" ></div>&nbsp to &nbsp
                      <div class="end_date" id="end_date" ></div>
                    </div>
                </div>
              </div>
            </div>
            <div class="row m-1 justify-content-md-center">
                <div class="col-9" style="background-color:#fff;">
                <div class="row pt-4 pl-5 pr-5 pb-4 justify-content-md-center">
                  <i class="fa fa-users" aria-hidden="true" style="margin-top:4px; margin-right:5px;"></i><div class="maxguest" id="maxguest"  style="margin-right:5px;"></div>Guests   &nbsp &nbsp
                  <i class="fa fa-home" aria-hidden="true" style="margin-top:4px; margin-right:5px;"></i><div class="numbrooms" id="numbrooms" style="margin-right:5px;"></div>Rooms &nbsp &nbsp
                  <i class="fa fa-bed" aria-hidden="true" style="margin-top:4px; margin-right:5px;"></i><div class="numbbeds" id="numbbeds" style="margin-right:5px;"></div>Beds &nbsp &nbsp
                  <i class="fa fa-bath" aria-hidden="true" style="margin-top:4px; margin-right:5px;"></i><div class="numbbaths" id="numbbaths" style="margin-right:5px;"></div>Baths &nbsp &nbsp
                </div>
              </div>
            </div>
          </div>
         <!--<div class="col-8">
              <div class="row">
                <div class="col-12">
                  <div class="descripcion" id="descripcion"></div>
                  <div class="profile-header-container">
                  <div class="profile-header-img">
                          <img class="img-circle" src="" id="avatar" />

                          <div class="rank-label-container">
                              <span class="label label-default rank-label" id="name">100 puntos</span>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="country" id="country"></div>
                  <div class="province" id="province"></div>
                  <div class="city" id="city"></div>
                </div>
              </div>
          </div>-->
        </div>
        <div class="descripcion" id="descripcion"></div>
        <div class="maxguest" id="maxguest"></div>
        <div class="numbrooms" id="numbrooms"></div>

        <div class="numbbeds" id="numbbeds"></div>
        <div class="numbbaths" id="numbbaths"></div>
        <div class="dayprice" id="dayprice"></div>
        <div class="weeklyprice" id="weeklyprice"></div>
        <div class="components" id="components"></div>
        <div class="services" id="services"></div>
        <div class="country" id="country"></div>
        <div class="province" id="province"></div>
        <div class="city" id="city"></div>
        <div class="name" id="name"></div>
        <div class="email" id="email"></div>
        <img class="avatar" id="avatar"></img>
        <div class="profile-header-container">
    		<div class="profile-header-img">


    </div><!--/.container-->
</section><!--/#contact-page-->
