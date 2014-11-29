<?php
$this->set("title_for_layout","Whim - Cupcakes cutes !");
?>
<!-- ==============================================
HEADER
=============================================== -->
<header id="home">

	<div class="container text-center" style="left: 20%">
	
		<p>Welcome to</p>
		
		<img src="img/style1/logo-whim-header.png" />
		
		<p style="font-family: 'Grand Hotel', cursive;">The best choice for your online personal portfolio</p>
	
	</div>
	
</header><!--End header -->
<!-- ==============================================
SERVICES
=============================================== -->
<section id="services" class="add-padding">

	<div class="container">
		
		<h1 class="section-title big-text scrollimation fade-up">My Services</h1>
		
		<div class="row">
		
			<div class="col-sm-4 service-item color2 scrollimation scale-in">
			
				<div class="service-icon"><i class="fa"><img src="img/style1/ico-cake.png" alt="" style="border: 0px;" /></i></div>
				
				<h3>Brand Identity</h3>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo.</p>
				
				
			</div>
		
			<div class="col-sm-4 service-item color1 scrollimation scale-in d1">
			
				<div class="service-icon"><i class="fa"><img src="img/style1/ico-cupcake.png" alt="" style="border: 0px;" /></i></div>
				
				<h3>Web Design</h3>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo.</p>
				
				
			</div>
			
			<div class="col-sm-4 service-item color3 scrollimation scale-in d2">
			
				<div class="service-icon"><i class="fa"><img src="img/style1/ico-candy.png" alt="" style="border: 0px;" /></i></div>
				
				<h3>Rocket Science</h3>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo.</p>
				
			</div>
			
		</div>
		
	</div>

</section>

