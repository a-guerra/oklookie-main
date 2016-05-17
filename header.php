<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="DHmXm1G-aLYC-BqmBneaZ0WZ8dqanK_TWrzvQi0ASW8" />
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title><?php echo $blog_title = get_bloginfo( 'name' ); ?> | <?php wp_title ?></title>
	
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>

	<!--full screen elements-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/demo.css" />
   	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style1.css" />
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.86080.js"></script>


    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	
	<?php wp_head();?>
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-58832026-1', 'auto');
	  ga('send', 'pageview');

	</script>
	
    <script>

    
    
    (function($) {
    $.fn.menumaker = function(options) {  
     var cssmenu = $(this), settings = $.extend({
       format: "dropdown",
       sticky: false
     }, options);
     return this.each(function() {
       $(this).find(".button").on('click', function(){
         $(this).toggleClass('menu-opened');
         var mainmenu = $(this).next('ul');
         if (mainmenu.hasClass('open')) { 
           mainmenu.slideToggle().removeClass('open');
           
         }
         else {
           mainmenu.slideToggle().addClass('open');
           if (settings.format === "dropdown") {
             mainmenu.find('ul').show();
                
           }
         }
       });
       cssmenu.find('li ul').parent().addClass('has-sub');
    multiTg = function() {
         cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
         cssmenu.find('.submenu-button').on('click', function() {
           $(this).toggleClass('submenu-opened');
           if ($(this).siblings('ul').hasClass('open')) {
             $(this).siblings('ul').removeClass('open').slideToggle();
           }
           else {
             $(this).siblings('ul').addClass('open').slideToggle();
           }
         });
       };
       if (settings.format === 'multitoggle') multiTg();
       else cssmenu.addClass('dropdown');
       if (settings.sticky === true) cssmenu.css('position', 'fixed');
    resizeFix = function() {
      var mediasize = 790;
         if ($( window ).width() > mediasize) {
           cssmenu.find('ul').show();
         }
         if ($(window).width() <= mediasize) {
           cssmenu.find('ul').hide().removeClass('open');
         }
       };
       resizeFix();
       return $(window).on('resize', resizeFix);
     });
      };
    })(jQuery);

    (function($){
    $(document).ready(function(){
    $("#cssmenu").menumaker({
       format: "multitoggle"
    });
    });
    })(jQuery);

    
      
      
      
      
    </script>
      
      
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
      
    <?php wp_head(); 
    // This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
    // (right here) into the head of your website. 
    // Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
    // Move it if you like, but I would keep it around.
    ?>
  </head>

  <body <?php body_class();?> >
  <header>
    <div class="bgwrap noimage">
    <div class="container">
    
        <nav id='cssmenu'>
            <div class="logo">


            <a href=" <?php echo esc_url( home_url( '/' ) ); ?> ">
                    <?php if( get_theme_mod( 'oklookie_logo' ) ) : //Fetch Custom Logo from Customize on Dashboard Themes?>


                        <img src="<?php echo get_theme_mod( 'oklookie_logo' ); //get custom logo ?>" alt="logo">

                    <?php else :?>

                        <img src="<?php bloginfo("template_directory");?>/images/logo.png" alt="logo">

                    <?php endif; ?>           
            </a>  




            </div>
        <div id="head-mobile"></div>
        <div class="button"></div>

        <?php wp_nav_menu(array('menu' => 'Main Nav Menu', 'theme_location' => 'main_navigation',  'container' => false, 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>')); ?>

        </nav>

	</div>
    </div>
    </header>  
 
     <div class="container">

	
	