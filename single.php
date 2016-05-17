<?php get_header();?>
	
    <div id="main">
	
		<div id="post">
        	<h1><?php the_title(); ?></h1>
        	<div class="breadcrumbs">
				<?php breadcrumb_trail();?>
            </div>
			<div class="page-entry">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post();  ?>   
			<!--script type="text/javascript">
            google_ad_client = "ca-pub-1104147926623142";
            google_ad_slot = "9848408717";
            google_ad_width = 728;
            google_ad_height = 90;
            </script>
            <!-- Leaderboard_TopMost -->
            <!--script type="text/javascript"
            src="//pagead2.googlesyndication.com/pagead/show_ads.js">
            </script-->
				
                
                <?php the_content(); ?>
                <?php endwhile; ?>	
                <?php endif; ?>
            <div class="viewed">
            
            <?php echo wpb_set_post_views(get_the_ID()); ?>
            
            </div>
			</div>
			
			</div>
			
			<?php get_sidebar();?>
			
		</div>
		
		
      </div><!-- /.container -->

<?php get_footer();?>
	
     