<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $site ?></title>

	<link rel="icon" href="./assets/images/favicon/favicon.png" sizes="32x32">
	<link rel="icon" href="./assets/images/favicon/favicon.png" sizes="192x192">
	<link rel="apple-touch-icon" href="./assets/images/favicon/favicon.png">
	<meta name="msapplication-TileImage" content="./assets/images/favicon/favicon.png">

	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">



	<link crossorigin rel="preload" href="./assets/css/reset.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<link crossorigin rel="preload" href="./assets/css/fonts.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

	<noscript>
		<link rel="stylesheet" href="./assets/css/fonts.css">
	</noscript>

	<!-- bootstrap.min.css -->
	<style>
		<?php include './assets/css/bootstrap.min.css'; ?>
	</style>


	<link crossorigin rel="preload" href="./assets/splide/css/splide-core.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="./assets/splide/css/splide-core.min.css">
	</noscript>
	<link crossorigin rel="preload" href="./assets/splide/css/splide.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="./assets/splide/css/splide.min.css">
	</noscript>


	<link crossorigin rel="preload" href="./assets/css/style.css?v=<?= $jscssverion ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">

	<noscript>
		<link rel="stylesheet" href="./assets/css/style.css?v=<?= $jscssverion ?>">
	</noscript>

	<link href="./assets/css/mobile.css?v=<?= $jscssverion ?>" rel="stylesheet" media="screen and (max-width: 600px)">

	<!-- critical.css -->
	<style>
		<?php include './assets/css/critical.css'; ?>
	</style>

	<!-- Recaptcha Here -->
	<!-- <script src="https://www.google.com/recaptcha/api.js?render=<?= $recaptcha_client_secret ?>"></script> -->


</head>

<body>