<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Manel M5</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body style="background-image: url('https://static2-sevilla.abc.es/media/sevilla/2018/04/07/s/calle-abierta-remedios-kP7C--620x349@abc.jpg')">
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
    <header>
        <h2>Taula de Bus Tarragona EMT <img src="https://i.imgur.com/NSrWjKH.png" class="imglogo"></h2>
        <div>
    <form action="m5_2.php" method="POST">
    	<h4>Linea:
	<select name="line">
		<?php
		foreach ($linea as $key => $value) {
			echo '<option value="'.$key.'">'.$key.'</option>';
		}

		?>
	   
	</select>
    	<br>Dia:

<select name="dia">
		<?php
		foreach ($linea[3] as $key => $value) {
			echo '<option value="'.$key.'">'.$key.'</option>';
		}

		?>
	   
	</select>

    	<br>Direcció:

	<select name="direccio">
		<?php
		foreach ($linea[3]["dissabtes"] as $key => $value) {
			echo '<option value="'.$key.'">'.$key.'</option>';
		}

		?>
	   
	</select></h4>


<input type="submit" value="enviar" name="enviar">
</form>
</div>




    </header>
    <div class="contenedor">
        <section>
            <h2>Introduce la linea que quieras y dia:</h2>
            <?php

if(isset($_POST["enviar"])){

	foreach ($linea[$_POST["line"]][$_POST["dia"]][$_POST["direccio"]] as $key => $value) {
		echo $linea[$_POST["line"]]["zona"][$key]." ---------- ".$value."<br>";

	}


}

?></center>


        </section>


        <aside>
            <p>Esta es la barra de la derecha</p>




        </aside>
    </div>
  

    

  <footer>
        <p>Credtos a ManelCC y CaCa</p>
    </footer>


</body>
</html>