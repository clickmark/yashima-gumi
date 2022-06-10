<?php get_header(); ?>

<div class="banner inner-banner about-banner d-flex align-items-center">

    <div class="container-lg text-center">

    	<h1><?php the_title(); ?></h1>
		
    </div><!-- /container -->

</div><!-- /main banner -->

<section class="py-5">
	
	<div class="container-lg">
			
		<?php the_post_thumbnail(); ?>
				
        <div class="py-3">
            <h4>
               <?php the_title(); ?>
            </h4>
        </div><!-- /py 3 -->

        <?php the_content(); ?>
				
	</div><!-- /container -->
	
</section>

<?php get_footer(); ?>