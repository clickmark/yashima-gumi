<?php get_header(); /* Template Name: Contact */ ?>

<div class="banner inner-banner contact-banner d-flex align-items-center">

    <div class="container text-center">

    	<h1>お問い合わせ</h1>
	
    </div><!-- /container -->

</div><!-- /main banner -->

<section class="py-5 bg-grey">				

	<div class="container-lg">
        
        <div class="row pb-3">
        
            <div class="col-md-4 col-12">
            
                <small>本　社</small><br>
                <h5>〒656-1731<br>兵庫県淡路市仁井2番地3</h5>
                
            </div><!-- /col 4 -->
            
            <div class="col-md-4 col-12">
            
                <small>TEL</small><br>
                <h5>0799-82-0600</h5>
                
            </div><!-- /col 4 -->
            
            <div class="col-md-4 col-12">
            
                <small>FAX</small><br>
                <h5>0799-82-1295</h5>
                
            </div><!-- /col 4 -->
            
        </div><!-- /row -->
	
		<div class="row mt-4">
			
			<div class="col-xl-3 col-lg-3 col-md-4 mb-md-0 mb-4">
				
				<div class="card d-flex justify-content-center align-items-center py-5">

					<div class="icon-3 pb-3">

						<img src="<?php echo get_template_directory_uri(); ?>/img/icon3.svg" class="card-img-top" alt="icon 1">

					</div><!-- /icon -->

					<div class="card-body p-0 text-center">

						<h4 class="english-font">Contact</h4>
						<span>お問い合わせ</span>

					</div><!-- /card body -->
				</div><!-- /card -->
			
			</div><!-- /col 3 -->
			
			<div class="col-xl-8 offset-xl-1 col-lg-8 offset-lg-1 col-md-8 offset-0">
			
				<h3 class="text-blue">
				
					コンタクトフォームよりお気軽にお問い合わせください
					
				</h3>
				
				<div class="contact-form py-5">
				
					<?php echo do_shortcode('[contact-form-7 id="6" title="Contact form"]'); ?>
				
				</div><!-- /contact form -->

			</div><!-- /col 9 -->
			
		</div><!-- /row -->
			

	</div><!-- /container -->
	<br><br>
	<div class="container-lg">
	
		<div>
		
			<div class="container-lg text-center">
				<h3>アクセスマップ</h3>
				<br>
			</div>
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13147.55204267775!2d134.93959069696044!3d34.53106518165148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3554cc6a7cc9a6b5%3A0x65d2e5b1c23d9580!2z44CSNjU2LTE3MzEg5YW15bqr55yM5reh6Lev5biC5LuB5LqV77yS!5e0!3m2!1sja!2sjp!4v1626923438848!5m2!1sja!2sjp" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			
		</div>

	</div><!-- /container -->
	
</section>


<?php get_footer(); ?>