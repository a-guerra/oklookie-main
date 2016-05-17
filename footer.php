<?php if ( is_page_template('search-page.php') ): ?>

            <!-- No Display -->

	<?php else : ?>
     <div class="subscribe-holder">
            <div class="subscribe-now">
                <p>

                 Do you want your place or property featured here?</p> <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us/">Contact Us</a>




            </div>
        </div>
	<div id="footer">

		<div class="container" style="margin-top:20px;">
		
			<div id="copy">&copy; <?php echo date("Y") ?> <?php echo $blog_title = get_bloginfo( 'name' ); ?>
, INC. ALL RIGHTS RESERVED. </div>
			
			<div class="finfo">

			</div>
			
		</div>
		
	</div>
    <?php endif; ?>
<?php wp_footer();?>
		
	<!--script>
	$(function() {	
		$('#respond').on("click", '#reply-title', function (e) {
			var zx = $(this).parent();
			$(this).parent().css( "height", "auto" );
			$(zx).find('.readless').show();
		});	
	});	
	</script>
<script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=62483370"></script-->
  </body>
</html>

