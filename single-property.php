<?php get_header();?>

    <div id="main">
	
		<h1><?php the_title(); ?></h1>

	
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="mainimg"><?php the_post_thumbnail('main'); ?></div>
		<?php } ?>
	
		<div id="post">
			
			<div class="entry property">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post();  ?>   
			
				<table>
				<tr>
				<td class="label">Description</td>
				<td class="cont"><?php the_content(); ?></td>
				</tr>
				<tr>
				<td class="label">Cost</td>
				<td class="cont"><?php the_field("cost"); ?></td>
				</tr>
				<tr>
				<td class="label">Payment Terms</td>
				<td class="cont"><?php the_field("payment_terms"); ?></td>
				</tr>
				<tr>
				<td class="label">Price Range</td>
				<td class="cont"><?php the_field("price_range"); ?></td>
				</tr>
				<tr>
				<td class="label">Area</td>
				<td class="cont"><?php the_field("area"); ?></td>
				</tr>
				<tr>
				<td class="label">Location</td>
				<td class="cont"><?php the_field("location"); ?></td>
				</tr>
				<tr>
				<td class="label">Map</td>
				<td class="cont"><?php
				$location = get_field('map_address');	
					if( !empty($location) ){
					?>
					<div class="acf-map">
						<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
					</div>
					<?php } ?>
				</td>
				</tr>
				</table>
				
                <?php endwhile; ?>	
                <?php endif; ?>
			</div>
			
			</div>
			
			<div class="sidebar">
				<div class="cdetails">
					<h3>Contact Details:</h3>
					<div class="cwrap">
					Name: <?php the_field("name"); ?> </br>
					Contact Number: <?php the_field("contact_number"); ?> </br>
					Email Address: <?php the_field("email_address"); ?> </br>
					</div>
				</div>
			</div>
			
		</div>
		
		
      </div><!-- /.container -->
	  
<style type="text/css">

.acf-map {
	width: 100%;
	height: 400px;
	border: #ccc solid 1px;
	margin: 20px 0;
}

</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
(function($) {
function render_map( $el ) {

	// var
	var $markers = $el.find('.marker');

	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};

	// create map	        	
	var map = new google.maps.Map( $el[0], args);

	// add a markers reference
	map.markers = [];

	// add markers
	$markers.each(function(){

    	add_marker( $(this), map );

	});

	// center map
	center_map( map );

}

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/

$(document).ready(function(){

	$('.acf-map').each(function(){

		render_map( $(this) );

	});

});

})(jQuery);
</script>

<?php get_footer();?>
	
     