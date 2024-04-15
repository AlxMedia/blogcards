<?php get_header(); ?>

<div class="blog-card blog-card-single-head">
	
	<div class="blog-card-inner">
		
		<div class="blog-card-right">
			
			<div class="blog-card-right-inner" style="background-image:url('<?php the_post_thumbnail_url('blogcards-large'); ?>');"></div>
			
			<div class="blog-card-date"><i class="far fa-calendar"></i> <?php the_time( get_option('date_format') ); ?></div>
			
			<?php do_action( 'alx_ext_sharrre' ); ?>
			
		</div>
				
		<div class="blog-card-bottom">
		
			<ul class="blog-card-bottom-list group">
				<li class="blog-card-category"><i class="far fa-file"></i><?php the_category(' / '); ?></li>
				<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
					<li class="blog-card-comments"><a class="blog-card-comments-link" href="<?php comments_link(); ?>"><i class="far fa-comment-alt"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a></li>
				<?php endif; ?>
				<li class="blog-card-more"><a href="#more-scroll"><i class="fas fa-arrow-down"></i></a></li>
			</ul>
			
		</div>

	</div>
	
</div>
	
<div class="blog-card-single-content">
	
	<?php while ( have_posts() ): the_post(); ?>
	
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<header class="entry-header group" id="more-scroll">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="blog-card-author group">
					<div class="blog-card-author-avatar"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_avatar(get_the_author_meta('user_email'),'64'); ?></a></div>
					<div class="blog-card-author-name"><?php esc_html_e('by','blogcards'); ?> <?php the_author_posts_link(); ?></div>
				</div>
			</header>

			<div class="entry themeform">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','blogcards'),'after'=>'</div>')); ?>
				<div class="clear"></div>
			</div>
			
		</article>
		
		<div class="entry-footer group">

			<?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','blogcards').'</span> ','','</p>'); ?>
			
			<div class="clear"></div>
			
			<?php if ( ( get_theme_mod( 'author-bio', 'on' ) == 'on' ) && get_the_author_meta( 'description' ) ): ?>
				<div class="author-bio">
					<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
					<p class="bio-name"><?php the_author_meta('display_name'); ?></p>
					<p class="bio-desc"><?php the_author_meta('description'); ?></p>
					<div class="clear"></div>
				</div>
			<?php endif; ?>
			
			<?php do_action( 'alx_ext_sharrre_footer' ); ?>

			<div class="entry-comments themeform">
				<?php comments_template(); ?>
			</div>
			
		</div><!--/.entry-footer-->
		
		<?php if ( get_theme_mod( 'post-nav', 'content' ) == 'content' ) { get_template_part('inc/post-nav'); } ?>
		
	<?php endwhile; ?>
	
</div>

<?php if ( get_theme_mod( 'related-posts', 'categories' ) != 'disable' ) { get_template_part('inc/related-posts'); } ?>

<?php get_footer(); ?>