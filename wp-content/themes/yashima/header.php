<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	
	<!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	
	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/b079c9e56b.js" crossorigin="anonymous"></script>
	
	<!-- Typekit -->
	<script>
	  (function(d) {
		var config = {
		  kitId: 'aao8mom',
		  scriptTimeout: 3000,
		  async: true
		},
		h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
	  })(document);
	</script>
	
	<!-- Yashima CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	<?php wp_head(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D7KBEKRB6P"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-D7KBEKRB6P');
    </script>
</head>

<body <?php body_class(); ?>>
	
	<?php wp_body_open(); ?>
	
	<header class="py-4">
	
		<div class="container-lg">
		
			<div class="row">
			
				<div class="col-lg-4 col-9">
				
					<div class="logo">
					
						<a href="<?php echo get_home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/w-logo.svg" alt="Yashima - Since 1951">
						</a>
						
					</div><!-- /logo -->
					
				</div><!-- /col 4 -->
				
				<div class="col-lg-8 align-items-center justify-content-center d-none d-lg-flex">					
					<?php //wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
					<ul class="nav justify-content-center">
					  <li class="nav-item">
						<a class="nav-link active" href="<?php echo get_home_url(); ?>/about">会社概要</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="<?php echo get_home_url(); ?>/works">施工事例</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="<?php echo get_home_url(); ?>/recruit">リクルート</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="<?php echo get_home_url(); ?>/blog">お知らせ</a>
					  </li>
				      <li class="nav-item">
						<a class="nav-link" href="<?php echo get_home_url(); ?>/partners/">協力会社の皆様へ</a>
					  </li>
						<li class="nav-item">
						<a class="nav-link" href="<?php echo get_home_url(); ?>/contact/">お問い合わせ</a>
					  </li>
					</ul>
					
				</div><!-- /col 8 -->
				
				<div class="d-none <?php /* col-3 d-flex d-lg-none align-items-center justify-content-end */ ?>">
				
					<i class="fas fa-bars fa-2x text-white"></i>
					
				</div><!-- /mobile menu -->
				
			</div><!-- /row -->
			
		</div><!-- /container -->
		
	</header>