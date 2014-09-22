<?php
/*
	SHORTCODES
*/

add_shortcode('2col_portfolio', 'theme_portfolio_2col');

function theme_portfolio_2col( $atts, $content = null)
{

	extract(shortcode_atts(
        array(
			'show_posts' => '3',
    ), $atts));
	
	$output = '<div>'."\n";
	if($content) { $output .= '<p>'.theme_remove_autop(stripslashes($content)).'</p>'."\n"; }
	$output .= theme_portfolio_2col_loop($show_posts);
	$output .= '</div>'."\n";

	return $output;

}

function theme_portfolio_2col_loop($show_posts)
{
	$args = array( 
				'post_type' => 'portfolio',
				'portfolio-types' => $category_slug_name,
				'category_id' => $category_id,
				'posts_per_page' => $show_posts,
				'post_status' => 'publish'
				); 
	
	$query =  new WP_Query(array('post_type' => 'portfolio', 'category_id' => $category_id, 'showposts' => $show_posts, 'orderby' => 'rand'));

	$loop_count = 0;

	$output = '<ul class="notopmargin" id="portfolio">'."\n";

	while ($query->have_posts()) { $query->the_post();

		$post_id = get_the_id();
		$loop_count++;
		
		if ( ($loop_count-1) % 4 == 0 ) {
			$post_class = 'class="" style="margin-bottom:20px;"';
		}elseif( $loop_count % 4 == 0 ) {
			$post_class = ' style="margin-bottom:20px;"';
		}else{
			$post_class = 'style="margin-bottom:20px;"';
		}  

		$attr = array(
			'class'	=> "bordered_img last",
		);
		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');

		$output .= '<li '.$post_class.'>'."\n";

		if ( has_post_thumbnail()) {
			$output .= '<div class="span-12 notopmargin last">';
			$output .= '<div class="hover_img">'."\n";
			$output .= get_the_post_thumbnail($post_id,'portfolio-two', $attr);
			$output .= '<div class="super_hover">'."\n";
			$output .= '<a href="'.$large_image_url[0].'" rel="prettyPhoto" class="hover_img_content_link3 left"></a>'."\n";
			$output .= '</div>'."\n";
			$output .= '</div>'."\n";
			$output .= '<div class="hover_img_content">'."\n";
			$output .= '<h5><a class="link" href="'.get_permalink().'">'.get_the_title().'</a></h5>'."\n";
			$output .= '<p>'.get_post_meta($post_id, 'small-description', true).'</p>'."\n";
			$output .= '<div class="clear"></div>'."\n";
			$output .= '</div>'."\n";
		}

		$output .= '</li>'."\n";

	}
	wp_reset_postdata();

	$output .= '</ul>'."\n";

	return $output;
}
















add_shortcode('4col_portfolio', 'theme_portfolio_4col');

function theme_portfolio_4col( $atts, $content = null)
{

	extract(shortcode_atts(
        array(
			'show_posts' => '3',
    ), $atts));
	
	$output = '<div>'."\n";
	if($content) { $output .= '<p>'.theme_remove_autop(stripslashes($content)).'</p>'."\n"; }
	$output .= theme_portfolio_4col_loop($show_posts);
	$output .= '</div>'."\n";

	return $output;

}

function theme_portfolio_4col_loop($show_posts)
{
	$args = array( 
				'post_type' => 'portfolio',
				'portfolio-types' => $category_slug_name,
				'posts_per_page' => $show_posts,
				'post_status' => 'publish'
				); 

	
	$query =  new WP_Query(array('post_type' => 'portfolio', 'showposts' => $show_posts, 'orderby'=>'rand'));

	$loop_count = 0;

	$output = '<ul class="notopmargin" id="portfolio">'."\n";

	while ($query->have_posts()) { $query->the_post();

		$post_id = get_the_id();
		$loop_count++;
		
		if ( ($loop_count-1) % 4 == 0 ) {
			$post_class = 'class="" style="margin-bottom:20px;"';
		}elseif( $loop_count % 4 == 0 ) {
			$post_class = ' style="margin-bottom:20px;"';
		}else{
			$post_class = 'style="margin-bottom:20px;"';
		}  

		$attr = array(
			'class'	=> "bordered_img last",
		);
		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');

		$output .= '<li '.$post_class.'>'."\n";

		if ( has_post_thumbnail()) {
			$output .= '<div class="span-6 notopmargin last">';
			$output .= '<div class="hover_img">'."\n";
			$output .= get_the_post_thumbnail($post_id,'portfolio-fourth', $attr);
			$output .= '<div class="super_hover">'."\n";
			$output .= '<a href="'.$large_image_url[0].'" rel="prettyPhoto" class="hover_img_content_link3 left"></a>'."\n";
			$output .= '</div>'."\n";
			$output .= '</div>'."\n";
			$output .= '<div class="hover_img_content">'."\n";
			$output .= '<h5><a class="link" href="'.get_permalink().'">'.get_the_title().'</a></h5>'."\n";
			$output .= '<p>'.get_post_meta($post_id, 'small-description', true).'</p>'."\n";
			$output .= '<div class="clear"></div>'."\n";
			$output .= '</div>'."\n";
		}

		$output .= '</li>'."\n";

	}
	wp_reset_postdata();

	$output .= '</ul>'."\n";

	return $output;
}












