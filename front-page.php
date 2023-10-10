<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header(); ?>
<div id="static-page">
	
 
<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>
			<?php wp_reset_query(); ?>
		<div class="row home-sections">
			<div class="col-3">
			<?php query_posts('category_name=musicHome&posts_per_page=10'); ?>
				<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>
			<?php wp_reset_query(); ?>
			</div>
			<div class="col-3">
			<?php query_posts('category_name=concertsHome&posts_per_page=10'); ?>
				<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>
			<?php wp_reset_query(); ?>
			</div>
			<div class="col-3">
			<?php query_posts('category_name=eventHome&posts_per_page=10'); ?>
				<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>
			<?php wp_reset_query(); ?>
			</div>
		</div><!-- .row -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();