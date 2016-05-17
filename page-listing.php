<?php 
	/*
	Template Name: Property
	*/
get_header();?>

    <div id="main">
	
		<div id="post">
		
			<div id="sbar">
		<form method="get" action="http://oklookie.com/listing/">
            <input type="hidden" value="property" name="post_type">
            <input type="text" placeholder="Your Property Search" class="input-block-level" value="" id="search-key" name="s">
            <div class="row-fluid">
                <div class="span4">
                    <label class="bedroom-icon">Location</label>
                </div>
                <div class="span8">
                    <select class="input-block-level" name="bedroom">
                        <option value="">Any</option>
                    </select>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span4">
                    <label class="bathroom-icon">Property Type</label>
                </div>
                <div class="span8">
                    <select class="input-block-level" name="bathroom">
                        <option value="">Any</option>
                                            </select>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span4">
                    <label class="car-icon">Budget</label>
                </div>
                <div class="span8">
                    <select class="input-block-level" name="carspace">
                        <option value="">Any</option>
                                            </select>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span4">
                    <label class="home-icon">Area / sq.m </label>
                </div>
                <div class="span8">
                    <select class="input-block-level" name="residencytype">
                        <option value="">Any</option>
                                            </select>
                </div>
            </div>
            <div class="submit">
                <input type="submit" value="Search Now" class="btn btn-new">
            </div>
        </form>
			</div>
			<?php
			global $post;
			$args = array(
				'post_type' => 'property',
				'posts_per_page' => 10,
				'orderby' => 'date',
				'order' => 'DESC'
			);
			query_posts($args);
			while(have_posts()): the_post(); ?> 
				
				<div class="entry">
				
					<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			
					<?php if ( has_post_thumbnail() ) { ?>
						<div class="featimg alignleft"><a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a></div>
					<?php } ?>
					
					<strong>Location:</strong> <?php the_field("location"); ?><br/>
					<strong>Area:</strong> <?php the_field("area"); ?><br/>
					<strong>Cost:</strong> <?php the_field("cost"); ?><br/>
	
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
	
    