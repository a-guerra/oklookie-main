<?php
/*	Template Name: Full Page Search Oklookie
*
*
*/
get_header();?>

<div id="page">



<ul class="cb-slideshow">
<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 5,
				'orderby' => 'date',
				'order' => 'DESC'
			);
			query_posts($args);
			while(have_posts()): the_post(); ?>
				
			<li>
            	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            	<span style="background:url(	<?php echo $image[0]; ?>)"></span>
                <div>
                    <h3>
                        <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                        </a>
                    </h3>
                </div>
            </li>
            
            
			<?php
				endwhile;
				wp_reset_query();
			?>
</ul>
</div>
<?php get_footer();?>