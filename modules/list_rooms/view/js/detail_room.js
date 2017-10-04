function load_detail_room() {

    $.ajax({
      type: 'GET',
      url: "/a/Server-Project/modules/list_rooms/controller/controller_listrooms.class.php?detail_rooms",
      async: false
    }).done(function(data){
      var json = JSON.parse(data);
    console.log(json);
    print_details_rooms(json);

  }).fail(function(xhr){

  });

}

$(document).ready(function() {
load_detail_room();


});

function print_details_rooms(room) {
  document.getElementById("descripcion").innerHTML = room[0].sdesc;
  document.getElementById("maxguest").innerHTML = "Max Guests: "+room[0].maxguest;
  document.getElementById("numbrooms").innerHTML = "Number of Rooms: "+room[0].numbrooms;
  document.getElementById("numbrooms").innerHTML = "Date Start: "+room[0].date_start;
  document.getElementById("end_date").innerHTML = "Date End: "+room[0].end_date;
  document.getElementById("numbbeds").innerHTML = "Number of beds: "+room[0].numbbeds;
  document.getElementById("numbbaths").innerHTML = "Number of baths: "+room[0].numbbaths;
  document.getElementById("dayprice").innerHTML = "Price for one day: "+room[0].dayprice+" $";
  document.getElementById("weeklyprice").innerHTML = "Price for a week: "+room[0].weeklyprice+" $";
  var components = "";

  if (room[0].botiquin == 1)
    components=components+"Botiquin ";
  if(room[0].pestillo == 1)
      components=components+"Pestillo ";
  if(room[0].extintor == 1)
    components=components+"Extintor ";
  if (room[0].ficha == 1)
    components=components+"Ficha ";

  document.getElementById("components").innerHTML = "Components: "+components;

  var services = "";
  if (room[0].cocina == 1)
    services = services+"Cocina ";
  if (room[0].internet == 1)
    services = services+"Internet ";
  if (room[0].tv == 1)
    services = services+"TV ";
  if(room[0].calefaccion == 1)
    services = services+"Calefaccion ";
  if(room[0].aire == 1)
    services = services+"Aire ";
  if(room[0].mascotas == 1)
    services = services+"Mascotas ";
  if(room[0].basicos == 1)
    services = services+"Basicos ";
  if(room[0].parking == 1)
    services = services+"Parking ";
  if(room[0].rutas == 1)
    services = services+"Rutas ";

  document.getElementById("services").innerHTML = "Services: "+services;

  document.getElementById("country").innerHTML = "Country: "+room[0].country;

  if (room[0].province === "default_province"){
    document.getElementById("province").style.visibility.hidden;
  }else{
    document.getElementById("province").innerHTML = "Province: "+room[0].province;
  }

  if (room[0].city === "default_city"){
    document.getElementById("city").style.visibility.hidden;
  }else{
    document.getElementById("city").innerHTML = "City: "+room[0].city;
  }

  document.getElementById("name").innerHTML = "Username: "+room[0].name;
  document.getElementById("email").innerHTML = "Email: "+room[0].email;
  document.getElementById("avatar").setAttribute("src",room[0].avatar);


}
