<?php get_header(); ?>
	<div id="content">
		<?php while(have_posts()) : the_post(); ?>
			<article class="post">
				<h1 class="post-title"><?php the_title() ?></h1>
				<div class="post-content">
					<?php the_content(); ?>
				</div>	
				<div class="pagination">
					<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
				</div><!-- end .pagination-->
				<?php comments_template( '', true ); ?>
				
			</article>
		<?php endwhile; ?>
		
	</div><!-- end #content -->
	<?php get_sidebar(); ?>
	
<?php get_footer(); ?>