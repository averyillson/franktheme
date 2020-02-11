<?php
/**
 * Template Name: Us Page Template
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

				<div class="row">
					<?php if(have_rows('team_member')): ?>

					<?php while (have_rows('team_member')): the_row(); 

						$profile = get_sub_field('team_member_profile');
						$profileAlt = get_sub_field('team_member_profile_alt');
						$teamName = get_sub_field('team_member_name');
						$teamTitle = get_sub_field('team_member_title');

					?>

						<div class="col-lg-4 col-md-6 col-12">

							<article class="team">
								<img class="team-profile-alt" src="<?php echo $profileAlt ?>" alt="<?php echo $teamName ?>'s Profile Image">
								<img class="team-profile-img" src="<?php echo $profile ?>" alt="<?php echo $teamName ?>'s Profile Image">
								<h4 class="team-name"><?php echo $teamName ?></h4>
								<p class="team-title"><?php echo $teamTitle ?></p>
							</article>

						</div>

					<?php endwhile; ?>

					<?php endif; ?>
				</div>

			</div>
	</div><!-- #primary -->

<?php
get_footer();

