<!-- ==============================================
MAIN NAV
=============================================== -->
<div id="main-nav" class="navbar navbar-fixed-top">
	<div class="container">
	
		<div class="navbar-header">
		
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-nav">
				<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</button>
			
			<!-- ======= LOGO ========-->
			<a class="navbar-brand scrollto" href="#home"><img src="img/style1/logo.png" alt=""/>Jane Doe</a>
		
		</div>
		
		<div id="site-nav" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="sr-only">
					<a href="#home" class="scrollto">Inicio</a>
				</li>
				<li>
					<a href="#services" class="scrollto">Lo que hacemos</a>
				</li>
				<li>
					<a href="#portfolio" class="scrollto">Galería</a>
				</li>
				<li>
					<a href="#about" class="scrollto">Equipo</a>
				</li>
				<li>
					<?= $this->Html->link("Preguntas Frecuentes", "/faqs", array("class" => "")); ?>
				</li>
				<li>
					<a href="#contact" class="scrollto">Contáctanos</a>
				</li>
			</ul>
		</div><!--End navbar-collapse -->
		
	</div><!--End container -->
	
</div><!--End main-nav -->