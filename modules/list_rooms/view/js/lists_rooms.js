$(document).ready(function () {
  //console.log('a');
 document.getElementById('tst').innerHTML="Hola";
   $.get("/a/Server-Project/modules/list_rooms/controller/controller_listrooms.class.php?get_data=true",
     function (response) {
       if (response.rooms === "") {
          document.getElementById('tst').innerHTML="Hola";
     }else{
          document.getElementById('tst').innerHTML="llastima";

     }
   }, "json");
});
