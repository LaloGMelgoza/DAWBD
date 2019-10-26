
$(document).ready(function(){

    $('select').formSelect();
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });

    $('input#input_text, textarea#textarea2').characterCounter();
    $('.dropdown-trigger').dropdown();
    $('#example tr').click(function() {
        var href = $(this).find("a").attr("href");
        if(href) {
            window.location = href;
        }
    });
     $("#elegirVentaServicio").hide();
     $("#elegirVentaProducto").hide();

    $("#ventaServicio").on('change',function() {
        if($(this).is(":checked")) {
            $("#elegirVentaServicio").show("fast");

        }
        else {
            $("#ventaServicio").hide("fast");
        }

      })
        
    $("#ventaProducto").on('change',function() {
    if($(this).is(":checked")) {
        $("#elegirVentaProducto").show("fast");
        

    }
    else {
        $("#elegirVentaProducto").hide("fast");

    }
    })
})


function cambiarTotal(element)
{

    var num = element.dataset.num;
    var total = parseFloat(document.getElementById("Total"+String(num)).value);

    var subtotal = Math.max(0,parseFloat(document.getElementById("subtotal"+String(num)).value));
    var iva16 = Math.max(0,parseFloat(document.getElementById("IVA-16"+String(num)).value));
    var iva0 = Math.max(0,parseFloat(document.getElementById("IVA-0"+String(num)).value));
    var ieps9 = Math.max(0,parseFloat(document.getElementById("IEPS-9"+String(num)).value));
    var ieps7 = Math.max(0,parseFloat(document.getElementById("IEPS-7"+String(num)).value));
    var ieps6 = Math.max(0,parseFloat(document.getElementById("IEPS-6"+String(num)).value));

    total = parseFloat(subtotal + iva0 + iva16 + ieps6 + ieps7 + ieps9).toFixed(2);
    document.getElementById("Total"+String(num)).value = total;

}
function blockSpecialChar(e) {
    var k = e.keyCode;
    return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8   || (k >= 48 && k <= 57));
}

function selectFromList(){
    $.get("modelo.php",{
        parametro: $("#cliente").val()
    }).done(function(data){
            $("#busq")[0].style.visibility = "visible";
            $("#busq").hide().html(data).fadeIn();
            });

}



function actualizarSaldo(id,value){
    CampoSaldo=id.replace("M","O");
    SaldoInsoluto = id.replace("M","P");
    Saldo=document.getElementById(CampoSaldo).value;
    pagado=document.getElementById(id).value;
    if((Saldo-pagado) >= 0){
        xpagar=Saldo-pagado;
        document.getElementById(SaldoInsoluto).innerHTML = xpagar.toFixed(2);
        total=sumaAbono();
        document.getElementById('acumulado').innerHTML = total.toFixed(2);
       }
    else{
        xpagar=Saldo;
        document.getElementById(SaldoInsoluto).innerHTML = xpagar;
        $(id).val(xpagar);
        deshabilitar();
    }
    
    if((Saldo-pagado) == 0){
        deshabilitar();
        console.log("It was true");
    }
}

function sumaAbono(){
    var total = 0;

  $(".monto").each(function() {

    if (isNaN(parseFloat($(this).val()))) {

      total += 0;

    } else {

      total += parseFloat($(this).val());

    }

  });
    return total;
}

function deshabilitar(){
    $(".monto").each(function() {
        if($(this).val == 0 || $(this).val == "" ){
            $(this).prop('disabled', true);
        }
    });
}

function getRequestObject() {

    if (window.XMLHttpRequest) {
        return (new XMLHttpRequest());
    } else if (window.ActiveXObject) {
        return (new ActiveXObject("Microsoft.XMLHTTP"));
    } else {
        return (null);
    }
}

function seleccionarCliente(){
     $.get("clienteController.php",{
         client: $("#cliente").val()
     }).done(function(data){
             $("#busqueda")[0].style.visibility = "visible";
             $("#busqueda").html(data);
             console.log(data);
             });
}


