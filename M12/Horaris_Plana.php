<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Horari Plana</title>
	<link rel="shortcut icon" href="images/logopagina.png">
	<link rel="stylesheet" href="estilos/estilo.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Baloo+2&display=swap');
</style> 
<style type="text/css">
		h3{
font-size: 16px; 
color: white;   
position: absolute;
top: -5px; left: 800px;
text-align: right;
}
</style>
<body>
<?php
for ($num1=0; $num1 <=10 ; $num1++) { 
	for ($num2=0; $num2 <=5 ; $num2++) { 
		$linea[0]["feiners"]["anada"][$num1][$num2] = (rand(1,19)).":".(rand(1,59));
		$linea[0]["feiners"]["tornada"][$num1][$num2] = rand(0,23).":".rand(0,59);
		$linea[0]["dissabtes"]["anada"][$num1][$num2] = rand(0,23).":".rand(0,59);
		$linea[0]["dissabtes"]["tornada"][$num1][$num2] = rand(0,23).":".rand(0,59);
		$linea[0]["diumenge"]["anada"][$num1][$num2] = rand(0,23).":".rand(0,59);
		$linea[0]["diumenge"]["tornada"][$num1][$num2] = rand(0,23).":".rand(0,59);
		$linea[0]["nocturn"]["anada"][$num1][$num2] = rand(0,23).":".rand(0,59);
		$linea[0]["nocturn"]["tornada"][$num1][$num2] = rand(0,23).":".rand(0,59);
	}
}
for ($num1=0; $num1 <=10 ; $num1++) { 
	for ($num2=0; $num2 <=5 ; $num2++) { 
		$linea[1]["feiners"]["anada"][$num1][$num2] = (rand(1,19)).":".(rand(1,59));
		$linea[1]["feiners"]["tornada"][$num1][$num2] = rand(0,23).":".rand(0,59);
		$linea[1]["dissabtes"]["anada"][$num1][$num2] = rand(0,23).":".rand(0,59);
		$linea[1]["dissabtes"]["tornada"][$num1][$num2] = rand(0,23).":".rand(0,59);
		$linea[1]["diumenge"]["anada"][$num1][$num2] = rand(0,23).":".rand(0,59);
		$linea[1]["diumenge"]["tornada"][$num1][$num2] = rand(0,23).":".rand(0,59);
		$linea[1]["nocturn"]["anada"][$num1][$num2] = rand(0,23).":".rand(0,59);
		$linea[1]["nocturn"]["tornada"][$num1][$num2] = rand(0,23).":".rand(0,59);
	}
}
for ($num1=0; $num1 <=10 ; $num1++) { 
	for ($num2=0; $num2 <=5 ; $num2++) { 
		$linea[2]["feiners"]["anada"][$num1][$num2] = (rand(1,19)).":".(rand(1,59));
		$linea[2]["feiners"]["tornada"][$num1][$num2] = rand(0,23).":".rand(0,59);
		$linea[2]["dissabtes"]["anada"][$num1][$num2] = rand(0,23).":".rand(0,59);
		$linea[2]["dissabtes"]["tornada"][$num1][$num2] = rand(0,23).":".rand(0,59);
		$linea[2]["diumenge"]["anada"][$num1][$num2] = rand(0,23).":".rand(0,59);
		$linea[2]["diumenge"]["tornada"][$num1][$num2] = rand(0,23).":".rand(0,59);
		$linea[2]["nocturn"]["anada"][$num1][$num2] = rand(0,23).":".rand(0,59);
		$linea[2]["nocturn"]["tornada"][$num1][$num2] = rand(0,23).":".rand(0,59);
	}
}
/*------------------------PARADES-------------*/
	$linea[0]["zona"][0]="VILAFRANCA DEL PENEDÈS (Pl. Penedès)";
	$linea[0]["zona"][1]="VILAFRANCA DEL PENEDÈS (Estació d'autobusos) ";
	$linea[0]["zona"][2]="STA. MARGARIDA I ELS MONJOS (La Pista)";
	$linea[0]["zona"][3]="STA. MARGARIDA I ELS MONJOS (L'Església) ";
	$linea[0]["zona"][4]="LA RÀPITA";
	$linea[0]["zona"][5]="BANYERES DEL PENEDÈS (Parada crta.) ";
	$linea[0]["zona"][6]="L'ARBOÇ (Cra. N-340)";
	$linea[0]["zona"][7]="L'ARBOÇ (IES L'Arboç) ";
	$linea[0]["zona"][8]="L'ARBOÇ (Pl. Catalunya) ";
	$linea[0]["zona"][9]="LA GORNAL ";
	$linea[0]["zona"][10]="BELLVEI (Recorregut urbà pas per Urb. BARONIA DEL M.) ";
