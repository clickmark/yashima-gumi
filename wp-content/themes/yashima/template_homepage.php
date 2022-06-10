<?php get_header(); /* Template Name: Home */ ?>

<div class="main-banner banner">
	
	<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/561585154?h=0eed63b21f&autoplay=1&loop=1&muted=1&color=353964&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Yashima - Homepage"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
	
</div><!-- /main banner -->


<section class="py-5">
	
	<div class="container-lg">
		
		<div class="row">
					
			<div class="col-lg-4 col-12 d-md-flex d-block flex-column justify-content-start">

				<h1 class="mb-3 english-font">Our Service</h1>
				<span>事業内容</span>

			</div><!-- /col 4 -->

			<div class="col-lg-8 col-12 d-md-flex d-block align-items-center justify-content-end">

				<span>一人ひとりの連携、未来に残る仕事　</span>&nbsp;&nbsp;
　
				<a href="<?php echo get_home_url(); ?>/about" class="btn btn-yashima-primary">
					詳しく見る
				</a>

			</div><!-- /col 8 -->

		</div><!-- /row -->
		
		<div class="py-4 text-end">

			<img src="<?php echo get_template_directory_uri(); ?>/img/top2.jpg" alt="Yashima Site">

		</div><!-- /py-4 -->
		
		
		<div class="row py-4">
					
			<div class="col-lg-4 col-12 d-md-flex d-block flex-column justify-content-start">

				<h1 class="mb-3 english-font">Works</h1>
				<span>施工事例</span>

			</div><!-- /col 4 -->

			<div class="col-lg-8 col-12 d-md-flex d-block align-items-center justify-content-end">

				<span>まちを形づくるあらゆるニーズに対応　</span>&nbsp;&nbsp;

				<a href="<?php echo get_home_url(); ?>/works" class="btn btn-yashima-primary">
					詳しく見る
				</a>

			</div><!-- /col 8 -->

		</div><!-- /row -->
		
	</div><!-- /container -->
		
	<div class="works-slider py-3">
		
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
				
		
			<div>
				<a href="<?php echo get_permalink(); ?>">
					<?php echo get_the_post_thumbnail(); ?>
				</a>
			</div>

			<?php endwhile; ?>
			<!-- end of the loop -->

			<!-- pagination here -->

			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		
	</div><!-- /main-slider -->
	
	<div class="container-lg">		
		
		<div class="text-center py-4">
		
			<a href="<?php echo get_home_url(); ?>/works" class="btn btn-yashima-primary">
				事例をもっと見る
			</a>
			
		</div><!-- /text center -->
		
	</div><!-- /container -->
	
</section>

<section class="bg-blue py-5">
	
	<div class="container-lg">
		
		<div class="row">
		
			<div class="col-md-6 d-flex align-items-start justify-content-center flex-column">
			
				<div>
					<h1 class="m-0 mb-1 english-font">People</h1>
					<span>社員インタビュー</span>
				</div>
				
				<div class="my-4">
					<span>八嶋組は、人でできています。</span>
				</div>
				
				<div>
					<a href="<?php echo get_home_url(); ?>/recruit" class="btn btn-yashima-primary">
						インタビューを見る
					</a>
				</div>

			</div><!-- /col 6 -->
			
			<div class="col-md-6 d-flex align-items-center justify-content-center mt-md-0 mt-4">
			
				<img src="<?php echo get_template_directory_uri(); ?>/img/top5.jpg" alt="img">
				
			</div><!--/ col 6 -->
			
		</div><!-- /row -->
		
	
	</div><!-- /container -->

</section>



<section class="py-5">
	
	<div class="container-lg">
		
		<div class="row">
		
			<div class="col-md-6 d-flex align-items-center justify-content-center">
			
				<img src="<?php echo get_template_directory_uri(); ?>/img/top6.jpg" alt="img">
				
			</div><!--/ col 6 -->
			
			<div class="col-md-6 d-flex align-items-start justify-content-center flex-column">
			
				<div>
					<h1 class="m-0 mb-1 english-font">Recruit</h1>
					<span>社員募集</span>
				</div>
				
				<div class="my-4">
					<span>
						八嶋組は現在一緒に働いてくれる人を募集<br>
						しております
					</span>
				</div>
				
				<div>
					<a href="<?php echo get_home_url(); ?>/recruit-detail/" class="btn btn-yashima-primary">
						採用募集要項を見る
					</a>
				</div>

			</div><!-- /col 6 -->
		
			
		</div><!-- /row -->
		
	
	</div><!-- /container -->

