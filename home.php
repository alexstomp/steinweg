<?php get_header(); ?>

<div class="work-item">
	<img src="<?php bloginfo('template_directory')?>/img/graphics.jpg"/>
	<a href="<?= home_url(); ?>/graphics"><span class="graphic-overlay"></span></a>
</div>

<div class="work-item">
	<img src="<?php bloginfo('template_directory')?>/img/drawings.jpg"/>
	<a href="<?= home_url(); ?>/category/drawings"><span class="drawings-overlay"></span></a>
</div>

<?php get_footer(); ?>