window.onload = us;
function prueba(){
    alert("esto es una prueba de script");
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