<?php get_header(); /* Template Name: Blog */ ?>

<div class="banner inner-banner news-banner d-flex align-items-center">

    <div class="container text-center">

    	<h1>お知らせ</h1>
	
    </div><!-- /container -->

</div><!-- /main banner -->


<section class="py-5">
	
	<div class="container-lg">
	
		<div class="row">
			
			<?php 

			$args = array(
				'post_type' => 'post',
				'posts_per_page' => -1
			);
		
		// the query
		$the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>

			<!-- pagination here -->

			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				
			<div class="col-lg-4 col-md-6 col-12 pb-3">
			
				<a href="<?php echo get_permalink(); ?>">
					<?php echo get_the_post_thumbnail(); ?>
				</a>
				
				<div class="py-3">
					<h5>
						<a href="<?php echo get_permalink(); ?>" class="text-dark text-decoration-none">
							<?php the_title(); ?>
						</a>
					</h5>
				</div><!-- /py 3 -->
				
				<span><?php the_excerpt(); ?></span>
				
			</div><!-- /col 4 -->
		
			<?php endwhile; ?>
			<!-- end of the loop -->

			<!-- pagination here -->

			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
			
		</div><!-- /row -->
		
	</div><!-- /container -->
	
</section>

<?php get_footer(); ?>