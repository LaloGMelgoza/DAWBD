function getState(val){
   $.get("modelo.php",{
         variable: val
     }).done(function(data){
             $("#resultado")[0].style.visibility = "visible";
             $("#resultado").html(data);
             console.log(data);
             });
}





