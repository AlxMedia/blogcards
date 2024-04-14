<?php get_header(); ?>

<?php while ( have_posts() ): the_post(); ?>

	<article <?php post_class(); ?>>	

		<header class="entry-header group">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		
		<div class="entry themeform">
			<?php the_content(); ?>
			<div class="clear"></div>
		</div><!--/.entry-->
		
		<div class="entry-footer group">
			<div class="entry-comments themeform">
				<?php comments_template(); ?>
			</div>
		</div>

	</article>

<?php endwhile; ?>

<?php get_footer(); ?>