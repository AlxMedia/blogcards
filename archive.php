<?php get_header(); ?>

<?php get_template_part('inc/page-title'); ?>

<?php if ( have_posts() ) : ?>
	
	<?php while ( have_posts() ): the_post(); ?>
		<?php get_template_part('content'); ?>
	<?php endwhile; ?>

<?php endif; ?>

<?php get_template_part('inc/pagination'); ?>

<?php get_footer(); ?>