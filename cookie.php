  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!doctype html>

<form id="frminformacion"><label> Nombre: </label>
 <input type="text" name="id" />
  
 <label> Apellidos: </label>
 <input type="text" name="idestacion" />
  
 <label> Sexo: </label>
 <input type="radio" name="sexo" value="f" /> Femenino
 <input type="radio" name="sexo" value="m" /> Masculino
  
 <label> Grado: </label>
<select name="grado"> <option value="1"> Primero </option></select>
<select name="grado"> <option value="2"> Segundo </option></select>
<select name="grado"> <option value="2"> Tercero </option></select>
  
 <input id="enviar" type="button" value="Enviar" /></form>

  <script type="text/javascript">
$(document).ready(function(){
  $("#enviar").click(function(){
    var formulario = $("#frminformacion").serializeArray();
    $.ajax({
      type: "POST",
      dataType: 'json',
      url: "prueba2.php",
      data: formulario,
    }).done(function(respuesta){
      $("#mensaje").html(respuesta.mensaje);
    });
  });
  
    function limpiarformulario(formulario){
  
  $(formulario).find('input').each(function() {
      switch(this.type) {
          case 'password':
        case 'text':
                $(this).val('');
              break;
          case 'checkbox':
          case 'radio':
              this.checked = false;
          }
      });
  
      $(formulario).find('select').each(function() {
          $("#"+this.id + " option[value=0]").attr("selected",true);
  
    });
  }
});
</script>