<!-- ==============================================
PORTFOLIO
=============================================== -->
<section id="portfolio" class="add-padding">

	<div class="container">
		
		<h1 class="big-text text-center scrollimation fade-in">My Works</h1>
		
		<!--==== Portfolio Filters ====-->
		<div id="filter-works">
			<ul>
				<li class="active scrollimation fade-right d1">
					<a href="#" data-filter="*">All</a>
				</li>
				<li class="scrollimation fade-right">
					<a href="#" data-filter=".identity">Identity</a>
				</li>
				<li class="scrollimation fade-left">
					<a href="#" data-filter=".logo">Logo</a>
				</li>
				<li class="scrollimation fade-left d1">
					<a href="#" data-filter=".illustration">Illustration</a>
				</li>
			</ul>
		</div><!--End portfolio filters -->
		
		<!--==== Project Preview ====-->
		<div id="project-preview">
		
			<span class="close-preview">&times;</span>
		
			<div id="project-slider" class="flexslider"></div>
			
			<h1 id="project-title"></h1>
		
			<div id="project-content"></div>
		
		</div><!--Project Preview -->
		
	</div>

	<div class="container masonry-wrapper">
	
		<div id="projects-container">
		
			<!-- ==============================================
			SINGLE PROJECT ITEM
			=============================================== -->	
			<article class="project-item illustration">
				
				<img class="img-responsive project-image" src="img/style1/thumb.png"  alt=""><!--Project thumb -->
				
				<div class="hover-mask">
					<h2 class="project-title">Designer World</h2><!--Project Title -->
					<p>illustration</p><!--Project Subtitle -->
				</div>
				
				<!--==== Project Preview HTML ====-->
				
				<div class="sr-only project-description" data-images="img/style1/slide.png,img/style1/slide.png" >
				
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
					
					<p>Phasellus porta eros vel lacus euismod consequat. Phasellus eleifend, nibh non feugiat hendrerit, lacus enim adipiscing eros, a pharetra erat neque eget est. Quisque vitae aliquet urna. Integer suscipit lectus eu enim porttitor fringilla. Ut blandit, urna in auctor euismod, arcu eros pharetra metus, a porta purus libero a nibh.</p>
					<p>Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
					<p class="text-center"><a class="btn btn-color1" href="#external-link"><i class="fa fa-arrow-right"></i>Visit Website</a></p>
				
				</div>
				
			</article>
			<!-- ==============================================
			END PROJECT ITEM
			=============================================== -->						
			
			<article class="project-item identity logo">
				
				<img class="img-responsive project-image" src="img/style1/thumb.png"  alt=""><!--Project thumb -->
				
				<div class="hover-mask">
					<h2 class="project-title">Squirrel</h2><!--Project Title -->
					<p>identity / logo</p><!--Project Subtitle -->
				</div>
				
				<!--==== Project Preview HTML ====-->
				
				<div class="sr-only project-description" data-images="img/style1/slide.png,img/style1/slide.png" >
				
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
					
					<p>Phasellus porta eros vel lacus euismod consequat. Phasellus eleifend, nibh non feugiat hendrerit, lacus enim adipiscing eros, a pharetra erat neque eget est. Quisque vitae aliquet urna. Integer suscipit lectus eu enim porttitor fringilla. Ut blandit, urna in auctor euismod, arcu eros pharetra metus, a porta purus libero a nibh.</p>
					<p>Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
					<p class="text-right"><a class="btn btn-color1" href="#external-link"><i class="fa fa-dribbble"></i>View on Dribbble</a></p>
					
				</div>
				
			</article><!--End Project Item -->

			<article class="project-item illustration">
				
				<img class="img-responsive project-image" src="img/style1/thumb.png"  alt=""><!--Project thumb -->
				
				<div class="hover-mask">
					<h2 class="project-title">Radio Tape</h2><!--Project Title -->
					<p>illustration</p><!--Project Subtitle -->
				</div>
				
				<!--==== Project Preview HTML ====-->
				
				<div class="sr-only project-description" data-images="img/style1/slide.png,img/style1/slide.png" >
				
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
					
					<p>Phasellus porta eros vel lacus euismod consequat. Phasellus eleifend, nibh non feugiat hendrerit, lacus enim adipiscing eros, a pharetra erat neque eget est. Quisque vitae aliquet urna. Integer suscipit lectus eu enim porttitor fringilla. Ut blandit, urna in auctor euismod, arcu eros pharetra metus, a porta purus libero a nibh.</p>
					<p>Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
					
				</div>
				
			</article><!--End Project Item -->

			<article class="project-item identity">
				
				<img class="img-responsive project-image" src="img/style1/thumb.png"  alt=""><!--Project thumb -->
				
				<div class="hover-mask">
					<h2 class="project-title">Austin Texas</h2><!--Project Title -->
					<p>identity</p><!--Project Subtitle -->
				</div>
				
				<!--==== Project Preview HTML ====-->
				
				<div class="sr-only project-description" data-images="img/style1/slide.png,img/style1/slide.png" >
				
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
					
					<p>Phasellus porta eros vel lacus euismod consequat. Phasellus eleifend, nibh non feugiat hendrerit, lacus enim adipiscing eros, a pharetra erat neque eget est. Quisque vitae aliquet urna. Integer suscipit lectus eu enim porttitor fringilla. Ut blandit, urna in auctor euismod, arcu eros pharetra metus, a porta purus libero a nibh.</p>
					<p>Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
					<p class="text-right"><a class="btn btn-color1" href="#external-link"><i class="fa fa-dribbble"></i>View on Dribbble</a></p>
				</div>
				
			</article><!--End Project Item -->

			<article class="project-item logo">
				
				<img class="img-responsive project-image" src="img/style1/thumb.png"  alt=""><!--Project thumb -->
				
				<div class="hover-mask">
					<h2 class="project-title">Red Glove</h2><!--Project Title -->
					<p>logo</p><!--Project Subtitle -->
				</div>
				
				<!--==== Project Preview HTML ====-->
				
				<div class="sr-only project-description" data-images="img/style1/slide.png,img/style1/slide.png" >
				
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
					
					<p>Phasellus porta eros vel lacus euismod consequat. Phasellus eleifend, nibh non feugiat hendrerit, lacus enim adipiscing eros, a pharetra erat neque eget est. Quisque vitae aliquet urna. Integer suscipit lectus eu enim porttitor fringilla. Ut blandit, urna in auctor euismod, arcu eros pharetra metus, a porta purus libero a nibh.</p>
					<p>Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
					
				</div>
				
			</article><!--End Project Item -->

			<article class="project-item logo">
				
				<img class="img-responsive project-image" src="img/style1/thumb.png"  alt=""><!--Project thumb -->
				
				<div class="hover-mask">
					<h2 class="project-title">Checklist</h2><!--Project Title -->
					<p>logo</p><!--Project Subtitle -->
				</div>
				
				<!--==== Project Preview HTML ====-->
				
				<div class="sr-only project-description" data-images="img/style1/slide.png,img/style1/slide.png" >
				
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
					
					<p>Phasellus porta eros vel lacus euismod consequat. Phasellus eleifend, nibh non feugiat hendrerit, lacus enim adipiscing eros, a pharetra erat neque eget est. Quisque vitae aliquet urna. Integer suscipit lectus eu enim porttitor fringilla. Ut blandit, urna in auctor euismod, arcu eros pharetra metus, a porta purus libero a nibh.</p>
					<p>Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
					<p class="text-center"><a class="btn btn-color1" href="#external-link"><i class="fa fa-arrow-right"></i>Visit Website</a></p>
				</div>
				
			</article><!--End Project Item -->
			
			<article class="project-item identity logo">
				
				<img class="img-responsive project-image" src="img/style1/thumb.png"  alt=""><!--Project thumb -->
				
				<div class="hover-mask">
					<h2 class="project-title">Music City</h2><!--Project Title -->
					<p>identity / logo</p><!--Project Subtitle -->
				</div>
				
				<!--==== Project Preview HTML ====-->
				
				<div class="sr-only project-description" data-images="img/style1/slide.png,img/style1/slide.png" >
				
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
					
					<p>Phasellus porta eros vel lacus euismod consequat. Phasellus eleifend, nibh non feugiat hendrerit, lacus enim adipiscing eros, a pharetra erat neque eget est. Quisque vitae aliquet urna. Integer suscipit lectus eu enim porttitor fringilla. Ut blandit, urna in auctor euismod, arcu eros pharetra metus, a porta purus libero a nibh.</p>
					<p>Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
					<p class="text-right"><a class="btn btn-color1" href="#external-link"><i class="fa fa-dribbble"></i>View on Dribbble</a></p>
				</div>
				
			</article><!--End Project Item -->

			<article class="project-item illustration logo">
				
				<img class="img-responsive project-image" src="img/style1/thumb.png"  alt=""><!--Project thumb -->
				
				<div class="hover-mask">
					<h2 class="project-title">Black Rock</h2><!--Project Title -->
					<p>illustration / logo</p><!--Project Subtitle -->
				</div>
				
				<!--==== Project Preview HTML ====-->
				
				<div class="sr-only project-description" data-images="img/style1/slide.png,img/style1/slide.png" >
				
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
					
					<p>Phasellus porta eros vel lacus euismod consequat. Phasellus eleifend, nibh non feugiat hendrerit, lacus enim adipiscing eros, a pharetra erat neque eget est. Quisque vitae aliquet urna. Integer suscipit lectus eu enim porttitor fringilla. Ut blandit, urna in auctor euismod, arcu eros pharetra metus, a porta purus libero a nibh.</p>
					<p>Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
					<p class="text-center"><a class="btn btn-color1" href="#external-link"><i class="fa fa-arrow-right"></i>Visit Website</a></p>
				</div>
				
			</article><!--End Project Item -->

			<article class="project-item illustration identity">
				
				<img class="img-responsive project-image" src="img/style1/thumb.png"  alt=""><!--Project thumb -->
				
				<div class="hover-mask">
					<h2 class="project-title">Coyote</h2><!--Project Title -->
					<p>illustration / identity</p><!--Project Subtitle -->
				</div>
				
				<!--==== Project Preview HTML ====-->
				
				<div class="sr-only project-description" data-images="img/style1/slide.png,img/style1/slide.png" >
				
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
					
					<p>Phasellus porta eros vel lacus euismod consequat. Phasellus eleifend, nibh non feugiat hendrerit, lacus enim adipiscing eros, a pharetra erat neque eget est. Quisque vitae aliquet urna. Integer suscipit lectus eu enim porttitor fringilla. Ut blandit, urna in auctor euismod, arcu eros pharetra metus, a porta purus libero a nibh.</p>
					<p>Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
					<p class="text-center"><a class="btn btn-color1" href="#external-link"><i class="fa fa-arrow-right"></i>Visit Website</a></p>
				</div>
				
			</article><!--End Project Item -->	
		</div><!-- End projects --> 
		
	</div><!-- End container --> 
	

