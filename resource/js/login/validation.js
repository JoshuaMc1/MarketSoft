$(document).ready(function () {
    $("#form").submit(function () { 
        let user = $("#txtUser"), password = $("#txtPassword");
        if(!emptyField(user)){
            alertify.set("notifier","position", "top-center");
            alertify.error("Debe ingresar su usuarios");
            $("label[for='txtUser']").addClass("text-danger");
            $(user).addClass("border-danger");
            return false;
        }else if(!emptyField(password)){
            alertify.set("notifier","position", "top-center");
            alertify.error("Debe ingresar su contraseña");
            $("label[for='txtUser']").removeClass("text-danger");
            $(user).removeClass("border-danger");
            $("label[for='txtPassword']").addClass("text-danger");
            $(password).addClass("border-danger");
            return false;
        }else {
            $("label[for='txtPassword']").removeClass("text-danger");
            $(user).removeClass("border-danger");
            $(password).removeClass("border-danger");
            return true;
        }
    });

    function emptyField(field){
        return $(field).val().length > 1 ? true : false;
    }
});