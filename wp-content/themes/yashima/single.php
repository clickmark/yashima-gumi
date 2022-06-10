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
		
		<a href="<?php echo get_home_url(); ?>/blog" class="btn btn-lg btn-yashima-primary mt-4">一覧に戻る</a>
		
	</div><!-- /container -->
	
</section>

<?php get_footer(); ?>