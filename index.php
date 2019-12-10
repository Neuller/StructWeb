<!DOCTYPE html>
<html lang="pt-br" class="Personalizado">

 <!-- ICONE -->

<!-- DEPENDÊNCIAS -->
<?php require_once "dependencias.php" ?>

<!-- HEAD -->
<head class="head"> 

		<nav>
			<!-- MENU -->
			<?php require('views/menu.php'); ?>

		</nav>

</head>

<!-- HEADER -->
<header class="cabecalho bgGradient">
	<span>TEXTO AQUI</span>
</header>

<!-- BODY -->
<body class="personalizado">
	
<!-- INÍCIO DO CAROUSEL -->
<div class="Banner Estilo">
<div class="container">
	<div id="meuCarousel" class="carousel slide" data-ride="carousel">

		<!-- INDICADORES -->
		<ol class="carousel-indicators">
			<li data-target="#meuCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#meuCarousel" data-slide-to="1"></li>
			<li data-target="#meuCarousel" data-slide-to="2"></li>
		</ol>

		<!-- SLIDES -->
		<div class="carousel-inner">
			<div class="item active">
				<a href="Views/Sobre.php"><img src="img/carousel/imagem1.jpg" alt="Banner Categ" title="NSERV INFO"></a>
				<div class="carousel-caption">
					<h3 class="textCarousel"></h3>
				</div>
			</div>

			<div class="item">
				<img src="img/carousel/imagem2.jpg" alt="Banner Categ" title="PROMOÇÕES OUTLET">
			</div>

			<div class="item">
				<a href="Views/Websites.php"><img src="img/carousel/imagem3.jpg" alt="Banner Categ" title="WEBSITES"></a>
				<div class="carousel-caption">
					<h3 class="textCarousel"></h3>
				</div>
			</div>

		</div>

		<!-- CONTROLADORES -->
		<a href="#meuCarousel" class="left carousel-control" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Anterior</span>
		</a>

		<a href="#meuCarousel" class="right carousel-control" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Próximo</span>
		</a>
	</div>
</div>
</div>

<!-- CONTEÚDO -->
<main class="Estilo bgGradient">

	<article class="conteudo bgWhite">

<section class="box">

		<img class="img-thumbnail img-responsive" class="center-block" src="img/home/imagem1.jpg">

		<div class="text-center">
			<h3><strong>Titulo 1</strong></h3>
		</div>
		<div class="text-left">
			<p class="h5 text-center">Texto aqui.</p>
		</div>

</section>

<br>

<section class="box">

		<img class="img-thumbnail img-responsive" class="center-block" src="img/home/imagem2.jpg">

		<div class="text-center">
			<h3><strong>Titulo2</strong></h3>
		</div>
		<div class="text-left">
			<p class="h5 text-center">Texto aqui.</p>
		</div>

</section>

	</article>

</main>
<!-- FIM DO CONTEÚDO -->

<!-- ATENDIMENTO -->
<div class="Estilo">	

	<div class="text-center opacidade">
			<h3><strong>ATENDIMENTO</strong></h3>
	</div>
<br>

<article class="conteudoAtendimento">

	<section class="conteudoAtendimento">
		<i class="fas fa-phone fa-4x"></i>
		<div class="text-center">
        <p class="h5">Número aqui</p>
        </div>
    </section>

	<section class="conteudoAtendimento">
		<i class="fab fa-whatsapp fa-4x"></i>
		<div class="text-center">
        <p class="h5">Número aqui</p>
        </div>
	</section>

	<section class="conteudoAtendimento">
		<i class="fas fa-envelope fa-4x"></i>
		<div class="text-center">
        <p class="h5">E-mail aqui</p>
        </div>
    </section>

	<section class="conteudoAtendimento">
		<i class="fas fa-home fa-4x"></i>
		<div class="text-center">
        <p class="h5">Endereço aqui</p>
        </div>
	</section>

</article>

</div>
<!-- FIM DO ATENDIMENTO -->

<!-- RODAPE -->
<footer class="rodape bgGradient"> <!-- navbar-fixed-bottom, ELEMENTO FIXO NO RODAPÉ -->
	<p class="direitos">Copyright © 2020. Todos os direitos reservados.</p>
</footer>
<!-- FIM DO RODAPE -->

</body>

</html>

