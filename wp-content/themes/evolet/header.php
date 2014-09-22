<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta name="google-site-verification" content="cTIfaWi9dDbqYY_aeIOAc998eUzhKYeIDEE70MSUZKU" />
<link href='http://fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>
<?php wp_title('|',true,'right'); ?>
<?php bloginfo('name'); ?>
</title>
<meta name="description" content="<?php bloginfo('description'); ?>" />  
<meta name="keywords" content="<?php bloginfo('name'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nivo-default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/prettyPhoto.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/supersized.css" type="text/css" media="screen" />
<?php wp_head(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.tweet.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/nivo-slider/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/superfish-menu/superfish.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.tipsy.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slides.min.jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.contentcarousel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.vaccordion.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.contentcarousel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<?php  global $data; ?>
<?php if ( ! isset( $content_width ) ) $content_width = 900;?>
<?php wp_link_pages(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/admin/layouts/<?php echo stripslashes($data['alt_stylesheet']) ?>" type="text/css" media="screen" />
<?php  $body_style = $data['body_font']; ?>
<style type="text/css">
body {
	background-image: <?php echo 'url("'.strip_tags($data['custom_bg']).'")'; ?>; 
	background-color: <?php echo strip_tags($data['body_background'])." !important"; ?>;
	font-family: <?php echo $body_style['face']; ?>;
	color: <?php echo $body_style['color']; ?>;
	font-style: <?php echo $body_style['style']; ?>;
	font-size: <?php echo $body_style['size']; ?>;
	
}
.flip:hover {cursor:pointer !important;}
</style>
<!--GOOGLE FONTS-->
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!--/GOOGLE FONTS-->

<script type="text/javascript">
/***************************************************
			TWITTER FEED
***************************************************/

jQuery.noConflict()(function($){
$(document).ready(function() {  

	  $(".tweet").tweet({
        	count: 2,
        	username: '<?php echo $data['twitter_feed']; ?>',
        	loading_text: "loading twitter..."      
		});
});
});
</script>
<script type="text/javascript">
jQuery.noConflict()(function($){
$(document).ready(function ()
{ // after loading the DOM
    $("#ajax-contact-form").submit(function ()
    {
        // this points to our form
        var str = $(this).serialize(); // Serialize the data for the POST-request
        $.ajax(
        {
            type: "POST",
            url: '<?php echo get_template_directory_uri(); ?>/contact.php',
            data: str,
            success: function (msg)
            {
                $("#note").ajaxComplete(function (event, request, settings)
                {
                    if (msg == 'OK')
                    {
                        result = '<div class="notification_ok">Message was sent to website administrator, thank you!</div>';
                        $("#contacts-form").hide();
                    }
                    else
                    {
                        result = msg;
                    }
                    $(this).html(result);
                });
            }
        });
        return false;
    });
});
});
</script>

<?php if($data['bg_slider'] == true ) { ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/supersized.3.1.3.min.js"></script>
		<script type="text/javascript">  
			
			jQuery(function($){
				$.supersized({
				
					//Functionality
					slideshow               :   1,		//Slideshow on/off
					autoplay				:	1,		//Slideshow starts playing automatically
					start_slide             :   1,		//Start slide (0 is random)
					random					: 	0,		//Randomize slide order (Ignores start slide)
					slide_interval          :   5000,	//Length between transitions
					transition              :   1, 		//0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	700,	//Speed of transition
					new_window				:	0,		//Image links open in new window/tab
					pause_hover             :   0,		//Pause slideshow on hover
					keyboard_nav            :   1,		//Keyboard navigation on/off
					performance				:	1,		//0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
					image_protect			:	0,		//Disables image dragging and right click with Javascript
					image_path				:	'<?php echo get_template_directory_uri(); ?>/img/', //Default image path

					//Size & Position
					min_width		        :   0,		//Min width allowed (in pixels)
					min_height		        :   0,		//Min height allowed (in pixels)
					vertical_center         :   1,		//Vertically center background
					horizontal_center       :   1,		//Horizontally center background
					fit_portrait         	:   1,		//Portrait images will not exceed browser height
					fit_landscape			:   0,		//Landscape images will not exceed browser width
					
					//Components
					navigation              :   1,		//Slideshow controls on/off
					thumbnail_navigation    :   0,		//Thumbnail navigation
					slide_counter           :   0,		//Display slide numbers
					slide_captions          :   1,		//Slide caption (Pull from "title" in slides array)
					slides 					:  	[		//Slideshow Images
														<?php
														 $bgslider = $data['sl_bgslider'];                 
														 $i=0;
														 foreach($bgslider as $slide){
															 $i++;
														?>
														
														{image : '<?php echo stripslashes($bgslider[$i]['url']); ?>', title : '<?php echo stripslashes($bgslider[$i]['description']); ?>', url : '<?php echo stripslashes($bgslider[$i]['link']); ?>'},  
														<?php } ?>
												]
												
												
				}); 
		    });
		    
		</script>
<?php } ?>
<script type="text/javascript">
jQuery.noConflict()(function($){		
$(document).ready(function(){
$(".flip").click(function(){
$(".panel").slideToggle("slow");
});
});
});
</script>

</head>
<body <?php body_class('main_body'); ?>>
    <!--Main wrapper-->
	<!--Control Bar-->
    <?php if($data['bg_slider'] == true ) { ?>
	<div id="controls-wrapper">
    	<div style="padding-top:0px; padding-bottom:0px; width:1040px; margin:0 auto;">
		<div id="controls">
		
			<!--Slide counter-->
			<div id="slidecounter">
				<span class="slidenumber"></span>/<span class="totalslides"></span>
			</div>
			
			<!--Slide captions displayed here-->
			<div id="slidecaption"></div>
			
			<!--Navigation-->
			
			<div class="flip" style=" float:right; color:#fff; background:none!important; font-size:10px; height:25px; padding-left:10px; padding-right:10px; padding-top:5px; text-align:center;">Show / Hide</div>
            <div id="navigation">
				<img id="prevslide" src="<?php echo get_template_directory_uri(); ?>/img/back_dull.png"/><img id="pauseplay" src="<?php echo get_template_directory_uri(); ?>/img/pause_dull.png"/><img id="nextslide" src="<?php echo get_template_directory_uri(); ?>/img/forward_dull.png"/>
			</div>
            </div>
		</div>
    </div>
    <?php } ?>
    <div id="content" class="panel">
    <div class="main_wrapper" style="background:#051f51 !important; height: 160px; <?php if($data['bg_slider'] == false ) { ?>margin-top:20px;<?php } ?>">
        <!--Header-->
        <div id="header">
            <div class="container">
            	<!--Logo-->
            	<div class="span-7">
				<?php if ($data['type_of_logo'] == "Image Logo") { ?>
                	<div id="logo">
					<?php  if(empty($data['logo_image'])) { echo "<h4 class='colored uppercase'>Logo not found</h4>"; } else { ?>
                    	<a href="<?php bloginfo('url'); ?>"><img src="<?php echo stripslashes($data['logo_image']) ?>" alt="Logo" /></a>
                    <?php } ?>
					</div>
                <?php } ?>
                <?php if ($data['type_of_logo'] == "Text Logo") { ?>
                	<div id="logo">
                    	<a href="<?php bloginfo('url'); ?>"><h2><?php echo stripslashes($data['logo_text']) ?></h2>
                        <p><?php echo stripslashes($data['some_logo_text']) ?></p>
                        </a>
                    </div>
                <?php } ?>
                </div>
                <!--End Logo and stat menu area-->
                <div class="span-17 last" style="margin-top: 95px!important;">
                	<div class="sign">
<div id="social" style="float:right; margin-right:50px;">

                        <?php if($data['Twitter'] == true ) { ?>
                        <div class="tweet-icon">
                            <a href="<?php echo $data['twitter_url']; ?>" class='social' title='Twitter'><img src="<?php echo get_template_directory_uri(); ?>/images/1px.png" alt="" width="26px" height="26px" /></a>
                        </div>
                        <?php } ?>
 <?php if($data['Facebook'] == true ) { ?>
                        <div class="facebook-icon">
                            <a href="<?php echo $data['facebook_url']; ?>" class='social' title='Facebook'><img src="<?php echo get_template_directory_uri(); ?>/images/1px.png" alt="" width="26px" height="26px" /></a>
                        </div>
			<div class="tumblr-icon">
                            <a href="http://lostmoonradio.tumblr.com" class='social' title='Tumblr'><img src="<?php echo get_template_directory_uri(); ?>/images/1px.png" alt="" width="26px" height="26px" /></a>
                        </div>
                        
                        <?php } ?>
                        <?php if($data['Google+'] == true ) { ?>
                        <div class="google-icon">
                            <a href="<?php echo $data['google_url']; ?>" class='social' title='Google +'><img src="<?php echo get_template_directory_uri(); ?>/images/1px.png" alt="" width="26px" height="26px" /></a>
                        </div>
                        <?php } ?>
                        <?php if($data['Vimeo'] == true ) { ?>
                        <div class="vimeo-icon">
                            <a href="<?php echo $data['vimeo_url']; ?>" class='social' title='Vimeo'><img src="<?php echo get_template_directory_uri(); ?>/images/1px.png" alt="" width="26px" height="26px" /></a>
                        </div>
                        <?php } ?>
                        <?php if($data['Youtube'] == true ) { ?>
                        <div class="youtube-icon">
                            <a href="<?php echo $data['youtube_url']; ?>" class='social' title='Youtube'><img src="<?php echo get_template_directory_uri(); ?>/images/1px.png" alt="" width="26px" height="26px" /></a>
                        </div>
                        <?php } ?>
                        <?php if($data['Dribbble'] == true ) { ?>
                        <div class="dribbble-icon">
                            <a href="<?php echo $data['dribbble_url']; ?>" class='social' title='Dribbble'><img src="<?php echo get_template_directory_uri(); ?>/images/1px.png" alt="" width="26px" height="26px" /></a>
                        </div>
                        <?php } ?>
</div>
                        <p class="right last" style="margin-bottom:0px !important;"><?php echo stripslashes($data['text_above_menu']) ?></p>
                	</div>
                    <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_class' => 'menu sf_menu')); ?>
                </div>
            </div>
        </div>
        </div>
        <div class="main_wrapper">
        <div class="container" style="padding-bottom:30px;">
            <div class="clear"></div>
			<?php if ((is_front_page()) || (is_page_template('home.php'))) { ?>
            <?php if($data['headercontent'] == true ) { ?>
            <div class="span-24" style=" margin-top:35px; margin-bottom:15px; text-align:center; text-transform:uppercase;;">
            	<h1 style=" margin-bottom:0px;"><?php echo stripslashes($data['header_title']) ?></h1>
                <p style=" text-transform:none;"><?php echo stripslashes($data['header_content']) ?></p>
            </div>
            <?php } ?>
            <?php } ?>
			<?php if (!(is_front_page()) & !(is_page_template('home.php'))) { ?>
            <div class="subpage_area">
            	<div class="span-24 notopmargin">
                    <h2 class="subpage_title"> <?php if (!(is_archive()) & (!(is_search()))) { ?><?php the_title(); ?><?php } ?> <?php if ((is_post_type_archive('portfolio'))) { ?>Videos<?php } ?><?php if ((is_archive() & (!(is_post_type_archive('portfolio'))))) { ?>Blog Archive<?php } ?><?php if (is_search()) { ?>Search Results For: <?php } ?></h2>
                    <p class="subpage_descr" style=" margin-bottom:0px !important;"><?php echo get_post_meta($post->ID, 'description', 1); ?> <?php the_search_query(); ?></p>
                </div>
            </div>
            <?php } ?>