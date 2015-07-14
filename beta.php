<?php
/*
Template Name: Beta Page Design
*/
?>
<?php get_header(); ?>
<div class="page-wrapper max960">
	<div class="sidebar-wrapper">
		<?php include 'accordion.php'; ?>
	</div>
	<div class="beta-wrapper">
		<div class="profile-card-wrapper">
			<?php $userID = get_current_user_id(); ?>
			<figure class="user-avatar">
				<?php echo get_avatar( $userID ); ?>
			</figure>
			<?php $username = $bp->loggedin_user->fullname; ?>
			<h2><?php echo $username; ?></h2>
		</div>
		<div class="post-form-wrapper">
			<?php if ( is_user_logged_in() ) : ?>
			<?php locate_template( array( 'activity/post-form.php'), true ); ?>
			<?php endif; ?>
		</div>
		<div class="activity-stream-wrapper">
			<?php do_action( 'bp_before_directory_activity_list' ); ?>
			<div class="activity-masthead">MyVoices From All Around</div>
			<div class="activity" role="main">

				<?php locate_template( array( 'activity/activity-loop.php' ), true ); ?>

			</div><!-- .activity -->
		</div>
	</div>
</div>
<?php get_footer(); ?>