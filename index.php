<?php get_header(); ?>

<div id="sidebar-wrap">
	<a class="active">GRAPHIC WORK</a>
	<a href="<?= home_url(); ?>/category/print" class="graphic-sublink">Print</a>
	<a href="<?= home_url(); ?>/category/screen" class="graphic-sublink">Screen</a>
	<a href="<?= home_url(); ?>/category/logo" class="graphic-sublink">Logo</a>
	<a href="<?= home_url(); ?>/category/drawings">DRAWING WORK</a>
</div>

<div id="single-wrap">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<h2 class="single-title"><?= the_title(); ?></h2>
		
		<?= the_content(); ?>

		<div id="excerpt-wrap">
			<?= the_excerpt(); ?>
		</div>

	<?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>