add_shortcode('3col_portfolio', 'theme_portfolio_3col');

function theme_portfolio_3col( $atts, $content = null)
{

	extract(shortcode_atts(
        array(
			'show_posts' => '3',
    ), $atts));
	
	$output = '<div>'."\n";
	if($content) { $output .= '<p>'.theme_remove_autop(stripslashes($content)).'</p>'."\n"; }
	$output .= theme_portfolio_3col_loop($show_posts);
	$output .= '</div>'."\n";

	return $output;

}

function theme_portfolio_3col_loop($show_posts)
{
	$args = array( 
				'post_type' => 'portfolio',
				'portfolio-types' => $category_slug_name,
				'posts_per_page' => $show_posts,
				'post_status' => 'publish'
				); 
	$query =  new WP_Query(array('post_type' => 'portfolio', 'showposts' => $show_posts, 'orderby' => 'rand'));

	$loop_count = 0;

	$output = '<ul class="notopmargin" id="portfolio">'."\n";

	while ($query->have_posts()) { $query->the_post();

		$post_id = get_the_id();
		$loop_count++;
		
		if ( ($loop_count-1) % 4 == 0 ) {
			$post_class = 'class="" style="margin-bottom:20px;"';
		}elseif( $loop_count % 4 == 0 ) {
			$post_class = ' style="margin-bottom:20px;"';
		}else{
			$post_class = 'style="margin-bottom:20px;"';
		}  

		$attr = array(
			'class'	=> "bordered_img last",
		);
		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');

		$output .= '<li '.$post_class.'>'."\n";

		if ( has_post_thumbnail()) {
			$output .= '<div class="span-8 notopmargin last">';
			$output .= '<div class="hover_img">'."\n";
			$output .= get_the_post_thumbnail($post_id,'portfolio-three', $attr);
			$output .= '<div class="super_hover">'."\n";
			$output .= '<a href="'.$large_image_url[0].'" rel="prettyPhoto" class="hover_img_content_link3 left"></a>'."\n";
			$output .= '</div>'."\n";
			$output .= '</div>'."\n";
			$output .= '<div class="hover_img_content">'."\n";
			$output .= '<h5><a class="link" href="'.get_permalink().'">'.get_the_title().'</a></h5>'."\n";
			$output .= '<p>'.get_post_meta($post_id, 'small-description', true).'</p>'."\n";
			$output .= '<div class="clear"></div>'."\n";
			$output .= '</div>'."\n";
			
		}

		$output .= '</li>'."\n";

	}
	wp_reset_postdata();

	$output .= '</ul>'."\n";

	return $output;
}











function toggle1_f($atts, $content = null) {
	extract( shortcode_atts( array(  "title" => 'SOME TITLE'), $atts));
	
	$code = '
			<h5><a href="#" class="toggle-header" id="toggle1">'.$title.'</a></h5>
			<div class="toggle-content" style="display:none" id="togglec1">'.$content.'</div>
	';
	return $code;
}
add_shortcode('toggle1', 'toggle1_f');




function toggle2_f($atts, $content = null) {
	extract( shortcode_atts( array(  "title" => 'SOME TITLE'), $atts));
	
	$code = '
			<h5><a href="#" class="toggle-header" id="toggle2">'.$title.'</a></h5>
			<div class="toggle-content" style="display:none" id="togglec2">'.$content.'</div>
	';
	return $code;
}
add_shortcode('toggle2', 'toggle2_f');







