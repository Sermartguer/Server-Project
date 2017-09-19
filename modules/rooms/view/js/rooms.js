//Crear un plugin
jQuery.fn.fill_or_clean = function () {
    this.each(function () {
        //Short Description
        if ($("#sdesc").attr("value") == "") {
            $("#sdesc").attr("value", "Introduce short description");
            $("#sdesc").focus(function () {
                if ($("#sdesc").attr("value") == "Introduce short description") {
                    $("#sdesc").attr("value", "");
                }
            });
        }
        $("#sdesc").blur(function () { //Onblur se activa cuando el usuario retira el foco
            if ($("#sdesc").attr("value") == "") {
                $("#sdesc").attr("value", "Introduce short description");
            }
        });
        //Date Start
        if ($("#date_start").attr("value") == "") {
            $("#date_start").attr("value", "Introduce date of birth");
            $("#date_start").focus(function () {
                if ($("#date_start").attr("value") == "Introduce date of birth") {
                    $("#date_start").attr("value", "");
                }
            });
        }
        $("#date_start").blur(function () {
            if ($("#date_start").attr("value") == "") {
                $("#date_start").attr("value", "Introduce date of birth");
            }
        });

        //Date End
        if ($("#end_date").attr("value") == "") {
            $("#end_date").attr("value", "Introduce date of title");
            $("#end_date").focus(function () {
                if ($("#end_date").attr("value") == "Introduce date of title") {
                    $("#end_date").attr("value", "");
                }
            });
        }
        $("#end_date").blur(function () {
            if ($("#end_date").attr("value") == "") {
                $("#end_date").attr("value", "Introduce date of title");
            }
        });

        //Name

        if ($("#name").attr("value") == "") {
            $("#name").attr("value", "Introduce last name");
            $("#name").focus(function () {
                if ($("#name").attr("value") == "Introduce last name") {
                    $("#name").attr("value", "");
                }
            });
        }
        $("#name").blur(function () {
            if ($("#name").attr("value") == "") {
                $("#name").attr("value", "Introduce last name");
            }
        });
       
       //Email
        if ($("#email").attr("value") == "") {
            $("#email").attr("value", "Introduce email");
            $("#email").focus(function () {
                if ($("#email").attr("value") == "Introduce email") {
                    $("#email").attr("value", "");
                }
            });
        }
        $("#email").blur(function () {
            if ($("#email").attr("value") == "") {
                $("#email").attr("value", "Introduce email");
            }
        });
            
    });//each
    return this;
};//function

