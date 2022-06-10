<?php get_header(); /* Template Name: Recruit detail */ ?>

<div class="banner inner-banner recruit-banner d-flex align-items-center">

    <div class="container-lg text-center">

    	<h1>採用募集要項</h1>
	
    </div><!-- /container -->

</div><!-- /main banner -->

<?php if( have_rows('recruitment') ): ?>

	<?php while( have_rows('recruitment') ): the_row(); ?>

    <section class="py-4">

		<div class="container-lg">

			<div class="text-center">

				<h1 class="pb-0 mb-0"><?php echo get_sub_field('recruit_title'); ?></h1><br>

			</div><!-- /text center -->

			<div class="row">

				<div class="col-xl-8 m-auto col-lg-9 col-12">

					<table class="table mt-4">
						
						<?php if( have_rows('recruit_table_repeater') ): ?>
							<?php while( have_rows('recruit_table_repeater') ): the_row(); ?>
								<tr>
									<td><?php echo get_sub_field('label'); ?></td>
									<td>
										<?php echo get_sub_field('details'); ?>
									</td>
								</tr>
							<?php endwhile; ?>
						<?php endif; ?>
			
					 </table>

				</div><!-- /col 9 -->

			</div><!-- /row -->

		</div><!-- /container -->

	</section>		
		
	<?php endwhile; ?>
					
<?php endif; ?>

<section class="py-5 bg-grey" id="apply">
	
	<div class="container-lg">
	
		<div class="row mt-4">
			
			<div class="col-xl-3 col-lg-3 col-md-4 mb-md-0 mb-4">
				
				<div class="card d-flex justify-content-center align-items-center py-5">

					<div class="icon-3 pb-3">

						<img src="<?php echo get_template_directory_uri(); ?>/img/icon3.svg" class="card-img-top" alt="icon 1">

					</div><!-- /icon -->

					<div class="card-body p-0 text-center">

						<h4>Apply</h4>
						<span>応募する</span>
						
					</div><!-- /card body -->

				</div><!-- /card -->
				
			</div><!-- /col 3 -->
			
			<div class="col-xl-8 offset-xl-1 col-lg-8 offset-lg-1 col-md-8 offset-0">
			
				<h3 class="text-blue">
				
					あなたの応募をお待ちしています。
					
				</h3>
				
				<p>
					まずはお問い合わせ下さい。採用担当よりご連絡をさせて頂きます。
				</p>
				
				<div class="contact-form py-5">
				
					<?php echo do_shortcode('[contact-form-7 id="77" title="Recruit form"]'); ?>
				
				</div><!-- /contact form -->
					
			</div><!-- /col 9 -->
			
		</div><!-- /row -->
			
		
	</div><!-- /container -->
	
</section>


<?php get_footer(); ?>