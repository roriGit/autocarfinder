<?php
/**
Template Name: Home
 */

get_header();
?>

	<main id="primary" class="site-main col-9">

		<?php
		if ( have_posts() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php the_title(); ?></h1>
				</header>
				<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'home' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->
<div class="col-3">
<?php 
//get_sidebar();
?>
</div>
<?php
get_footer();
?>