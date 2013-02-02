<?php get_header(); ?>

	<div id="wrap-content">
	
		<a id="logo" href="<?php bloginfo('url');?>">
			<img src="<?php bloginfo('template_directory')?>/img/logo.png"/>
		</a>
		
		<ul id="portfolio-list">
		
			<?php
				$count = 1; 
				query_posts( array ( 'category_name' => 'Portfolio', 'posts_per_page' => -1 ) );
				while ( have_posts() ) : the_post();
				$portfolio_small =  get_post_meta($post->ID, 'small', true);
				$portfolio_large =  get_post_meta($post->ID, 'large', true);
			?>
			<?php if($count == 1){ ?>
			<li class="first">
				<a href="<?= the_permalink();?>" name="<?= the_title();?>"><img src="http://lorempixel.com/730/300/abstract/" alt="<?= the_title();?>"/></a>
				<h2 id="portfolio-title"><?= the_title(); ?></h2>
			</li>
			
			<div id="smaller-thumbs">
			
				<img id="recent-work-image" src="" /> <!-- RECENT WORK ARTSY -->
			
			<?php } else { ?>	
			
				<li>
					<a href="#">
						<img src="http://lorempixel.com/220/150/abstract/"/>
					</a>
				</li>
			<?php } $count++?>
			<?php endwhile; ?>
			
			</div>
			
		</ul>
		
	</div>
	
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>