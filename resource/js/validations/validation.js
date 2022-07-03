$(document).ready(function () {
    var path = "../", phones = [{ "mask": "####-####" }], maskdni = [{ "mask": "####-####-#####" }],
        usuario = $("#txtUsuario"), pNombre = $("#txtPrimerNombre"), pApellido = $("#txtPrimerApellido"),
        dni = $("#txtDNI"),correo = $("#txtCorreo"), genero = $("#slcSexo"), clave = $("#txtPassword");

    let tabla = $('#tableAdminUser').DataTable({
        "destroy": true,
        "ajax": {
            "url": "php/users/tablaUsuarios.php",
            "dataSrc": ''
        },
        "columns": [
            { 'data': 'idUsuario' },
            { 'data': 'usuario' },
            { 'data': 'dni' },
            { 'data': 'primerNombre' },
            { 'data': 'segundoNombre' },
            { 'data': 'primerApellido' },
            { 'data': 'segundoApellido' },
            { 'data': 'telefono' },
            { 'data': 'direccion' },
            { 'data': 'correo' },
            { 'data': 'genero' },
            { 'defaultContent': '<div class="btn-group" role="group"><button type="button" class="btn btn-warning" id="btnEditar"><i class="fas fa-edit"></i></button><button type="button" class="btn btn-danger" id="btnEliminar" data-bs-toggle="modal" data-bs-target="#modal1"><i class="fa fa-trash"></i></button></div>' }
        ],
        language: {
            "url": "../resource/spanish.json"
        }
    });

    let tablaPermisos = $("#tablePermissions").DataTable({
        "destroy": true,
        "ajax": {
            "url": "php/users/tablaPermisos.php",
            "dataSrc": ''
        },
        "columns": [
            { 'data': 'usuario'},
            { 'data': 'permiso_1'},
            { 'data': 'permiso_2'},
            { 'data': 'permiso_3'},
            { 'data': 'permiso_4'},
            { 'data': 'permiso_5'},
            { 'defaultContent': '<div class="btn-group" role="group"><button type="button" class="btn btn-warning" id="btnEditarPermiso"><i class="fas fa-edit"></i></button>'}
        ],
        language: {
            "url": "../resource/spanish.json"
        }
    });

    $("#tablePermissions tbody").on('click', 'button#btnEditarPermiso', function () {
        var data = tablaPermisos.row($(this).parents("tr")).data();
        asignarValores(data);

        function asignarValores(data){
            $("#formPermisos #txtId").val(data['idUsuario']);
            $("#formPermisos #txtUsuario").val(data['usuario']);
            $("#formPermisos #permiso1").prop('checked', parseInt(data['p_inventario']));
            $("#formPermisos #permiso2").prop('checked', parseInt(data['p_facturacion']));
            $("#formPermisos #permiso3").prop('checked', parseInt(data['p_compras']));
            $("#formPermisos #permiso4").prop('checked', parseInt(data['p_usuarios']));
            $("#formPermisos #permiso5").prop('checked', parseInt(data['p_reportes']));
        }
    });

    $('#tableAdminUser tbody').on('click', 'button#btnEditar', function () {
        var data = tabla.row($(this).parents("tr")).data();
        asignarValores(data);

        function asignarValores(data) {
            $("#formAdminUser #txtId").val(data['idUsuario']);
            $("#txtDNI").val(data['dni']);
            $("#txtPrimerNombre").val(data['primerNombre']);
            $("#txtSegundoNombre").val(data['segundoNombre']);
            $("#txtPrimerApellido").val(data['primerApellido']);
            $("#txtSegundoApellido").val(data['segundoApellido']);
            $("#txtTelefono").val(data['telefono']);
            $("#txtDireccion").val(data['direccion']);
            $("#txtCorreo").val(data['correo']);
            $("#txtUsuario").val(data['usuario']);
            $("#imgPerfil").attr('src', path + data['rutaImg'] +"/"+ data['nombreImg']);
            if (data['genero'] == "Masculino") $("#slcSexo").val("1");
            else $("#slcSexo").val("2");
            $("#btnActualizar").removeClass("d-none");
        }
    });

    $("#tableAdminUser tbody").on('click', 'button#btnEliminar', function () {
        var data = tabla.row($(this).parents("tr")).data();
        $("#formEliminarUsuario #txtId").val(data['idUsuario']);
    });

    $("#txtTelefono").inputmask({
        mask: phones,
        greedy: false,
        definitions: { '#': { validator: "[0-9]", cardinality: 1 } }
    });

    $('#txtDNI').inputmask({
        mask: maskdni,
        greedy: false,
        definitions: { '#': { validator: "[0-9]", cardinality: 1 } }
    });

    $("#formAdminUser").submit(function (e) {
        if(emptyField(dni)){
            if(emptyField(pNombre)){
                if(emptyField(pApellido)){
                    if(emptyField(usuario)){
                        if(emptyField(correo) || validateEmail()){
                            if($(genero).val() != ""){
                                return true;
                            }else message("Debe seleccionar su genero");
                        }else message("Debe ingresar su correo o el correo no es valido");
                    }else message("Debe ingresar su nombre de usuario");
                }else message("Debe ingresar su primer apellido");
            }else message("Debe ingresar su primer nombre");
        }else message("Debe ingresar su numero de identidad");
        e.preventDefault();
    });

    $("#formAddUser").submit(function (e) {
        if(emptyField(dni)){
            if(emptyField(pNombre)){
                if(emptyField(pApellido)){
                    if(emptyField(usuario)){
                        if(emptyField(clave)){
                            if(emptyField(correo) || validateEmail()){
                                if($(genero).val() != ""){
                                    if($("#btnImagen")[0].files.length !== 0){
                                        return true;
                                    }else message("Debe ingresar una foto de perfil");
                                }else message("Debe seleccionar su genero");
                            }else message("Debe ingresar su correo o el correo no es valido");
                        }else message("Debe ingresar su contraseña");
                    }else message("Debe ingresar su nombre de usuario");
                }else message("Debe ingresar su primer apellido");
            }else message("Debe ingresar su primer nombre");
        }else message("Debe ingresar su numero de identidad");
        e.preventDefault();
    });

    $("#btnImagen").change(function () { 
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#imgPerfil").attr("src", e.target.result);
        };
        reader.readAsDataURL(this.files[0]);
    });

    $("[title~='noNumber']").keypress(function (e) {
        var key = e.keyCode || e.which;
        var tecla = String.fromCharCode(key).toLocaleLowerCase();
        var letras = "áéíóúabcdefghijklmnopqrstuvwxyz";
    
        if (letras.indexOf(tecla) == -1) {
            return false;
        }
    });

    function validateEmail() {
        var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
        return (regex.test($('#txtCorreo').val().trim())) ? true : false;
    }

    function emptyField(field) {
        return $(field).val().length >= 3 ? true : false;
    }

    function message(msg) {
        alertify.set("notifier", "position", "top-center");
        alertify.error(msg);
    }
});