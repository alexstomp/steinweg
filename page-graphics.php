<?php
/*
Template Name: Graphics Page
*/
?>

<?php get_header(); ?>

<div class="work-item">
	<img src="<?php bloginfo('template_directory')?>/img/print.jpg"/>
	<a href="<?= home_url(); ?>/category/print"><span class="print-overlay"></span></a>
</div>

<div class="work-item">
	<img src="<?php bloginfo('template_directory');?>/img/screen.jpg"/>
	<a href="<?= home_url(); ?>/category/screen"><span class="screen-overlay"></span></a>
</div>

<div class="work-item">
	<img src="<?php bloginfo('template_directory');?>/img/logo.jpg"/>
	<a href="<?= home_url(); ?>/category/logo"><span class="logo-overlay"></span></a>
</div>

<?php get_footer(); ?>