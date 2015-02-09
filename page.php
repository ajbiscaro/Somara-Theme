<?php get_header(); ?>
	
	<div id="content">
		<div id="page" class="clearfix">
			<?php while(have_posts()) : the_post(); ?>
				<div id="page-image">
					<?php if ( has_post_thumbnail() ) { ?>
						<?php the_post_thumbnail('post-thumbnail'); ?>
					<?php } else { ?>
						<span class="image-placeholder"></span>
					<?php } ?>
				</div>
				<div id="page-content">
					<article class="post">
						<h1 class="post-title"><?php the_title() ?></h1>
						<div class="post-content"><?php the_content(); ?></div>	
					</article>
				</div>
			<?php endwhile; ?>
		</div>
	</div><!-- end #content -->
	<?php get_sidebar(); ?>
	
<?php get_footer(); ?>