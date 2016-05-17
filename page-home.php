<?php
/*
	Template Name: homepage
*/
?>

<?php get_header();?>

	<div id="slide">  
		<?php putRevSlider("home") ?>
	  
		<div id="slidesocial">
			<a href="https://www.facebook.com/Oklookie" target="_blank"><img src="<?php bloginfo("template_directory");?>/images/hfb.png"></a>
			 <a href="https://twitter.com/Oklookie"><img src="<?php bloginfo("template_directory");?>/images/htwitter.png"></a>
		<!--	<a href="#"><img src="<?php bloginfo("template_directory");?>/images/hlinkedin.png"></a>
			<a href="#"><img src="<?php bloginfo("template_directory");?>/images/hpinterest.png"></a>
			<a href="#"><img src="<?php bloginfo("template_directory");?>/images/hyoutube.png"></a> -->
		</div>
	  </div>

    <div id="main">
		<!--
		<div id="featl">
		<h2>Featured Listing</h2>
		<?php
			global $post;
			$args = array(
				'post_type' => 'property',
				'posts_per_page' => 3,
				'orderby' => 'date',
				'order' => 'DESC'
			);
			query_posts($args);
			while(have_posts()): the_post(); ?>
				
				<div class="thumb">
					<?php if ( has_post_thumbnail() ) { ?>
						<div class="aligncenter"><a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a></div>
					<?php } ?>
					
				</div>
			<?php
				endwhile;
				wp_reset_query();
			?>	
		</div>
		-->
		<div id="post">
		
		
		
			<div class="entries">	

           

		<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 8,
				'orderby' => 'date',
				'order' => 'DESC'
			);
			query_posts($args);
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
                     <span>
					 
                     <?php  //Detect Language script and trim them accordingly
					   $curLang = substr(get_bloginfo( 'language' ), 0, 2);
					   switch ($curLang) {
						   case "en":
							  // If language selected is English trim
							   echo wp_trim_words( the_excerpt(), 5 );
							   break;
						  case "jp":
						   default:
							   // fallback to Japanese content trim
							  echo wp_trim_words( get_the_content(), 60 );
							   break;
					   }
					?>
                     
                     </span>
                    </div>
                    <a class="readmore" href="<?php the_permalink(); ?>">Read more</a>
                    
                   
				</div>
			<?php
				endwhile;
				wp_reset_query();
			?>
            </div>
            <a href="<?php echo home_url('/'); ?>blog/">
            <div class="view-all">
            
            <span>See all OKLOOKIE news</span>
            
            </div>
            </a>		
		</div>
		
		
		<div class="sidebar">
				<?php dynamic_sidebar('home'); ?>
		</div>

        </div>
		
      </div><!-- /.container -->
        
<?php get_footer();?>