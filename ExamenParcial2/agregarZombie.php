<?php
	include("header.html");
    require_once("modelo.php");
    
    if(isset($_POST["nombreZombie"])) {
        if($_POST["nombreZombie"] == "") {
            header("location:agregarZombie.php");
        } else {
            agregarZombie($_POST["nombreZombie"]);
            header("location:index.php");
        }
                   
    }
    else{
        include_once("agregarZombie.html");
    }
    include_once("footer.html");

?>