<?php
/*
*	Template Name: Oklookie About us
*	URL: www.oklookie.com
*	
**/
get_header();?>

<div class="wrapper row2">
  <div id="container" class="clear">
    
    <div id="about-us" class="clear">
      <div id="post" class="first">
        
        <section id="about-intro" class="clear">
          <?php while ( have_posts() ) : the_post(); 
				// If we have a page to show, start a loop that will display it
				?>

					<article class="post">
					
						<h1 class="title"><?php the_title(); // Display the title of the page ?></h1>
						
						<div class="the-content">
							<?php the_content(); 
							// This call the main content of the page, the stuff in the main text box while composing.
							// This will wrap everything in p tags
							?>
							
							<?php wp_link_pages(); // This will display pagination links, if applicable to the page ?>
						</div><!-- the-content -->
						
					</article>

				<?php endwhile; // OK, let's stop the page loop once we've displayed it ?>
        </section>
        
        <section id="about-articles">
          <h1>Indonectetus facilis</h1>
          <article>
            <div class="fl_left"><img src="http://oklookie.com/wp-content/uploads/2016/03/banner_125.gif" alt=""></div>
            <div class="fl_right">
              <h2>Indonectetus facilis</h2>
              <p>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p><a href="#">Read More &raquo;</a></p>
            </div>
          </article>
          <article class="clear">
            <div class="fl_left"><img src="http://oklookie.com/wp-content/uploads/2016/03/banner_125.gif" alt=""></div>
            <div class="fl_right">
              <h2>Indonectetus facilis</h2>
              <p>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p><a href="#">Read More &raquo;</a></p>
            </div>
          </article>
          <article class="clear">
            <div class="fl_left"><img src="http://oklookie.com/wp-content/uploads/2016/03/banner_125.gif" alt=""></div>
            <div class="fl_right">
              <h2>Indonectetus facilis</h2>
              <p>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p><a href="#">Read More &raquo;</a></p>
            </div>
          </article>
        </section>
        
      </div>
     
      <section id="team" class="sidebar one_quarter">
        <h2>Oklookie Team</h2>
        <ul>
          <li>
            <figure><img src="http://oklookie.com/wp-content/uploads/2016/03/avatar-205x205.gif" alt="">
              <figcaption>
                <p class="team_name">Name Goes Here</p>
                <p class="team_title">Job Title Here</p>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="http://oklookie.com/wp-content/uploads/2016/03/avatar-205x205.gif" alt="">
              <figcaption>
                <p class="team_name">Name Goes Here</p>
                <p class="team_title">Job Title Here</p>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="http://oklookie.com/wp-content/uploads/2016/03/avatar-205x205.gif" alt="">
              <figcaption>
                <p class="team_name">Name Goes Here</p>
                <p class="team_title">Job Title Here</p>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="http://oklookie.com/wp-content/uploads/2016/03/avatar-205x205.gif" alt="">
              <figcaption>
                <p class="team_name">Name Goes Here</p>
                <p class="team_title">Job Title Here</p>
              </figcaption>
            </figure>
          </li>
        </ul>
      </section>
      
    </div>
    
  </div>
</div>
</div>
<?php get_footer();?>