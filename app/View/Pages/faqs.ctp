<!-- ==============================================
SKILLS
=============================================== -->
<section id="skills" class="add-padding border-bottom-color2">

	<div class="container">
		
		<div class="row">
		
			<div class="col-sm-12 col-md-10 text-left scrollimation fade-up d1">
			
				<h1 class="big-text">Preguntas Frecuentes </h1>
				
				<p class="lead">Pregunta 1</p>
				<p>Respuesta 1</p>

				<p class="lead">Pregunta 1</p>
				<p>Respuesta 1</p>

				<p class="lead">Pregunta 1</p>
				<p>Respuesta 1</p>
			
			</div>
		
			
		</div>
		
	</div>

</section>

<script>
jQuery(document).ready(function(){
	jQuery("div#main-nav").addClass("scrolled");

	if (jQuery(window).scrollTop()< (jQuery(window).height()-50)){
		jQuery('#main-nav').addClass('scrolled');
	}
	else{
		jQuery('#main-nav').addClass('scrolled');    
	}

	jQuery(window).scroll(function(){
		if (jQuery(window).scrollTop()< (jQuery(window).height()-50)){
			jQuery('#main-nav').addClass('scrolled');
		}
		else{
			jQuery('#main-nav').addClass('scrolled');    
		}
	});
});

</script>