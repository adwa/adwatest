<?php

$lang_default = 'pl';
$lang_dir = 'lang/'; 
$lang_duration = 3600*300; 

function lang_file ($language) {
	global $lang_dir;
	if (file_exists($lang_dir.$language.'.php')) {
		return true;
	} else {
		return false;
	}
}
$lang_get = basename(strip_tags($_GET['lang']));
if (!empty($lang_get)) {
	if (lang_file($lang_get)) {
		setcookie("lang", $lang_get, time()+$lang_duration);
		header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']);
	} else {
		if (!isset($_COOKIE['lang'])) {
			setcookie("lang", $lang_default, time()+$lang_duration);
			header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']);
		} else {
			setcookie("lang", $lang_default, time()+$lang_duration);
			header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']);
		}
	}
} else {
	if (!isset($_COOKIE['lang'])) {
		setcookie("lang", $lang_default, time()+$lang_duration);
		header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']);
	}
}
if (isset($_COOKIE['lang'])) {
	if (lang_file($_COOKIE['lang'])) {
		$lang_file = $_COOKIE['lang'];
	} else {
		$lang_file = $lang_default;
	}
}
include ($lang_dir.$lang_file.'.php');
?>