<?php
/*
Template Name: Page Of Posts
*/

// if you are not using this in a child of Twenty Eleven, you need to replicate the html structure of your own theme.

get_header(); ?>
<div class="side_bar"  style="margin-right:-20px;">
					<?php get_sidebar(); ?>
                </div>	
<?php 
	global $more;
	$more = 0;	 
?>


<?php
/*
Template Name: Blog_Tagged
*/
?>
<?php get_header(); ?>
<?php 
	global $more;
	$more = 0; 
?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            	<div class="span-16 blog notopmargin last">
            		
			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args= array(
			'category_name' => 'podcast', // Change these category SLUGS to suit your use.
			'paged' => $paged
			);
			query_posts($args);?>
			

   
               		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
             		   ?>
            			<div>
                			<?php if ( has_post_thumbnail()) { ?>
					<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); ?>
                   				 <?php  
                  				  $pretty_attr = array(
                  			  'class'	=> "bordered_img last center",
                  				  ); ?>
                   			 <div class="span-16">
                    				<div class="tit">
                       				     <h3><?php the_time('d') ?> <?php the_time('M') ?> / <a class="link" href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
                     				</div>
                       				 <div class="clear"></div>
                    				<div class="hover_img">
                        				<a title=""><?php if ( has_post_thumbnail()) { the_post_thumbnail('blog',$pretty_attr);	} ?></a>
                           				 <div class="super_hover">
                              					  <a href="<?php echo $large_image_url[0]; ?>" rel="prettyPhoto" class="hover_img_content_link3 right"></a>
                           				 </div>
						</div>
                        			<div class="tit">
                        			<div class="meta2 author">Author: <?php the_author_meta('nickname'); ?></div>
                           			<div class="meta2 tagg">Tags: <?php $tag = get_the_tags(); if (! $tag) { ?> There are no tags<?php } else { ?><?php the_tags(''); ?><?php } ?></div>
                       					 <div class="clear"></div>
                       				 </div>
                  			  </div>
                    <?php } ?>
                    <?php if (!( has_post_thumbnail())) { ?>
                    <div class="span-16  last">
                    	<div class="tit">
                        <h3><?php the_time('d') ?> <?php the_time('M') ?> / <a class="link" href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        
                    	<div class="clear"></div>
                        </div>
                    </div>

                    <?php if (get_post_meta($post->ID, 'video', true));{ ?>
                    <div class="view view-first">
                        <div class="clear"></div>
                        <?php echo get_post_meta($post->ID, 'video', true); ?>
                    </div>


                    <?php } ?>
					<?php } ?>
                    <div class="span-16 blog_content last">
                        <?php the_content('<a class="button_readmore" href="'. get_permalink($post->ID) . '">Read More</a>'); ?>
                    </div>
            	</div>
		<div class="meta2 author">Author: <?php the_author_meta('nickname'); ?></div>
                <div class="meta2 tagg">Tags: <?php $tag = get_the_tags(); if (! $tag) { ?> There are no tags<?php } else { ?><?php the_tags(''); ?><?php } ?></div>

                <div class="clear"></div>
                <div class="separator_dash span-16"></div>
                <?php endwhile;  ?> 
				<?php endif; ?>
                <?php if (function_exists('wp_corenavi')) ?><div class="span-16 pagination" style="margin-bottom:35px;"> <?php wp_corenavi(); ?></div>
            </div>
            </div>
        </div>
        
        
<?php get_footer(); ?>







