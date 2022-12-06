<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Horaris Penedès</title>
	<link rel="shortcut icon" href="images/logopagina.png">
	<link rel="stylesheet" href="estilos/estilo.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Baloo+2&display=swap');
</style> 
<style type="text/css">
	h3{
font-size: 16px; 
color: black;   
position: absolute;
top: -5px; left: 800px;
text-align: right;
}
</style>
<body>
<?php
/*------------------------ANADA TORREDEMBARRA-------------*/

/*
for ($num1=0; $num1 <=47 ; $num1++) { 
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
*/
for ($num1=0; $num1 <=47 ; $num1++) { 
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


for ($num1=0; $num1 <=47 ; $num1++) { 
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

	$linea[0]["feiners"]["anada"][40][0] = "6:20";
	$linea[0]["feiners"]["anada"][40][1] = "7:05";
	$linea[0]["feiners"]["anada"][40][2] = "7:20";
	$linea[0]["feiners"]["anada"][40][3] = "7:40";
	
	$linea[0]["dissabtes"]["anada"][40][0] = "8:20";
	$linea[0]["dissabtes"]["anada"][40][1] = "9:30";
	$linea[0]["dissabtes"]["anada"][40][2] = "11:40";
	$linea[0]["dissabtes"]["anada"][40][3] = "13:45";

	$linea[0]["diumenge"]["anada"][40][0] = "8:55";
	$linea[0]["diumenge"]["anada"][40][1] = "10:30";
	$linea[0]["diumenge"]["anada"][40][2] = "12:00";
	$linea[0]["diumenge"]["anada"][40][3] = "16:10";

	$linea[0]["nocturn"]["anada"][40][0] = "23:25";
	$linea[0]["nocturn"]["anada"][40][1] = "1:00";
	$linea[0]["nocturn"]["anada"][40][2] = "2:30";
	$linea[0]["nocturn"]["anada"][40][3] = "4:30";

/*------------------------TORNADA TORREDEMBARRA-------------*/

	$linea[0]["feiners"]["tornada"][40][15] = "12:30";
	$linea[0]["feiners"]["tornada"][40][16] = "13:10";
	$linea[0]["feiners"]["tornada"][40][17] = "13:20";
	$linea[0]["feiners"]["tornada"][40][18] = "14:15";

	$linea[0]["dissabtes"]["tornada"][40][0] = "8:20";
	$linea[0]["dissabtes"]["tornada"][40][1] = "9:30";
	$linea[0]["dissabtes"]["tornada"][40][2] = "11:40";
	$linea[0]["dissabtes"]["tornada"][40][3] = "13:45";

	$linea[0]["diumenge"]["anada"][40][1] = "10:30";
	$linea[0]["diumenge"]["anada"][40][2] = "12:00";
	$linea[0]["diumenge"]["anada"][40][3] = "16:10";
	$linea[0]["diumenge"]["anada"][40][4] = "17:20";




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
	$linea[0]["zona"][11]="L'OASI (Recorregut urbà L.11 El Vendrell) ";
	$linea[0]["zona"][12]="CALAFELL (Creu Roja)";
	$linea[0]["zona"][13]="CALAFELL (Estació de tren) ";
	$linea[0]["zona"][14]="BELLVEI (Centre)";
	$linea[0]["zona"][15]="AQUALEÓN (del 21 de juny a l'11 de setembre)";
	$linea[0]["zona"][16]="EL VENDRELL (Hospital) ";
	$linea[0]["zona"][17]="EL VENDRELL (Les Mates)";
	$linea[0]["zona"][18]="EL VENDRELL (Estació d'autobusos) ";
	$linea[0]["zona"][19]="EL VENDRELL (Castellers) ";
	$linea[0]["zona"][20]="EL VENDRELL (Torreblanca)";
	$linea[0]["zona"][21]="Cruïlla COMA-RUGA (Lateral Crta. N340) ";
	$linea[0]["zona"][22]="EL FRANCÀS (Càmping Francàs) ";
	$linea[0]["zona"][23]="EL FRANCÀS (La Tenalla-Gal·la Placídia)";
	$linea[0]["zona"][24]="BERÀ (Mas Roig) ";
	$linea[0]["zona"][25]="ARC DE BERÀ";
	$linea[0]["zona"][26]="BONASTRE (Poble)";
	$linea[0]["zona"][27]="BONASTRE (La Vinya)";
	$linea[0]["zona"][28]="RODA DE BERÀ (Av. Sant Jordi) ";
	$linea[0]["zona"][29]="Cruïlla RODA DE BERÀ (La Plana)";
	$linea[0]["zona"][30]="Cruïlla CREIXELL";
	$linea[0]["zona"][31]="CREIXELL (C/ de Egara)";
	$linea[0]["zona"][32]="CREIXELL (Av. Navarra - C/ Pallars)";
	$linea[0]["zona"][33]="CREIXELL (Av. Juli Cèsar, 87)";
	$linea[0]["zona"][34]="TORREDEMBARRA (Marítima)";
	$linea[0]["zona"][35]="TORREDEMBARRA (Les Àmfores)";
	$linea[0]["zona"][36]="TORREDEMBARRA (Clarà) ";
	$linea[0]["zona"][37]="TORREDEDEMBARRA (L'Antina)";
	$linea[0]["zona"][38]="TORREDEMBARRA (IES R. de la Torre) ";
	$linea[0]["zona"][39]="TORREDEMBARRA (Tròpic) ";
	$linea[0]["zona"][40]="TORREDEMBARRA (Av. Sant Jordi) ";
	$linea[0]["zona"][41]="ALTAFULLA (Marqués de Tamarit)";
	$linea[0]["zona"][42]="ALTAFULLA (Les Piscines)";
	$linea[0]["zona"][43]="ALTAFULLA (Benzinera)";
	$linea[0]["zona"][44]="ALTAFULLA (Centre Comercial)";
	$linea[0]["zona"][45]="TARRAGONA (Tuset - Complex Sta. Tecla)";
	$linea[0]["zona"][46]="TARRAGONA (Rambla Vella - Balcó/Hotel - Hosp. Sta. Tecla) ";
	$linea[0]["zona"][47]="TARRAGONA (Estació d'autobusos - Hotel - Pl. I. Tarraco)";

?>
<header style="background-color:gray;color: black; border:3px black;">
<center>
 <div style="position: absolute;"> 
  <a href="index.php"><img src="images/ico_home.png" class="home-logo" onmouseout="this.src='images/ico_home.png';" onmouseover="this.src='images/ico_home2.png';"></a>
  <a href="map.php"><img src="images/ico_mapa.png" class="home-logo" onmouseout="this.src='images/ico_mapa.png';" onmouseover="this.src='images/ico_mapa2.png';"></a>
  <a href="contact.php"><img src="images/ico_contact.png" class="home-logo" onmouseout="this.src='images/ico_contact.png';" onmouseover="this.src='images/ico_contact2.png';"></a>
</div>
<h2>Autocars Penedès</h2>
</center>
<h3>Email: maca494@vidalibarraquer.net Telefon: 611491869</h3>
</header>
    <div class="inicio">
    	<img src="images/logovendrell_2.png" class="imglogo">
        <h1>Detalls de Línies </h1>
        <div>
    <form action="Horaris_Penedes.php" method="POST">
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
		echo "<h4>Direcció Vilafranca -> El vendrell -> Torredembarra -> Tarragona</h4></h2>";
	}
	else if($_POST["direccio"]=="tornada"){
		echo " <h4>Direcció Tarragona -> Torredembarra -> El vendrell -> Vilafranca</h4></h2>";
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