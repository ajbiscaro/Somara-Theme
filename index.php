<?php get_header(); ?>

	<div id="main-content" class="clearfix">
		<div class="container">
			<div class="teaser txt-center">
				<h2>Welcome to Somara</h2>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				<p>There are many variations of passages of Lorem Ipsum available</p>
			</div>
			<div class="teaser-slider">
				<ul class="bjqs">
					<?php echo do_shortcode("[slider_item]"); ?>
				</ul>
			</div>
			<div class="service">
				<div class="service-box first-box">
					<img src="<?php echo get_template_directory_uri();?>/images/icon-man.png" alt="Icon Man" />
					<p class="title">WHY CHOOSE US ?</p>
					<p class="subtitle">Opening doors to future and more.</p>
					<div class="line-separator"></div>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. There are many variations of passages of Lorem Ipsum available, but the majority have suffered look even slightly believable. erator on the Internet.</p>			
					<a href="#">Read More !</a>
				</div><!--end service-left--> 
				<div class="service-box">
					<img src="<?php echo get_template_directory_uri();?>/images/icon-graph.png" alt="Icon Graph" />
					<p class="title">WHY CHOOSE US ?</p>
					<p class="subtitle">Opening doors to future and more.</p>
					<div class="line-separator"></div>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. There are many variations of passages of Lorem Ipsum available, but the majority have suffered look even slightly believable. erator on the Internet.</p>
					<a href="#">Read More !</a>
				</div><!--end service-center--> 
				<div class="service-box last-box">
					<img src="<?php echo get_template_directory_uri();?>/images/icon-people.png" alt="Icon People" />
					<p class="title">WHY CHOOSE US ?</p>
					<p class="subtitle">Opening doors to future and more.</p>
					<div class="line-separator"></div>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. There are many variations of passages of Lorem Ipsum available, but the majority have suffered look even slightly believable. erator on the Internet.</p>
					<a href="#">Read More !</a>
				</div><!--end service-right--> 
			</div>
			<div class="sponsor" class="clearfix">
				<img src="<?php echo get_template_directory_uri();?>/images/sponsors.png" alt="Sponsors" />
			</div><!--end sponsor--> 
		</div>
	</div><!--end main-content--> 
	
<?php get_footer(); ?>