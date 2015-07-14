<?php
/*
Template Name: Advertise Template
*/
?>
<?php get_header(); ?>
<?php include 'head.php'; ?>
<div class="page-wrapper">

<img src="http://mycopie.com/wp-content/uploads/2015/01/advertise1.jpg" style="width: 100%;">
<div class="container white-bg txt-center">

	<div class="row txt-center">
		<div class="col-md-12">
				<div class="col-md-4">
					<div id="heroIconAds" class="cu-line">
						<a href="#top"  data-toggle="tooltip" data-placement="top" title="Our Mission" id="tool">
							<i class="fa fa-rocket fa-3x"></i>
						</a>
					</div>
					<h1>Concept</h1>
					<p>Making life 'fun' for College students! Give them a book that looks awesome, loaded with coupons from brands that love them!</p>
				</div>
				<div class="col-md-4">
					<div id="heroIconAds" class="cu-line">
						<a href="#team-slider"  data-toggle="tooltip" data-placement="top" title="Our Vision" id="tool2">
							<i class="fa fa-camera fa-3x"></i>
						</a>
					</div>
					<h1>Ad efficiency</h1>
					<p>Cool kids buy MyCopie. Cool brands got to be with us to reach them! We will put a million books in the hands of students in a year. Be with us! :)</p>
				</div>
				<div class="col-md-4">
					<div id="heroIconAds" class="cu-line">
						<a href="#heroheader"  data-toggle="tooltip" data-placement="top" title="Our Purpose" id="tool3">
							<i class="fa fa-users fa-3x"></i>
						</a>
					</div>
					<h1>Multiple Viewership</h1>
					<p>Unlike news paper Ads or snapdeal, here's a medium that encourages students to see your brand name every day, every time they open their books! Beat this! :)</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				
				<?php echo do_shortcode('[contact-form-7 id="679" title="Advertise"]'); ?>
			</div>
		</div>
	<?php include 'partners.php'; ?>
	</div>
</div>
<?php get_footer(); ?>