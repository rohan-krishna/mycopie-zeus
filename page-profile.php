<?php
/*
Template Name: Custom Profile Page (For BuddyPress Only)
*/
?>
<?php get_header(); ?>
<div class="page-wrapper max1250">
	<?php do_action( 'bp_before_member_header' ); ?>
		<div class="member-header-avatar">
			<a href="<?php bp_displayed_user_link(); ?>">
				<?php bp_displayed_user_avatar( 'type=full' ); ?>
			</a>
		</div>
<div class="member-header-content">
	<h2>
		<a href="<?php bp_displayed_user_link(); ?>"><?php bp_displayed_user_fullname(); ?></a>
	</h2>
</div>
</div>
<?php get_footer(); ?>