?>
<header style="background-color: #326dff;color: white; border:3px black;">
<center>
 <div style="position: absolute;"> 
  <a href="index.php"><img src="images/ico_home.png" class="home-logo" onmouseout="this.src='images/ico_home.png';" onmouseover="this.src='images/ico_home2.png';"></a>
  <a href="map.php"><img src="images/ico_mapa.png" class="home-logo" onmouseout="this.src='images/ico_mapa.png';" onmouseover="this.src='images/ico_mapa2.png';"></a>
  <a href="contact.php"><img src="images/ico_contact.png" class="home-logo" onmouseout="this.src='images/ico_contact.png';" onmouseover="this.src='images/ico_contact2.png';"></a>
</div>

<h2>Autocars Plana</h2>
</center>
<h3>Email: maca494@vidalibarraquer.net Telefon: 611491869</h3>

</header>
    <div class="inicio">
    	<img src="images/logoplana_2.png" class="imglogo">
        <h1>Detalls de Línies </h1>
        <div>
    <form action="Horaris_Plana.php" method="POST">
    	<h4><span class="textodato">Linea: </span>
	<select name="line" class="content-select">
		<?php
		foreach ($linea as $key => $value) {
			echo '<option value="'.$key.'">'.$key.'</option>';
		}

		?>
	   
	</select>
    	<span class="textodato">Dia:</span> 

<select name="dia" class="content-select">
		<?php
		foreach ($linea[1] as $key => $value) {
			echo '<option value="'.$key.'">'.$key.'</option>';
		}

		?>
	   
	</select>

    	<span class="textodato">Direcció: </span>

	<select name="direccio" class="content-select">
		<?php
		echo "Direcció:  ";
		foreach ($linea[0]["feiners"] as $key => $value) {
			echo '<option value="'.$key.'">'.$key.'</option>';
		}

		?>
	   
	</select>
    	<span class="textodato">Parada: </span>

<select name="parada" class="content-select">
		<?php
		echo "Parada:";
		$suma = 0;
		foreach ($linea[0]["zona"] as $key => $value) {

			echo '<option value="'.$suma.'">'.$value.'</option>';
			$suma++;
		}

		?>
	   
	</select>
<div data-v-03f706ec="" class="vue2leaflet-map leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" style="z-index: 4 !important; position: relative; outline: currentcolor none medium;" tabindex="0"><div data-v-03f706ec=""></div>

</h4>



	<input type="submit" name="enviar" class="slide-hover-left-1"  value="Enviar">

</form>
</div>
</div> 

<?php
	if(isset($_POST["enviar"])){
		echo " <div class='contenedor'><section><h2 class='titulohorario'>Horarios de linea ".$_POST["line"];
		if($_POST["direccio"]=="anada"){
			echo " <br><h3>Direcció Cambrils -> El vendrell -> Tarragona</h3></h2>";
		}
		if($_POST["direccio"]=="tornada"){
			echo " <br><h3>Direcció Tarragona -> El vendrell -> Cambrils</h3></h2>";
		}
		foreach ($linea[$_POST["line"]][$_POST["dia"]][$_POST["direccio"]][$_POST["parada"]] as $key => $value) {
			echo $value." | ";
		}
	}
?>
</section>
</div>    
    <footer><span class="foot"><p>Creditos a ManelCC y CarlosCG</p></span></footer>
</body>
</html>