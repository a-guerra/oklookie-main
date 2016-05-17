<?php

//Setting Site Post Views
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Page Views';
}
/*page excerpt*/	
function new_excerpt_length($length) {
	return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');
                                                      

/*post excerpt*/
function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}



/*function grab that image*/
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = "/images/default.jpg";
  }
  return $first_img;
}


function lawyer_theme_init() {
	//register_nav_menu('main_navigation', __('Main Navigation'));
	
	add_theme_support( 'menus' );            // wp menus
	register_nav_menus(                      // wp3+ menus
	array( 
		'main_navigation' => 'The Main Navigation',   // main nav in header
		'footer_links' => 'Footer Links' // secondary nav in footer
	)
);	
	
}
add_action('init', 'lawyer_theme_init');

add_theme_support( 'post-thumbnails' ); 
	
function lawyers_widgets_init() {
	

	register_sidebar( array(
		'name' => __( 'Home Sidebar', 'oklookie' ),
		'id' => 'home',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );
	

	register_sidebar( array(
		'name' => __( 'Sidebar', 'oklookie' ),
		'id' => 'sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Search', 'oklookie' ),
		'id' => 'search',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer 1', 'oklookie' ),
		'id' => 'foot1',
		'before_widget' => "",
		'after_widget' => "",
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer 2', 'oklookie' ),
		'id' => 'foot2',
		'before_widget' => "",
		'after_widget' => "",
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer 3', 'oklookie' ),
		'id' => 'foot3',
		'before_widget' => "",
		'after_widget' => "",
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer 4', 'oklookie' ),
		'id' => 'foot4',
		'before_widget' => "",
		'after_widget' => "",
		'before_title' => '<h4 class="orange">',
		'after_title' => '</h4>',
	) );
	
}
add_action( 'init', 'lawyers_widgets_init' );

if ( function_exists( 'add_theme_support' ) ) { 
add_theme_support( 'post-thumbnails' );

add_image_size( 'col2', 470, 305 ); 
add_image_size( 'main', 1180, 450 );
add_image_size( 'latest-news', 480, 240, true ); // Main featured
}
require get_template_directory() . '/inc/customizer.php';

// Comment Layout
function lawyers_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	
	<div id="comment-<?php comment_ID(); ?>" class="comment-box">
		<div class="comment-box-pad">
			<div class="comment-thumb"><?php echo get_avatar($comment,$size='42',$default='<path_to_url>' ); ?></div>
			<div class="comment-meta">
				<?php printf(__('%s'), get_comment_author_link()) ?> says:<br/>
				<span><?php printf(__('%1$s'), get_comment_date(),  get_comment_time()) ?></span>
				<?php edit_comment_link(__('(Edit)'),'  ','') ?>
			</div><!--comment-meta-->
													
			<div class="comment-text">
				<?php if ($comment->comment_approved == '0') : ?>
				<p><?php _e('Your comment is awaiting moderation.') ?></p>
				<?php else:?>				
				<?php comment_text() ?>			
				<?php endif; ?>
				
			</div><!--comment-text-->
			
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>							
			
		</div><!--comment-box-pad-->
	<!-- </div> #added by wordpress -->
<?php
} // don't remove this bracket!

function new_excerpt_more($more) {
       global $post;
	return '... <a class="moretag" href="'. get_permalink($post->ID) . '"></a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
	
?>