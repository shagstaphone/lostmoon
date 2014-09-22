<?php

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->
<div class="three-fourth last">
<h3 class="block_header"><?php comments_number('No comments yet','1 Comment:','% Comments:')?></h3>
<?php if ( have_comments() ) : ?>
	
        <ul>
        	<?php wp_list_comments('max_depth=3&callback=mytheme_comment'); ?>     
       </ul>
	
 <?php else : // this is displayed if there are no comments so far ?>
	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>
	<?php endif; ?>
<?php endif; ?>
</div>
<div class="clear"></div>
<?php if ( comments_open() ) : ?>

<div id="respond">
<div class="span-16 last">
<h3 class="block_header"><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>
<div class="dot-separator margin15"></div>
<!--- replace comment_form();  -->
<?php paginate_comments_links('prev_text=back&next_text=forward'); ?>
<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="contact-form">

<div class="post_comment last">
<?php if ( is_user_logged_in() ) : ?>
<p style="margin-bottom:18px;">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
<?php else : ?>
	<div class="span-8 form">
		<fieldset>
	      <label>Name <span class="required">*</span></label><input type="text" name="author" value="<?php echo esc_attr($comment_author); ?>" class="text" />
	    </fieldset>  
    </div>
    
    <div class="span-8 form last">
	    <fieldset>
	      <label>Email <span class="required">*</span></label><input type="text" name="email"  value="<?php echo esc_attr($comment_author_email); ?>" class="text"/>
	    </fieldset>  
    </div>
<?php endif; ?>

	<div class="one-third margin15 form left">
		<label>Your Comment <span class="required">*</span></label><textarea id="comment" name="comment"  cols="" rows="10" class="text"></textarea>
		<input name="submit" type="submit" id="submit_form" class="button"  value="Post Comment" />
	</div>
		
	
<p><?php comment_id_fields(); ?></p>
<?php do_action('comment_form', $post->ID); ?>
</div>
</form>

<?php endif; // If registration required and not logged in ?>
</div>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>