Dropzone.autoDiscover = false;
$(document).ready(function () {

    $('#SubmitRooms').click(function () {
        validate_rooms();
    });
//Control de seguridad para evitar que al volver atrás de la pantalla results a create, no nos imprima los datos
    $.get("/Server-Project/modules/rooms/controller/controller_rooms.class.php?load_data=true",
            function (response) {
                //alert(response.user);
                if (response.user === "") {
                    $("#sdesc").val('');
                    $("#date_start").val('');
                    $("#end_date").val('');
                    $("#name").val('');
                    $("#email").val('');
                    $("#maxguest").val('Select One');
                    $("#numbrooms").val('Select One');
                    $("#numbbeds").val('Select One');
                    $("#numbbaths").val('Select One');
                    $("#dayprice").val('Select One');
                    $("#weeklyprice").val('Select One');
                    $("#country").val('Select One');
                    var inputcompo = document.getElementsByClassName('msjcompo');
                    var inputservices = document.getElementsByClassName('msjservices');
                    for (var i = 0; i < inputcompo.length; i++) {
                        if (inputcompo[i].checked) {
                            inputcompo[i].checked = false;
                        }
                    }
                    for (var i = 0; i < inputservices.length; i++) {
                        if (inputservices[i].checked) {
                            inputservices[i].checked = false;
                        }
                    }
                    //siempre que creemos un plugin debemos llamarlo, sino no funcionará
                $(this).fill_or_clean();
                } else {
                    $("#name").val( response.user.name);
                    $("#last_name").val( response.user.last_name);
                    $("#birth_date").val( response.user.birth_date);
                    $("#title_date").val( response.user.title_date);
                    $("#address").val( response.user.address);
                    $("#user").val( response.user.user);
                    $("#pass").val( response.user.pass);
                    $("#conf_pass").val( response.user.conf_pass);
                    $("#email").val( response.user.email);
                    $("#conf_email").val( response.user.conf_email);
                    $("#en_lvl").val( response.user.en_lvl);
                    var interests = response.user.interests;
                    var inputElements = document.getElementsByClassName('messageCheckbox');
                    for (var i = 0; i < interests.length; i++) {
                        for (var j = 0; j < inputElements.length; j++) {
                            if(interests[i] ===inputElements[j] )
                                inputElements[j].checked = true;
                        }
                    }
                }
            }, "json");

                //Dropzone function //////////////////////////////////
    $("#dropzone").dropzone({
        url: "/Server-Project/modules/rooms/controller/controller_rooms.class.php?upload=true",
        addRemoveLinks: true,
        maxFileSize: 1000,
        dictResponseError: "Ha ocurrido un error en el server",
        acceptedFiles: 'image/*,.jpeg,.jpg,.png,.gif,.JPEG,.JPG,.PNG,.GIF,.rar,application/pdf,.psd',
        init: function () {
            this.on("success", function (file, response) {
                //alert(response);
                $("#progress").show();
                $("#bar").width('100%');
                $("#percent").html('100%');
                $('.msg').text('').removeClass('msg_error');
                $('.msg').text('Success Upload image!!').addClass('msg_ok').animate({'right': '300px'}, 300);
            });
        },
        complete: function (file) {
            //if(file.status == "success"){
            //alert("El archivo se ha subido correctamente: " + file.name);
            //}
        },
        error: function (file) {
            //alert("Error subiendo el archivo " + file.name);
        },
        removedfile: function (file, serverFileName) {
            var name = file.name;
            $.ajax({
                type: "POST",
                url: "/Server-Project/modules/rooms/controller/controller_rooms.class.php?delete=true",
                data: "filename=" + name,
                success: function (data) {
                    $("#progress").hide();
                    $('.msg').text('').removeClass('msg_ok');
                    $('.msg').text('').removeClass('msg_error');
                    $("#e_avatar").html("");

                    var json = JSON.parse(data);
                    if (json.res === true) {
                        var element;
                        if ((element = file.previewElement) != null) {
                            element.parentNode.removeChild(file.previewElement);
                            //alert("Imagen eliminada: " + name);
                        } else {
                            false;
                        }
                    } else { //json.res == false, elimino la imagen también
                        var element;
                        if ((element = file.previewElement) != null) {
                            element.parentNode.removeChild(file.previewElement);
                        } else {
                            false;
                        }
                    }
                }
            });
        }
    });


   

    var email_reg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    var date_reg = /^(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d$/;
    var address_reg = /^[a-z0-9- -.]+$/i;
    var pass_reg = /^[0-9a-zA-Z]{6,32}$/;
    var string_reg = /^[A-Za-z]{2,30}$/;
    var usr_reg = /^[0-9a-zA-Z]{2,20}$/;

    
    //realizamos funciones para que sea más práctico nuestro formulario
        $("#sdesc, #name").keyup(function () {
            if ($(this).val() != "" && string_reg.test($(this).val())) {
                $(".error").fadeOut();
                return false;
            }
        });

        $("#end_date, #date_start").keyup(function () {
            if ($(this).val() != "" && date_reg.test($(this).val())) {
                $(".error").fadeOut();
                return false;
            }
        });



        $("#email").keyup(function () {
            if ($(this).val() != "" && email_reg.test($(this).val())) {
                $(".error").fadeOut();
                return false;
            }
        });
    });

function validate_rooms(){
    var result = true;

    var sdesc = document.getElementById('sdesc').value;
    var maxguest = document.getElementById('maxguest').value;
    var numbrooms = document.getElementById('numbrooms').value;
    var date_start = document.getElementById('date_start').value;
    var numbbeds = document.getElementById('numbbeds').value;
    var numbbaths = document.getElementById('numbbaths').value;
    var end_date = document.getElementById('end_date').value;
    var dayprice = document.getElementById('dayprice').value;
    var weeklyprice = document.getElementById('weeklyprice').value;
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var country = document.getElementById('country').value;

    var components = [];
    var inputcompo = document.getElementsByClassName('msjcompo');
    var j = 0;
    for (var i = 0; i < inputcompo.length; i++) {
        if (inputcompo[i].checked) {
            components[j] = inputcompo[i].value;
            j++;
        }
    }
    var services = [];
    var inputservices = document.getElementsByClassName('msjservices');
    var j = 0;
    for (var i = 0; i < inputservices.length; i++) {
        if (inputservices[i].checked) {
            services[j] = inputservices[i].value;
            j++;
        }
    }
    var email_reg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    var date_reg = /^(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d$/;
    var address_reg = /^[a-z0-9- -.]+$/i;
    var string_reg = /^[A-Za-z]{2,30}$/;
    var usr_reg = /^[0-9a-zA-Z]{2,20}$/;



    $(".error").remove();
        //Short Description
        if ($("#sdesc").val() == "" || $("#sdesc").val() == "Introduce short description") {
            $("#sdesc").focus().after("<span class='error' style='color: #ff0000'>Introduce a short description, please</span>");
            return false;
        } else if (!string_reg.test($("#sdesc").val())) {
            $("#sdesc").focus().after("<span class='error' style='color: #ff0000'>Name must be 2 to 30 letters</span>");
            return false;
        }
        //Date Start
        else if ($("#date_start").val() == "" || $("#date_start").val() == "Introduce date of birth") {
            $("#date_start").focus().after("<span class='error' style='color: #ff0000'>Introduce date of birth</span>");
            return false;
        } else if (!date_reg.test($("#date_start").val())) {
            $("#date_start").focus().after("<span class='error' style='color: #ff0000'>error format date (mm/dd/yyyy)</span>");
            return false;
        }

        //Date End
        else if ($("#end_date").val() == "" || $("#end_date").val() == "Introduce date of title") {
            $("#end_date").focus().after("<span class='error' style='color: #ff0000'>Introduce date of title</span>");
            return false;
        } else if (!date_reg.test($("#end_date").val())) {
            $("#end_date").focus().after("<span class='error' style='color: #ff0000'>error format date (mm/dd/yyyy)</span>");
            return false;
        }

        //Name
        else if ($("#name").val() == "" || $("#name").val() == "Introduce last name") {
            $("#name").focus().after("<span class='error' style='color: #ff0000'>Introduce last name</span>");
            return false;
        } else if (!string_reg.test($("#name").val())) {
            $("#name").focus().after("<span class='error' style='color: #ff0000'>Last name must be 2 to 30 letters</span>");
            return false;
        }
        
        //Email
        if ($("#email").val() == "" || $("#email").val() == "Introduce email") {
            $("#email").focus().after("<span class='error' style='color: #ff0000'>Introduce email</span>");
            return false;
        } else if (!email_reg.test($("#email").val())) {
            $("#email").focus().after("<span class='error' style='color: #ff0000'>Error format email (example@example.com).</span>");
            return false;
        }





    //Si ha ido todo bien, se envian los datos al servidor
    if (result) {
        var data = {"sdesc": sdesc, "maxguest": maxguest, "numbrooms": numbrooms, "date_start": date_start, "numbbeds": numbbeds, "numbbaths": numbbaths, "end_date": end_date, "dayprice": dayprice, "weeklyprice": weeklyprice,
            "name": name, "email": email, "country": country, "components": components, "services": services };
            
        var data_users_JSON = JSON.stringify(data);
        console.log(data_users_JSON);


        $.post('/Server-Project/modules/rooms/controller/controller_rooms.class.php', {"alta_rooms_json": data_users_JSON},

        function (response) {
            if (response.success) {
                window.location.href = response.redirect;
            }
            //alert(response);  //para debuguear
            //}); //para debuguear
        //}, "json").fail(function (xhr) {
           // alert(response);
        //});
        }, "json").fail(function(xhr, status, error) {
            console.log(xhr.responseText);
            console.log(xhr.responseJSON);
            
            if (xhr.responseJSON.error.sdesc){
                $("#sdesc").focus().after("<span  class='error1'>" + xhr.responseJSON.error.sdesc + "</span>");
            }

            if (xhr.responseJSON.error.maxguest){
                $("#maxguest").focus().after("<span  class='error1'>" + xhr.responseJSON.error.maxguest + "</span>");
            }

            if (xhr.responseJSON.error.numbrooms){
                $("#numbrooms").focus().after("<span  class='error1'>" + xhr.responseJSON.error.numbrooms + "</span>");
            }

            if (xhr.responseJSON.error.date_start){
                $("#date_start").focus().after("<span  class='error1'>" + xhr.responseJSON.error.date_start + "</span>");
            }

            if (xhr.responseJSON.error.numbbeds){
                $("#numbbeds").focus().after("<span  class='error1'>" + xhr.responseJSON.error.numbbeds + "</span>");
            }

            if (xhr.responseJSON.error.numbbaths){
                $("#numbbaths").focus().after("<span  class='error1'>" + xhr.responseJSON.error.numbbaths + "</span>");
            }

            if (xhr.responseJSON.error.end_date){
                $("#end_date").focus().after("<span  class='error1'>" + xhr.responseJSON.error.end_date + "</span>");
            }

            if (xhr.responseJSON.error.dayprice){
                $("#dayprice").focus().after("<span  class='error1'>" + xhr.responseJSON.error.dayprice + "</span>");
            }

            if (xhr.responseJSON.error.weeklyprice){
                $("#weeklyprice").focus().after("<span  class='error1'>" + xhr.responseJSON.error.weeklyprice + "</span>");
            }

            if (xhr.responseJSON.error.components){
                $("#components").focus().after("<span class='error1'>" + xhr.responseJSON.error.components + "</span>");
            }

            if (xhr.responseJSON.error.services){
                $("#services").focus().after("<span  class='error1'>" + xhr.responseJSON.error.services + "</span>");
            }

            if (xhr.responseJSON.error.name){
                $("#name").focus().after("<span  class='error1'>" + xhr.responseJSON.error.name + "</span>");
            }

            if (xhr.responseJSON.error.email){
                $("#email").focus().after("<span  class='error1'>" + xhr.responseJSON.error.email + "</span>");
            }

            if (xhr.responseJSON.error.country){
                $("#country").focus().after("<span  class='error1'>" + xhr.responseJSON.error.country + "</span>");
            }

            if (xhr.responseJSON.error_avatar){
                $("#dropzone").focus().after("<span  class='error1'>" + xhr.responseJSON.error_avatar + "</span>");
            }

            
        });
    }
    


}








//Despres de xhr.responseJSON.error_avatar
/*if (!xhr.responseJSON.success1) {
                /*if (xhr.responseJSON.img_avatar !== "/media/default-avatar.png") {
                    //$("#progress").show();
                    //$("#bar").width('100%');
                    //$("#percent").html('100%');
                    //$('.msg').text('').removeClass('msg_error');
                    //$('.msg').text('Success Upload image!!').addClass('msg_ok').animate({ 'right' : '300px' }, 300);
                }
                 $("#progress").hide();
                $('.msg').text('').removeClass('msg_ok');
                $('.msg').text('Error Upload image!!').addClass('msg_error').animate({'right': '300px'}, 300);
            }*/


        
        /*$("#form_rooms").submit();
        $("#form_rooms").attr("action", "index.php?module=rooms");*/

  

    
