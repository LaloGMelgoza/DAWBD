function verificar() {
  var password = document.getElementById("password").value;
  var p2 = document.getElementById("p2").value;
  var message;

  if(password==="" || p2===""){
    message = "Favor de no dejar campos vacíos";
  }else if(password === p2){
    message = "Contraseña aceptada";
  }else if(password !== p2){
    message="Las contraseñas no coinciden";
  }
  document.getElementById("accessMessage").innerHTML = message;
}


function pagar() {
  var muse = document.getElementById("muse").value;
  var tool = document.getElementById("tool").value;
  var skillet = document.getElementById("skillet").value;
  var stromae = document.getElementById("stromae").value;
  var iva = document.getElementById("iva").value;
  var total;

  total = muse * 349.99 + tool * 649.99 + skillet * 199.99 + stromae * 299.99;
  total = total + (total * iva)/100;
  document.getElementById("totalPay").innerHTML = "$" + total;
} 

function aventura() {
  let nombre = document.getElementById("nombre").value;
  document.write("<br><br>Hola, " + nombre);  //TRATO DE IMPRIMIR VARIABLES DE aventura.html
}

function preguntas() {
  document.write("<b>¿Por qué es una buena práctica usar JavaScript para checar que sean válidos los inputs de las formas antes de enviar los datos al servidor?</b><br><br>");
  document.write("Para que desde el momento en que el usuario envíe los contenidos de sus campos llenados, el programa se asegure de no proceder a hacer lo que sea antes de primero asegurarse que la informacion introducida hará que el procedimiento funcione. <br><br>");
  document.write("<b><br>¿Cómo puedes saltarte la seguridad de validaciones hechas con JavaScript?</b><br><br>");
  document.write("Respuesta. <br><br>");
  document.write("<b><br>¿Si te puedes saltar la seguridad de las validaciones de JavaScript, entonces ¿por qué la primera pregunta dice que es una buena práctica?</b><br><br>");
  document.write("Respuesta. <br><br>");
}