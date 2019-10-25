<?php
	include("header.html");
    require_once("modelo.php");
    
    if(isset($_POST["nombreZombie"])){

       
      	agregarZombie($_POST["nombreZombie"]);
        header("location:index.php");
                   
    }
    else{
        include_once("agregarZombie.html");
    }
    include_once("footer.html");

?>