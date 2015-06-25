<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Simone
 */
get_header(); ?>
	<div id="primary" class="contentarea lander-page">
		<main id="main" class="site-main" role="main">
            <section id="rice">
            	<div class="indent">
                	
					<?php
                    	$query = new WP_Query('pagename=rice-mill');
						//the loop
						if ($query->have_posts()){
							while($query->have_posts()){
								$query->the_post();
								echo '<div class="entry-content">';
								echo '<figure class="front-thumb icon-left">';
								the_post_thumbnail('front-mug');
								echo '</figure>';
								echo '<div class="content-right"> <h2 class="section-title">';
								the_title();
								echo '</h2>';
								the_content();
								echo '</div></div>';
							}
						}
						
						wp_reset_postdata();
					?>
                    
                </div>
            </section>
            <section id="oil">
            	<div class="indent">
                	
					<?php
                    	$query = new WP_Query('pagename=edible-oil-cooking-oil');
						//the loop
						if ($query->have_posts()){
							while($query->have_posts()){
								$query->the_post();
								echo '<div class="entry-content">';
								echo '<figure class="front-thumb icon-right">';
								the_post_thumbnail('front-mug');
								echo '</figure>';
								echo '<div class="content-left"> <h2 class="section-title">';
								the_title();
								echo '</h2>';
								the_content();
								echo '</div></div>';
							}
						}
						
						wp_reset_postdata();
					?>
                    
                </div>
            </section>
            <section id="soap">
            	<div class="indent">
                	
                    <?php
                    	$query = new WP_Query('pagename=soap');
						//the loop
						if ($query->have_posts()){
							while($query->have_posts()){
								$query->the_post();
								echo '<div class="entry-content">';
								echo '<figure class="front-thumb icon-left">';
								the_post_thumbnail('front-mug');
								echo '</figure>';
								echo '<div class="content-right"> <h2 class="section-title">';
								the_title();
								echo '</h2>';
								the_content();
								echo '</div></div>';
							}
						}
						
						wp_reset_postdata();
					?>
                    
                </div>
            </section>
            <section id="about">
            	<div class="indent">
                	
                    <?php
                    	$query = new WP_Query('pagename=about-us');
						//the loop
						if ($query->have_posts()){
							while($query->have_posts()){
								$query->the_post();
								echo '<div class="entry-content">';
								echo '<figure class="front-thumb icon-right">';
								the_post_thumbnail('front-mug');
								echo '</figure>';
								echo '<div class="content-left"> <h2 class="section-title">';
								the_title();
								echo '</h2>';
								the_content();
								echo '</div></div>';
							}
						}
						
						wp_reset_postdata();
					?>
                    
                </div>
            </section>
            <section id="contact">
            	<div class="indent">
                	
                    <?php
                    	$query = new WP_Query('pagename=contact-us');
						//the loop
						if ($query->have_posts()){
							while($query->have_posts()){
								$query->the_post();
								echo '<div class="entry-content">';
								the_content();
								echo '</div>';
							}
						}
						
						wp_reset_postdata();
					?>
                    
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