function toggle3_f($atts, $content = null) {
	extract( shortcode_atts( array(  "title" => 'SOME TITLE'), $atts));
	
	$code = '
			<h5><a href="#" class="toggle-header" id="toggle3">'.$title.'</a></h5>
			<div class="toggle-content" style="display:none" id="togglec3">'.$content.'</div>
	';
	return $code;
}
add_shortcode('toggle3', 'toggle3_f');









function toggle4_f($atts, $content = null) {
	extract( shortcode_atts( array(  "title" => 'SOME TITLE'), $atts));
	
	$code = '
			<h5><a href="#" class="toggle-header" id="toggle4">'.$title.'</a></h5>
			<div class="toggle-content" style="display:none" id="togglec4">'.$content.'</div>
	';
	return $code;
}
add_shortcode('toggle4', 'toggle4_f');








function toggle5_f($atts, $content = null) {
	extract( shortcode_atts( array(  "title" => 'SOME TITLE'), $atts));
	
	$code = '
			<h5><a href="#" class="toggle-header" id="toggle5">'.$title.'</a></h5>
			<div class="toggle-content" style="display:none" id="togglec5">'.$content.'</div>
	';
	return $code;
}
add_shortcode('toggle5', 'toggle5_f');








function toggle6_f($atts, $content = null) {
	extract( shortcode_atts( array(  "title" => 'SOME TITLE'), $atts));
	
	$code = '
			<h5><a href="#" class="toggle-header" id="toggle6">'.$title.'</a></h5>
			<div class="toggle-content" style="display:none" id="togglec6">'.$content.'</div>
	';
	return $code;
}
add_shortcode('toggle6', 'toggle6_f');









function toggle7_f($atts, $content = null) {
	extract( shortcode_atts( array(  "title" => 'SOME TITLE'), $atts));
	
	$code = '
			<h5><a href="#" class="toggle-header" id="toggle7">'.$title.'</a></h5>
			<div class="toggle-content" style="display:none" id="togglec7">'.$content.'</div>
	';
	return $code;
}
add_shortcode('toggle7', 'toggle7_f');








function toggle8_f($atts, $content = null) {
	extract( shortcode_atts( array(  "title" => 'SOME TITLE'), $atts));
	
	$code = '
			<h5><a href="#" class="toggle-header" id="toggle8">'.$title.'</a></h5>
			<div class="toggle-content" style="display:none" id="togglec8">'.$content.'</div>
	';
	return $code;
}
add_shortcode('toggle8', 'toggle8_f');








function toggle9_f($atts, $content = null) {
	extract( shortcode_atts( array(  "title" => 'SOME TITLE'), $atts));
	
	$code = '
			<h5><a href="#" class="toggle-header" id="toggle9">'.$title.'</a></h5>
			<div class="toggle-content" style="display:none" id="togglec9">'.$content.'</div>
	';
	return $code;
}
add_shortcode('toggle9', 'toggle9_f');







function toggle10_f($atts, $content = null) {
	extract( shortcode_atts( array(  "title" => 'SOME TITLE'), $atts));
	
	$code = '
			<h5><a href="#" class="toggle-header" id="toggle10">'.$title.'</a></h5>
			<div class="toggle-content" style="display:none" id="togglec10">'.$content.'</div>
	';
	return $code;
}
add_shortcode('toggle10', 'toggle10_f');









function toggle11_f($atts, $content = null) {
	extract( shortcode_atts( array(  "title" => 'SOME TITLE'), $atts));
	
	$code = '
			<h5><a href="#" class="toggle-header" id="toggle11">'.$title.'</a></h5>
			<div class="toggle-content" style="display:none" id="togglec11">'.$content.'</div>
	';
	return $code;
}
add_shortcode('toggle11', 'toggle11_f');








function toggle12_f($atts, $content = null) {
	extract( shortcode_atts( array(  "title" => 'SOME TITLE'), $atts));
	
	$code = '
			<h5><a href="#" class="toggle-header" id="toggle12">'.$title.'</a></h5>
			<div class="toggle-content" style="display:none" id="togglec12">'.$content.'</div>
	';
	return $code;
}
add_shortcode('toggle12', 'toggle12_f');







