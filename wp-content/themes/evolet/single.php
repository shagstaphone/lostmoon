<?php get_header(); ?>
	<div class="container">
    	<div class="span-24 notopmargin">
			<div class="span-16 notopmargin">
                <div class="span-16 blog  notopmargin">
                	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
                    <div>
                	<?php if ( has_post_thumbnail()) { ?>
					<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); ?>
                    <?php  
                    $pretty_attr = array(
                    'class'	=> "bordered_img last center",
                    ); ?>
                    <div class="span-16">
                    	<div class="tit">
                        	<div class="meta2 date"> Date: <?php the_time('d') ?> <?php the_time('M') ?></a></div>
                        	<div class="meta2 author">Author: <?php the_author_meta('nickname'); ?></div>
                            <div class="meta2 com"> Comments: <a class="link" href="<?php the_permalink() ?>#comments"><?php comments_number('0','1','%')?></a></div>
                            <div class="meta2 tagg">Tags: <?php $tag = get_the_tags(); if (! $tag) { ?> There are no tags<?php } else { ?><?php the_tags(''); ?><?php } ?></div>
                        <div class="clear"></div>
                        </div>
                        <div class="hover_img">
                        	<a title=""><?php if ( has_post_thumbnail()) { the_post_thumbnail('blog',$pretty_attr);	} ?></a>
                            <div class="super_hover">
                                <a href="<?php echo $large_image_url[0]; ?>" rel="prettyPhoto" class="hover_img_content_link3 right"></a>
                            </div>
						</div>
                    </div>
                    <?php } ?>
                    <?php if (!( has_post_thumbnail())) { ?>
                    <div class="span-16">
                    	<div class="tit">
                        
                    	<div class="clear"></div>
                        </div>
                    </div>
                    <?php if (get_post_meta($post->ID, 'video', true));{ ?>
                    	<div class="view view-first">
						<?php echo get_post_meta($post->ID, 'video', true); ?>
                        </div>
                    <?php } ?>
					<?php } ?>
            	</div>
					<div class=" span-16 post-short">
                    	<?php the_content(' '); ?>


                        <div class="big-separator"></div>


<div class="meta2 date"> Date: <?php the_time('d') ?> <?php the_time('M') ?></a></div>
                        <div class="meta2 author">Author: <?php the_author_meta('nickname'); ?></div>
                        
                        <div class="meta2 tagg">Tags: <?php $tag = get_the_tags(); if (! $tag) { ?> There are no tags<?php } else { ?><?php the_tags(''); ?><?php } ?></div>
			

      			<div class="big-separator"></div>
      			<div class="big-separator"></div>

			<br />
			<br />

			<br />
			<br />

                        <?php endwhile;  ?>      
	 					<?php endif; ?>
                       
                    </div>
                 </div>
            </div>
            <div class="side_bar notopmargin">
				<?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    </div>
    <div class="clear"></div>
<?php get_footer(); ?>