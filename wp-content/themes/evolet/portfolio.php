<?php
// Template Name: Portfolio
$paged = 1;
if ( get_query_var('paged') ) $paged = get_query_var('paged');
if ( get_query_var('page') ) $paged = get_query_var('page');
query_posts( '&post_type=portfolio&paged=' . $paged );
?>
<?php
$title = get_the_title();
if ( $title == "2 Columns Portfolio")  $data['sl_portfolio_style'] = "2 Columns Portfolio";
if ( $title == "3 Columns Portfolio")  $data['sl_portfolio_style'] = "3 Columns Portfolio";
if ( $title == "4 Columns Portfolio")  $data['sl_portfolio_style'] = "4 Columns Portfolio";
if ( $title == "Portfolio and Sidebar")  $data['sl_portfolio_style'] = "Portfolio and Right Sidebar";
if ( $title == "2 Columns Portfolio")  query_posts( '&post_type=portfolio&posts_per_page=4&paged=' . $paged );
if ( $title == "4 Columns Portfolio")  query_posts( '&post_type=portfolio&posts_per_page=12&paged=' . $paged );
if ( $title == "Portfolio and Sidebar")  query_posts( '&post_type=portfolio&posts_per_page=8&paged=' . $paged );
if ( $title == "3 Columns Portfolio")  query_posts( '&post_type=portfolio&posts_per_page=6&paged=' . $paged );
?>

			<?php get_header(); ?>
            <?php if ($data['sl_portfolio_style'] == "2 Columns Portfolio") { ?>
			
            <div class="span-24">
			<?php 
				echo "<ul id='filter'><li class='current'><a href='#'>All</a></li>";
				$categories = get_categories(array('type' => 'post', 'taxonomy' => 'portfolio-category')); 
				foreach($categories as $category) {
				  echo "<li><a href='#'>".$category->cat_name."</a></li>";
				}
				echo "</ul>";
				
			?>
            </div>

            <div class="span-24 un_grid notopmargin">
            	<!-- Portfolio Items -->
                <ul class="span-24 un_grid" id="portfolio">
                	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
					<?php
                        $custom = get_post_custom($post->ID);
                        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); 
                        $small_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'portfolio-two'); 
                         
                        $cat = get_the_category($post->ID); 
                        $cat = $cat[0]; 
                    ?>
                    <?php $cur_terms = get_the_terms( $post->ID, 'portfolio-category' ); 
                  foreach($cur_terms as $cur_term){  
                  }  
                    ?>
                    <li class="<?php echo strtolower($cur_term->name); ?>">
                        <div class="span-12">
                        	<div class="hover_img">
							<a  title=""><img src="<?php echo $small_image_url[0]; ?>" class="bordered_img last" alt=" "/></a>
                            <div class="super_hover">
								<?php if (get_post_meta($post->ID, 'port-url', true)) { ?>
                                <a href="<?php echo get_post_meta($post->ID, 'port-url', true); ?>" class="hover_img_content_link1 right"  target="blank"></a>
                                <?php } ?>
                                <a href="<?php echo get_permalink(); ?>" class="hover_img_content_link2 right"></a>
                                <a href="<?php echo $large_image_url[0]; ?>" rel="prettyPhoto" class="hover_img_content_link3 right"></a>
                            </div>
                            </div>
                            <div class="hover_img_content">
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo get_post_meta($post->ID, 'small-description', true) ?></p>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </li>
                    <?php endwhile; endif; ?>
                </ul>
                <div class="span-24 clear" style="margin-bottom:35px;">
                	<?php paginate(); ?>
                </div>
            </div>
            <?php } ?>
            
            
            
            
            
            
            
            
            
            <?php if ($data['sl_portfolio_style'] == "3 Columns Portfolio") { ?>
			
            <div class="span-24">
			<?php 
				echo "<ul id='filter'><li class='current'><a href='#'>All</a></li>";
				$categories = get_categories(array('type' => 'post', 'taxonomy' => 'portfolio-category')); 
				foreach($categories as $category) {
				  echo "<li><a href='#'>".$category->cat_name."</a></li>";
				}
				echo "</ul>";
				
			?>
            </div>

            <div class="span-24 un_grid notopmargin">
            	<!-- Portfolio Items -->
                <ul class="span-24 un_grid" id="portfolio">
                	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
					<?php
                        $custom = get_post_custom($post->ID);
                        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); 
                        $small_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'portfolio-three'); 
                         
                        $cat = get_the_category($post->ID); 
                        $cat = $cat[0]; 
                    ?>
                    <?php $cur_terms = get_the_terms( $post->ID, 'portfolio-category' ); 
                  foreach($cur_terms as $cur_term){  
                  }  
                    ?>
                    <li class="<?php echo strtolower($cur_term->name); ?>">
                        <div class="span-8">
                        	<div class="hover_img">
							<a  title=""><img src="<?php echo $small_image_url[0]; ?>" class="bordered_img last" alt=" "/></a>
                            <div class="super_hover">
								<?php if (get_post_meta($post->ID, 'port-url', true)) { ?>
                                <a href="<?php echo get_post_meta($post->ID, 'port-url', true); ?>" class="hover_img_content_link1 right"  target="blank"></a>
                                <?php } ?>
                                <a href="<?php echo get_permalink(); ?>" class="hover_img_content_link2 right"></a>
                                <a href="<?php echo $large_image_url[0]; ?>" rel="prettyPhoto" class="hover_img_content_link3 right"></a>
                            </div>
                            </div>
                            <div class="hover_img_content">
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo get_post_meta($post->ID, 'small-description', true) ?></p>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </li>
                    <?php endwhile; endif; ?>
                </ul>
                <div class="span-24 clear" style="margin-bottom:35px;">
                	<?php paginate(); ?>
                </div>
            </div>
            <?php } ?>
            
            
            
            
            
            <?php if ($data['sl_portfolio_style'] == "4 Columns Portfolio") { ?>
			
            <div class="span-24">
			<?php 
				echo "<ul id='filter'><li class='current'><a href='#'>All</a></li>";
				$categories = get_categories(array('type' => 'post', 'taxonomy' => 'portfolio-category')); 
				foreach($categories as $category) {
				  echo "<li><a href='#'>".$category->cat_name."</a></li>";
				}
				echo "</ul>";
				
			?>
            </div>

            <div class="span-24 un_grid notopmargin">
            	<!-- Portfolio Items -->
                <ul class="span-24 un_grid" id="portfolio">
                	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
					<?php
                        $custom = get_post_custom($post->ID);
                        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); 
                        $small_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'portfolio-fourth'); 
                         
                        $cat = get_the_category($post->ID); 
                        $cat = $cat[0]; 
                    ?>
                    <?php $cur_terms = get_the_terms( $post->ID, 'portfolio-category' ); 
                  foreach($cur_terms as $cur_term){  
                  }  
                    ?>
                    <li class="<?php echo strtolower($cur_term->name); ?>">
                        <div class="span-6">
                        	<div class="hover_img">
							<a  title=""><img src="<?php echo $small_image_url[0]; ?>" class="bordered_img last" alt=" "/></a>
                            <div class="super_hover">
								<?php if (get_post_meta($post->ID, 'port-url', true)) { ?>
                                <a href="<?php echo get_post_meta($post->ID, 'port-url', true); ?>" class="hover_img_content_link1 right"  target="blank"></a>
                                <?php } ?>
                                <a href="<?php echo get_permalink(); ?>" class="hover_img_content_link2 right"></a>
                                <a href="<?php echo $large_image_url[0]; ?>" rel="prettyPhoto" class="hover_img_content_link3 right"></a>
                            </div>
                            </div>
                            <div class="hover_img_content">
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo get_post_meta($post->ID, 'small-description', true) ?></p>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </li>
                    <?php endwhile; endif; ?>
                </ul>
                <div class="span-24 clear" style="margin-bottom:35px;">
                	<?php paginate(); ?>
                </div>
            </div>
            <?php } ?>
            
            
            
            
            
            
            
            <?php if ($data['sl_portfolio_style'] == "Portfolio and Right Sidebar") { ?>
            <div class="span-16 un_grid16 notopmargin">
            	<!-- Portfolio Items -->
<?php 
				echo "<ul id='filter'><li class='current'><a href='#'>All</a></li>";
				$categories = get_categories(array('type' => 'post', 'taxonomy' => 'portfolio-category')); 
				foreach($categories as $category) {
				  echo "<li><a href='#'>".$category->cat_name."</a></li>";
				}
				echo "</ul>";
				echo "<br />";
			?>

                <ul class="span-16 un_grid16" id="portfolio">
                	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
					<?php
                        $custom = get_post_custom($post->ID);
                        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); 
                        $small_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'portfolio-three'); 
                         
                        $cat = get_the_category($post->ID); 
                        $cat = $cat[0]; 
                    ?>
                    <?php $cur_terms = get_the_terms( $post->ID, 'portfolio-category' ); 
                  foreach($cur_terms as $cur_term){  
                  }  
                    ?>
                    <li class="<?php echo strtolower($cur_term->name); ?>" style="margin-top:0px !important">
                        <div class="span-8">
                        	<div class="hover_img">
							<a  title=""><img src="<?php echo $small_image_url[0]; ?>" class="bordered_img last" alt=" "/></a>
                            <div class="super_hover">
								<?php if (get_post_meta($post->ID, 'port-url', true)) { ?>
                                <a href="<?php echo get_post_meta($post->ID, 'port-url', true); ?>" class="hover_img_content_link1 right"  target="blank"></a>
                                <?php } ?>
                                <a href="<?php echo get_permalink(); ?>" class="hover_img_content_link2 right"></a>
                                <a href="<?php echo $large_image_url[0]; ?>" class="hover_img_content_link3 right"></a>
                            </div>
                            </div>
                            <div class="hover_img_content">
                                <a href="<?php echo get_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                                <p><?php echo get_post_meta($post->ID, 'small-description', true) ?></p>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </li>
                    <?php endwhile; endif; ?>
                </ul>
                <div class="span-16 clear" style="margin-bottom:35px;">
                	<?php paginate(); ?>
                </div>
                </div>
                <div class="side_bar"  style="margin-right:-20px;">
					<?php get_sidebar(); ?>
                </div>
			</div>
            <div class=" clear"></div>
            <?php } ?>
            
            
            
            
            
		</div>
        <!--End main container-->
        <div class="clear"></div>
        <!--Footer-->
        <?php get_footer(); ?>