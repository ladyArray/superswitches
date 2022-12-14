<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>SuperSwitches</title>
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?=base_url?>src/assets/img/favicon/favicon.ico">
		<link rel="stylesheet" href="<?=base_url?>src/assets/css/index.css" />
	</head>
	<body>
		<div id="container">
			<!-- CABECERA -->
			<header id="header">
				<div id="logo">
				<img src="src/assets/img/logo.webp" alt="Logo de SuperSwitches" />
					<a href="<?=base_url?>">
          SuperSwitches
					</a>
				</div>
			</header>

			<!-- MENU -->
			<?php $categorias = Utils::showCategorias(); ?>
			<nav id="menu">
				<ul>
					<li>
						<a href="<?=base_url?>">Inicio</a>
					</li>
					<?php while($cat = $categorias->fetch_object()): ?>
						<li>
							<a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
						</li>
					<?php endwhile; ?>
				</ul>
			</nav>

			<div id="content">
