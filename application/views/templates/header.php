<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>CarFuel - <?= $page_title; ?></title>

	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/style_mike.css')?>">
	
</head>
<body>

	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand brand" href="/"><i class="fa fa-car"></i>  CarFuel</a>
			</div>
			<div>
				<ul class="nav navbar-nav navbar-right">
				    <li><?php echo anchor('signup', 'Registe-se grátis', array('class' => 'link')); ?></li>
				    <li><?php echo anchor('login', 'Entrar', array('class' => 'link')); ?></li>
				 </ul>
			</div>
		</div>
	</nav>
	

	<div class="container">