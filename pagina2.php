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

<header class="cabecalho bgGradient">

	<span>TEXTO AQUI</span>

</header>

<body class="personalizado">

<!-- GALERIA -->
 <div class="container">

        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">GALERIA</h1>
        </div>

        <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">TODOS</button>
            <button class="btn btn-default filter-button" data-filter="GROUP1">GROUP1</button>
            <button class="btn btn-default filter-button" data-filter="GROUP2">GROUP2</button>
            <button class="btn btn-default filter-button" data-filter="GROUP3">GROUP3</button>
            <button class="btn btn-default filter-button" data-filter="GROUP4">GROUP4</button>
        </div>
        <br/>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter GROUP1">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter GROUP2">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter GROUP1">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter GROUP4">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter GROUP3">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter GROUP4">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter GROUP3">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter GROUP4">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter GROUP4">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter GROUP1">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter GROUP3">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter GROUP2">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
        </div>
    </div>
</section>

	<!-- RODAPE -->
	<footer class="rodape bgGradient"> <!-- navbar-fixed-bottom, ELEMENTO FIXO NO RODAPÉ -->
		<p class="direitos">Copyright © 2020. Todos os direitos reservados.</p>
	</footer>
	
</body>

</html>

