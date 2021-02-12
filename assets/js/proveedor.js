/*modal nuevo proveedor*/
function nuevoProveedor(){
    $('#modal_cont').modal('show');
    var obj="";
    $.ajax(
        {
            type:"POST",
            url:"http://localhost/almacen_informatico/proveedor/FormRegProveedor.php",
            data:obj,
            success:function(data){
                $("#formulario").html(data);
            }
        }
    )
}

/*funcion registrar proveedor*/
function RegProveedor(){
    var formData = new FormData($("#form_proveedor")[0]);

    $.ajax({
        url:"http://localhost/almacen_informatico/proveedor/RegProveedor.php",
        type:"POST",
        data:formData,
        cache:false,
        contentType:false,
        processData:false,
        success:function(data)
        {
            $("#mensaje_cont").html("<center class='alert alert-success' style='width:350px;'>Proveedor registrado!!!</center>");

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

/*Ver proveedor*/
function VerProveedor(id){
    $('#modal_cont_sm').modal('show');
    var obj="";
    $.ajax(
        {
            type:"POST",
            url:"http://localhost/almacen_informatico/proveedor/verProveedor.php?id="+id,
            data:obj,
            success:function(data){
                $("#formulario_sm").html(data);
            }
        }
    )
}

/*Modal formulario editar producto*/
function MEditProducto(id){
    $('#modal_cont').modal('show');
    var obj="";
    $.ajax(
        {
            type:"POST",
            url:"http://localhost/almacen_informatico/proveedor/FormEditProveedor.php?id="+id,
            data:obj,
            success:function(data){
                $("#formulario").html(data);
            }
        }
    )
}

/*Editar proveedor - funcion*/
function EditProveedor(id){
     var formData = new FormData($("#form_edit_proveedor")[0]);

    $.ajax({
        url:"http://localhost/almacen_informatico/proveedor/EditProveedor.php?id="+id,
        type:"POST",
        data:formData,
        cache:false,
        contentType:false,
        processData:false,
        success:function(data)
        {
            $("#mensaje_cont").html("<center class='alert alert-success' style='width:350px;'>Proveedor actualizado con exito!!!</center>");
            

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

/*modal eliminar proveedor*/
function MEliProveedor(id){
    $('#modal_cont_sm').modal('show');
    var obj="";
    $.ajax(
        {
            type:"POST",
            url:"http://localhost/almacen_informatico/proveedor/FormEliProveedor.php?id="+id,
            data:obj,
            success:function(data){
                $("#formulario_sm").html(data);
            }
        }
    )
}

/*eliminar proveedor - funcion*/
function EliProveedor(id){
        var obj="";
    $.ajax({type:"POST",
            url:"http://localhost/almacen_informatico/proveedor/EliProveedor.php?id="+id,
            data:obj,
            success:function(data)
            {
                $("#mensaje_cont_sm").html("<center class='alert alert-success' style='width:350px;'>El proveedor ha sido eliminado!!!</center>");

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

/*buscar proveedor*/
function BuscarProveedor(){
        var txt_bus=$("#dat_proveedor").val();
    var obj={
        txt_bus:txt_bus  
    };
    $.ajax({
        url:"http://localhost/almacen_informatico/proveedor/lista_buscar_proveedor.php",
        type:"POST",
        data:obj,
        success:function(data){
            $("#res_bus_proveedor").html(data);
        }
    })
}