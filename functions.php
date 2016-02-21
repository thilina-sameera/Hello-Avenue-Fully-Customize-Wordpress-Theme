<?php

/*Customizer Code HERE*/
add_action('customize_register', 'theme_headline_customizer');
function theme_headline_customizer($wp_customize){
 //adding section in wordpress customizer   
$wp_customize->add_section('headline_section', array(
  'title'          => 'Custom Headline',
 ));
//adding setting for footer text area
$wp_customize->add_setting('text_setting', array(
 'default'        => 'Headline of webpage',
 ));

$wp_customize->add_control('text_setting', array(
'label' => __( 'Header Text', 'helloavenue' ),
'section' => 'headline_section',
'type' => 'textarea',
));
}


//get address from user
/*Customizer Code HERE*/
add_action('customize_register', 'theme_address_customizer');
function theme_address_customizer($wp_customize){
 //adding section in wordpress customizer   
$wp_customize->add_section('address_section', array(
  'title'          => 'Address',
 ));
//adding setting for footer text area
$wp_customize->add_setting('address_setting', array(
 'default'        => '321 Railway Avenue, Maharagama',
 ));

$wp_customize->add_control('address_setting', array(
'label' => __( 'Address', 'helloavenue' ),
'section' => 'address_section',
'type' => 'textarea',
));
}

//get email address from user
add_action('customize_register', 'theme_email_customizer');
function theme_email_customizer($wp_customize){
 //adding section in wordpress customizer   
$wp_customize->add_section('email_section', array(
  'title'          => 'Email Address',
 ));
//adding setting for footer text area
$wp_customize->add_setting('email_setting', array(
 'default'        => '321avenue@gmail.com',
 ));

$wp_customize->add_control('email_setting', array(
'label' => __( 'e mail', 'helloavenue' ),
'section' => 'email_section',
'type' => 'textarea',
));
}

//get telephone number from user
add_action('customize_register', 'theme_tp_customizer');
function theme_tp_customizer($wp_customize){
 //adding section in wordpress customizer   
$wp_customize->add_section('tp_section', array(
  'title'          => 'Telephone Number',
 ));
//adding setting for footer text area
$wp_customize->add_setting('tp_setting', array(
 'default'        => '+94717699107',
 ));

$wp_customize->add_control('tp_setting', array(
'label' => __( 'HotLine', 'helloavenue' ),
'section' => 'tp_section',
'type' => 'textarea',
));
}

//add sub image1
//Change Images on blog
add_action('customize_register', 'theme_subimg_customizer');
function theme_subimg_customizer($wp_customize){
 //adding section in wordpress customizer   
$wp_customize->add_section('subimg_section', array(
  'title'          => 'Black Frame Images',
 ));
//adding setting for footer text area
$wp_customize->add_setting('subimg_setting1', array(
 
 ));

$wp_customize->add_setting('subimg_setting2', array(
 
 ));


$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'subimg_setting1', array(
'label' => __( 'Bloack Image 1', 'helloavenue' ),
'section' => 'subimg_section',
'settings' => 'subimg_setting1',
)));



$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'subimg_setting2', array(
'label' => __( 'Bloack Image 2', 'helloavenue' ),
'section' => 'subimg_section',
'settings' => 'subimg_setting2',
)));
//end sub image
}
//Change Images on blog
add_action('customize_register', 'theme_slide_customizer');
function theme_slide_customizer($wp_customize){
 //adding section in wordpress customizer   
$wp_customize->add_section('mainslide_section', array(
  'title' => 'Main Slide Images',
 ));
//adding setting for footer text area
$wp_customize->add_setting('mainslide_setting1', array(
 
 ));

$wp_customize->add_setting('mainslide_setting2', array(
 
 ));

$wp_customize->add_setting('mainslide_setting3', array(
 
 ));


$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'mainslide_setting1', array(
'label' => __( 'Image No 1', 'helloavenue' ),
'section' => 'mainslide_section',
'settings' => 'mainslide_setting1',
)));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'mainslide_setting2', array(
'label' => __( 'Image No 2', 'helloavenue' ),
'section' => 'mainslide_section',
'settings' => 'mainslide_setting2',
)));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'mainslide_setting3', array(
'label' => __( 'Image No 3', 'helloavenue' ),
'section' => 'mainslide_section',
'settings' => 'mainslide_setting3',
)));
}

function addImageCss(){
?>
	<?php
		$image1 = get_theme_mod('slide_setting1');
		$image2 = get_theme_mod('slide_setting2');
		$image3 = get_theme_mod('slide_setting3');
	?>


	<style type="text/css">
	.banner-image {
	    min-height: 800px;
	    background: <?php echo $image1; ?>
	    background-size: cover;
	}

	.banner-image1 {
 	background: <?php echo $image2; ?>
    background-size: cover;
}
	.banner-image2{
	background: <?php echo $image3; ?>
    background-size: cover;
}
	</style>
<?php
add_action('wp_head','addImageCss');
}
?>

<?php

	/*Customizer Code HERE*/
