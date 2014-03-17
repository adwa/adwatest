<?php
session_start();
require_once('multilanguage.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>ADWA TEAM</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />
	<link href="style/fixed-positioning.css" rel="stylesheet" type="text/css" />
	<link href="style/main.css" rel="stylesheet" type="text/css" />
	<link href="style/menu.css" rel="stylesheet" type="text/css" />
	<link href="style/menujpl.css" rel="stylesheet" type="text/css" />
	<link href="style/menujen.css" rel="stylesheet" type="text/css" />
	<link rel="SHORTCUT ICON" href="images/icon.png"type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Flavors' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="fancyNaw"></div>
		<ul  class="fancyNav">
			<li id="home"><a href="javascript:jumpScroll1()"><?php echo $lang['about']; ?></a></li>
			<li id="news"><a href="javascript:jumpScroll2()"><?php echo $lang['group']; ?></a></li>
			<li id="about"><a href="javascript:jumpScroll3()"><?php echo $lang['contact']; ?></a></li>
			</ul>
			<ul  class="fancyNap">
			<li id="pl"><a href="?lang=pl"><img src="images/PLflag.png" height="100%" width="100%"></a></li>
			</ul>						<ul  class="fancyNae">
						<li id="eng"><a href="?lang=ang"><img src="images/GBflag.png" height="100%" width="100%"></img></a></li>
						</ul>
	<div id="bg1" data-0="background-position:0px 0px;" data-end="background-position:-500px -5000px;"></div>
	<div id="bg2" data-0="background-position:0px 0px;" data-end="background-position:-500px -4000px;"></div>
	<div id="bg3" data-0="background-position:0px 0px;" data-end="background-position:-500px -3000px;"></div>

	<div id="progress" data-0="width:0%;background:hsl(200, 100%, 50%);" data-end="width:100%;background:hsl(920, 100%, 50%);"></div>

	<div id="intro" data-0="opacity:1;top:3%;transform:rotate(0deg);transform-origin:0 0;" data-500="opacity:0;top:-10%;transform:rotate(-90deg);">
		<h1><?php echo $lang['about']; ?></h1>		
		<p>
        <table class="fortable" align="center" >
            <tr>
                <td height="100%" width="100%">
                    <img src="images/logo.png" class="logo" align="left"></img>
                    <p><?php echo $lang['weare']; ?></p>
                    <p class="arrows">▼&nbsp;▼&nbsp;▼</p>
                </td>
            </tr>
        </table>
    </div>
    <div id="transform" data-500="transform:scale(0) rotate(0deg);" data-1000="transform:scale(1) rotate(1440deg);opacity:1;" data-1600="" data-1700="transform:scale(5) rotate(3240deg);opacity:0;">
		<table class="teamtable">
            <tr>
            <td colspan="3"><h2>Amentes Team Development</h2></td>
            </tr>
            <tr class="ourphoto">
                <td width="33.3%"><img src="images/aboutusphoto/aw-min.png" class="foto"/></td>
                <td width="33.3%"><img src="images/aboutusphoto/wo-min.png" class="foto"/></td>
                <td width="33.3%"><img src="images/aboutusphoto/mk-min.png" class="foto"/></td>
            </tr>
            <tr class="my">
                <td><h6>Adrian Wojdat</h6></td>
                <td><h6>Wasyl Onufriychuk</h6></td>
                <td><h6>Michael Krasnopolskyi</h6></td>
            </tr>
            <tr class="skils">
                <td><h5>PHP,CSS,</wbr>JS,RoR</h5></td>
                <td><h5>HTML,CSS,</wbr>PHP</h5></td>
                <td><h5>PhotoShop</h5></td>
</td>
            </tr>
        </table>
</div>
	<div id="properties" data-1700="top:100%;" data-2200="top:0%;" data-3000="display:block;" data-3700="top:-100%;display:none;">
		<h2><?php echo $lang['description']; ?></h2>
	</div>
    <div id="easing_wrapper" data-0="display:none;" data-2500="display:block;" data-3000="background:rgba(20,121,149, 0);color[swing]:rgb(20,121,149);" data-3500="background:rgba(20,121,149,0.94);color:rgb(20,121,149);">
    </div><div class="center">
        <div id="contact" data-3500="top[cubic]:130%;0em;" data-4000="top:10%;">
            <div class="contacttext"><h2><?php echo $lang['contact']; ?></h2></div>
		<a name="Kontakt"></a>
		 <?php
		         if(empty($_POST['submit'])){
			?><center>
             <div id="form">
					<form action="http://adwa.adwmicro.pl/index.php" method="post">
							
						<input type="text" name="imienazwisko" style="width:90%;" placeholder="<?php echo $lang['name']; ?>"/><br />
						<input type="email" name="email" style="width:44.6%" placeholder="E-Mail"/>
						<input type="tel" name="telefon" style="width:44.6%" placeholder="Telefon."/><br />

						<textarea name="trescwiadomosci" cols="30" rows="6" style="width:90%;"placeholder="<?php echo $lang['massage']; ?>"></textarea><br />
						<input type="submit" name="submit" value=<?php echo $lang['send']; ?>> 
						<input type="reset" name="reset" value=<?php echo $lang['clear']; ?>>
					</form>
                 </div></div>
				<?php

				}elseif(!empty($_POST['imienazwisko']) && !empty($_POST['email']) && !empty($_POST['telefon'])  && !empty($_POST['trescwiadomosci'])){
				if($_POST['email']){
				$adresemail='adwmicro@adwmicro.pl, wasyl@adwmicro.pl';
				$wiadomosc="Od: $_POST[imienazwisko]\n\n($_POST[email])\n\n($_POST[telefon])\n\n$_POST[trescwiadomosci]" ;
				$nadawca="From: $_POST[email]";
					@mail($adresemail, "Formularz kontaktowy z www.adwa.adwmicro.pl", "$wiadomosc", "$nadawca");
						echo "<span style=\'color: #00D800; font-weight: bold; \'>Dziękujemy, formularz został wysłany.</span>";
				}
				else{
					 echo "<span style=\'color: #FF0000; text-align: center; font-weight: bold;\''>Wprowadzony adres E-Mail jest niepoprawny!!!</span>";
					}
				}
				else{
					 echo "<span style=\'color: #FF0000; text-align: center; font-weight: bold;\''>Cofnij i wypełnij wszystkie pola formularza!!!</span>";
					}
		?>
        </center></div>
	<div id="scrslbar" data-0="top:0%;margin-top:2px;" data-end="top:100%;margin-top:-52px;"></div>
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
	<script type="text/javascript">
	 function jumpScroll1() {
   	window.scroll(0,0); 
	}
	</script>
	</script>
	<script type="text/javascript">
	function jumpScroll2() {
   	window.scroll(0,1000); 
	}
	</script>
	</script>
	<script type="text/javascript">
	function jumpScroll3() {
   	window.scroll(0,15000); 
	}
	</script>
</body>
</html>
