<?php
/**
 * Static page template.
 *
 * @package P2
 */
?>
<?php get_header(); ?>

<!-- Also called on in footer but will not display the second time. -->
<?php get_sidebar( get_post_type() ); ?> 

<div class="sleeve_main">

	<div id="main">
		<h2 class="handbook-page-title"><?php the_title(); ?></h2>
		<?php if ( have_posts() ) : ?>

			<ul id="postlist">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'entry', 'handbook' ); ?>
			<?php endwhile; ?>
			</ul>

		<?php endif; ?>

	</div> <!-- main -->

</div> <!-- sleeve -->

<?php get_footer(); ?>
