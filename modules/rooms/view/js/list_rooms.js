function load_users() {
    var jqxhr = $.get("modules/rooms/controller/controller_rooms.class.php?load=true", function (data) {
        var json = JSON.parse(data);
        console.log(json);
        pintar_rooms(json);
        //alert( "success" );
    }).done(function () {
        //alert( "second success" );
    }).fail(function () {
        //alert( "error" );
    }).always(function () {
        //alert( "finished" );
    });
    jqxhr.always(function () {
        //alert( "second finished" );
    });
}

$(document).ready(function () {
    load_users();
});

function pintar_rooms(data) {
    //alert(data.user.avatar);
    var content = document.getElementById("content");
    var div_user = document.createElement("div");
    var parrafo = document.createElement("p");

    var msje = document.createElement("div");
    msje.innerHTML = "msje = ";
    msje.innerHTML += data.msje;

    var sdesc = document.createElement("div");
    sdesc.innerHTML = "sdesc = ";
    sdesc.innerHTML += data.rooms.sdesc;

    var maxguest = document.createElement("div");
    maxguest.innerHTML = "maxguest = ";
    maxguest.innerHTML += data.rooms.maxguest;

    var date_start = document.createElement("div");
    date_start.innerHTML = "date_birthday = ";
    date_start.innerHTML += data.rooms.date_start;

    var end_date = document.createElement("div");
    end_date.innerHTML = "end_date = ";
    end_date.innerHTML += data.rooms.end_date;

    var numbrooms = document.createElement("div");
    numbrooms.innerHTML = "numbrooms = ";
    numbrooms.innerHTML += data.rooms.numbrooms;

    var numbbeds = document.createElement("div");
    numbbeds.innerHTML = "numbbeds = ";
    numbbeds.innerHTML += data.rooms.numbbeds;

    var numbbaths = document.createElement("div");
    numbbaths.innerHTML = "numbbaths = ";
    numbbaths.innerHTML += data.rooms.numbbaths;

    var dayprice = document.createElement("div");
    dayprice.innerHTML = "dayprice = ";
    dayprice.innerHTML += data.rooms.dayprice;

    var weeklyprice = document.createElement("div");
    weeklyprice.innerHTML = "weeklyprice = ";
    weeklyprice.innerHTML += data.rooms.weeklyprice;

    var name = document.createElement("div");
    name.innerHTML = "name = ";
    name.innerHTML += data.rooms.name;

    var email = document.createElement("div");
    email.innerHTML = "email = ";
    email.innerHTML += data.rooms.email;

    var country = document.createElement("div");
  country.innerHTML = "country = ";
  country.innerHTML += data.rooms.country;

  var province = document.createElement("div");
  province.innerHTML = "province = ";
  province.innerHTML += data.rooms.province;

  var city = document.createElement("div");
  city.innerHTML = "city = ";
  city.innerHTML += data.rooms.city;

    var components = document.createElement("div");
    components.innerHTML = "interests = ";
    for(var i =0;i < data.rooms.components.length;i++){
    components.innerHTML += " - "+data.rooms.components[i];
    }

    var services = document.createElement("div");
    services.innerHTML = "services = ";
    for(var i =0;i < data.rooms.services.length;i++){
    services.innerHTML += " - "+data.rooms.services[i];
    }

    //arreglar ruta IMATGE!!!!!

    var cad = data.rooms.avatar;
    //console.log(cad);
    //var cad = cad.toLowerCase();
    var img = document.createElement("div");
    var html = '<img src="' + cad + '" height="75" width="75"> ';
    img.innerHTML = html;
    //alert(html);

    div_user.appendChild(parrafo);
    parrafo.appendChild(msje);
    parrafo.appendChild(sdesc);
    parrafo.appendChild(maxguest);
    parrafo.appendChild(date_start);
    parrafo.appendChild(end_date);
    parrafo.appendChild(numbrooms);
    parrafo.appendChild(numbbeds);
    parrafo.appendChild(numbbaths);
    parrafo.appendChild(dayprice);
    parrafo.appendChild(weeklyprice);
    parrafo.appendChild(name);
    parrafo.appendChild(email);
    parrafo.appendChild(country);
    parrafo.appendChild(province);
    parrafo.appendChild(city);

    parrafo.appendChild(components);
    parrafo.appendChild(services);

    content.appendChild(div_user);
    content.appendChild(img);
}
