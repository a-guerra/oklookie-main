<?php get_header();?>

    <div id="main">
	
		<div id="post">
		<?php
			while(have_posts()): the_post(); ?>
				
				<div class="entry">
				
					<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			
					<?php if ( has_post_thumbnail() ) { ?>
						<div class="featimg alignleft"><a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a></div>
					<?php } ?>
					
					<?php the_excerpt();?>
					
					<?php
					$form_args = array( 'title_reply', 'Leave a comment' );
					comment_form( $form_args ); ?>
				</div>
			<?php
				endwhile;
				wp_reset_query();
			?>		
		</div>
		
	
			<?php get_sidebar();?>
		

        </div>
		
      </div><!-- /.container -->
        
<?php get_footer();?>