<?php
/**
 * Template Name: Home Page Template
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            
            <?php if (have_rows('featured_case_studies')): ?>
            <?php while (have_rows('featured_case_studies')): the_row()?>
            <?php $caseStudy = get_sub_field('featured_case_study'); ?>
            <div class="main-slider">
                <div class="slide" style="background-image:url('<?php the_field('featured_image', $caseStudy); ?>')">
                    <div class="slide-blurb">
                        <?php the_sub_field('blurb'); ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>

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

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
