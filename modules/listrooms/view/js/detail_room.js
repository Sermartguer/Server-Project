function load_detail_room() {
var am = amigable_js("index.php?module=listrooms&function=load_details");
    $.ajax({
      type: 'GET',
      url: am,
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
  document.getElementById("maxguest").innerHTML = room[0].maxguest;
  document.getElementById("numbrooms").innerHTML =room[0].numbrooms;
  document.getElementById("date_start").innerHTML = room[0].date_start+" ";
  document.getElementById("end_date").innerHTML =   " "+room[0].end_date;
  document.getElementById("numbbeds").innerHTML = room[0].numbbeds;
  document.getElementById("numbbaths").innerHTML = room[0].numbbaths;
  document.getElementById("dayprice").innerHTML = "Price per night: "+room[0].dayprice+" $";
  document.getElementById("weeklyprice").innerHTML = "Price per week: "+room[0].weeklyprice+" $";
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

  document.getElementById("country").innerHTML =room[0].country;

  if (room[0].province === "default_province"){
    document.getElementById("province").style.visibility.hidden;
  }else{
    document.getElementById("province").innerHTML = room[0].province;
  }

  if (room[0].city === "default_city"){
    document.getElementById("city").style.visibility.hidden;
  }else{
    document.getElementById("city").innerHTML = room[0].city;
  }

  document.getElementById("name").innerHTML =room[0].name;
  document.getElementById("email").innerHTML = "Email: "+room[0].email;
  document.getElementById("avatar").setAttribute("src","../"+room[0].avatar);


}
function amigable_js(url) {
    var backurl="";
    url = url.replace("?", "");
    url = url.split("&");

    for (var i=0;i<url.length;i++) {
        var aux = url[i].split("=");
        backurl +=  "/"+aux[1];
    }
    var SITEROOT = "https://localhost/a/Server-Project"
    return SITEROOT + backurl;
}
