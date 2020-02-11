<?php
/**
 * Template Name: Contact Page Template
 */

get_header();
?>


<?php get_template_part('template-parts/content','hero-secondary'); ?>

	<div id="primary" class="content-area">
            
			<div class="container">

				<div class="row">
					<div class="col-10">
					
						<?php
							while ( have_posts() ) :
								the_post();

								get_template_part( 'template-parts/content', 'page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
						?>
					</div>
                </div>

            </div>
                
    </div><!-- #primary -->

    <div id="contactForm">

    </div>

<?php
get_footer();