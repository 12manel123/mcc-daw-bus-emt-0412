<html lang="es">
<head>
<meta charset="UTF-8">
<title>Contactanos</title>
<link rel="shortcut icon" href="images/logopagina.png">
<link href="estilos/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="estilos/contact.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">@import url('https://fonts.googleapis.com/css2?family=Baloo+2&display=swap');</style>
  </head>
<body>
  
<header style="background-color: #AB0000;color: white; border:3px black;"><center>
  
 <div style="position: absolute;"> 
  <a href="index.php"><img src="images/ico_home.png" class="home-logo" onmouseout="this.src='images/ico_home.png';" onmouseover="this.src='images/ico_home2.png';"></a>
  <a href="map.php"><img src="images/ico_mapa.png" class="home-logo" onmouseout="this.src='images/ico_mapa.png';" onmouseover="this.src='images/ico_mapa2.png';"></a>
  <a href="contact.php"><img src="images/ico_contact.png" class="home-logo" onmouseout="this.src='images/ico_contact.png';" onmouseover="this.src='images/ico_contact2.png';"></a>
</div>

<h2>Contacte'ns</h2>
</center>
<h3>Email: maca494@vidalibarraquer.net Telefon: 611491869</h3>



</header>

<div class="contact_form">

<div class="formulario">
<h4>Envian's un correu:</h4>

<form  enctype="text/plain" action="mailto:maca494@vidalibarraquer.com" method="POST">


<p>
<label for="assunto" class="colocar_asunto">Asumpte
</label>
<input type="text" name="Subject" id="assunto" placeholder="Escribe un asunto">
</p>

<p>
<label for="mensaje" class="colocar_mensaje">Missatge
</label>           

<textarea name="Body" class="texto_mensaje" id="mensaje" placeholder="Deja aquí tu comentario..."></textarea> </p>  

<button type="submit" id="enviar"><p>Enviar</p></button>

</form>
</div>
</div>

<!--<script type="text/javascript">
	var form = document.getElementById("elform");
	form.onsubmit = function(e) {
		var asunto = document.getElementById("assunto").value;
		var mensaje = document.getElementById("mensaje").value;
		asunto.value = encodeURIComponent(asunto.value);
		mensaje.value = encodeURIComponent(mensaje.value);
		alert(asunto + "\n" + mensaje);
	}
</script>-->
</body>
</html>

