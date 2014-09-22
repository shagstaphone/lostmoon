			<?php get_header(); ?>
            <?php
				$custom = get_post_custom($post->ID);
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); 
				$small_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'blog'); 
				$small_p_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'portfolio-three'); 
				$cat = get_the_category($post->ID); 
				$cat = $cat[0]; 
			?>
            <?php $img1 = get_post_meta($post->ID, 'image', true); ?>
            <?php $img2 = get_post_meta($post->ID, 'image2', true); ?>
            <?php $img3 = get_post_meta($post->ID, 'image3', true); ?>            
            <div class="span-24 notopmargin">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            	<div class="span-16">
                    <div class="span-16 notopmargin">
                    	<?php if (!( get_post_meta($post->ID, 'video', true))) { ?>
                        <div class="hover_img">
							<a  title=""><img src="<?php echo $small_image_url[0]; ?>" class="bordered_img last" alt=" "/></a>
                            <div class="super_hover">
                                <a href="<?php echo $large_image_url[0]; ?>" rel="prettyPhoto" class="hover_img_content_link3 right"></a>
                            </div>
                            </div>
						<?php } else { ?>
                    	<div class="bordered_img last" style="z-index:1">
						<?php echo get_post_meta($post->ID, 'video', true); ?>
                        </div>
                    	<?php } ?>
                    </div>
                    <div class="span-15 boxed">
                    <?php the_content(''); ?>
                    </div>
                </div>
                <?php if ((get_post_meta($post->ID, 'image', true)) || (get_post_meta($post->ID, 'image2', true)) || (get_post_meta($post->ID, 'image3', true))){ ?>
                <?php if (get_post_meta($post->ID, 'image', true)) { ?>
                <div class="span-8 last">
                    <a title=""><?php echo get_the_post_thumbnail($id, 'portfolio-three', array('src' => $img1, 'class' => 'bordered_img last')); ?></a>
                    <div class="hover_img">
                        <div class="super_hover">
                            <a href="<?php echo get_post_meta($post->ID, 'image', true); ?>" rel="prettyPhoto" class="hover_img_content_link3 right"></a>
                        <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php if (get_post_meta($post->ID, 'image2', true)) { ?>
                <div class="span-8 hover_img last">
                    <a title=""><?php echo get_the_post_thumbnail($id, 'portfolio-three', array('src' => $img2, 'class' => 'bordered_img last')); ?></a>
                    <div class="hover_img">
                        <div class="super_hover">
                            <a href="<?php echo get_post_meta($post->ID, 'image2', true); ?>" rel="prettyPhoto" class="hover_img_content_link3 right"></a>
                        <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php if (get_post_meta($post->ID, 'image3', true)) { ?>
                <div class="span-8 hover_img last">
                    <a title=""><?php echo get_the_post_thumbnail($id, 'portfolio-three', array('src' => $img3, 'class' => 'bordered_img last')); ?></a>
                    <div class="hover_img">
                        <div class="super_hover">
                            <a href="<?php echo get_post_meta($post->ID, 'image3', true); ?>" rel="prettyPhoto" class="hover_img_content_link3 right"></a>
                        <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php } else { ?>
                <div class="side_bar">
					<?php get_sidebar(); ?>
                </div>
                <?php } ?>
                
            </div>
            <?php endwhile;  ?>
	 		<?php endif; ?>
        </div>
        <!--End main container-->
        <div class="clear" style="margin-bottom:35px;"></div>
        <!--Footer-->
        <?php get_footer(); ?>