<?php

/**
 * Custom Forum Loop
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php do_action( 'bbp_template_before_forums_loop' ); ?>

<ul id="forums-list-<?php bbp_forum_id(); ?>" class="bbp-forums">

	<li class="bbp-body">

		<?php while ( bbp_forums() ) : bbp_the_forum(); ?>



			
			<ul id="bbp-forum-<?php bbp_forum_id(); ?>" <?php bbp_forum_class(); ?>>

	<li class="bbp-header">
		<ul class="forum-titles">
			<li class="bbp-forum-info"><?php _e( bbp_forum_title(), 'bbpress' ); ?></li>
			<li class="bbp-forum-topic-count"><?php _e( 'Topics', 'bbpress' ); ?></li>
			<li class="bbp-forum-reply-count"><?php bbp_show_lead_topic() ? _e( 'Replies', 'bbpress' ) : _e( 'Posts', 'bbpress' ); ?></li>
			<li class="bbp-forum-freshness"><?php _e( 'Last Post', 'bbpress' ); ?></li>
		</ul>
	</li><!-- .bbp-header -->


	<li class="bbp-forum-info_custom">

		<?php bbp_list_forums_custom();?>

	</li>

	

</ul><!-- #bbp-forum-<?php bbp_forum_id(); ?> -->




		<?php endwhile; ?>

	</li><!-- .bbp-body -->

	<li class="bbp-footer">

		<div class="tr">
			<p class="td colspan4">&nbsp;</p>
		</div><!-- .tr -->

	</li><!-- .bbp-footer -->

</ul><!-- .forums-directory -->

<?php do_action( 'bbp_template_after_forums_loop' ); ?>
