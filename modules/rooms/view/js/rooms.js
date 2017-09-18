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

$(document).ready(function () {
   
    $(this).fill_or_clean(); //siempre que creemos un plugin debemos llamarlo, sino no funcionará
    var email_reg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    var date_reg = /^(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d$/;
    var address_reg = /^[a-z0-9- -.]+$/i;
    var pass_reg = /^[0-9a-zA-Z]{6,32}$/;
    var string_reg = /^[A-Za-z]{2,30}$/;
    var usr_reg = /^[0-9a-zA-Z]{2,20}$/;

    



    $("#SubmitRooms").click(function () {
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

        $("#form_rooms").submit();
        $("#form_rooms").attr("action", "index.php?module=rooms");

    });

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
