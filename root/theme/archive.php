<?php
/**
 * Archive Template
 *
 * Template for display all default archive pages.
 *
 * @since {%= base_version %}
 *
 * @package {%= class_name %}
 * @subpackage Templates
 */

?>

<?php get_header(); ?>

<div class="row container">
	<div class="small-12 medium-8 columns" role="main">


		<?php
		/** This action is documented in includes/Linchpin/hatch-hooks.php */
		do_action( 'rebar_content_before' ); ?>

		<?php if ( have_posts() ) : ?>

			<?php
			/** This action is documented in includes/Linchpin/hatch-hooks.php */
			do_action( 'rebar_loop_before' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'post' ); ?>

			<?php endwhile; ?>

			<?php
			/** This action is documented in includes/Linchpin/hatch-hooks.php */
			do_action( 'rebar_loop_after' ); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		<?php
		/** This action is documented in includes/Linchpin/hatch-hooks.php */
		do_action( 'rebar_content_after' ); ?>

		<?php get_template_part( 'images/partials/pagination' ); ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer();
