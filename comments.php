<?php if ( get_comments_number() ) :
      echo "<h3 class='comments-title'>Kommentare</h3>";
    endif;  ?>
<div id="kommentare">
   <?php foreach ($comments as $comment) : ?>
       
      <div class="comment" id="comment-<?php comment_ID() ?>">
       
        <span class="comment-author-name">Von <?php comment_author_link() ?></span>
        <span class="comment-submit-date"><?php comment_date('j. F Y')?> um <?php comment_time('H:i') ?></span>


         <?php comment_text() ?>
    
          <?php if ($comment->comment_approved == '0') : ?>
            <strong>Achtung: Dein Kommentar muss erst noch freigegeben werden.</strong><br />
         <?php endif; ?>
       
      </div>
   <?php endforeach;?> 
</div>
<?php
$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " required aria-required='true'" : '' );
$fields =  array(
    'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
    'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
);
$comments_args = array(
    'fields' =>  $fields,
    'label_submit' => 'Kommentar abschicken'
);
comment_form($comments_args);
?>