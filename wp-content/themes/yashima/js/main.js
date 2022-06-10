jQuery('.works-slider').slick({
  centerMode: true,
  infinite: true,
  dots: false,
  autoplay: true,
  arrows: false,
  autoplaySpeed: 2000,
  /*centerPadding: '175px',
  slidesToShow: 3,*/
  centerPadding: '100px',
  slidesToShow: 4,
  responsive: [
	{
	  breakpoint: 1850,
	  settings: {
		arrows: false,
		centerMode: true,
		centerPadding: '100px',
		slidesToShow: 3
	  }
	},
	{
	  breakpoint: 1600,
	  settings: {
		arrows: false,
		centerMode: true,
		centerPadding: '70px',
		slidesToShow: 3
	  }
	},
	{
	  breakpoint: 1200,
	  settings: {
		arrows: false,
		centerMode: true,
		centerPadding: '100px',
		slidesToShow: 2
	  }
	},
	{
	  breakpoint: 768,
	  settings: {
		arrows: false,
		centerMode: true,
		centerPadding: '120px',
		slidesToShow: 1
	  }
	},
	{
	  breakpoint: 550,
	  settings: {
		arrows: false,
		centerMode: true,
		centerPadding: '100px',
		slidesToShow: 1
	  }
	},
	{
	  breakpoint: 400,
	  settings: {
		arrows: false,
		centerMode: true,
		centerPadding: '20px',
		slidesToShow: 1
	  }
	}
  ]
});