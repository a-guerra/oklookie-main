<?php get_header(); ?>
<div class="main search-page">
            <div class="wrap">
	<div id="post">

		<div class="category-list clearfix span-9 first" id="maincontent">

			<div class="contents-list  main-fix">

	<?php if (have_posts()) : ?>

		
                
       
					<h2 class="searchtitle">Search Results for "<?php echo $s ?>"</h2>
					
              
		
		<div class="clear"></div>

	
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
			
			<hr>

	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<div class="search">
        <form role="search" method="get" class="search-wrapper cf" action="<?php echo home_url( '/' ); ?>">
                        
                            
                            <input type="search" class="searchbar"
                                placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                                value="<?php echo get_search_query() ?>" name="s"
                            />
                            <button type="submit">Search</button>

        </form> 
        </div>

	<?php endif; ?>

		</div> <!-- /content -->
	</div> <!-- /maincontent-->

	
    
        
	</div> <!-- /page -->
    <?php get_sidebar();?>        
                
    </div>
</div>
</div>
<?php get_footer(); ?>
