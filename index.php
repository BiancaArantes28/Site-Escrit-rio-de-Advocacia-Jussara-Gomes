<?php include("header.php");?>
<section id="banner">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		<li data-target="#carousel-example-generic" data-slide-to="3"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
		<div class="item active">
		  <img src="imagens/direito_civel.png" alt="Advogado direito civel" class="imagens-banner">
		  <div class="carousel-caption">
			...
		  </div>
		</div>
		<div class="item">
		  <img src="imagens/direito_familia.jpg" alt="Advogado direito trabalhista" class="imagens-banner">
		  <div class="carousel-caption">
			...
		  </div>
		</div>
		<div class="item">
		  <img src="imagens/direito_previdenciario.jpg" alt="Advogado direito previdenciário" class="imagens-banner">
		  <div class="carousel-caption">
			...
		  </div>
		</div>
		<div class="item">
		  <img src="imagens/direito_trabalhista.jpg" alt="Advogado direito previdenciário" class="imagens-banner">
		  <div class="carousel-caption">
			...
		  </div>
		</div>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
</section>
<section id="quem-somos">
	<div class="container breve-quem-somos">
		<div class="row">
			<center><h1>QUEM SOMOS</h1></center>
		</div>
		<div class="row margintop30">
			<div class="col-md-4 col-xs-12">
				<center><img src="imagens/direito.jpg" alt="Direito, escritório de advocacia" width="70%" class="img-quem-somos"></center>
			</div>
			<div class="col-md-8 col-xs-12 breve-texto">
				<p>Jussara, tem a preocupação constante de sempre buscar buscar a melhor e mais rápida solução para os problemas
				legais de nossos clientes seja pessoa física ou jurídica, e sempre com objetivo principal de buscar a 
				excelência no atendimento aos clientes. Para tanto, desenvolvemos soluções criativas e eficazes, a uma
				vasta gama de necessidades jurídicas e extrajurídicas, que vão das mais simples e rotineiras às mais complexas
				e sofisticadas exigências.

			   </p>
			   <input type="button" class="btn btn-default botao-conheca-mais" value="CONHEÇA">
			</div>
		</div>
	</div>
</section>
<?php include("footer.php");?>
