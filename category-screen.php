<?php get_header(); ?>

<div id="sidebar-wrap">
	<a class="active">GRAPHIC WORK</a>
	<a href="<?= home_url(); ?>/category/print" class="graphic-sublink">Print</a>
	<a href="<?= home_url(); ?>/category/screen" class="graphic-sublink blue">Screen</a>
	<a href="<?= home_url(); ?>/category/logo" class="graphic-sublink">Logo</a>
	<a href="<?= home_url(); ?>/category/drawings">DRAWING WORK</a>
</div>

<div id="posts-wrap">
	<?php $count = 1 ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		$thumb =  get_post_meta($post->ID, 'thumbnail', true); ?>

		<a href="<?= the_permalink(); ?>">	
			<div class="post">
				<img src="<?= $thumb ?>"/>
				<span class="post-info-hover"><?= the_title(); ?></span>
			</div>
		</a>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>