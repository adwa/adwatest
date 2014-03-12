<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>ADWA TEAM</title>

	<link href="style/fixed-positioning.css" rel="stylesheet" type="text/css" />
	<link href="style/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="bg1" data-0="background-position:0px 0px;" data-end="background-position:-500px -10000px;"></div>
	<div id="bg2" data-0="background-position:0px 0px;" data-end="background-position:-500px -8000px;"></div>
	<div id="bg3" data-0="background-position:0px 0px;" data-end="background-position:-500px -6000px;"></div>

	<div id="progress" data-0="width:0%;background:hsl(200, 100%, 50%);" data-end="width:100%;background:hsl(920, 100%, 50%);"></div>

	<div id="intro" data-0="opacity:1;top:3%;transform:rotate(0deg);transform-origin:0 0;" data-500="opacity:0;top:-10%;transform:rotate(-90deg);">
		<h1>O nas</h1>
		<h2>zrobiliśmy już:</h2>
		<p><a href="http://test.adwmicro.pl/"><img src="images/demo.png" width="50%"/></a></p>
		<p class="arrows">▼&nbsp;▼&nbsp;▼</p>
	</div>

	<div id="transform" data-500="transform:scale(0) rotate(0deg);" data-1000="transform:scale(1) rotate(1440deg);opacity:1;" data-1600="" data-1700="transform:scale(5) rotate(3240deg);opacity:0;">
		<h2>Nasza załoga</h2>
		<p>Adrian Wojdat  Wasyl Onufriychuk Michael Krasnopolskyi</p>  
		<p>
		<img src="images/aboutusphoto/aw-min.jpg"/>	    	
		<img src="images/aboutusphoto/wo-min.jpg"/>		
		<img src="images/aboutusphoto/mk-min.jpg"/>
		</p>
		<p>PHP,CSS,JS  HTML,CSS,PHP PhotoShop</p>
	</div>

	<div id="properties" data-1700="top:100%;" data-2200="top:0%;" data-3000="display:block;" data-3700="top:-100%;display:none;">
		<h2>all numeric properties</h2>
		<p>width, height, padding, font-size, z-index, blah blah blah</p>
	</div>

	<div id="easing_wrapper" data-0="display:none;" data-3900="display:block;" data-4900="background:rgba(0, 0, 0, 0);color[swing]:rgb(0,0,0);" data-5900="background:rgba(0,0,0,1);color:rgb(255,255,255);" data-10000="top:0%;" data-12000="top:-100%;">
		<div id="easing" data-3900="left:100%" data-4600="left:25%;">
			<h2>easing?</h2>
			<p>sure.</p>
			<p>let me dim the <span data-3900="" data-4900="color[swing]:rgb(0,0,0);" data-5900="color:rgb(255,255,0);">lights</span> for this one...</p>
			<p data-5900="opacity:0;font-size:100%;" data-6500="opacity:1;font-size:150%;">you can set easings for each property and define own easing functions</p>
		</div>

		<div class="drop" data-6500="left:15%;bottom:100%;" data-9500="bottom:0%;">linear</div>
		<div class="drop" data-6500="left:25%;bottom[quadratic]:100%;" data-9500="bottom:0%;">quadratic</div>
		<div class="drop" data-6500="left:35%;bottom[cubic]:100%;" data-9500="bottom:0%;">cubic</div>
		<div class="drop" data-6500="left:45%;bottom[swing]:100%;" data-9500="bottom:0%;">swing</div>
		<div class="drop" data-6500="left:55%;bottom[WTF]:100%;" data-9500="bottom:0%;">WTF</div>
		<div class="drop" data-6500="left:65%;bottom[inverted]:100%;" data-9500="bottom:0%;">inverted</div>
		<div class="drop" data-6500="left:75%;bottom[bounce]:100%;" data-9500="bottom:0%;">bounce</div>
	</div>

	<div id="contact" data-10000="top[cubic]:100%;border-radius[cubic]:0em;background:rgb(0,50,100);border-width:0px;" data-12000="top:10%;border-radius:2em;background:rgb(190,230,255);border-width:10px;">
		<center><h2>Kontakt</h2>
		<p>Napisz do nas.</p></center>
		 <?php
				if(empty($_POST['submit'])){
			?>
					<form action="http://adwa.adwmicro.pl/index.php" method="post"> <!--nazwa strony na której znajduje się formularz-->
							Imię i Nazwisko:<br />
						<input type="text" name="imienazwisko" style="width:90%;"/><br />
							E-Mail:<br />
						<input type="text" name="email" style="width:90%"/><br />
							Treść wiadomości:<br />
						<textarea name="trescwiadomosci" cols="30" rows="6" style="width:90%;"></textarea><br />
						<input type="submit" name="submit" value="Wyślij formularz"/> 
						<input type="reset" value="Wyczyść"/>
					</form>
				<?php
				/*sprawdzenie wypełnienia wszystkich pól*/
				}elseif(!empty($_POST['imienazwisko']) && !empty($_POST['email']) && !empty($_POST['trescwiadomosci'])){
				
				if($_POST['email']){
				
				$adresemail='adwmicro@adwmicro.pl, wasyl@adwmicro.pl';
				$wiadomosc="Od: $_POST[imienazwisko] ($_POST[email])\n\n$_POST[trescwiadomosci]";
				$nadawca="From: $_POST[email]";
					@mail($adresemail, "Formularz kontaktowy z www.adwa.adwmicro.pl", "$wiadomosc", "$nadawca");
						echo "<span style=\"color: #00D800; font-weight: bold; \">Dziękujemy, formularz został wysłany.</span>";
				}
				else{
					 echo "<span style=\"color: #FF0000; text-align: center; font-weight: bold;\">Wprowadzony adres E-Mail jest niepoprawny!!!</span>"; 
					}
				}
				else{
					 echo "<span style=\"color: #FF0000; text-align: center; font-weight: bold;\">Cofnij i wypełnij wszystkie pola formularza!!!</span>"; 
					}
		?>
		
	</div>

	<div id="scrollbar" data-0="top:0%;margin-top:2px;" data-end="top:100%;margin-top:-52px;"></div>

	<script type="text/javascript" src="js/skrollr.min.js"></script>

	<!--[if lt IE 9]>
	<script type="text/javascript" src="dist/skrollr.ie.min.js"></script>
	<![endif]-->

	<script type="text/javascript">
	var s = skrollr.init({
		edgeStrategy: 'set',
		easing: {
			WTF: Math.random,
			inverted: function(p) {
				return 1-p;
			}
		}
	});
	</script>
</body>

</html>
