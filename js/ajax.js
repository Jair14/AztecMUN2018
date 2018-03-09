function insertar(){
  var nombre = document.getElementById('nombre').value;
  var matricula = document.getElementById('matricula').value;
  var grupo = document.getElementById('sel2').value;
  var comite = document.getElementById('comite').value;
  var pais = document.getElementById('sel1').value;
  var mail = document.getElementById('mail').value;
  var numero = document.getElementById('numero').value;
  var dataen = "nombre="+nombre+"&matricula="+matricula+"&grupo="+grupo+"&comite="+comite+"&pais="+pais+"&mail="+mail+"&numero="+numero;
  var validacion = true;
  var respuesta = "";
  if (nombre == "" || nombre == null) {
    validacion = false;
    respuesta += "Ingrese su nombre<br>";
  }
  if (matricula == "" || matricula == null || matricula == " ") {
    validacion = false;
    respuesta += "Ingrese su matricula<br>";
  }
  if (validacion) {
    $.ajax({
    type: 'post',
    url: 'data.php',
    data: dataen,
    success: function(respond) {
      $("#formulario").slideUp();
      $("#respuesta").html(respond);
    }
  });
  }else{
    $("#validacion").html(respuesta);
  }
  return false;
}
