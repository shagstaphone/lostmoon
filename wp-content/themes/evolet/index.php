<?php get_header(); ?>
<?php 
	global $more;
	$more = 0;	 
?>
	<div class="container">
		<?php if (!(have_posts())) { ?><div class="span-24"><h2 class="colored uppercase">There is no posts</h2></div><?php }  ?>   
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="span-16" style="width:640px !important;"><?php the_content(); ?></div>
        <?php endwhile;  ?> 
        <?php endif; ?>
    	<div class="side_bar" style="margin-right:20px;">
		<?php get_sidebar(); ?>
        </div>
    </div>
    <div class="clear"></div>
</div>

<?php get_footer(); ?>