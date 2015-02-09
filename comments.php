<?php if ( post_password_required() ) : ?>
	<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'themify' ); ?></p>
	<?php
	return;
endif;
?>
<?php if ( have_comments() || comments_open() ) : ?>
	<div class="commentwrap">
<?php endif; ?>
<?php if ( have_comments() ) : ?>
	<h3 class="comment-title"><?php comments_number(__('No Comments','asi'), __('One Comment','asi'), __('% Comments','asi') );?></h3>
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<div class="pagenav top clearfix">
			<?php paginate_comments_links( array('prev_text' => '&laquo;', 'next_text' => '&raquo;') );?>
		</div>
	<?php endif; ?>
	<ol class="commentlist">
		<?php wp_list_comments(); ?>
	</ol>
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<div class="pagenav bottom clearfix">
			<?php paginate_comments_links( array('prev_text' => '&laquo;', 'next_text' => '&raquo;') );?>
		</div>
<?php endif; ?>
<?php else : 
	if ( ! comments_open() ) :
	?>
	<?php endif; ?>
<?php endif; ?>
<?php 
$custom_comment_form = array( 'fields' =>
	apply_filters( 'comment_form_default_fields', array( 'author' => '
	<p class="comment-form-author">
		' . '<label for="author">' . __( 'Your Name' ) . ( $req ? '<span class="required"> *</span>' : '' ) . '</label> ' . '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" ' . $aria_req . ' class="required"/>' . '
	</p>
	', 'email' => '
	<p class="comment-form-email">
		' . '<label for="email">' . __( 'Your Email' ) .( $req ? '<span class="required"> *</span>' : '' ) . '</label> ' . '<input id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" ' . $aria_req . ' class="required email"/>' . '
	</p>
	', 'url' => '
	<p class="comment-form-url">
		' . '<label for="website">' . __( 'Your Website' ) . '</label> ' . '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" ' . $aria_req . '/>' . '
	</p>
	') ), 'comment_field' => '
	<p class="comment-form-comment">
		' . '<label for="website">' . __( 'Your Message' ) .( $req ? '<span class="required"> *</span>' : '' ) . '</label> ' . '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="required"></textarea>' . '
	</p>
	', 'logged_in_as' => '
	<p class="logged-in-as">
		' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '
	</p>
	', 'title_reply' => __( 'Leave a Reply' ), 'comment_notes_before' => '', 'comment_notes_after' => '', 'cancel_reply_link' => __( 'Cancel' ), 'label_submit' => __( 'Post Comment' ), ); 
comment_form($custom_comment_form); 
?> 
<?php if ( have_comments() || comments_open() ) : ?>
</div>
<?php endif; ?>