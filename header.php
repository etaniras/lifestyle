<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Template with footer element</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />


	</head>
	<body>
<nav class="top">
	<ul><p class="navtext">
  <li><a href="#home">Blog</a></li>
  <li><a href="#news">Home</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">Authors</a></li>
  <li><a href="#about">Featured Posts</a></li>
  <li><a href="#about">Archive</a></li>
  <li><a href="#about">About</a></li>
  </p>
</ul>
</nav>
		<header class="header">
			<h1 class="logo"><?php bloginfo('name'); ?></h1>
			<p><?php bloginfo('description'); ?></p>
		</header class="header">