function toggle13_f($atts, $content = null) {
	extract( shortcode_atts( array(  "title" => 'SOME TITLE'), $atts));
	
	$code = '
			<h5><a href="#" class="toggle-header" id="toggle13">'.$title.'</a></h5>
			<div class="toggle-content" style="display:none" id="togglec13">'.$content.'</div>
	';
	return $code;
}
add_shortcode('toggle13', 'toggle13_f');









function toggle14_f($atts, $content = null) {
	extract( shortcode_atts( array(  "title" => 'SOME TITLE'), $atts));
	
	$code = '
			<h5><a href="#" class="toggle-header" id="toggle14">'.$title.'</a></h5>
			<div class="toggle-content" style="display:none" id="togglec14">'.$content.'</div>
	';
	return $code;
}
add_shortcode('toggle14', 'toggle14_f');








function toggle15_f($atts, $content = null) {
	extract( shortcode_atts( array(  "title" => 'SOME TITLE'), $atts));
	
	$code = '
			<h5><a href="#" class="toggle-header" id="toggle15">'.$title.'</a></h5>
			<div class="toggle-content" style="display:none" id="togglec15">'.$content.'</div>
	';
	return $code;
}
add_shortcode('toggle15', 'toggle15_f');








function toggle16_f($atts, $content = null) {
	extract( shortcode_atts( array(  "title" => 'SOME TITLE'), $atts));
	
	$code = '
			<h5><a href="#" class="toggle-header" id="toggle16">'.$title.'</a></h5>
			<div class="toggle-content" style="display:none" id="togglec16">'.$content.'</div>
	';
	return $code;
}
add_shortcode('toggle16', 'toggle16_f');







function toggle17_f($atts, $content = null) {
	extract( shortcode_atts( array(  "title" => 'SOME TITLE'), $atts));
	
	$code = '
			<h5><a href="#" class="toggle-header" id="toggle17">'.$title.'</a></h5>
			<div class="toggle-content" style="display:none" id="togglec17">'.$content.'</div>
	';
	return $code;
}
add_shortcode('toggle17', 'toggle17_f');








function toggle18_f($atts, $content = null) {
	extract( shortcode_atts( array(  "title" => 'SOME TITLE'), $atts));
	
	$code = '
			<h5><a href="#" class="toggle-header" id="toggle18">'.$title.'</a></h5>
			<div class="toggle-content" style="display:none" id="togglec18">'.$content.'</div>
	';
	return $code;
}
add_shortcode('toggle18', 'toggle18_f');








function toggle19_f($atts, $content = null) {
	extract( shortcode_atts( array(  "title" => 'SOME TITLE'), $atts));
	
	$code = '
			<h5><a href="#" class="toggle-header" id="toggle19">'.$title.'</a></h5>
			<div class="toggle-content" style="display:none" id="togglec19">'.$content.'</div>
	';
	return $code;
}
add_shortcode('toggle19', 'toggle19_f');








function toggle20_f($atts, $content = null) {
	extract( shortcode_atts( array(  "title" => 'SOME TITLE'), $atts));
	
	$code = '
			<h5><a href="#" class="toggle-header" id="toggle20">'.$title.'</a></h5>
			<div class="toggle-content" style="display:none" id="togglec20">'.$content.'</div>
	';
	return $code;
}
add_shortcode('toggle20', 'toggle20_f');











function h1_f($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	$code = '
			<h1 class="block_header">'.do_shortcode($content).'</h1>
	';
	return $code;
}
add_shortcode('h1', 'h1_f');


function h2_f($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	$code = '
			<h2 class="block_header">'.do_shortcode($content).'</h2>
	';
	return $code;
}
add_shortcode('h2', 'h2_f');


function h3_f($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	$code = '
			<h3 class="block_header">'.do_shortcode($content).'</h3>
	';
	return $code;
}
add_shortcode('h3', 'h3_f');


function h4_f($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	$code = '
			<h4 class="block_header">'.do_shortcode($content).'</h4>
	';
	return $code;
}
add_shortcode('h4', 'h4_f');



function h5_f($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	$code = '
			<h5 class="block_header">'.do_shortcode($content).'</h5>
	';
	return $code;
}
add_shortcode('h5', 'h5_f');


function h6_f($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	$code = '
			<h6 class="block_header">'.do_shortcode($content).'</h6>
	';
	return $code;
}
add_shortcode('h6', 'h6_f');