</section>


<!-- ==============================================
ABOUT
=============================================== -->
<section id="about" class="add-padding bg-color2">

	<div class="container">
		
		<div class="row">
		
			<div class="col-sm-6 scrollimation fade-right d1">
			
				<img class="img-responsive polaroid" src="img/style1/about.jpg" alt="" />
			
			</div>
			
			<div class="col-sm-6 scrollimation fade-left d3">
			
				<h1 class="big-text">I am <br/>Jane Doe </h1>
				
				<p class="lead">I am Jane Doe, a twenty five year old designer from NY. I have graduated with a Bachelor degree of Graphic &amp; Web Design, from the University of Pasadena.</p>
			
				<p>I am passionate about combining function, interaction and form to design for fitting user experiences that make people happy. I have a passion for creating challenging, intuitive and beautiful products. My design process is very hands-on and visual.</p>
			
			</div>
		
		</div>
		
	</div>

</section>

<!-- ==============================================
SKILLS
=============================================== -->
<section id="skills" class="add-padding border-bottom-color2">

	<div class="container">
		
		<div class="row">
		
			<div class="col-sm-6 col-md-5 text-right scrollimation fade-up d1">
			
				<h1 class="big-text">I got<br/>The skills </h1>
				
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt, dui ac porta.</p>
			
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt, dui ac porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt, dui ac porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt, dui ac porta.</p>
			
			</div>
		
			<div class="col-sm-6 col-md-5 col-md-offset-1">
			
				<div class="skills-bars">
				
					<div class="skills-item skill1">
						<span class="percent" data-percent="75">75%</span>
						<p>Photoshop</p>
					</div>
					<div class="skills-item skill2">
						<span class="percent" data-percent="70">70%</span>
						<p>Illustrator</p>
					</div>
					<div class="skills-item skill3">
						<span class="percent" data-percent="90">90%</span>
						<p>HTML</p>
					</div>
					<div class="skills-item skill4">
						<span class="percent" data-percent="60">60%</span>
						<p>CSS</p>
					</div>
					
				</div>
			
			</div>
			
		</div>
		
	</div>

