<?php get_header(); ?>
	
	<div id="wrap-content">
	
		<a id="logo" href="<?php bloginfo('url');?>">
			<img src="<?php bloginfo('template_directory')?>/img/logo.png"/>
		</a>
		
		<div id="wrapper">
		    
     	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
     		$thumb =  get_post_meta($post->ID, 'thumbnail', true);?>
        	
        	<div class="single">
        		<?php if($thumb !== "") { ?>
        			<a class="thumbnail" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
        				<img src="<?=$thumb; ?>" alt="<?php the_title(); ?>" width="200px" height="200px"/>
        			</a>
        		
        			<div class="content" style="width: 500px;">
        		<?php } else { ?>
        			<div class="content" style="width: 750px;padding-left: 20px;">
        		<?php } ?>  			
        				
        			<h2 class="title">
        				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" style="width: 500px;"><?php the_title(); ?></a>
        			</h2>
        		
        			<p class="date">Posted on <?php the_date(); ?></p>
        			
        			<?php the_content(); ?>
        				
        		</div>
        	</div>
        	
	    <?php endwhile; endif; ?>
		    
		</div>
		
	</div>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>