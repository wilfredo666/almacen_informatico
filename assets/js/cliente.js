/*modal-formulario nuevo cliente*/
function MnuevoCliente(){
    $('#modal_cont').modal('show');
    var obj="";
    $.ajax(
        {
            type:"POST",
            url:"http://localhost/almacen_informatico/clientes/FormRegcliente.php",
            data:obj,
            success:function(data){
                $("#formulario").html(data);
            }
        }
    )
}

/*funcion registrar cliente*/
function RegCliente(){
    var formData = new FormData($("#form_cliente")[0]);

        $.ajax({
            url:"http://localhost/almacen_informatico/clientes/Regcliente.php",
            type:"POST",
            data:formData,
            cache:false,
            contentType:false,
            processData:false,
            success:function(data)
            {
                $("#mensaje_cont").html("<center class='alert alert-success' style='width:350px;'>Nuevo cliente registrado!!!</center>");

                setTimeout(
                    function(){
                        $('#modal_cont').modal('hide');
                    },1000);

                setTimeout(
                    function(){
                        location.reload();
                    },1000);
            }

        }
              )

}

/*Ver clientes*/
function Vercliente(id){
    $('#modal_cont_sm').modal('show');
    var obj="";
    $.ajax(
        {
            type:"POST",
            url:"http://localhost/almacen_informatico/clientes/vercliente.php?id="+id,
            data:obj,
            success:function(data){
                $("#formulario_sm").html(data);
            }
        }
    )
}

/*Modal formulario editar clientes*/
function MEditCliente(id){
    $('#modal_cont').modal('show');
    var obj="";
    $.ajax(
        {
            type:"POST",
            url:"http://localhost/almacen_informatico/clientes/FormEditCliente.php?id="+id,
            data:obj,
            success:function(data){
                $("#formulario").html(data);
            }
        }
    )
}

/*Editar clientes - funcion*/
function EditCliente(id){
    var formData = new FormData($("#form_edit_cliente")[0]);

    $.ajax({
        url:"http://localhost/almacen_informatico/clientes/EditCliente.php?id="+id,
        type:"POST",
        data:formData,
        cache:false,
        contentType:false,
        processData:false,
        success:function(data)
        {
            $("#mensaje_cont").html("<center class='alert alert-success' style='width:350px;'>Cliente actualizado con exito!!!</center>");


            setTimeout(
                function(){
                    $('#modal_cont').modal('hide');
                },1000);

            setTimeout(
                function(){
                    location.reload();
                },1000);
        }

    }
          )
}

/*modal eliminar clientes*/
function MEliCliente(id){
    $('#modal_cont_sm').modal('show');
    var obj="";
    $.ajax(
        {
            type:"POST",
            url:"http://localhost/almacen_informatico/clientes/FormEliCliente.php?id="+id,
            data:obj,
            success:function(data){
                $("#formulario_sm").html(data);
            }
        }
    )
}

/*eliminar clientes - funcion*/
function EliCliente(id){
        var obj="";
    $.ajax({type:"POST",
            url:"http://localhost/almacen_informatico/clientes/EliCliente.php?id="+id,
            data:obj,
            success:function(data)
            {
                $("#mensaje_cont_sm").html("<center class='alert alert-success' style='width:350px;'>El cliente ha sido eliminado!!!</center>");

                setTimeout(
                    function(){
                        $('#modal_cont_sm').modal('hide');
                    },1000);

                setTimeout(
                    function(){
                        location.reload();
                    },1000);
            }

           }
          )
}