<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<link href="../../css/slideshow2.css" rel="stylesheet"type="text/css">
	<link href="../../css/style.css" rel="stylesheet"type="text/css">
</head>
<body style="margin: 0;">
  <?php
	echo file_get_contents("../header.php");
	 ?>
	<div class="div_grande">
		<div class="div_immagine">

			<div class="opacity_maker"></div>
				<img src="../../images/logo.webp" class="higher_text" align="center">
				<img src="../../images/benvenuto.webp" class="images">
				<h1 class="center_text">Benvenuto su UniFiChiamoci</h1>
				<h2 class="lower_text">la comunità di giornalismo fatta da studenti per studenti</h2>

		</div>
		<div class="div_immagine">
		<div class="div_grande">
			<div class="../../images/opacity_maker"></div>
				<img src="../../images/logo.webp" class="higher_text" margin="center">
				<img src="../../images/rubriche.webp" class="images">
				<h1 class="center_text">Rubriche</h1>
				<h2 class="lower_text">Lasciati affascinare dai racconti dinamici ed originali del nostro team di redazione</h2>
			</div>
		</div>
		<div class="div_immagine">

			<div class="opacity_maker"></div>
				<img src="../../images/logo.webp" class="higher_text" align="center">
				<img src="../../images/podcast.webp" class="images">
				<h1 class="center_text">Podcast</h1>
				<h2 class="lower_text">La voce degli studenti, letteralmente, rappresentata dalla squadra di UniFiChiamoci</h2>

		</div>
		<div class="div_immagine">

			<div class="opacity_maker"></div>
				<img src="../../images/logo.webp" class="higher_text" >
				<img src="../../images/vita.webp" class="images">
				<h1 class="center_text">Vita universitaria</h1>
				<h2 class="lower_text">Scopri l'atmosfera UniFi attraverso il nostro SOS orientamento, collaborazioni con altre associazioni studentesche e  le novità su eventi e vicende che circondano la nostra città</h2>

		</div>
		<div class="div_immagine">

			<div class="opacity_maker"></div>
				<img src="../../images/logo.webp" class="higher_text" align="center">
				<img src="../../images/chisiamo.webp" class="images">
				<h1 class="center_text">Chi siamo</h1>
				<h2 class="lower_text">Scopri la squadra che da dietro le quinte gestisce il progetto UniFiChiamoci</h2>

		</div>
		<div class="div_immagine">

			<div class="opacity_maker"></div>
				<img src="../../images/logo.webp" class="higher_text" align="center">
				<img src="../../images/contattaci.webp" class="images">
				<h1 class="center_text">Contattaci!</h1>
				<h2 class="lower_text">Mettiti in contatto con noi per proporre temi, denunciare fatti ed entrare a far parte della redazione</h2>

		</div>

		<button type="submit" name="left_slide" onclick="slide_to_left();" class="left_button" >
			<svg viewBox="0 0 21 41"><path d="M20.3 40.8L0 20.5 20.3.2l.7.7L1.3 20.5 21 40.1z" fill="white" stroke-width="3" stroke="white"></path></svg>
		</button>
		<button type="submit" name="right_slide" onclick="slide_to_right();" class="right_button">
			<svg viewBox="0 0 21 41" style="width: 100%;height: 100%; transform: rotate(180deg);">
				<path d="M20.3 40.8L0 20.5 20.3.2l.7.7L1.3 20.5 21 40.1z" fill="white" stroke-width="3" stroke="white"></path>
			</svg>
		</button>
		<div style="width: 492px; margin-left: 47%" class="d-flex p-2">
      <ul class="nav" style="list-style-type:none;overflow:hidden;margin-top:-100px;position:absolute;">
        <li class="nav-item" style="margin-left:-50px;">
          <span class="dot" onclick="switch_to(1)"></span>
        </li>
        <li class="nav-item">
          <span class="dot" onclick="switch_to(2)"></span>
        </li>
        <li class="nav-item">
          <span class="dot" onclick="switch_to(3)"></span>
        </li>
        <li class="nav-item">
          <span class="dot" onclick="switch_to(4)"></span>
        </li>
        <li class="nav-item">
          <span class="dot" onclick="switch_to(5)"></span>
        </li>
        <li class="nav-item">
          <span class="dot" onclick="switch_to(6)"></span>
        </li>
	</div>

	<div height="350px" width="100%">
		<div height="50px" width="100%">
			<h1 align="center" >Post Recenti</h1>
		</div>
		<div class="flex-container" >
			<div>
				<div>
				<img src="../../images/duomo.jpg" class="img_articolo" >
				<p align="center">articolo</p>
				</div>
			</div>
			<div>
				<div>
					<img src="../../images/duomo.jpg" class="img_articolo" >
					<p align="center">articolo</p>
				</div>
			</div>
			<div>
				<div>
					<img src="../../images/duomo.jpg" class="img_articolo" >
					<p align="center">articolo</p>
				</div>
			</div>
		</div>
	</div>
	<div class="div_citazioni" style="background-image: url('../../images/gigliosfondo.jpg');background-repeat: no-repeat; background-size: 100% 100%;">
		<h1>Cosa è stato detto di noi</h1>
		<div class="flex-container">
			<div class="colonne">
				<div><img src="../../images/pippo.webp" class="img_citazioni"></div>
				<div><h1>Abramo Lilcoln</h1></div>
				<div><h3>16º Presidente degli Stati Uniti d'America</h3></div>
				<div><h2>Leggete UniFiChiamoci, il miglior giornale online dal 1861</h2></div>
				<div></div>
				<div><h1 style="font-size: 50px">"</h1></div>
			</div>
			<div class="colonne" >
				<div><img src="../../images/confucio.webp" class="img_citazioni"></div>
				<div><h1>Confucio</h1></div>
				<div><h3>Filosofo cinese</h3></div>
				<div><h2>Dai un' informazione al giorno ad un uomo e lo intratterrai, insegnagli a leggere UniFiChiamoci e troverà il sapere infinito... </h2></div>
				<div></div>
				<div><h1 style="font-size: 50px">"</h1></div>
			</div>
			<div class="colonne">
				<div><img src="../../images/grumpy.webp" class="img_citazioni"></div>
				<div><h1>Grumpy cat</h1></div>
				<div><h3>Web celebrity</h3></div>
				<div><h2>Miao.</h2></div>
				<div></div>






				<div><h1 style="font-size: 50px">"</h1></div>
			</div>
		</div>
	</div>
	<h1>Dai un'occhiata alle nostre rubriche</h1>
	<div>
	 <div class="tabella">
		<div class="div_laterale">
			<div class="ruota_testo" ><h1>Cultura</h1></div>
		</div>
			<div class="div_testino"><p>La cultura fiorentina <br> presentata in modo <br> dinamico attraverso<br> occhi studenteschi</p></div>
	</div>
	<div><img class="div_img_tabella" src="../../images/ponte.webp"></div>
	</div>
	<div style="margin-top: 50px;">
	 <div class="tabella">
		<div class="div_laterale">
			<div class="ruota_testo" style="margin-left:30%" ><h1>Diari</h1></div>
		</div>
			<div class="div_testino"><p>Racconti vividi ed <br> esperienze <br> indimenticabili<br> nell'orbita fiorentina</p></div>
	</div>
	<div><img class="div_img_tabella" src="../../images/camper.webp"></div>
	</div>
	<div style="margin-top: 50px;">
	 <div class="tabella">
		<div class="div_laterale">
			<div class="ruota_testo"style="margin-left:-10%" ><h1>Recensioni</h1></div>
		</div>
			<div class="div_testino"><p>Riassunti e pareri su <br>libri, film, biblioteche<br> universitarie, manuali e<br> chi più ne ha più ne<br>metta!</p></div>
	</div>
	<div><img class="div_img_tabella" src="../../images/cinema.webp"></div>
	</div>
	<div style="margin-top: 50px;">
	 <div class="tabella">
		<div class="div_laterale">
			<div class="ruota_testo" style="margin-left:35%" ><h1>Sport</h1></div>
		</div>
			<div class="div_testino"><p>Premi, risultati e novità <br>sui maggiori eventi<br> sportivi a livello<br> cittadino e nazionale</p></div>
	</div>
	<div><img class="div_img_tabella" src="../../images/calcio.webp"></div>
	</div>
	<iframe src="../footer.html" width="100%" height="142px;" style="border: none; margin-top: 10px;"></iframe>
	<script src="../../js/slideshow2.js "charset="utf-8"></script>
</body>
</html>