add_action('customize_register', 'theme_welcome_customizer');
function theme_welcome_customizer($wp_customize){
 //adding section in wordpress customizer   
$wp_customize->add_section('welcome_section', array(
  'title'          => 'One Two Three Area',
 ));

$wp_customize->add_setting('welcome_settingh', array(
 'default'        => 'Enter Grid Headline',
 ));

//adding setting for footer text area
$wp_customize->add_setting('welcome_setting', array(
 'default'        => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look li',
 ));

$wp_customize->add_setting('welcome_setting2', array(
 'default'        => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look li',
 ));

$wp_customize->add_setting('welcome_setting3', array(
 'default'        => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look li',
 ));

$wp_customize->add_control('welcome_settingh', array(
'label' => __( 'Grid Headline', 'helloavenue' ),
'section' => 'welcome_section',
'type' => 'textarea',
));

$wp_customize->add_control('welcome_setting', array(
'label' => __( 'Welcome Text 1', 'helloavenue' ),
'section' => 'welcome_section',
'type' => 'textarea',
));

$wp_customize->add_control('welcome_setting2', array(
'label' => __( 'Welcome Text 2', 'helloavenue' ),
'section' => 'welcome_section',
'type' => 'textarea',
));
$wp_customize->add_control('welcome_setting3', array(
'label' => __( 'Welcome Text 3', 'helloavenue' ),
'section' => 'welcome_section',
'type' => 'textarea',
));
}

?>


<?php
	add_action('customize_register', 'description_customizer');
	function description_customizer($wp_customize){
	 //adding section in wordpress customizer   
	$wp_customize->add_section('description_section', array(
	  'title'          => 'Custom Description',
	 ));
	//adding setting for footer text area
	$wp_customize->add_setting('description_head_setting', array(
	 'default'        => 'Headline for Description',
	 ));

	$wp_customize->add_setting('description_setting', array(
	 'default'        => 'Description',
	 ));

	$wp_customize->add_control('description_head_setting', array(
	'label' => __( 'Enter a title', 'helloavenue' ),
	'section' => 'description_section',
	'type' => 'textarea',
	));

	$wp_customize->add_control('description_setting', array(
	'label' => __( 'Enter your description', 'helloavenue' ),
	'section' => 'description_section',
	'type' => 'textarea',
	));


	}


?>

<?php
	add_action('customize_register', 'services_customizer');
	function services_customizer($wp_customize){
	 //adding section in wordpress customizer   
	$wp_customize->add_section('services_section', array(
	  'title'          => 'Business Services',
	 ));
	//adding setting for footer text area
	$wp_customize->add_setting('service_description_setting', array(
	 'default'        => 'Describe Services',
	 ));

	$wp_customize->add_setting('service1_setting_title', array(
	 'default'        => 'Service1',
	 ));

	$wp_customize->add_setting('service1_setting', array(
	 'default'        => 'Service1',
	 ));


	$wp_customize->add_setting('service2_setting', array(
	 'default'        => 'Service2',
	 ));

	$wp_customize->add_setting('service2_setting_title', array(
	 'default'        => 'Service2',
	 ));



	$wp_customize->add_setting('service3_setting', array(
	 'default'        => 'Service3',
	 ));



	$wp_customize->add_setting('service3_setting_title', array(
	 'default'        => 'Service3',
	 ));



	$wp_customize->add_setting('service4_setting', array(
	 'default'        => 'Service4',
	 ));

	$wp_customize->add_setting('service4_setting_title', array(
	 'default'        => 'Service4',
	 ));

	$wp_customize->add_control('service_description_setting', array(
	'label' => __( 'Enter Title Of Services', 'helloavenue' ),
	'section' => 'services_section',
	'type' => 'textarea',
	));

	$wp_customize->add_control('service1_setting', array(
	'label' => __( 'Enter Details Of Services 1', 'helloavenue' ),
	'section' => 'services_section',
	'type' => 'textarea',
	));


	$wp_customize->add_control('service2_setting', array(
	'label' => __( 'Enter Details Of Services 2', 'helloavenue' ),
	'section' => 'services_section',
	'type' => 'textarea',
	));


	$wp_customize->add_control('service3_setting', array(
	'label' => __( 'Enter Details Of Services 3', 'helloavenue' ),
	'section' => 'services_section',
	'type' => 'textarea',
	));


	$wp_customize->add_control('service4_setting', array(
	'label' => __( 'Enter Details Of Services 4', 'helloavenue' ),
	'section' => 'services_section',
	'type' => 'textarea',
	));

	$wp_customize->add_control('service4_setting', array(
	'label' => __( 'Enter Details Of Services 4', 'helloavenue' ),
	'section' => 'services_section',
	'type' => 'textarea',
	));


	$wp_customize->add_control('service1_setting_title', array(
	'label' => __( 'Enter Title', 'helloavenue' ),
	'section' => 'services_section',
	'type' => 'textarea',
	));


	$wp_customize->add_control('service2_setting_title', array(
	'label' => __( 'Enter Title', 'helloavenue' ),
	'section' => 'services_section',
	'type' => 'textarea',
	));


	$wp_customize->add_control('service3_setting_title', array(
	'label' => __( 'Enter Title', 'helloavenue' ),
	'section' => 'services_section',
	'type' => 'textarea',
	));


	$wp_customize->add_control('service4_setting_title', array(
	'label' => __( 'Enter Title', 'helloavenue' ),
	'section' => 'services_section',
	'type' => 'textarea',
	));

	$wp_customize->add_control('service4_setting_title', array(
	'label' => __( 'Enter Title', 'helloavenue' ),
	'section' => 'services_section',
	'type' => 'textarea',
	));

	}


/*Customizer Code HERE*/
add_action('customize_register', 'theme_review_customizer');
function theme_review_customizer($wp_customize){
 //adding section in wordpress customizer   
$wp_customize->add_section('review_section', array(
  'title'          => 'Custom Review',
 ));
//adding setting for footer text area
$wp_customize->add_setting('review_setting', array(
 'default'        => 'Lorem ipsum',
 ));

$wp_customize->add_control('review_setting', array(
'label' => __( 'Enter your Review', 'helloavenue' ),
'section' => 'review_section',
'type' => 'textarea',
));
}



?>