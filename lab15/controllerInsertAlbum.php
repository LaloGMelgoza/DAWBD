<?php  
	include_once("header.html");
    require_once("modelo.php");
    
    if(isset($_POST["albumName"]) && isset($_POST["albumArtist"]) && isset($_POST["albumYear"])){

       
        registraAlbum($_POST["albumName"], $_POST["albumArtist"], $_POST["albumYear"]);
        header("location:index.php");
                   
    }
    else{
        include_once("insertAlbum.html");
    }
    include_once("footer.html");

?>