<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" type="text/css" href="mostrador.css">
	<title>Mostrador</title>
</head>
<body>
	<!-- Contenedor Principal  -->
	<div class="main-wrapper">
		<!-- Titulo -->
		<h1 class="main-title">Categorias</h1>

		<div class="container">
			<!-- Inputs de las Categorias -->
			<input name="category-css" id="all" type="radio" checked>
			<input name="category-css" id="webdesign" type="radio">
			<input name="category-css" id="webdevelopment" type="radio">
			<input name="category-css" id="graphicdesign" type="radio">
			<input name="category-css" id="javascript" type="radio">
			
			<!-- Categorias -->
			<ul class="list-category">
				<li><label for="all">Todos</label></li>
				<li><label for="webdesign">Dual</label></li>
				<li><label for="webdevelopment">Prácticas profesionales</label></li>
			</ul>


			<!-- Lista de Imagenes -->
			<ul class="list-images clearfix">
				<li class="type-webdesign"><span>Diseño web</span></li>
				<li class="type-webdevelopment"><span>Desarrollo web</span></li>
				<li class="type-javascript"><span>Javascript</span></li>
				<li class="type-javascript"><span>Javascript</span></li>
				<li class="type-webdesign"><span>Diseño web</span></li>
				<li class="type-webdesign"><span>Diseño web</span></li>
				<li class="type-javascript"><span>Javascript</span></li>
				<li class="type-webdevelopment"><span>Desarrollo web</span></li>
				<li class="type-graphicdesign"><span>Diseño grafico</span></li>
				<li class="type-graphicdesign"><span>Diseño grafico</span></li>
				<li class="type-graphicdesign"><span>Diseño grafico</span></li>
				<li class="type-webdevelopment"><span>Desarrollo web</span></li>
			</ul>
		</div>
	</div>
</body>
</html>