/* separator */
function veles_separator($atts, $content = null) {
	extract(shortcode_atts(array('margin' => '0px'),$atts));

	return '<div class="separator clear" style="margin-top:'.$margin.'"></div>';
}
add_shortcode('separator', 'veles_separator');

/* width: 940px */
function one_column($atts, $content = null) {
	extract( shortcode_atts( array( "align" => 'left', "margin" => '1', "last" => '0' ), $atts));
	
	$code = '';
	
	if( ($margin == "1") && ($last == "0")) $code ='<div class="span-24">'.do_shortcode($content).'</div>';	
	if( ($margin == "0") && ($last == "1")) $code ='<div class="span-24 notopmargin last">'.do_shortcode($content).'</div>';		
	if( ($last == "1") && ($margin == "1")) $code ='<div class="span-24 last">'.$content.'</div>';	
	if( ($margin == "0")  && ($last == "0")) $code ='<div class="span-24 notopmargin">'.do_shortcode($content).'</div>';		
	
	
	return $code;
}

add_shortcode('one', 'one_column');


/* width: 460px */
function one_half_column($atts, $content = null) {
	extract( shortcode_atts( array( "align" => 'left', "margin" => '1', "last" => '0' ), $atts));
	
	$code = '';
	
	if( ($margin == "1") && ($last == "0")) $code ='<div class="span-12">'.do_shortcode($content).'</div>';	
	if( ($margin == "0") && ($last == "1")) $code ='<div class="span-12 notopmargin last">'.do_shortcode($content).'</div>';		
	if( ($last == "1") && ($margin == "1")) $code ='<div class="span-12 last">'.do_shortcode($content).'</div>';	
	if( ($margin == "0")  && ($last == "0"))$code ='<div class="span-12 notopmargin">'.do_shortcode($content).'</div>';		
	
	
	return $code;
}

add_shortcode('one_half', 'one_half_column');

/* width: 620px */
function two_third_column($atts, $content = null) {
	extract( shortcode_atts( array( "align" => 'left', "margin" => '1', "last" => '0' ), $atts));
	
	$code = '';
	
	if( ($margin == "1") && ($last == "0")) $code ='<div class="span-16">'.do_shortcode($content).'</div>';	
	if( ($margin == "0") && ($last == "1")) $code ='<div class="span-16 notopmargin last">'.do_shortcode($content).'</div>';		
	if( ($last == "1") && ($margin == "1")) $code ='<div class="span-16 last">'.do_shortcode($content).'</div>';	
	if( ($margin == "0")  && ($last == "0")) $code ='<div class="span-16 notopmargin">'.do_shortcode($content).'</div>';		
	
	
	return $code;
}

add_shortcode('two_third', 'two_third_column');


/* width: 300px */
function one_third_column($atts, $content = null) {
	extract( shortcode_atts( array( "align" => 'left', "margin" => '1', "last" => '0' ), $atts));
	
	$code = '';
	
	if( ($margin == "1") && ($last == "0")) $code ='<div class="span-8">'.do_shortcode($content).'</div>';	
	if( ($margin == "0") && ($last == "1")) $code ='<div class="span-8 notopmargin last">'.do_shortcode($content).'</div>';		
	if( ($last == "1") && ($margin == "1")) $code ='<div class="span-8 last">'.do_shortcode($content).'</div>';	
	if( ($margin == "0")  && ($last == "0")) $code ='<div class="span-8 notopmargin">'.do_shortcode($content).'</div>';		
	
	
	return $code;
}

add_shortcode('one_third', 'one_third_column');


/* width: 220px */
function one_fourth_column($atts, $content = null) {
	extract( shortcode_atts( array( "align" => 'left', "margin" => '1', "last" => '0' ), $atts));
	
	$code = '';
	
	if( ($margin == "1") && ($last == "0")) $code ='<div class="span-6">'.do_shortcode($content).'</div>';	
	if( ($margin == "0") && ($last == "1")) $code ='<div class="span-6 notopmargin last">'.do_shortcode($content).'</div>';		
	if( ($last == "1") && ($margin == "1")) $code ='<div class="span-6 last">'.do_shortcode($content).'</div>';	
	if( ($margin == "0")  && ($last == "0")) $code ='<div class="span-6 notopmargin">'.do_shortcode($content).'</div>';		
	
	
	return $code;
}

