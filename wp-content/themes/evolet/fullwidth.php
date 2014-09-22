<?php
	// Template Name: Fullwidth
?>
<?php get_header(); ?>
<div class="side_bar"  style="margin-right:-20px; height: 900px;">
					<?php get_sidebar(); ?>
                </div>	
<?php 
	global $more;
	$more = 0;	 
?>

	<div class="container">

		<?php if (!(have_posts())) { ?><div class="span-24"><h2 class="colored uppercase">There is no posts</h2></div><?php }  ?>   
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
        <?php the_content('<a class="button_readmore" href="'. get_permalink($post->ID) . '"> Read more</a>'); ?>
        <?php endwhile;  ?> 
        <?php endif; ?>
    </div>
    <div class="clear"></div>
</div>
 

<?php get_footer(); ?>