</section>
	
<!-- ==============================================
TWITTER
=============================================== -->
<!--
<section id="twitter" class="add-padding bg-color1">

	<div class="container">
		<div class="row scrollimation fade-in">
			<div class="col-sm-1 twitter-icon">
				<i class="fa fa-twitter"></i>
			</div>
			<div class="col-sm-11">
				<div id="twitter-slider" class="flexslider" data-widget-id="345690956013633536" data-tweets-length="3"></div>
			</div>
		</div>
	</div>

</section>
-->	
<!-- ==============================================
CONTACT
=============================================== -->
<section id="contact" class="add-padding">

	<div class="container text-center">
		
		<div class="row">
		
			<div class="col-sm-6 col-md-5 text-right scrollimation fade-up d1">
			
				<h1 class="big-text">Contáctanos</h1>
				
				<p class="lead">I am available for freelance. Can't wait for the next exciting project! Could be yours?</p>
			
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt, dui ac porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt, dui ac porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt, dui ac porta.</p>
			
			</div>
		
			<!--=== Contact Form ===-->

			<form id="contact-form" class="col-sm-6 col-md-offset-1 scrollimation fade-left d3" action="#" method="post" novalidate>
				
				<div class="form-group">
				  <label class="control-label" for="contact-name">Name</label>
				  <div class="controls">
					<input id="contact-name" name="contactName" placeholder="Nombre" class="form-control requiredField" data-new-placeholder="Your name" type="text" data-error-empty="Please enter your name">
					<i class="fa fa-user"></i>
				  </div>
				</div><!-- End name input -->
				
				<div class="form-group">
				  <label class="control-label" for="contact-mail">Email</label>
				  <div class=" controls">
					<input id="contact-mail" name="email" placeholder="Correo" class="form-control requiredField" data-new-placeholder="Correo" type="email" data-error-empty="Please enter your email" data-error-invalid="Invalid email address">
					<i class="fa fa-envelope"></i>
				  </div>
				</div><!-- End email input -->
				
				<div class="form-group">
				  <label class="control-label" for="contact-message">Message</label>
					<div class="controls">
						<textarea id="contact-message" name="comments"  placeholder="Mensaje" class="form-control requiredField" data-new-placeholder="Mensaje" rows="6" data-error-empty="Please enter your message"></textarea>
						<i class="fa fa-comment"></i>
					</div>
				</div><!-- End textarea -->
				
				<p><button name="submit" type="submit" class="btn btn-color2 btn-block" data-error-message="Error!" data-sending-message="Sending..." data-ok-message="Message Sent"><i class="fa fa-paper-plane"></i>Enviar Mensaje</button></p>
				<input type="hidden" name="submitted" id="submitted" value="true" />
				
			</form><!-- End contact-form -->
			
		</div>
		
	</div>

</section>
	
<!-- ==============================================
MAP
=============================================== -->
<section id="map">

	<div id="gmap"></div>

</section>