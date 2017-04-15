<!doctype html>
<html class="no-js" lang="en" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JQ Design Co. // <?php echo $title;?></title>
	<meta name="description" content="Straightforward, strategic design and web development based in Minneapolis, MN for the movers, shakers, and do-gooders. Let's make a mark, together.">

	<link rel="canonical" href="http://jqdesign.co/">

	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#e2088b">
	<meta name="apple-mobile-web-app-title" content="JQ Design">
	<meta name="application-name" content="JQ Design">
	<meta name="theme-color" content="#e2088b">
	<!-- Place favicon.ico in the root directory -->

<!--	open graph for facebook preview image-->
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php echo $title;?>">
	<meta property="og:description" content="<?php echo $pageDesc;?>">
	<meta property="og:url" content="<?php echo $pageLink;?>">
	<meta property="og:site_name" content="JQ Design Co.">
	<meta property="og:image" content="http://jqdesign.co/img/social/jq-preview-fb.png">
	<meta property="og:image" content="<?php echo $fbPic;?>">

<!--	twitter card-->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:description" content="<?php echo $pageDesc;?>">
	<meta name="twitter:title" content="<?php echo $title;?>">
	<meta name="twitter:url" content="<?php echo $pageLink;?>">
	<meta name="twitter:image" content="<?php echo $twitterPic;?>">

	<link href="https://fonts.googleapis.com/css?family=Sanchez|Yantramanav:300|Playfair+Display:900i" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<script src="https://use.fontawesome.com/5d7a631154.js"></script>
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="<?php echo $pageClass;?>">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<header>
	<a class="visuallyhidden" href="#content">Skip to content</a>
	<svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 720 468" aria-labelledby="logoTitle" role="img">
		<a href="./">
			<title id="logoTitle">JQ.</title>
			<path d="M553.4 403.8c-52.5 0-78.7-30.6-138.5-36 4.9-2.9 9.7-5.8 19.9-10.2 92.8-8.7 162.8-78.7 162.8-174.9 0-103-80.2-175.9-182.2-175.9S233.2 79.8 233.2 182.7c0 90.4 61.2 156.9 144.8 172.5 -30.1 17-49.1 33.5-63.6 53l22.4 20.9c17-11.2 38.4-18 62.7-18 46.2 0 86.5 50 155.5 50 48.1 0 81.1-16 104.9-54.9l-53.9-37.4C596.1 392.6 580.6 403.8 553.4 403.8zM304.2 182.7c0-68.5 49.6-115.6 111.3-115.6 61.7 0 111.3 47.1 111.3 115.6 0 68.5-49.6 115.6-111.3 115.6C353.7 298.4 304.2 251.2 304.2 182.7z" class="logo-q"/>
			<path d="M675.3 279.9c-26.2 0-38.9 12.6-38.9 39.4 0 26.7 12.6 39.4 38.9 39.4 26.2 0 38.9-12.6 38.9-39.4C714.2 292.5 701.6 279.9 675.3 279.9z" class="logo-dot"/>
			<path d="M70.5 71.8H135v191.1c0 27-13.3 38.1-33.8 38.1 -20.5 0-33.8-12.4-33.8-35.9H5.8c0 57.3 39.4 89 95.4 89 56.1 0 95.4-32.5 95.4-89V71.8 49.4 18.1H70.5V71.8z" class="logo-j"/></svg>
		</a>
	<nav>
		<ul>
			<li <?php if($pageClass == 'index') {echo 'class="active"';} ?>><a href="./">Work</a></li>

<!--			Add back in once about page is built -->
<!--		<li -->
			<?php
//			if($pageClass == 'about') {echo 'class="active"';} ?>
<!-- ><a href="/about">About me</a></li>-->
			<li <?php if($pageClass == 'resume'){echo 'class="active"';} ?>><a href="quintanilla-resume.pdf" target="_blank">R&eacute;sum&eacute;</a></li>
		</ul>
	</nav>
</header>