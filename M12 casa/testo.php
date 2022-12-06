<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Manel M5</title>
	<link rel="stylesheet" href="testo.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Baloo+2&display=swap');
</style> 
<body style="background-image: url('https://i.imgur.com/aDKPdTP.png')">
<?php


	$linea[3]["dissabtes"]["tornada"][0] = "7:03";
	$linea[3]["dissabtes"]["tornada"][1] = "7:14";
	$linea[3]["dissabtes"]["tornada"][2] = "7:05";

	$linea[3]["dissabtes"]["anada"][0] = "7:34";
	$linea[3]["feiners"]["tornada"][0] = "8:23";
	$linea[3]["feiners"]["anada"][0] = "9:22";
	$linea[3]["festius"]["tornada"][0] = "10:00";
	$linea[3]["festius"]["anada"][0] = "11:11";

	$linea[3]["zona"][0]="Marti franques";
	$linea[3]["zona"][1]="Varil Morte";
	$linea[3]["zona"][2]="Mirt Erin";





	$linea[5]["dissabtes"]["tornada"][0] = "7:03";
	$linea[5]["dissabtes"]["tornada"][1] = "7:14";
	$linea[5]["dissabtes"]["anada"][0] = "7:34";
	$linea[5]["feiners"]["tornada"][0] = "8:23";
	$linea[5]["feiners"]["anada"][0] = "9:22";
	$linea[5]["festius"]["tornada"][0] = "10:00";
	$linea[5]["festius"]["anada"][0] = "11:11";

	$linea[5]["zona"][0]="Kare Trina";
	$linea[5]["zona"][1]="Vinor Kino";
	$linea[5]["zona"][2]="Carlos Niron";



/*echo (count($linea));*/

?>
<header style="background-color: black;color: white">


</header>
    <div class="inicio">
    	<img src="https://i.imgur.com/X7ytkva.png" class="imglogo">
        <h1>Detalls de Línies </h1>
        <div>
    <form action="testo.php" method="POST">
    	<h4>Linea: 
	<select name="line" class="content-select">
		<?php
		foreach ($linea as $key => $value) {
			echo '<option value="'.$key.'">'.$key.'</option>';
		}

		?>
	   
	</select>
    	<br>Dia: 

<select name="dia" class="content-select">
		<?php
		foreach ($linea[3] as $key => $value) {
			echo '<option value="'.$key.'">'.$key.'</option>';
		}

		?>
	   
	</select>

    	<br>Direcció: 

	<select name="direccio" class="content-select">
		<?php
		foreach ($linea[3]["dissabtes"] as $key => $value) {
			echo '<option value="'.$key.'">'.$key.'</option>';
		}

		?>
	   
	</select></h4>



	<input type="submit" name="enviar" class="slide-hover-left-1"  value="Enviar">

</form>
</div>




    </div>
    <div class="contenedor">
        <section>
            <?php

if(isset($_POST["enviar"])){
echo "<h2>Horarios de linea ".$_POST["line"].":</h2>";

	foreach ($linea[$_POST["line"]][$_POST["dia"]][$_POST["direccio"]] as $key => $value) {
		echo $linea[$_POST["line"]]["zona"][$key]." ---------- ".$value."<br>";

	}


}

?>


        </section>


        
    </div>
  

    

  <footer>
        <p>Credtos a ManelCC y CaCa</p>
    </footer>


</body>
</html>