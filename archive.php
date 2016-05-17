<?php get_header();?>

    <div id="main">
	
		<div id="post">
		
		<h1 class="archivetitle"><?php single_cat_title();?></h1>
		<div class="breadcrumbs">
				<?php breadcrumb_trail();?>
        </div>
		<?php
			while(have_posts()): the_post(); ?>
				
				<div class="entry">
				    <a href="<?php the_permalink(); ?>">
                    
                                <div class="mythumbnail">
                                    <p>      
                                    <?php if ( has_post_thumbnail() ) { ?>  
                                        <?php the_post_thumbnail('latest-news');?>                        
                                    <?php } ?>          
                                    </p>
                                    
                                   
                                <div class="bg_opacity"></div>
                                </div>
                    </a>
                    
                    <div class="entry-content">
                     <a href="<?php the_permalink(); ?>">
                         
                         <h3 class="post-title"><?php the_title();?></h3>
                    
                    </a>
                     <span><?php the_excerpt();?></span>
                    </div>
                    <a class="readmore" href="<?php the_permalink(); ?>">Read more</a>
                    
                   
				</div>
			<?php
				endwhile;
				wp_reset_query();
			?>	
            <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>	
		</div>
		
	
			<?php get_sidebar();?>
		

        </div>
		
      </div><!-- /.container -->
        
<?php get_footer();?>