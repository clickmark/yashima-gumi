<?php get_header(); /* Template Name: Partner */ ?>

<div class="banner inner-banner partners-banner d-flex align-items-center">

    <div class="container-lg text-center">

    	<h1>協力会社の皆様へ</h1>
	
    </div><!-- /container -->

</div><!-- /main banner -->


<section class="py-5">
	
	<div class="container-lg">
	
		<div>
		
			<h1 class="text-yashima-primary mb-5"><?php echo get_field('title'); ?></h1>
			
			<p>
				<?php echo get_field('introduction'); ?>
			</p>

			<p>
				<a href="<?php echo get_field('button_file'); ?>" class="btn btn-outline-dark">
					<strong><?php echo get_field('button_title'); ?></strong>
				</a>
			</p>
			
			<p>				
				<?php echo get_field('ending_text'); ?>
			</p>
			
		</div>
		
	</div><!-- /container -->
	
</section>

<?php get_footer(); ?>