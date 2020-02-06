<?php
/**
 * Template Name: Work Page Template
 */

get_header();
?>


<?php get_template_part('template-parts/content','hero'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            
			<div class="container-fluid">

				<div class="row">
				
					<div class="col-3">
                        <h2><?php the_title(); ?></h2>
                        <?php get_template_part('template-parts/sidebar','work'); ?>
					</div>

					<div class="col-9">
					
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

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
