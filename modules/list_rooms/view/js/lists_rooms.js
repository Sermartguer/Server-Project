

function load_rooms() {
  $.ajax({
        type: 'GET',
        url: "/a/Server-Project/modules/list_rooms/controller/controller_listrooms.class.php?get_data=true",
        // dataType: 'json',
        async: false
      }).done(function(data) {
        //console.log(data);
        var json = JSON.parse(data);
        pintar_rooms(json);
      })
      .fail(function(xhr) {
      });


}


function list_id(id){

      $.ajax({
        type: 'GET',
        url: "/a/Server-Project/modules/list_rooms/controller/controller_listrooms.class.php?list_id="+id,
        async: false
      }).done(function(data){
        var json = JSON.parse(data);
      console.log(json);

      window.location.href = json.redirect;

    }).fail(function(xhr){

    });
}


$(document).ready(function() {
   load_rooms();
  //click();
  $('.btn').click(function () {
        var id = this.getAttribute('value');
		console.log(id); //25
list_id(id);
console.log("w");


		/*$.get("/a/Server-Project/modules/list_rooms/controller/controller_listrooms.class.php?detail_room="+id , function (data, status) {
      var json = JSON.parse(data);
    //alert("Data: " + data + "\nStatus: " + status);
    console.log(json);
    window.location.href = json.redirect;

  });*/
	});

});
function pintar_rooms(data) {

    var fila = document.createElement("div");
    fila.setAttribute("class","row");
    fila.setAttribute("id","row-cards");
    document.getElementById('tst').appendChild(fila);

    for (var i = 0; i < data.results.length; i++) {
      var arr = data.results[i];

      var col = document.createElement("div");
      col.setAttribute("class","col-sm-6 col-md-4 col-lg-3 col-xl-4");
      var card = document.createElement("div");
      card.setAttribute("class","card");
      card.setAttribute("id","id"+i);


      var image = document.createElement("img");
      image.setAttribute("class", "card-img-top");
      image.setAttribute("src","http://icons.iconarchive.com/icons/paomedia/small-n-flat/512/house-icon.png");
      document.getElementById('row-cards').appendChild(col).appendChild(card).appendChild(image);
      var block = document.createElement("div");
      block.setAttribute("class","card-block");
      block.setAttribute("id","idblock"+i)
      var figura = document.createElement("figure");
      figura.setAttribute("class","profile");
      var profile = document.createElement("img");
      profile.setAttribute("src",arr.avatar);
      profile.setAttribute("class","profile-avatar");
      profile.setAttribute("alt","");
      document.getElementById("id"+i).appendChild(block).appendChild(figura).appendChild(profile);

      var head4 = document.createElement("h4");
      head4.setAttribute("class","card-title mt-3");
      var text = document.createTextNode(arr.sdesc);
      head4.appendChild(text);
      document.getElementById("idblock"+i).appendChild(head4);

      var divdate = document.createElement("div");
      divdate.setAttribute("class","meta");
      var adate = document.createElement("a");
      textoa = document.createTextNode("Friends");
      adate.appendChild(textoa);
      document.getElementById("idblock"+i).appendChild(divdate).appendChild(adate);

      var divdesc = document.createElement("div");
      divdesc.setAttribute("class","card-text");
      var textdesc = document.createTextNode("Tawshif is a web designer living in Bangladesh.");
      divdesc.appendChild(textdesc);
      document.getElementById("idblock"+i).appendChild(divdesc);

      var divfoot = document.createElement("div");
      divfoot.setAttribute("class","card-footer");
      divfoot.setAttribute("id","foot"+i);
      document.getElementById("id"+i).appendChild(divfoot);

      var butt = document.createElement("button");
      butt.setAttribute("class","btn btn-secondary float-right btn-sm");
      butt.setAttribute("value", arr.id);
      var textbutton = document.createTextNode("Show");
      butt.appendChild(textbutton);
      document.getElementById("foot"+i).appendChild(butt);

    }
}
/*function click(){
   buttons = document.getElementsByTagName("button");
        for (var i = 0; i < buttons.length; i++) {
        buttons[i].setAttribute("value",i);
        buttons[i].onclick = function(event){
          var valor = event.target.value;
          //reset(event.target.value);

          $.ajax({
                type: 'GET',
                url: "/a/Server-Project/modules/list_rooms/controller/controller_listrooms.class.php?idProduct=true",
                // dataType: 'json',
                async: false
              }).done(function(data) {
                console.log(data);
                var json = JSON.parse(data);

              })
              .fail(function(xhr) {
              });
        };
      }
}*/
