<?php
/**
 * Richardson Fire Protection — comments.php
 * Comment list and form template. Loaded via comments_template() in single.php.
 */

if ( post_password_required() ) {
    echo '<p style="padding: 1.5rem; background: #f8f8f8; border-radius: 8px; color: #6b7280;">This post is password protected. Enter the password to view comments.</p>';
    return;
}
?>

<div id="comments" style="margin-top: 3rem; padding-top: 2rem; border-top: 2px solid #e5e7eb;">

  <?php if ( have_comments() ) : ?>

    <h3 style="font-family: 'Oswald', sans-serif; font-size: 1.35rem; letter-spacing: 0.03em; text-transform: uppercase; margin-bottom: 1.5rem;">
      <?php
      comments_number(
          'No Comments',
          '1 Comment',
          '% Comments'
      );
      ?>
    </h3>

    <ol class="comment-list" style="list-style: none; padding: 0; margin: 0 0 2.5rem;">
      <?php
      wp_list_comments( [
          'style'       => 'ol',
          'short_ping'  => true,
          'avatar_size' => 48,
          'callback'    => 'rfp_comment',
      ] );
      ?>
    </ol>

    <?php
    the_comments_pagination( [
        'prev_text' => '<i class="fa-solid fa-arrow-left"></i> Older comments',
        'next_text' => 'Newer comments <i class="fa-solid fa-arrow-right"></i>',
    ] );
    ?>

  <?php endif; ?>

  <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
    <p style="padding: 1.25rem; background: #f8f8f8; border-radius: 8px; color: #6b7280; font-size: 0.9rem;">
      Comments are closed for this post.
    </p>
  <?php endif; ?>

  <?php
  comment_form( [
      'title_reply'          => '<span style="font-family: \'Oswald\', sans-serif; font-size: 1.2rem; text-transform: uppercase; letter-spacing: 0.05em;">Leave a Comment</span>',
      'title_reply_before'   => '<h3 id="reply-title" style="margin-bottom: 1.25rem;">',
      'title_reply_after'    => '</h3>',
      'label_submit'         => 'Post Comment',
      'class_submit'         => 'btn btn--primary',
      'comment_notes_before' => '<p style="font-size: 0.85rem; color: #6b7280; margin-bottom: 1.25rem;">Your email address will not be published. Required fields are marked <span style="color: #C41230;">*</span></p>',
      'fields'               => [
          'author' => '<div class="form-group" style="margin-bottom: 1rem;"><label for="author" style="font-size: 0.85rem; font-weight: 600; display: block; margin-bottom: 0.4rem;">Name <span style="color: #C41230;">*</span></label><input id="author" name="author" type="text" required placeholder="Your name" style="width: 100%; padding: 0.75rem 1rem; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 0.95rem; font-family: \'Inter\', sans-serif;" /></div>',
          'email'  => '<div class="form-group" style="margin-bottom: 1rem;"><label for="email" style="font-size: 0.85rem; font-weight: 600; display: block; margin-bottom: 0.4rem;">Email <span style="color: #C41230;">*</span></label><input id="email" name="email" type="email" required placeholder="your@email.com" style="width: 100%; padding: 0.75rem 1rem; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 0.95rem; font-family: \'Inter\', sans-serif;" /></div>',
          'url'    => '',
      ],
      'comment_field' => '<div class="form-group" style="margin-bottom: 1.25rem;"><label for="comment" style="font-size: 0.85rem; font-weight: 600; display: block; margin-bottom: 0.4rem;">Comment <span style="color: #C41230;">*</span></label><textarea id="comment" name="comment" rows="5" required placeholder="Share your thoughts or questions..." style="width: 100%; padding: 0.75rem 1rem; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 0.95rem; font-family: \'Inter\', sans-serif; resize: vertical;"></textarea></div>',
  ] );
  ?>

</div>
