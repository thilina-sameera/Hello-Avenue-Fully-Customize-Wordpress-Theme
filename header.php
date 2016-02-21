<!DOCTYPE html>
<html>
<head>
<title><?php echo bloginfo('title'); ?></title>
<!--mobile apps-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//mobile apps-->
<!--Custom Theme files-->
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/swipebox.css">
<!-- //Custom Theme files -->
<!-- js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js"></script> 
<!-- //js -->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Nova+Script' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<!-- start-smooth-scrolling-->	

<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>

<!--//end-smooth-scrolling-->
<?php get_stylesheet_uri(); ?>
</head>
<body>
	<!--banner-->
	<div class="banner" id="home">
		<div class="banner-left">
			<div class="logo">
				<h1><a href="index.html"><?php echo bloginfo('title'); ?></a></h1>
				<h6><?php echo bloginfo('description'); ?></h6>
				<h2><?php echo get_theme_mod('text_setting'); ?></h2>
				<?php
					$address = get_theme_mod('address_setting');
					list($line1, $line2) = split(",", $address);
				?>
				<div class="address">
					<p><?php echo $line1; ?></p>
					<p><?php echo $line2; ?></p>
					<p>E-mail: <a href="mailto:"<?php echo get_theme_mod('email_setting'); ?>><?php echo get_theme_mod('email_setting'); ?></a></p>
					<p class="phn"><span class="glyphicon glyphicon-earphone"></span><?php echo get_theme_mod('tp_setting'); ?></p>
				</div>
				
			</div>	
		</div>
		<div class="banner-right">
			<!--banner Slider starts Here-->
				<script src="js/responsiveslides.min.js"></script>
				<script>
					// You can also use "$(window).load(function() {"
					$(function () {
					  // Slideshow 3
					  $("#slider3").responsiveSlides({
						auto: true,
						pager: true,
						nav: false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
					  });
				
					});
				</script>
				<!--//End-slider-script-->
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="banner-image">
								<img src="<?php echo get_theme_mod('mainslide_setting1');?>" style="min-height: 800px;  background-size: cover;">
							</div>
						</li>
						<li>
							<div class="banner-image banner-image1">
								<img src="<?php echo get_theme_mod('mainslide_setting2');?>"style="min-height: 800px;  background-size: cover;">
							</div>
						</li>
						<li>
							<div class="banner-image banner-image2">
								<img src="<?php echo get_theme_mod('mainslide_setting3');?>"style="min-height: 800px;  background-size: cover;">
							</div>
						</li>
					</ul>
				</div>
				<nav> 
					<a href="" id="menuToggle"> <span class="navClosed"></span> </a>
					<?php
						wp_nav_menu(array(
							'menu_class' => 'menu',
							));
					?>
				</nav>
				<script>
				(function($){
					// Menu Functions
					$(document).ready(function(){
					$('#menuToggle').click(function(e){
						var $parent = $(this).parent('nav');
					  $parent.toggleClass("open");
					  var navState = $parent.hasClass('open') ? "hide" : "show";
					  $(this).attr("title", navState + " navigation");
							// Set the timeout to the animation length in the CSS.
							setTimeout(function(){
								console.log("timeout set");
								$('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
							}, 200);
						e.preventDefault();
					});
				  });
				})(jQuery);
				</script>
		</div>
		<div class="clearfix"> </div>
	</div>