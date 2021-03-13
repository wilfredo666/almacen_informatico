/*modal nuevo producto*/
function nuevoProducto(){
    $('#modal_cont').modal('show');
    var obj="";
    $.ajax(
        {
            type:"POST",
            url:"http://localhost/almacen_informatico/producto/nuevoProducto.php",
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
        url:"http://localhost/almacen_informatico/producto/RegProducto.php",
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
            url:"http://localhost/almacen_informatico/producto/F_EliProducto.php?id="+id,
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
            url:"http://localhost/almacen_informatico/producto/EliProducto.php?id="+id,
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
            url:"http://localhost/almacen_informatico/producto/verProducto.php?id="+id,
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
            url:"http://localhost/almacen_informatico/producto/FormEditProducto.php?id="+id,
            data:obj,
            success:function(data){
                $("#formulario").html(data);
            }
        }
    )
}

/*editar producto - funcion*/
function EditProducto(id){
    var formData = new FormData($("#form_edit_producto")[0]);

    $.ajax({
        url:"http://localhost/almacen_informatico/producto/ActProducto.php?id="+id,
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

/*buscar producto*/
function BuscarProducto(){
    var txt_bus=$("#dat_producto").val();
    var obj={
        txt_bus:txt_bus  
    };
    $.ajax({
        url:"http://localhost/almacen_informatico/producto/lista_buscar_producto.php",
        type:"POST",
        data:obj,
        success:function(data){
            $("#res_bus_producto").html(data);
        }
    })
}

/*informacion del producto seleccionado en "IngresoProducto"*/
function infoProducto(){
    var id_producto=document.getElementById('producto').value;
    var obj="";
    $.ajax(
        {
            type:"POST",
            url:"http://localhost/almacen_informatico/producto/IngInfoProducto.php?id="+id_producto,
            data:obj,
            success:function(data){
                $("#info_producto").html(data);
            }
        }
    )
}

/*informacion del almacen o cliente (destino) seleccionado en "SalidaProducto"*/
function infoDestino(){
    var id_destino=document.getElementById('cliente').value;
    var obj="";
    $.ajax(
        {
            type:"POST",
            url:"http://localhost/almacen_informatico/producto/SalInfoDestino.php?id="+id_destino,
            data:obj,
            success:function(data){
                $("#info_destino").html(data);
            }
        }
    )
}

/*registrar ingreso - funcion*/
function RegIngreso(){
    var formData = new FormData($("#form_ingreso_producto")[0]);

    $.ajax({
        url:"http://localhost/almacen_informatico/producto/RegIngreso.php",
        type:"POST",
        data:formData,
        cache:false,
        contentType:false,
        processData:false,
        success:function(data)
        {
            $("#mensaje_cont").html("<center class='alert alert-success' style='width:350px;'>Producto ingresado con exito!!!</center>");
console.log(data);

            setTimeout(
                function(){
                    location.reload();
                },1000);
            document.getElementById('costo_pro').value="";
            document.getElementById('costo_tot_pro').value="";
            document.getElementById('cantidad_pro').value="";
        }

    }
          )
}

/*registrar salida - funcion*/
function RegVenta(){
    var formData = new FormData($("#form_salida_producto")[0]);

    $.ajax({
        url:"http://localhost/almacen_informatico/producto/RegVenta.php",
        type:"POST",
        data:formData,
        cache:false,
        contentType:false,
        processData:false,
        success:function(data)
        {
            $("#mensaje_cont").html("<center class='alert alert-success' style='width:350px;'>Venta realizada!!!</center>");


            setTimeout(
                function(){
                    location.reload();
                },1000);
            document.getElementById('cod_almacen').value="";
            document.getElementById('cantidad_pro').value="";
        }

    }
          )
}

/*calcular el costo total - en formulario IngresoProducto*/
function CostoTotal(){
    var cantidad=document.getElementById('cantidad_pro').value;
    var costoUnitario=document.getElementById('costo_pro').value;
    var total=parseFloat(cantidad)*parseFloat(costoUnitario);
    document.getElementById('costo_tot_pro').value=total.toFixed(2);

}

/* consular ventas reporte - funcion */
function consultar(){
    var formData = new FormData($("#form_consulta")[0]);

    $.ajax({
        url:"http://localhost/almacen_informatico/producto/ConsultaSalida.php",
        type:"POST",
        data:formData,
        cache:false,
        contentType:false,
        processData:false,
        success:function(data)
        {
            $("#resp_consulta").html(data);

        }

    }
          )
}

/* consular ingresos reporte - funcion */
function consultarIngresos(){
    var formData = new FormData($("#form_consulta")[0]);

    $.ajax({
        url:"http://localhost/almacen_informatico/producto/ConsultaIngresos.php",
        type:"POST",
        data:formData,
        cache:false,
        contentType:false,
        processData:false,
        success:function(data)
        {
            $("#resp_consulta").html(data);

        }

    }
          )
}

/* calcular el total de la venta en SalidaProducto */
function TotalVenta(){
    var cantidad=document.getElementById('cantidad_pro').value
    var precio=document.getElementsByTagName('td')[3].childNodes[0].nodeValue;
    var total=parseFloat(cantidad)*parseFloat(precio);
    document.getElementById('total').value=total;
}

