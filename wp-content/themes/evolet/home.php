
<?php get_header();?>

<?php
	// Template Name: Home Page
$title = get_the_title();
if ( $title == "Nivo Slider")  $data['slider_select'] = "Nivo Slider";
if ( $title == "Accordion Slider")  $data['slider_select'] = "Accordion Slider";
if ( $title == "Vertical Accordion Slider")  $data['slider_select'] = "Vertical Accordion Slider";
if ( $title == "Static Homepage")  $data['slider_select'] = "Static Homepage";
if ( $title == "Video Block")  $data['slider_select'] = "Video Block";
?>



			<?php if ($data['slider_select'] == "Nivo Slider") { ?>
            <div class="container clear">
                <div class="clear"></div>
                <div class="slider_area home">
                    <div class="theme-default">
                        <div id="slider" class="nivoSlider">
                            <?php
							 $nivoslider = $data['sl_nivoslider'];                 
							 $i=0;
							 foreach($nivoslider as $slide){
								 $i++;
							?>
                        	<a href="<?php echo stripslashes($nivoslider[$i]['link']); ?>"><img src="<?php echo stripslashes($nivoslider[$i]['url']); ?>" alt="" title="<?php echo stripslashes($nivoslider[$i]['description']); ?>" /></a>        
                    		<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
			<?php if ($data['slider_select'] == "Vertical Accordion Slider") { ?>
            <div class="container clear">
        	<div class="vertical_slider_accordion_area">
            	<div id="va-accordion" class="va-container slider-area">
                    <div class="va-nav">
                        <span class="va-nav-prev">Previous</span>
                        <span class="va-nav-next">Next</span>
                    </div>
                    <div class="va-wrapper">
                        <div class="va-slice va-slice-1" style="background-image:url(<?php echo stripslashes($data['va-slice-1']); ?>);">
                            <h3 class="va-title"><?php echo stripslashes($data['va-title-1']); ?></h3>
                            <div class="va-content">
                                <p><?php echo stripslashes($data['va-content-1']); ?></p>
                                <a href="<?php echo stripslashes($data['va-url-1']); ?>" class="va-more"></a>
                            </div>
                        </div>
                        <div class="va-slice va-slice-2" style="background-image:url(<?php echo stripslashes($data['va-slice-2']); ?>);">
                            <h3 class="va-title"><?php echo stripslashes($data['va-title-2']); ?></h3>
                            <div class="va-content">
                                <p><?php echo stripslashes($data['va-content-2']); ?></p>
                                <a href="<?php echo stripslashes($data['va-url-2']); ?>" class="va-more"></a>
                            </div>	
                        </div>
                        <div class="va-slice va-slice-3" style="background-image:url(<?php echo stripslashes($data['va-slice-3']); ?>);">
                            <h3 class="va-title"><?php echo stripslashes($data['va-title-3']); ?></h3>
                            <div class="va-content">
                                <p><?php echo stripslashes($data['va-content-3']); ?></p>
                                <a href="<?php echo stripslashes($data['va-url-3']); ?>" class="va-more"></a>
                            </div>	
                        </div>
                        <div class="va-slice va-slice-4" style="background-image:url(<?php echo stripslashes($data['va-slice-4']); ?>);">
                            <h3 class="va-title"><?php echo stripslashes($data['va-title-4']); ?></h3>
                            <div class="va-content">
                                <p><?php echo stripslashes($data['va-content-4']); ?></p>
                                <a href="<?php echo stripslashes($data['va-url-4']); ?>" class="va-more"></a>
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <?php } ?>
            <?php if ($data['slider_select'] == "Accordion Slider") { ?>
            <div class="container clear">
        	<div class="slider_accordion_area">
            	<div class="kwicks-box">
                    <ul class="kwicks horizontal" >
                    <?php $accordion_slider = $data['sl_accordion'];                 
						 $i=0;
						 foreach($accordion_slider as $slide){
							 $i++;
					?>
                        <li id="kwick_<?php echo $i; ?>"><img src="<?php echo stripslashes($accordion_slider[$i]['url']); ?>" alt="" />
                        <a href="<?php echo stripslashes($accordion_slider[$i]['link']); ?>">
                            <p class="accordian-slider-caption">
                                <span class="accordian-slider-captiontitle">
                                    <?php echo stripslashes($accordion_slider[$i]['title']); ?>
                                </span>
                                <span>
                                    <?php echo stripslashes($accordion_slider[$i]['description']); ?>
                                </span>
                            </p>
                        </a>
                    </li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        	<?php } ?>
            <?php if ($data['slider_select'] == "Static Homepage") { ?>
            <div class="container clear">
                <div class="slider_area" style="height:400px;">
                    <div class="static" style="background-image:url(<?php echo stripslashes($data['static_image']); ?>); background-repeat:no-repeat; background-position:center;">
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if ($data['slider_select'] == "Video Block") { ?>
            <div class="container clear">
                <div class="slider_area">
                    <div id="video-block">
                        <?php echo stripslashes($data['sl_video']); ?>
                    </div>
                </div>
            </div>

<div>
            <?php } ?>

</div>

<div class="widget-area" style="float: left; width: 280px; margin-top: 60px; position:absolute; z-index: 0; overflow: hidden;">
<?php dynamic_sidebar('custom');?>
</div>

		
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	    <div style="margin-top: -30px!important; position: relative; z-index: 1;">
            <?php the_content(''); ?>
		
	</div>
            <?php endwhile;  ?>
	 		<?php endif; ?>


<?php get_footer(); ?>