<?php
/**
 * Template Name: Home Page Template
 */

get_header();
?>

	<?php get_template_part('template-parts/content','hero'); ?>

	<div id="primary" class="content-area">
            
			<div class="container-fluid">

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

	</div><!-- #primary -->

<?php
get_footer();
