<?php
   get_header();
?>

   
	<!--//banner-->
	<!--banner-bottom-->
	<div class="banner-bottom">
		<div class="container">
			<h3 class="title"><?php echo get_theme_mod('welcome_settingh');?></h3>
			<div class="banner-bottom-grids">
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-grid-rel">
						<p class="welcome-bg-text">01.</p>
						<div class="banner-bottom-grid-rel-pos">
							<p><?php echo get_theme_mod('welcome_setting');?></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-grid-rel">
						<p class="welcome-bg-text">02.</p>
						<div class="banner-bottom-grid-rel-pos">
							<p><?php echo get_theme_mod('welcome_setting2');?></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-grid-rel">
						<p class="welcome-bg-text">03.</p>
						<div class="banner-bottom-grid-rel-pos">
							<p><?php echo get_theme_mod('welcome_setting3');?></p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	<!--services-->
	<div class="services">
		<div class="container">
			<h3 class="title">Our Services</h3>
			<div class="col-md-5 services-info">
				<h5><?php echo get_theme_mod('service_description_setting'); ?></h5>
				<div class="services-grid">
					<div class="border">
						<img src="<?php echo get_theme_mod('subimg_setting2');?>" width="300px" height="250px" alt=""/>
					</div>
				</div>
			</div>
			<div class="col-md-7 services-grids">
				<div class="services-grids-top">
					<div class="col-md-6 service-box">
						<figure class="icon">
							<span class="glyphicon glyphicon-plane"></span>
						</figure>
						<h5><?php echo get_theme_mod('service1_setting_title'); ?></h5>
						<p><?php echo get_theme_mod('service1_setting'); ?></p>
					</div>
					<div class="col-md-6 service-box">
						<figure class="icon">
							<span class="glyphicon glyphicon-picture"></span>
						</figure>
							<h5><?php echo get_theme_mod('service2_setting_title'); ?></h5>
							<p><?php echo get_theme_mod('service2_setting'); ?></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="services-grids-top">
					<div class="col-md-6 service-box">
						<figure class="icon">
							<span class="glyphicon glyphicon-heart"></span>
						</figure>
							<h5><?php echo get_theme_mod('service3_setting_title'); ?></h5>
							<p><?php echo get_theme_mod('service3_setting'); ?></p>
					</div>
					<div class="col-md-6 service-box wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
						<figure class="icon">
							<span class="glyphicon glyphicon-home"></span>
						</figure>
							<h5><?php echo get_theme_mod('service4_setting_title'); ?></h5>
							<p><?php echo get_theme_mod('service4_setting'); ?></p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!--


	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-grids">
				<h3>Review</h3>
				<p><?php echo get_theme_mod('review_setting'); ?></p>
				</div>
			<div class="col-md-3 footer-grids">
				<h3>Contact Me</h3>
				<p><?php echo $address ?><br>
					<span>Office: <?php echo get_theme_mod('tp_setting'); ?></span>
					<span>Support to: <a href="mailto:<?php echo get_theme_mod('email_setting');?>"><?php echo get_theme_mod('email_setting'); ?></a></span>
				</p>
				<div class="footer-bottom">
					<h3>Follow Us</h3>
					<ul>
						<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/f1.png" alt=""> FACEBOOK</a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/f2.png" alt=""> GOOGLE+</a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/f3.png" alt=""> LINKEDIN</a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/f4.png" alt=""> TWITTER</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-5 footer-grids">
				<h3>Subscribe</h3>				
				<form>
					<input type="text" placeholder="Enter your email" required="">
					<input type="submit" value="">
				</form>
				
			</div>
			<div class="clearfix"> </div>
			<div class="footer-copy">
				<p>© 2016 321 Avenue Wordpress Themes</p>
			</div>
		</div>
	</div>
<?php
    get_footer();
?>