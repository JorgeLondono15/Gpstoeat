<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="estilos.css">

    <title>GpsToEat</title>
  </head>

  <body class=Fondo>
  <div style="position: relative;">
  <div style="position: absolute; top: 15px; left: 15px;">
  <img src="imagenes/Logo-2.png" height="140px" width="140px" />
  </div>
 <div class=mapa><iframe src="https://www.google.com/maps/d/embed?mid=1BsuxtKk8vtLtg8MmCe2AnpcyPjZjTjLJ" width="900px" height="600px"></iframe></div>
   </div>

<aside style="float: right;  margin-top: 10px; width:30%; height: 550px; margin-right:5px">

<form action="Local1.html" method="get">
<fieldset>
<p><legend>Tipo de comida</legend>
<select name="Tipo">
  <option value="0" selected>Elegir</option>
  <option value="1" >Quesos</option>
  <option value="2" >Pizza</option>
  <option value="3" >Arepas</option>
  <option value="4" >Palitos de Queso</option>
  <option value="5" >Papas Fritas</option>
  <option value="6" >Mandingas</option>
</select></p>
</fieldset>

<fieldset>
<p><legend>Tipo de ambiente</legend>
<select name="Tipoambiente">
  <option value="0" selected>Elegir</option>
  <option value="1" >Moderno</option>
  <option value="2" >Clasico</option>
  <option value="3" >Vintage</option>
  <option value="4" >Rústico</option>
  <option value="5" >Industrial</option>
</select></p>
</fieldset>

<fieldset>
<p><legend>Sector</legend>
<select name="Tiposector">
  <option value="0" selected>Elegir</option>
  <option value="1" >Aranjuez</option>
  <option value="2" >Castilla</option>
  <option value="3" >Caribe</option>
  <option value="4" >Robledo</option>
  <option value="5" >San Javier</option>
</select></p>
</fieldset>

<fieldset>
<p><legend>Puntuación</legend>
Indique su nivel (Malo, Regular, Bueno):
<input type="range" name="Puntuación"
  min="1" max="3" list="lista-rango">
<datalist id="lista-rango">
  <option value="1" label="Malo">
  <option value="2" label="RegularMalo">
  <option value="3" label="Bueno">
</datalist></p>
</fieldset>

<fieldset>
<p><legend>Precios</legend>
Rangos:<br>
<input type="radio" name="boton"> 0$ - 5.000$ <br>
<input type="radio" name="boton"> 5.000$ - 10.000$<br>
<input type="radio" name="boton"> 10.000$ - 20.000$<br>
<input type="radio" name="boton"> 20.000$ - 50.000$<br>
<input type="radio" name="boton"> 50.000$ - 100.000$<br>
</datalist></p>
</fieldset>

<input type="submit" value="Enviar" >
</form> 

</aside>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>