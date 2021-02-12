<?php
include "conexion.php";

class producto{


    private $paginaActual;
    private $totalPaginas;
    private $nResultados;//aqui se guardan el conteo total de todos los registros
    private $resulPorPagina;
    private $indice;

    function __construct($nPorPagina){


        $this->resulPorPagina=$nPorPagina;
        $this->indice=0;
        $this->paginaActual=1;

    }

    function calcularPagina(){
        global $conectador;
        $sql=mysqli_query($conectador,"select count(*) as total from producto;");
        $this->nResultados=$sql->fetch(PDO::FETCH_OBJ)->total;
        $this->totalPaginas=$this->nResultados / $this->resulPorPagina;

        if(is_numeric($_GET['pagina'])){
            /*validar que pagina sea un numero*/
            if($_GET['pagina']){
                if($_GET['pagina']>=1&&$_GET['pagina']<=$this->totalPaginas){
                    $this->paginaActual=$_GET['pagina'];
                    $this->indice=($this->paginaActual-1)*($this->resulPorPagina);
                }else{
                    echo "No existe esa pagina";
                }
            }else{
                echo "Error al mostrar la pagina";
            }

        }
    }

    function mostrarProducto(){

    }

    function mostrarPaginas(){

    }
}
?>