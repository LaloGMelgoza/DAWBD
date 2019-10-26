<?php

include_once("header.html");
require_once("modelo.php");


if(isset($_POST["Zombie"]) && isset($_POST["Estado"])){

    agregarAbitacora($_POST["Zombie"], $_POST["Estado"]);
    # FALTA agregar interfaz de exito
    header("location:index.php");
}
else{
    include_once("agregarEstado.html");
}
include_once("footer.html");
?>