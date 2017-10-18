var limite;

//LOAD ROOMS(select*from rooms limit x)
function load_rooms(limit) {
  if(limit===undefined){
     limit=3;
  }
  console.log(limit);
  var am = amigable_js("index.php?module=listrooms&function=get_data&aux="+limit);
  console.log(am);
  $.ajax({
        type: 'GET',
        url: am,
        // dataType: 'json',
        async: false
      }).done(function(data) {
        console.log(data);
        var json = JSON.parse(data);
        //console.log(data);
        pintar_rooms(json);
        limite = json.limit;
        //console.log(typeof limite);
        limite= parseInt(limite);
        //console.log("limite"+limite);
      })
      .fail(function(xhr) {
      });


}


function list_id(id){
    var am = amigable_js("index.php?module=listrooms&function=list_id&aux="+id);
      $.ajax({
        type: 'GET',
        url: am,
        async: false
      }).done(function(data){
        console.log(am);
        var json = JSON.parse(data);
       console.log(json);
     var ami = amigable_js(json.redirect);
      console.log(ami);
      window.location.href = ami;

    }).fail(function(xhr){

    });
}

//ON-READY
$(document).ready(function() {
   load_rooms();
   click_test();
   scroll();

});

//PRINT-ROOMS
function pintar_rooms(data) {

    var fila = document.createElement("div");
    fila.setAttribute("class","row");
    fila.setAttribute("id","row-cards");
    document.getElementById('tst').appendChild(fila);

    for (var i = 0; i < data.results.length; i++) {
      var arr = data.results[i];

      var col = document.createElement("div");
      col.setAttribute("class","col-sm-6 col-md-4 col-lg-3 col-xl-4 mb-3");
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


//SCROLL FUNCTION
function scroll(){
  $(window).scroll(function () {

    if($(window).scrollTop() + $(window).height()+2 >= $(document).height()){

      clearTimeout($.data(this, 'scrollTimer'));

       $.data(this, 'scrollTimer', setTimeout(function() {
           click_test();
       }, 0));
      //console.log("dentro");  //user scrolled to bottom of the page?
       var myNode = document.getElementById("tst");
       while (myNode.firstChild) {
        myNode.removeChild(myNode.firstChild);
        }
          load_rooms(limite+3);
      }
  });
}


//CLICK FUNCTION(get value)
function click_test(){
  $('.btn').click(function () {
        var id = this.getAttribute('value');
    // console.log(id); //25
    list_id(id);
  });
}
function amigable_js(url) {
    var backurl="";
    url = url.replace("?", "");
    url = url.split("&");

    for (var i=0;i<url.length;i++) {
        var aux = url[i].split("=");
        backurl +=  "/"+aux[1];
    }
    var SITEROOT = "http://localhost/a/Server-Project"
    return SITEROOT + backurl;
}
