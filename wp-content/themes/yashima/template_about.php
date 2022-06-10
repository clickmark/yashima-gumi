<?php get_header(); /* Template Name: About */ ?>

<div class="banner inner-banner about-banner d-flex align-items-center">

    <div class="container-lg text-center">

    	<h1><?php the_title(); ?></h1>
	
    </div><!-- /container -->

</div><!-- /main banner -->

<section class="py-5">
	
	<div class="container-lg">
	
		<div class="text-center">
		
			<h1 class="text-yashima-primary mb-5"><?php echo get_field('title'); ?></h1>
			
			<?php echo get_field('content'); ?>
			
		</div><!-- /text center -->
		
		<div class="row mt-5">
		
			<div class="col">
				<div class="text-end">
					<h5><?php echo get_field('role'); ?></h5>
				</div><!-- /text end -->
			</div>	
			
			<div class="col">
				<div class="text-start">
					<h4 class="text-yashima-primary"><?php echo get_field('name'); ?></h4>
				</div><!-- /text start -->
			</div>
			
		</div><!-- row --> 
		
	</div><!-- /container -->
	
</section>

<section class="bg-blue py-4">

	<div class="container-lg">
	
		<div class="text-center">
		
			<h1 class="mb-0 pb-0 english-font">Company</h1><br>
			<span>会社概要</span>
		
		</div><!-- /text center -->
		
		<div class="row">
		
			<div class="col-xl-8 m-auto col-lg-9 col-12">
			
				<table class="table mt-4">
					
					<?php if( have_rows('company_table') ): ?>

						<?php while( have_rows('company_table') ): the_row(); ?>
						<tr>
							<td><?php echo get_sub_field('label'); ?></td>
							<td><?php echo get_sub_field('description'); ?></td>
						</tr>
						<?php endwhile; ?>

					<?php endif; ?>
					
				</table>

				
			</div><!-- /col 9 -->
			
		</div><!-- /row -->
		
	</div><!-- /container -->
	
</section>

<section class="py-4">

	<div class="container-lg">
	
		<div class="text-center">
		
			<h1 class="pb-0 mb-0">Company History</h1><br>
			<span>沿　　革</span>
			
		</div><!-- /text center -->
			
        <div class="row">

            <div class="col-xl-8 m-auto col-lg-9 col-12">

                <table class="table mt-4">

                    <?php if( have_rows('history_table') ): ?>

						<?php while( have_rows('history_table') ): the_row(); ?>
							<tr>
								<td><?php echo get_sub_field('label'); ?></td>
								<td><?php echo get_sub_field('details'); ?></td>
							</tr>
						<?php endwhile; ?>

					<?php endif; ?>

                </table>

            </div><!-- /col 9 -->

        </div><!-- /row -->
			
	</div><!-- /container -->
	
</section>

<section class="py-4">

	<div class="container-lg">
	
		<div class="text-center">
		
			<h1 class="pb-0 mb-0">Works</h1><br>
			<span>施工実績</span>
			
		</div><!-- /text center -->
			
        <div class="row">

            <div class="col-xl-8 m-auto col-lg-9 col-12">

                <table class="table mt-4">

                    <?php if( have_rows('works_table') ): ?>

						<?php while( have_rows('works_table') ): the_row(); ?>
							<tr>
								<td><?php echo get_sub_field('label'); ?></td>
								<td><?php echo get_sub_field('description'); ?></td>
							</tr>
						<?php endwhile; ?>

					<?php endif; ?>

                </table>

            </div><!-- /col 9 -->

        </div><!-- /row -->
			
	</div><!-- /container -->
	
</section>

<?php get_footer(); ?>