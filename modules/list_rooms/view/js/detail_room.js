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
    components=components+"Botiquin";
  if(room[0].pestillo == 1)
      components=components+"Pestillo";
  if(room[0].extintor == 1)
    components=components+"Extintor";
  if (room[0].ficha == 1)
    components=components+"Ficha";


  document.getElementById("components").innerHTML = "Components: "+components;
}
