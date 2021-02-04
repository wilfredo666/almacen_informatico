/*modal nuevo producto*/
function nuevoProducto(){
    $('#modal_cont').modal('show');
    var obj="";
    $.ajax(
        {
            type:"POST",
            url:"http://localhost/almacen_informatico/nuevoProducto.php",
            data:obj,
            success:function(data){
                $("#formulario").html(data);
            }
        }
    )
}
/*regitro de nuevo producto*/
function RegProducto(){
    var formData = new FormData($("#form_producto")[0]);

    $.ajax({
        url:"http://localhost/almacen_informatico/RegProducto.php",
        type:"POST",
        data:formData,
        cache:false,
        contentType:false,
        processData:false,
        success:function(data)
        {
            $("#mensaje_cont").html("<center class='alert alert-success' style='width:350px;'>Producto registrado con exito!!!</center>");

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
/*modal eliminar producto*/
function MEliProducto(id){
    $('#modal_cont_sm').modal('show');
    var obj="";
    $.ajax(
        {
            type:"POST",
            url:"http://localhost/almacen_informatico/F_EliProducto.php?id="+id,
            data:obj,
            success:function(data){
                $("#formulario_sm").html(data);
            }
        }
    )
}

/*eliminar producto*/
function EliProducto(id){
        var obj="";
    $.ajax({type:"POST",
            url:"http://localhost/almacen_informatico/EliProducto.php?id="+id,
            data:obj,
            success:function(data)
            {
                $("#mensaje_cont_sm").html("<center class='alert alert-success' style='width:350px;'>El producto ha sido eliminado!!!</center>");

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

/*modal mostrar producto*/
function VerProducto(id){
    $('#modal_cont_sm').modal('show');
    var obj="";
    $.ajax(
        {
            type:"POST",
            url:"http://localhost/almacen_informatico/verProducto.php?id="+id,
            data:obj,
            success:function(data){
                $("#formulario_sm").html(data);
            }
        }
    )
}

/*Modal editar producto*/
function MEditProducto(id){
    $('#modal_cont').modal('show');
    var obj="";
    $.ajax(
        {
            type:"POST",
            url:"http://localhost/almacen_informatico/FormEditProducto.php?id="+id,
            data:obj,
            success:function(data){
                $("#formulario").html(data);
            }
        }
    )
}

function EditProducto(id){
     var formData = new FormData($("#form_edit_producto")[0]);

    $.ajax({
        url:"http://localhost/almacen_informatico/ActProducto.php?id="+id,
        type:"POST",
        data:formData,
        cache:false,
        contentType:false,
        processData:false,
        success:function(data)
        {
            $("#mensaje_cont").html("<center class='alert alert-success' style='width:350px;'>Producto actualizado con exito!!!</center>");
            

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
function prueba(){
    alert("esto es una prueba de script desde usuario");
    //console.log("esto es una prueba de script");
}
function usu(){
    var obj="";
    $.ajax({type:"POST",
            url:"http://localhost/almacen_informatico/usuarios.php",
            data:obj,
            success:function(data){
                $("#content-wrapper").html(data);
            }
           }
          )
}