</section>




<section class="bg-grey py-5">
	
	<div class="container-lg">
		
		<div class="card-group">

			<div class="card d-flex justify-content-center align-items-center py-5">

				<div class="icon-1 pb-3">
					
					<img src="<?php echo get_template_directory_uri(); ?>/img/icon1.svg" class="card-img-top" alt="icon 1">
					
				</div><!-- /icon -->

				<div class="card-body p-0 text-center">

					<h4 class="english-font">Recruitment</h4>
					<span>求人募集要項</span>
					
					<a href="<?php echo get_template_directory_uri(); ?>/recruit-detail/" target="_blank" class="stretched-link"></a>


				</div><!-- /card body -->

			</div><!-- /card -->
			
			<div class="card d-flex justify-content-center align-items-center py-5">

				<div class="icon-1 pb-3">
					
					<img src="<?php echo get_template_directory_uri(); ?>/img/icon2.svg" class="card-img-top" alt="icon 2">
					
				</div><!-- /icon -->

				<div class="card-body p-0 text-center">

					<h4 class="english-font">Invoice</h4>
					<span>協力会社の皆様へ (現場別請求書)</span>
					<a href="<?php echo get_template_directory_uri(); ?>/partners" target="_blank" class="stretched-link"></a>

				</div><!-- /card body -->

			</div><!-- /card -->
			
			<div class="card d-flex justify-content-center align-items-center py-5">

				<div class="icon-3 pb-3">
					
					<img src="<?php echo get_template_directory_uri(); ?>/img/icon3.svg" class="card-img-top" alt="icon 3">
					
				</div><!-- /icon -->

				<div class="card-body p-0 text-center">

					<h4 class="english-font">Apply</h4>
					<span>応募する</span>
					
					<a href="<?php echo get_home_url(); ?>/recruit#apply" class="stretched-link"></a>

				</div><!-- /card body -->

			</div><!-- /card -->

		</div><!-- /card group -->

	</div><!-- /container -->

</section>
	
<div class="row">

    <div class="col-xl-3 col-lg-3 col-md-4 col-12 d-flex align-items-center justify-content-center flex-column bg-dark-blue text-white py-5">

        <h1 class="m-0 p-0 mb-2 english-font">News</h1>
        <span>お知らせ</span>

    </div><!-- /col 3 -->
	
	<div class="col-xl-9 col-lg-9 col-md-8 col-12 d-flex justify-content-center flex-column bg-white p-md-5 p-4">
		
		<?php 
		
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 4
		);
		
		
		// the query
		$the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>

			<!-- pagination here -->

			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				
		
			<div class="row mt-3">

				<div class="col-xl-2 col-lg-3 col-md-3 col-12">
					<span class="meta-date d-md-block d-inline-block mb-lg-0 mb-1">
						<?php echo get_the_date(); ?>
					</span>
				</div><!-- /col 2 -->

				<div class="col-xl-10 col-lg-9 col-md-9 col-12 d-flex justify-content-center flex-column">
					<a href="<?php echo get_permalink(); ?>" class="text-dark text-decoration-none mb-lg-0 mb-1">
						<?php the_title(); ?>
					</a>
				</div><!-- /col 10 -->

			</div><!-- /row -->

		
			<?php endwhile; ?>
			<!-- end of the loop -->

			<!-- pagination here -->

			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		
		
		
	</div><!-- /col 9 -->

</div><!-- /row -->

<div class="banner inner-banner home-banner d-flex align-items-center">

    <div class="container text-center">

    	<a href="<?php echo get_home_url(); ?>/contact" class="btn btn-lg btn-yashima-primary btn-rounded">
			お問い合わせ
		</a>
	
    </div><!-- /container -->

</div><!-- /main banner -->

<?php get_footer(); ?>