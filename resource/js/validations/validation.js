$(document).ready(function () {
    var path = "../";
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

    $('#tableAdminUser tbody').on('click', 'button#btnEditar', function () {
        var data = tabla.row($(this).parents("tr")).data();
        asignarValores(data);

        function asignarValores(data) {
            $("#txtId").val(data['idUsuario']);
            $("#txtDNI").val(data['dni']);
            $("#txtPrimerNombre").val(data['primerNombre']);
            $("#txtSegundoNombre").val(data['segundoNombre']);
            $("#txtPrimerApellido").val(data['primerApellido']);
            $("#txtSegundoApellido").val(data['segundoApellido']);
            $("#txtTelefono").val(data['telefono']);
            $("#txtDireccion").val(data['direccion']);
            $("#txtCorreo").val(data['correo']);
            $("#txtUsuario").val(data['usuario']);
            $("#imgPerfil").attr('src', path + data['rutaImg'] + data['nombreImg']);
            if (data['genero'] == "Masculino") $("#slcSexo").val("1");
            else $("#slcSexo").val("2");
        }
    });

    $("#tableAdminUser tbody").on('click', 'button#btnEliminar', function () {
        var data = tabla.row($(this).parents("tr")).data();
        $("#formEliminarUsuario #txtId").val(data['idUsuario']);
    });
});