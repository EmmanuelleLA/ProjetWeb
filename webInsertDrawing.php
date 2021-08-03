<?php
  // Data from client
	$posX = NULL;
	if (isset($_GET['posX'])) 
		$posX = $_GET['posX'];
	$posY = NULL;
	if (isset($_GET['posY'])) 
		$posY = $_GET['posY'];
?>
<!DOCTYPE html>

<html>
	<!-- En tête -->
	<head>
		<!-- Fichiers CSS -->
		<link rel='stylesheet' type='text/css' href='./css/drawing.css' media='screen' />
		<link rel='stylesheet' type='text/css' href='./css/web.css' media='screen' />
		<link rel='stylesheet' type='text/css' href='./css/border.css' media='screen' />

		<!-- Fichiers Javascripts -->
		<script type='text/javascript' src='./js/jquery-2.0.3.min.js'></script>
		<script type='text/javascript' src='./js/jcanvas.min.js'></script>
		<script type='text/javascript' src='./js/ajxInsertDrawing.js'></script>
		<script type='text/javascript' src='./js/ajxCancel.js'></script>

		<!-- Encodage UTF8 pour les accents -->
		<meta charset='UTF-8'>

		<!-- Icône de l'onglet -->
		<link rel='icon' type='image/png' href='./images/favicon.png' />

		<!-- Titre de l'onglet -->
		<title>PostiX V8</title>
	</head>



	<!-- Corps du document -->
	<body>
		<!-- Wrapper -->
		<div class='wrapper'>
			<section>
				<canvas id="drawingCanvas" width="1000" height="700"></canvas>
			</section>
			<section class="icone">
				<article class="width">
					<img class="widthImg widthImg1 selectedImg" src="./medias/trait1.png"/><spam hidden>1</spam>
					<img class="widthImg widthImg2" src="./medias/trait2.png"/><spam hidden>2</spam>
					<img class="widthImg widthImg3" src="./medias/trait3.png"/><spam hidden>3</spam>
				</article>

				<article class="color">
					<img class="colorImg colorImgBlue selectedImg" src="./medias/circle_blue.png"/><spam hidden>Blue</spam>
					<img class="colorImg colorImgGreen" src="./medias/circle_green.png"/><spam hidden>Green</spam>
					<img class="colorImg colorImgYellow" src="./medias/circle_yellow.png"/><spam hidden>Yellow</spam>
					<img class="colorImg colorImgOrange" src="./medias/circle_orange.png"/><spam hidden>Orange</spam>
					<img class="colorImg colorImgRed" src="./medias/circle_red.png"/><spam hidden>Red</spam>
				</article>

				<article class="delete">
					<img class="deleteImg" src="./medias/ereaser2.png"/>
				</article>

				<article class="delay">
					<img class="delayImg delayImg1 selectedImg" src="./medias/delay0.png"/><spam hidden>1</spam>
				</article>
			</section> 
			<div class='bar'></div>
			<header>
				<h1> Votre dessin </h1>
			</header>
			<section>
			<!-- selectedBorderImg -->
				<input class='title'type='text' name='title' placeholder='Titre du dessin' autofocus />
				1<input id='sizeBar' type='range' min='1' max='3' value='1'/>3
				<img class="borderImg" src="./medias/circle_blue.png"/><spam hidden>Blue</spam>
				<img class="borderImg" src="./medias/circle_green.png"/><spam hidden>Green</spam>
				<img class="borderImg" src="./medias/circle_yellow.png"/><spam hidden>Yellow</spam>
				<img class="borderImg" src="./medias/circle_orange.png"/><spam hidden>Orange</spam>
				<img class="borderImg" src="./medias/circle_red.png"/><spam hidden>Red</spam>
				<input class='btnSend' type='submit' value='Ajouter' />
				<input class='negate' type='submit' value='Annuler' />
				<?php
					echo "<input class='posX' type='hidden' name='posX' value='$posX' />";
					echo "<input class='posY' type='hidden' name='posY' value='$posY' />";
				?>
			</section>
		</div>
	</body>
</html>