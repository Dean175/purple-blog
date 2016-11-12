<?php

get_header();


?>

<div class="container-fluid padding-right-left-zero">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="images/slider1.jpg" alt="purpleblog">
				<div class="carousel-caption">
					<h3>Your new purple blog</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi consequat, leo in commodo laoreet, dui augue tempus est, sed vehicula mi lacus eget sapien. Sed imperdiet sollicitudin pulvinar. Nunc nec risus nec magna laoreet maximus in vel erat.
					</p>
					<div class="button-block">
						<a class="btn purpleblog-btn btn-yellow" href="#" role="button">Read more</a>
					</div>
					
				</div>
			</div>
			<!-- <div class="item">
				<img src="..." alt="...">
				<div class="carousel-caption">
					...
				</div>
			</div>
			... -->
		</div>
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
</article><!-- #header-slider -->

</section><!-- #header -->

	<section id="contents">
		<article id="blogs">
			<div class="container">
				<div class="row">

				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<div class="col-md-12">
						<div class="blog">
							<div class="blog-img"><img src="images/blog1.jpg"></div>
							<div class="author-details">
								<span class="blog-user">
									<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
									<b>Admin</b>
								</span>

								<span class="blog-comments">
									<span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
									<b>3</b>
								</span>

								<span class="blog-date">
									<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
									<b>06 Aug 2016</b>
								</span>
							</div><!-- .author-details -->

							<div class="blog-body-title">
								<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
								<?php the_content(); ?>
							</div>

							<div class="read-more-btn">
								<a href="#"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
							</div>
							
						</div><!-- .blog -->
					</div>
				<?php endwhile; ?>
				<?php else : ?>

					<?php echo '<p>No content found</p>'; ?>
				<?php endif; ?>
				</div>
	

<?php

get_footer();

?>