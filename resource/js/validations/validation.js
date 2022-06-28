$(document).ready(function () {
    var path ="../";
    let tabla = $('#tableAdminUser').DataTable({
        "ajax": {
            "url": "php/users/tablaUsuarios.php",
            "dataSrc": ''
        },
        "columns": [
            {'data': 'idUsuario' },
            {'data': 'usuario' },
            {'data': 'dni' },
            {'data': 'primerNombre' },
            {'data': 'segundoNombre' },
            {'data': 'primerApellido' },
            {'data': 'segundoApellido' },
            {'data': 'telefono' },
            {'data': 'direccion' },
            {'data': 'correo' },
            {'data': 'genero' }
        ],
        language: {
            "url": "../resource/spanish.json"
        }
    });

    $('#tableAdminUser tbody').on('click', 'tr', function () {
        var data = tabla.row( this ).data();
        asignarValores(data);

        function asignarValores(data){
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
            $("#imgPerfil").attr('src', path+data['rutaImg']+data['nombreImg']);
            if(data['genero'] == "Masculino") $("#slcSexo").val("1");
            else $("#slcSexo").val("2");
        }
    } );

    $("#btnEliminar").click(function () { 
        var param = $("#txtId").val();
        $.ajax({
            type: "POST",
            url: "php/users/deleteUser.php",
            data: param,
            success: function () {
                alert("Todo bien");
            }
        });
    });
});