add_shortcode('one_fourth', 'one_fourth_column');


/* width: 700px */
function three_fourth_column($atts, $content = null) {
	extract( shortcode_atts( array( "align" => 'left', "margin" => '1', "last" => '0' ), $atts));
	
	$code = '';
	
	if( ($margin == "1") && ($last == "0")) $code ='<div class="span-18">'.do_shortcode($content).'</div>';	
	if( ($margin == "0") && ($last == "1")) $code ='<div class="span-18 notopmargin last">'.do_shortcode($content).'</div>';		
	if( ($last == "1") && ($margin == "1")) $code ='<div class="span-18 last">'.do_shortcode($content).'</div>';	
	if( ($margin == "0")  && ($last == "0")) $code ='<div class="span-18 notopmargin">'.do_shortcode($content).'</div>';		
	
	
	return $code;
}

add_shortcode('three_fourth', 'three_fourth_column');
/* END COLUMNS */


function welcome_f($atts, $content = null) {
	extract( shortcode_atts( array(  "header" => '' ), $atts));
	
	$code = '
			<div class="welcome">
				<h1>'.do_shortcode($header).'</h1>
				<span>'.do_shortcode($content).'</span>
			</div>
	';
	return $code;
}
add_shortcode('welcome', 'welcome_f');



function m_button_f($atts, $content = null) {
	extract( shortcode_atts( array(  "url" => '#', "price" => '35$',"header1" => 'Purchase theme now &amp;', "header2" => 'Download right now' ), $atts));
	
	$code = '
			<div class="span-8 last notopmargin">
				<a href="'.do_shortcode($url).'" class="a-btn">
					<span class="a-btn-text"><small>'.do_shortcode($header1).'</small> '.do_shortcode($header2).'</span> 
				</a>
			</div>
	';
	return $code;
}
add_shortcode('m_button', 'm_button_f');



function style_image_f($atts, $content=null)
{	
	extract(shortcode_atts(array(
		'size' => 'one_fourth',
		'image' => '',
		'alt' => 'Image description or alternate text.',
		'margin' => '1',
		'last' => '0',
		
	), $atts));
	
	
	if($margin == '0') 
	{
		$margin1 = 'notopmargin';
	}
	
	if($last == '1') 
	{
		$last1 = 'last';
	}
	
	if($size == 'one_fourth') 
	{
		$size1 = 'span-6';
		$width = '210px';
	}
	if($size == 'one_third') 
	{
		$size1 = 'span-8';
		$width = '290px';
	}
	if($size == 'two_third') 
	{
		$size1 = 'span-16';
		$width = '610px';
	}
	if($size == 'one_half') 
	{
		$size1 = 'span-12';
		$width = '450px';
	}
	if($size == 'one') 
	{
		$size1 = 'span-24';
		$width = '930px';
	}
	
	$output = '<div class="'.$size1.' '.$margin1.' '.$last1.' hover_img" style="margin-bottom:20px;">'."\n";
	$output .=	'<a title=""><img src="'.$image.'" class="bordered_img left" alt="'.$alt.'" width="'.$width.'" max-height="1680px"/></a>'."\n";
			$output .= '<div class="super_hover">'."\n";
			$output .= '<a href="'.$image.'" rel="prettyPhoto" class="hover_img_content_link3 left"></a>'."\n";
			$output .= '</div>'."\n";
	$output .=	'</div>';

	return $output;
}

add_shortcode('style_image', 'style_image_f');



function spec_block1($atts, $content = null) {
	extract( shortcode_atts( array('icon' => 'size', 'url' => '#', 'icon_src' => '#', 'title' => 'Some Title', 'icon' => '0',), $atts));
	
	if ($icon =='1'){
	$code = '
		<img class="servise_icon" src="'.$icon_src.'" alt=" "/>
		<h4>'.$title.'</h4>
		<p>'.do_shortcode($content).'</p>
	';} else {
		$code = '
		<h4>'.$title.'</h4>
		<p>'.do_shortcode($content).'</p>
	';
	}
	return $code;
}

add_shortcode('spec_block', 'spec_block1');



function small_f($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	
	$code = '
			<span class="small-italic">'.do_shortcode($content).'</span>
	';
	return $code;
}

add_shortcode('small', 'small_f');







function bg_block_f($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	
	$code = '
			<div class="service">'.do_shortcode($content).'</div>
	';
	return $code;
}

