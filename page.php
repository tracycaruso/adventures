<?php get_header(); ?>
	<?php get_sidebar(); ?>
<!-- Row for main content area --><div class="small-12 large-7 columns" id="content" role="main">
	
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<div class="entry-content">
			
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
			</footer>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	
		
<?php get_footer(); ?>