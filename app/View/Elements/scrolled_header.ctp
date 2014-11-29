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
			<?= $this->Html->link($this->Html->image('style1/logo.png')." Whim", "/#home", array("escape" => false, "class" => "navbar-brand")); ?>
		
		</div>
		
		<div id="site-nav" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="sr-only">
					<?= $this->Html->link("Inicio", "/#home"); ?>
				</li>
				<li>
					<?= $this->Html->link("Lo que hacemos", "/#services"); ?>
				</li>
				<li>
					<?= $this->Html->link("Galería", "/#portfolio"); ?>
				</li>
				<li>
					<?= $this->Html->link("Equipo", "/#about"); ?>
				</li>
				<li>
					<?= $this->Html->link("Preguntas Frecuentes", "/faqs"); ?>
				</li>
				<li>
					<?= $this->Html->link("Contáctanos", "/#contact"); ?>
				</li>
			</ul>
		</div><!--End navbar-collapse -->
		
	</div><!--End container -->
	
</div><!--End main-nav -->