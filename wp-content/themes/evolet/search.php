<?php get_header(); ?>

        <!-- MAIN CONTENT -->
		<div class="container">
			<div class="span-16">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="blockquote4" style="border-top:none!important;"><a href="<?php the_permalink(); ?>"><h5 class="colored"><?php the_title(); ?></h5></a><?php the_time('l, F j, Y'); ?></div>
              <?php endwhile; else: ?>
                <div class="span-16">
                <h2 class="colored">There is no results</h2>
			</div>

          <?php endif; ?> 
			</div> 
            <div class="span-8 skills last">
            	<?php get_sidebar(); ?>
            </div>            	
		</div>
        </div>
<div class="clear"></div> 

<?php get_footer(); ?>