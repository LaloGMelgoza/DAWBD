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
  let materia = document.getElementById("materia").value;
  let profe = document.getElementById("profe").value;
  let verbo1 = document.getElementById("verbo1").value;
  let objeto1 = document.getElementById("objeto1").value;
  let objeto2 = document.getElementById("objeto2").value;
  let animal = document.getElementById("animal").value;
  document.write("<br><br>Se aproximaba el día de revisiones de exámenes finales, y " + nombre + " estaba desesperado porque estaba seguro que le faltaba 1 punto para pasar la materia de " + materia);
  document.write(". " + nombre + " corrió a toda velocidad a la oficina de " + profe + ", y cuando entró, lo encontró  " + verbo1 + " con su " + objeto1 + ".");
  document.write(" --Necesito un 99 en el examen final, y tú me lo vas a dar!-- exclamó " + nombre + " mientras le apuntaba a " + profe + " con su " + objeto2 + ". ");
  document.write(profe + " procedió a arrancarse la camisa, imitando el sonido de un " + animal + " y saltando por la ventana. Nadie nunca más volvió a escuchar de ni ver a " + profe + ", y " + nombre);
  document.write(" nunca pasó " + materia + ".");
}

function preguntas() {
  document.write("<b>¿Por qué es una buena práctica usar JavaScript para checar que sean válidos los inputs de las formas antes de enviar los datos al servidor?</b><br><br>");
  document.write("Para que desde el momento en que el usuario envíe los contenidos de sus campos llenados, el programa se asegure de no proceder a hacer lo que sea antes de primero asegurarse que la informacion introducida hará que el procedimiento funcione. <br><br>");
  document.write("<b><br>¿Cómo puedes saltarte la seguridad de validaciones hechas con JavaScript?</b><br><br>");
  document.write("En el buscador puedes desactivar el javascript desde las herramientas del desarrollador para bypassear la seguridad. <br><br>");
  document.write("<b><br>¿Si te puedes saltar la seguridad de las validaciones de JavaScript, entonces ¿por qué la primera pregunta dice que es una buena práctica?</b><br><br>");
  document.write("Para que la validación no tenga que pasar hasta el servidor para poder ser validada, y en vez de eso pueda ser validada antes para optimizar el proceso. <br><br>");
}