<?php

add_action('init','of_options');

if (!function_exists('of_options')) {
function of_options(){
	
//Access the WordPress Categories via an Array
$of_categories = array();  
$of_categories_obj = get_categories('hide_empty=0');
foreach ($of_categories_obj as $of_cat) {
    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
$categories_tmp = array_unshift($of_categories, "Select a category:");    
       
//Access the WordPress Pages via an Array
$of_pages = array();
$of_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($of_pages_obj as $of_page) {
    $of_pages[$of_page->ID] = $of_page->post_name; }
$of_pages_tmp = array_unshift($of_pages, "Select a page:");       

//Testing 
$of_options_select = array("one","two","three","four","five"); 
$of_options_radio = array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five");
$of_options_homepage_blocks = array( 
	"disabled" => array (
		"placebo" 		=> "placebo", //REQUIRED!
		"block_one"		=> "Block One",
		"block_two"		=> "Block Two",
		"block_three"	=> "Block Three",
	), 
	"enabled" => array (
		"placebo" => "placebo", //REQUIRED!
		"block_four"	=> "Block Four",
	),
);

$of_type_of_logo = array("Image Logo" => "Image Logo","Text Logo" => "Text Logo");
$of_slider_select = array("1" => "Nivo Slider", "2" => "Vertical Accordion Slider","3" => "Accordion Slider", "4" => "Static Homepage", "5" => "Video Block");
$default_image_slider_nivo['url']= get_template_directory_uri().'/images/nivo_slide-1.jpg';
$of_blog_select = array("1" => "Style I", "2" => "Style II");
$of_portfolio_style = array("1" => "Portfolio and Right Sidebar","2" => "2 Columns Portfolio","3" => "3 Columns Portfolio","4" => "4 Columns Portfolio"); 

//Stylesheets Reader
$alt_stylesheet_path = LAYOUT_PATH;
$alt_stylesheets = array();

if ( is_dir($alt_stylesheet_path) ) {
    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) { 
        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
            if(stristr($alt_stylesheet_file, ".css") !== false) {
                $alt_stylesheets[] = $alt_stylesheet_file;
            }
        }    
    }
}

//Background Images Reader
$bg_images_path = STYLESHEETPATH. '/images/bg/'; // change this to where you store your bg images
$bg_images_url = get_bloginfo('template_url').'/images/bg/'; // change this to where you store your bg images
$bg_images = array();

if ( is_dir($bg_images_path) ) {
    if ($bg_images_dir = opendir($bg_images_path) ) { 
        while ( ($bg_images_file = readdir($bg_images_dir)) !== false ) {
            if(stristr($bg_images_file, ".png") !== false || stristr($bg_images_file, ".jpg") !== false) {
                $bg_images[] = $bg_images_url . $bg_images_file;
            }
        }    
    }
}

/*-----------------------------------------------------------------------------------*/
/* TO DO: Add options/functions that use these */
/*-----------------------------------------------------------------------------------*/

//More Options
$uploads_arr = wp_upload_dir();
$all_uploads_path = $uploads_arr['path'];
$all_uploads = get_option('of_uploads');
$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
$body_repeat = array("no-repeat","repeat-x","repeat-y","repeat");
$body_pos = array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");

// Image Alignment radio box
$of_options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 

// Image Links to Options
$of_options_image_link_to = array("image" => "The Image","post" => "The Post"); 


/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options;
$of_options = array();

					

//Header//
$of_options[] = array( "name" => "Header",
					"type" => "heading");


$of_options[] = array( "name" => "",
					"desc" => "Select type of logo",
					"id" => "type_of_logo",
					"std" => "Image Logo",
					"type" => "select",
					"options" => $of_type_of_logo);  

$of_options[] = array( "name" => "",
					"desc" => "If you chose Image Logo type then upload it",
					"id" => "logo_image",
					"std" => "http://www.orange-idea.com/evolet/logo.png",
					"type" => "upload");

$of_options[] = array( "name" => "",
					"desc" => "If you chose Text as logo plese type here",
					"id" => "logo_text",
					"std" => "<span class='colored'>RISE</span> CORPORATION",
					"type" => "text"); 
					
$of_options[] = array( "name" => "",
					"desc" => "And some line of text after Logo Text",
					"id" => "some_logo_text",
					"std" => "Premium Wordpress Theme",
					"type" => "text");

$of_options[] = array( "name" => "",
					"desc" => "Text line above the menu",
					"id" => "text_above_menu",
					"std" => "Call us now: <span class='colored'>+1(123)45-67-89</span>",
					"type" => "text");					

$of_options[] = array( "name" =>  "Home Page Slider Settings",
					"desc" => "Select type of slider",
					"id" => "slider_select",
					"std" => "Nivo Slider",
					"type" => "select",
					"options" => $of_slider_select);

$of_options[] = array(  "name" => "Welcome Text",
					"desc" => "Show Welcome Text?",
					"id" => "headercontent",
					"std" => true,
					"type" => "checkbox");

$of_options[] = array( "name" => "",
					"desc" => "Title (h1)",
					"id" => "header_title",
					"std" => "I'm Happy To Announce New Premium WordPress Theme",
					"type" => "text");
					
$of_options[] = array( "name" => "",
					"desc" => "content (p)",
					"id" => "header_content",
					"std" => "Theme is very flexible, easy for customizing and well documented, approaches for personal and professional use. Follow me to be notified for updates!",
					"type" => "text");

//Styling Options//
$of_options[] = array( "name" => "Styling Options",
					"type" => "heading");
					
$of_options[] = array( "name" => "Theme Stylesheet",
					"desc" => "Select your themes alternative color scheme.",
					"id" => "alt_stylesheet",
					"std" => "0099ff.css",
					"type" => "select",
					"options" => $alt_stylesheets); 
					
$of_options[] = array( "name" =>  "Body Background Color",
					"desc" => "Pick a background color for the theme (default: #fff).",
					"id" => "body_background",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" => "Background Images",
					"desc" => "Select a background pattern.",
					"id" => "custom_bg",
					"std" => $bg_images_url."bg-full.jpg",
					"type" => "tiles",
					"options" => $bg_images,
					);					
					
$of_options[] = array( "name" => "Body Font",
					"desc" => "Specify the body font properties",
					"id" => "body_font",
					"std" => array('size' => '12px','face' => 'Georgia','style' => 'normal','color' => '#444444'),
					"type" => "typography");  



/* Background Slider */
$of_options[] = array( "name" => "Background Slider",
					"type" => "heading");


$of_options[] = array(  "name" => "",
					"desc" => "Show Background slider?",
					"id" => "bg_slider",
					"std" => true,
					"type" => "checkbox");

$of_options[] = array( "name" => "Add Images And Descriptions",
					"desc" => "Add items for Background Slider",
					"id" => "sl_bgslider",
					"std" => array('title' => 'Some Title Goes Here','url' => $default_image_slider_nivo['url'],'link' => '#','description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel.'),					
					"type" => "slider");


/* Nivo Slider */
$of_options[] = array( "name" => "Nivo Slider",
					"type" => "heading");

$of_options[] = array( "name" => "Add Images And Descriptions",
					"desc" => "Add items for Nivo Slider",
					"id" => "sl_nivoslider",
					"std" => array('title' => 'Some Title Goes Here','url' => $default_image_slider_nivo['url'],'link' => '#','description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel.'),					
					"type" => "slider");


/* Accordion Slider */
$of_options[] = array( "name" => "Accordion Slider",
					"type" => "heading");

$of_options[] = array( "name" => "Add Images And Descriptions",
					"desc" => "Add items for Accordion Slider",
					"id" => "sl_accordion",
					"std" => array('title' => 'Example Title','url' => $default_image_slider_nivo['url'],'link' => '#','description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),	
					"type" => "slider");

/* Vido Block */
$of_options[] = array( "name" => "Video Block",
					"type" => "heading");
$of_options[] = array( "name" => "Code For Video Block ( max width: 900px )",
					"desc" => "Paste your code",
					"id" => "sl_video",
					"std" => '<iframe src="http://player.vimeo.com/video/23534361?title=0&lt;amp;byline=0&lt;amp;portrait=0" width="900" height="350"></iframe>',
					"type" => "textarea"); 
/* Static Image */
$of_options[] = array( "name" => "Static Image",
					"type" => "heading");

$of_options[] = array( "name" => "Image Upload",
					"desc" => "",
					"id" => "static_image",
					"std" => "http://www.orange-idea.com/veles/static_slide-1.jpg",
					"type" => "media");

$of_options[] = array( "name" => "Header",
					"desc" => "",
					"id" => "static_image_header",
					"std" => "",
					"type" => "text");

$of_options[] = array( "name" => "Description",
					"desc" => "",
					"id" => "static_image_text",
					"std" => "",
					"type" => "text");

/* Vertical Accordion */
$of_options[] = array( "name" => "Vertical Accordion",
					"type" => "heading");


$of_options[] = array( "name" => "Hello there!",
					"desc" => "",
					"id" => "va-1",
					"std" => "---- Slide 1 settings ----",
					"icon" => true,
					"type" => "info");
					
$of_options[] = array( "name" => "Slide 1 Image Upload",
					"desc" => "",
					"id" => "va-slice-1",
					"std" => "http://www.orange-idea.com/veles/1.jpg",
					"type" => "media");					

$of_options[] = array( "name" => "Slide 1 Title",
					"desc" => "",
					"id" => "va-title-1",
					"std" => "Programming",
					"type" => "text");

$of_options[] = array( "name" => "Slide 1 Description",
					"desc" => "A text input field.",
					"id" => "va-content-1",
					"std" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</br></br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged",
					"type" => "text");
					
$of_options[] = array( "name" => "Slide 1 URL",
					"desc" => "A text input field.",
					"id" => "va-url-1",
					"std" => "#",
					"type" => "text");

$of_options[] = array( "name" => "Hello there!",
					"desc" => "",
					"id" => "va-1",
					"std" => "---- Slide 2 settings ----",
					"icon" => true,
					"type" => "info");

$of_options[] = array( "name" => "Slide 2 Image Upload",
					"desc" => "Upload images using the native media uploader, or define the URL directly",
					"id" => "va-slice-2",
					"std" => "http://www.orange-idea.com/veles/2.jpg",
					"type" => "media");					

$of_options[] = array( "name" => "Slide 2 Title",
					"desc" => "A text input field.",
					"id" => "va-title-2",
					"std" => "Managment",
					"type" => "text");

$of_options[] = array( "name" => "Slide 2 Description",
					"desc" => "A text input field.",
					"id" => "va-content-2",
					"std" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</br></br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged",
					"type" => "text");
					
$of_options[] = array( "name" => "Slide 2 URL",
					"desc" => "A text input field.",
					"id" => "va-url-2",
					"std" => "#",
					"type" => "text");


$of_options[] = array( "name" => "Hello there!",
					"desc" => "",
					"id" => "va-1",
					"std" => "---- Slide 3 settings ----",
					"icon" => true,
					"type" => "info");


$of_options[] = array( "name" => "Slide 3 Image Upload",
					"desc" => "Upload images using the native media uploader, or define the URL directly",
					"id" => "va-slice-3",
					"std" => "http://www.orange-idea.com/veles/3.jpg",
					"type" => "media");					

$of_options[] = array( "name" => "Slide 3 Title",
					"desc" => "A text input field.",
					"id" => "va-title-3",
					"std" => "Visual Design",
					"type" => "text");

$of_options[] = array( "name" => "Slide 3 Description",
					"desc" => "A text input field.",
					"id" => "va-content-3",
					"std" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</br></br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged",
					"type" => "text");
					
$of_options[] = array( "name" => "Slide 3 URL",
					"desc" => "A text input field.",
					"id" => "va-url-3",
					"std" => "#",
					"type" => "text");


$of_options[] = array( "name" => "Hello there!",
					"desc" => "",
					"id" => "va-1",
					"std" => "---- Slide 4 settings ----",
					"icon" => true,
					"type" => "info");


$of_options[] = array( "name" => "Slide 4 Image Upload",
					"desc" => "Upload images using the native media uploader, or define the URL directly",
					"id" => "va-slice-4",
					"std" => "http://www.orange-idea.com/veles/4.jpg",
					"type" => "media");					

$of_options[] = array( "name" => "Slide 4 Title",
					"desc" => "A text input field.",
					"id" => "va-title-4",
					"std" => "Marketing",
					"type" => "text");


$of_options[] = array( "name" => "Slide 4 Description",
					"desc" => "A text input field.",
					"id" => "va-content-4",
					"std" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</br></br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged",
					"type" => "text");
					
$of_options[] = array( "name" => "Slide 4 URL",
					"desc" => "A text input field.",
					"id" => "va-url-4",
					"std" => "#",
					"type" => "text");

 
/* Portfolio */
$of_options[] = array( "name" => "Portfolio",
					"type" => "heading");



$of_options[] = array( "name" => "Hello there!",
					"desc" => "",
					"id" => "",
					"std" => "<h3 style=\"margin: 0 0 0px;\">Portfolio Settings</h3>",
					"icon" => true,
					"type" => "info");


$of_options[] = array( "name" => "Type Of Portfolio",
					"desc" => "Select the type to display",
					"id" => "sl_portfolio_style",
					"std" => "default",
					"type" => "select",
					"options" => $of_portfolio_style);  
					

$of_options[] = array("name" =>  "",
					"desc" => "Enter the number of projects to display",
					"id" => "sl_portfolio_projects",
					"std" => "10",
					"type" => "text");







/* Footer */

$of_options[] = array( "name" => "Footer",
					"type" => "heading");


$of_options[] = array( "name" => "Hello there!",
					"desc" => "",
					"id" => "",
					"std" => "<h3 style=\"margin: 0 0 0px;\">Footer Settings</h3>",
					"icon" => true,
					"type" => "info");
					
					
$of_options[] = array( "name" => "Block I Settings",
					"desc" => "Upload logo for Block 1",
					"id" => "footer_logo",
					"std" => "http://www.orange-idea.com/evolet/logo.png",
					"type" => "media");
					


$of_options[] = array( "name" => "Block II Customization",
					"desc" => "Block II Header",
					"id" => "footer_block2_title",
					"std" => "<span class='colored'>Evolet</span> Corp",
					"type" => "text");



$of_options[] = array( "name" =>  "",
					"desc" => "Block II Content",
					"id" => "footer_block2_text",
					"std" => "Flexible and beautiful HTML template which could be suitable for all kinds of business.<br>It has modern and minimalist style. Powered by custom jquery scripts.",
					"type" => "textarea");



$of_options[] = array( "name" => "Block III Settings",
					"desc" => "Block 3 Header (If empty will show Twitter Feed)",
					"id" => "footer_block3_title",
					"std" => "",
					"type" => "text");



$of_options[] = array( "name" =>  "",
					"desc" => "Block III Content (If empty will show Twitter Feed))",
					"id" => "footer_block3_text",
					"std" => "",
					"type" => "textarea");

$of_options[] = array("name" =>  "",
					"desc" => "Twitter account",
					"id" => "twitter_feed",
					"std" => "Orange_idea_RU",
					"type" => "text");




$of_options[] = array( "name" => "Block IV Settings",
					"desc" => "Block 4 Header",
					"id" => "footer_block4_title",
					"std" => "<span class='colored'>Contact</span> Info",
					"type" => "text");


$of_options[] = array( "name" =>  "",
					"desc" => "Block 4 Content ",
					"id" => "footer_block4_text",
					"std" => "<p style='margin-bottom:0px !important;'>123456 Street super Name, Los Angeles<br/><span class='bold'>Phone:</span> (1800) 765-4321</p>",
					"type" => "textarea");

$of_options[] = array(  "name" => "Social Icons Settings",
					"desc" => "Show Twitter?",
					"id" => "Twitter",
					"std" => true,
					"type" => "checkbox");

$of_options[] = array( "name" =>  "",
					"desc" => "Show Facebook?",
					"id" => "Facebook",
					"std" => true,
					"type" => "checkbox");
					 
$of_options[] = array( "name" =>  "",
					"desc" => "Show Google+?",
					"id" => "Google+",
					"std" => true,
					"type" => "checkbox"); 					 

$of_options[] = array( "name" =>  "",
					"desc" => "Show Vimeo?",
					"id" => "Vimeo",
					"std" => true,
					"type" => "checkbox"); 

$of_options[] = array( "name" =>  "",
					"desc" => "Show Youtube?",
					"id" => "Youtube",
					"std" => true,
					"type" => "checkbox"); 					

$of_options[] = array( "name" =>  "",
					"desc" => "Show Dribbble?",
					"id" => "Dribbble",
					"std" => true,
					"type" => "checkbox"); 
$of_options[] = array("name" =>  "",
					"desc" => "Twitterl URL",
					"id" => "twitter_url",
					"std" => "http://www.twitter.com",
					"type" => "text");


$of_options[] = array("name" =>  "",
					"desc" => "Facebook URL",
					"id" => "facebook_url",
					"std" => "http://www.facebook.com",
					"type" => "text");

$of_options[] = array("name" =>  "",
					"desc" => "Google+ URL",
					"id" => "google_url",
					"std" => "http://www.plus.google.com",
					"type" => "text");

$of_options[] = array( "name" =>  "",
					"desc" => "Vimeo URL",
					"id" => "vimeo_url",
					"std" => "http://www.vimeo.com",
					"type" => "text");
					
$of_options[] = array( "name" =>  "",
					"desc" => "Youtube URL",
					"id" => "youtube_url",
					"std" => "http://www.youtube.com",
					"type" => "text");					

$of_options[] = array("name" =>  "",
					"desc" => "Dribbble URL",
					"id" => "dribbble_url",
					"std" => "http://www.dribbble.com",
					"type" => "text");


					
	}
}
?>