add_shortcode('bg_block', 'bg_block_f');




/* Dropcaps */

function dropcap11($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	
	$code = '
			<span class="dropcap">'.do_shortcode($content).'</span>
	';
	return $code;
}

add_shortcode('dropcap1', 'dropcap11');

function dropcap22($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	
	$code = '
			<span class="dropcap2">'.do_shortcode($content).'</span>
	';
	return $code;
}

add_shortcode('dropcap2', 'dropcap22');


function dropcap33($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	
	$code = '
			<span class="dropcap3">'.do_shortcode($content).'</span>
	';
	return $code;
}

add_shortcode('dropcap3', 'dropcap33');

function dropcap44($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	
	$code = '
			<span class="dropcap4">'.do_shortcode($content).'</span>
	';
	return $code;
}

add_shortcode('dropcap4', 'dropcap44');


function dropcap55($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	
	$code = '
			<span class="dropcap5">'.do_shortcode($content).'</span>
	';
	return $code;
}

add_shortcode('dropcap5', 'dropcap55');

/* /Dropcaps */

/* Blockquotes */
function blockquote11($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	
	$code = '
			<p class="blockquote1">'.do_shortcode($content).'</p>
	';
	return $code;
}

add_shortcode('blockquote1', 'blockquote11');

function blockquote22($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	
	$code = '
			<p class="blockquote2">'.do_shortcode($content).'</p>
	';
	return $code;
}

add_shortcode('blockquote2', 'blockquote22');


function blockquote33($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	
	$code = '
			<p class="blockquote3">'.do_shortcode($content).'</p>
	';
	return $code;
}

add_shortcode('blockquote3', 'blockquote33');

function blockquote44($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	
	$code = '
			<p class="blockquote4">'.do_shortcode($content).'</p>
	';
	return $code;
}

add_shortcode('blockquote4', 'blockquote44');


function blockquote55($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	
	$code = '
			<p class="blockquote5">'.do_shortcode($content).'</p>
	';
	return $code;
}

add_shortcode('blockquote5', 'blockquote55');



function blockquote66($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	
	$code = '
			<p class="blockquote6">'.do_shortcode($content).'</p>
	';
	return $code;
}

add_shortcode('blockquote6', 'blockquote66');


function blockquote77($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	
	$code = '
			<p class="blockquote7">'.do_shortcode($content).'</p>
	';
	return $code;
}

add_shortcode('blockquote7', 'blockquote77');


function blockquote88($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	
	$code = '
			<p class="blockquote8">'.do_shortcode($content).'</p>
	';
	return $code;
}

add_shortcode('blockquote8', 'blockquote88');

function blockquote99($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	
	$code = '
			<p class="blockquote9">'.do_shortcode($content).'</p>
	';
	return $code;
}

add_shortcode('blockquote9', 'blockquote99');

/* /Blockquotes */


function awesome_block($atts, $content = null) {
	extract( shortcode_atts( array(  "title" => 'Some Title Here' ), $atts));
	
	$code = '
		<div class="awesome_block">
			<h5>'.do_shortcode($title).'</h5>
			<p class="nobottommargin" style="margin-top:10px;">'.do_shortcode($content).'</p>
		</div>
	';
	return $code;
}

add_shortcode('spec', 'awesome_block');








function coloredd($atts, $content = null) {
	extract( shortcode_atts( array(), $atts));
	
	$code = '
			<span class="colored">'.do_shortcode($content).'</span>
	';
	return $code;
}

add_shortcode('colored', 'coloredd');


function readmoree($atts, $content = null) {
	extract( shortcode_atts( array( "url" =>'#',"margin" =>'1',), $atts));
	
	if($margin == '1') 
	{
		$margin1 = '20px';
	}
	$code = '
			<div style=" margin-top:'.$margin1.'"><a class="button_readmore left"  href="'.do_shortcode($url).'"></a></div>
	';
	return $code;
}

add_shortcode('readmore', 'readmoree');



function skills($atts, $content = null) {
	extract( shortcode_atts( array( "percent" =>'20'), $atts));
	
	$code = '
			<h6>'.do_shortcode($content).'</h6>
			<div class="progress-bar blue stripes">
				<span style="width: '.do_shortcode($percent).'%"></span>
			</div>
	';
	return $code;
}

add_shortcode('skill', 'skills');



