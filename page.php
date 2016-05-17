<?php get_header();?>
	
    
    <div id="main">
	
		<div id="post">
			<h1 class="archivetitle"><?php the_title();?></h1>
            <div class="breadcrumbs">
				<?php breadcrumb_trail();?>
            </div>
            <div class="page-entry">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post();  ?>   
			
				
                <?php the_content(); ?>
                <?php endwhile; ?>	
                <?php endif; ?>
			</div>
			
			</div>
			
			<?php get_sidebar();?>
			
		</div>
		
		
      </div><!-- /.container -->

<?php get_footer();?>
	
    