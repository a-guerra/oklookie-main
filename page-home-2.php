<?php
/*
	Template Name: Home2
*/
?>

<?php get_header();?>

    <div id="main" class="container">
	
			<?php putRevSlider("home") ?>
		
		<div class="post full">
			
			<div id="primary">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post();  ?>   
					<?php the_content(); ?>
					<?php endwhile; ?>	
					<?php endif; ?>
			</div>
			

			<?php
			wp_reset_query();
				global $post;
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 4,
					'orderby' => 'title',
					'order' => 'asc'
				);
				query_posts($args);
				while(have_posts()): the_post(); ?>
					
					<div class="item col2">
				
						<?php if ( has_post_thumbnail() ) { ?>
							<div class="featimg alignleft"><a href="<?php the_permalink();?>"><?php the_post_thumbnail('col2'); ?></a></div>
						<?php } ?>
						
						<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
						
						<span><?php the_date(); ?></span>
						
					</div>
				<?php
					endwhile;
					wp_reset_query();
				?>		

		</div>

    </div><!-- /.container -->
        
<?php get_footer();?>