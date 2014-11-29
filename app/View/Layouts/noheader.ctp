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
			'style1/styles'
			));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body data-spy="scroll" data-target="#main-nav" data-offset="200">

	<!--=== PAGE PRELOADER ===-->
	<div id="page-loader"><span class="page-loader-gif"></span></div>

	<?= $this->element('scrolled_header'); ?>
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	<?= $this->element('footer'); ?>

	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
