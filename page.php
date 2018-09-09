<?php get_header(); ?>

	<section>

			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();

					get_template_part( 'content-single', get_the_content() );

				endwhile; endif;
			?>

	</section> <!-- /.section -->

<?php get_footer(); ?>
