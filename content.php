<article id="post-<?php the_ID(); ?>" <?php post_class('blog-card'); ?>>
	
	<div class="blog-card-inner">
		
		<div class="blog-card-right">
			
			<div class="blog-card-right-inner" style="background-image:url('<?php the_post_thumbnail_url('blogcards-medium'); ?>');">
				
				<a href="<?php the_permalink(); ?>" class="blog-card-link"></a>
				
			</div>
			
			<div class="blog-card-date"><i class="far fa-calendar"></i> <?php the_time( get_option('date_format') ); ?></div>
			
		</div>
		
		<div class="blog-card-left">
		
			<div class="blog-card-left-inner">
			
				<div class="blog-card-author group">
					<div class="blog-card-author-avatar"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_avatar(get_the_author_meta('user_email'),'64'); ?></a></div>
					<div class="blog-card-author-name"><?php esc_html_e('by','blogcards'); ?> <?php the_author_posts_link(); ?></div>
				</div>
			
				<h2 class="blog-card-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>
				
				<?php if (get_theme_mod('excerpt-length','20') != '0'): ?>
					<div class="blog-card-excerpt">
						<?php the_excerpt(); ?>
					</div>
				<?php endif; ?>
				
			</div>
			
		</div>
		
		<div class="blog-card-bottom">
		
			<ul class="blog-card-bottom-list group">
				<li class="blog-card-category"><i class="far fa-file"></i><?php the_category(' / '); ?></li>
				<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
					<li class="blog-card-comments"><a class="blog-card-comments-link" href="<?php comments_link(); ?>"><i class="far fa-comment-alt"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a></li>
				<?php endif; ?>
				<li class="blog-card-more"><a href="<?php the_permalink(); ?>"><i class="fas fa-arrow-right"></i><span><?php esc_html_e('Read More','blogcards'); ?></span></a></li>
			</ul>
			
		</div>

	</div>

</article>