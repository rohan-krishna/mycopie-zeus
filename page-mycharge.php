<?php
/*
Template Name: MyCharge
*/
?>
<?php get_header(); ?>
<?php include 'head.php'; ?>
<div class="mycharge-wrapper">
	<div class="container">
	<h1>MyCharge - The Revolutionary Mobile Recharge Platform</h1>
	<p>Need we say more? Captain Kirk,take us to the Nebula,Max Warp!</p>
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rocket.jpg" class="img-responsive the-rocket" draggable="false" />
	<iframe src="https://www.rocketrecharge.com/recharge/rechargeWidget?associateId=mycopie&showPlans=true" height="750" width="1060" frameborder="0" class="hidden-xs">
	</iframe>
	<iframe src="https://www.rocketrecharge.com/recharge/rechargeWidget?associateId=mycopie" height="750" width="1060" frameborder="0" class="visible-xs">
	</iframe>
	</div>
<?php get_footer(); ?>
</div>
