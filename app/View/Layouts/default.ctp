<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html class="no-js">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="apple-touch-icon" href="img/style1/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/style1/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/style1/apple-touch-icon-114x114.png">
	<link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

	<script language="javascript">
		var urlForJs="<?php echo SITE_URL ?>";
	</script>

	<!-- ==============================================
	Fonts
	=============================================== -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,500,600,700' rel='stylesheet' type='text/css'>

	<?php
		echo $this->Html->meta('icon', $this->Html->url('/favicon.ico'));

		echo $this->Html->script('style1/libs/jquery-1.8.2.min.js');

		echo $this->Html->script(array(
			'style1/libs/bootstrap.min.js',
			'style1/jquery.scrollto.js',
			'style1/waypoints.min.js',
			'style1/jquery.masonry.min.js',
			'style1/jquery.flexslider.min.js',
			'style1/jquery.backstretch.min.js',
			'style1/twitterFetcher_v10_min.js',
			'style1/libs/modernizr.min.js',
			'style1/scripts'
			));


		echo $this->Html->css(array(
			'style1/font-awesome.min',
			'style1/bootstrap.min',
			'style1/flexslider',
			'style1/styles-8'
			));

		/* Usermgmt Plugin CSS */
		echo $this->Html->css('/usermgmt/css/umstyle.css?q='.QRDN);

		/* Chosen is taken from https://github.com/harvesthq/chosen/releases/ */
		echo $this->Html->css('/plugins/chosen/chosen.css?q='.QRDN);

		/* Chosen is taken from https://github.com/harvesthq/chosen/releases/ */
		echo $this->Html->script('/plugins/chosen/chosen.jquery.min.js?q='.QRDN);

		/* Usermgmt Plugin JS */
		echo $this->Html->script('/usermgmt/js/umscript.js?q='.QRDN);
		echo $this->Html->script('/usermgmt/js/ajaxValidation.js?q='.QRDN);

		echo $this->Html->script('/usermgmt/js/chosen/chosen.ajaxaddition.jquery.js?q='.QRDN);

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57222629-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body data-spy="scroll" data-target="#main-nav" data-offset="200">

	<!--=== PAGE PRELOADER ===-->
	<div id="page-loader"><span class="page-loader-gif"></span></div>

	<?= $this->element('header'); ?>
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	<?= $this->element('footer'); ?>

	<?php //echo $this->element('sql_dump'); ?>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script>
	
		var mapPoint = {
				'lat': 19.34442,
				'lng': -99.20670,
				'zoom' : 15,
				'infoText':'<p>Whim\
							<br/>Mexico\
							<br/>DF 10000</p>',
				'linkText':'Ver en Google Maps',
				'mapAddress':'250 La nube, Mexico, DF 10000',
				'icon': 'img/style1/pin-dark.png'
			};
		
	</script>
</body>
</html>
