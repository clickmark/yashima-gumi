<?php get_header(); /* Template Name: Works */ ?>

<div class="banner inner-banner work-banner d-flex align-items-center">

    <div class="container text-center">

    	<h1>施工事例</h1>
	
    </div><!-- /container -->

</div><!-- /main banner -->


<section class="py-5">
	
	<div class="container-lg">
	
		<div class="row">
		
			<?php 
		
		$args = array(
			'post_type' => 'works',
			'posts_per_page' => -1
		);
		
		
		// the query
		$the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>

			<!-- pagination here -->

			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				
			
			<div class="col-lg-4 col-md-6 col-12 pb-4">
			
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
								
				<div class="text-center">
					<a href="<?php echo get_permalink(); ?>" class="btn btn-yashima-primary px-4">詳しく見る</a>
				</div><!-- /text center -->
				
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