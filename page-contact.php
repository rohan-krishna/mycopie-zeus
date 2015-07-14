<?php
/*
Template Name:Contact
*/
?>
<?php get_header(); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=791623817534008&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<?php include 'head.php'; ?>
<div class="page-wrapper">
	<div class="mast-spl" id="map">
		<h1 class="txt-center"><?php the_title(); ?></h1>
	</div>
<div class="wrapper white-bg txt-center">
	<?php if ( have_posts() ) : the_post(); ?>
	<div class="map-wrapper">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3887.1084225689765!2d80.206206!3d13.028767000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52672163652ddd%3A0x13b8b036c100c6b9!2sMyCopie!5e0!3m2!1sen!2s!4v1407235904881" width="100%" height="450" frameborder="0" style="border:0"></iframe>
	</div>
 <div class="padding15">
	<div class="divider"></div>
	<div class="reachform-wrapper">
	<div class="row">
		<div class="col-md-6">
			<p> If you wanna contact us or any reason other than wanting our notebook for free, use the options below </p>
			<div class="col-md-6 txt-center">
				<div id="heroIcon" class="cu-blue" style="">
						<a href="#"  data-toggle="tooltip" data-placement="top" title="MyCopie" id="tool" target="_blank">
							<i class="fa fa-3x fa-phone"></i>
						</a>
				</div>
<br>
				<p>+91 44 4287 9200</p>
			</div>
			<div class="col-md-6 txt-center">
				<div id="heroIcon" class="cu-salem" style="">
						<a href="#"  data-toggle="tooltip" data-placement="top" title="MyCopie" id="tool2" target="_blank">
							<i class="fa fa-3x fa-whatsapp"></i>
						</a>
				</div>
<br>
				<p>+91 91768 08449</p>
			</div>

			<div class="col-md-6 txt-center">
				<div id="heroIcon" class="cu-flam" style="">
						<a href="mailto:jobless@mycopie.com"  data-toggle="tooltip" data-placement="top" title="MyCopie" id="tool" target="_blank">
							<i class="fa fa-3x fa-envelope"></i>
						</a>
				</div>
<br>
				<p>jobless@mycopie.com</p>
			</div>

			<div class="col-md-6 txt-center">
				<div id="heroIcon" class="cu-blue" style="background-color: #4A6EA9;">
						<a href="https://www.facebook.com/mycopiepage"  data-toggle="tooltip" data-placement="top" title="MyCopie" id="tool" target="_blank">
							<i class="fa fa-3x fa-facebook"></i>
						</a>
				</div>
<br>
				<p>/MyCopiePage</p>
			</div>
			<div class="col-md-6 txt-center">
				<div id="heroIcon" class="cu-madison" style="background-color: #55acee">
						<a href="https://www.twitter.com/mycopiepage"  data-toggle="tooltip" data-placement="top" title="MyCopie" id="tool2" target="_blank">
							<i class="fa fa-3x fa-twitter"></i>
						</a>
				</div>
<br>
				<p>@MyCopiePage</p>
			</div>
			<div class="col-md-6 txt-center">
				<div id="heroIcon" class="cu-flam" style="">
						<a href="https://www.youtube.com/channel/UCie_dcGZT-U52rEluYNm6kA"  data-toggle="tooltip" data-placement="top" title="MyCopie" id="tool" target="_blank">
							<i class="fa fa-3x fa-youtube"></i>
						</a>
				</div>
<br>
				<p>/mycopievideos</p>
			</div>
			
			<div class="col-md-6 txt-center">
				<div id="heroIcon" class="cu-blue" style="background-color: #0077b5;">
						<a href="https://www.linkedin.com/company/2837559?trk=tyah&trkInfo=clickedVertical%3Acompany%2Cidx%3A1-1-1%2CtarId%3A1432180326059%2Ctas%3Amycopie"  data-toggle="tooltip" data-placement="top" title="MyCopie" id="tool" target="_blank">
							<i class="fa fa-3x fa-linkedin"></i>
						</a>
				</div>
<br>
				<p>/mycopie</p>
			</div>


			<div class="col-md-6 txt-center">
				<div id="heroIcon" class="cu-flam" style="">
						<a href="https://plus.google.com/112812126144713534531"  data-toggle="tooltip" data-placement="top" title="MyCopie" id="tool" target="_blank">
							<i class="fa fa-3x fa-google"></i>
						</a>
				</div>
<br>
				<p>/mycopie</p>
			</div>

			<br>
		


			
		</div>
		<div class="col-md-6" style="text-align: left">
	<!--		
				<ul>
					<li>If you wanna contact us for any reason other than wanting our books for free, use the below options:</li>
<li>Stand topless near Ranganathan street, Railway Station with MyCopie logo imprinted on your forehead. Ofcourse, assuming you are a guy.</li>
<li>If that's too hard or if you are our favorite gender, fill the short form below and We'll still respond when sober!</li>
</ul>
<br>
<h4 style="text-align: left;"> Phone number </h4>
<p> (044) - 42879200 </p>
<br>
<h4 style="text-align: left;"> Email </h4>
<p> jobless@mycopie.com </p>
<br>

<h4 style="text-align: left;"> Social </h4>

<div class="col-md-3 txt-center">
				<div id="heroIcon" class="cu-blue" style="height: 64px; width: 64px;">
						<a href="https://www.facebook.com/mycopiepage"  data-toggle="tooltip" data-placement="top" title="MyCopie" id="tool" target="_blank">
							<i class="fa fa-facebook"></i>
						</a>
				</div>
				<p>/MyCopiePage</p>
			</div>
			<div class="col-md-3 txt-center">
				<div id="heroIcon" class="cu-madison" style="height: 64px; width: 64px;">
						<a href="https://www.twitter.com/mycopiepage"  data-toggle="tooltip" data-placement="top" title="MyCopie" id="tool2" target="_blank">
							<i class="fa fa-twitter"></i>
						</a>
				</div>
				<p>@MyCopiePage</p>
			</div>
		</div>
		-->

<p style="margin-bottom: 80px;"> Stand topless near Ranganathan street, Railway Station with MyCopie logo imprinted on your forehead. Ofcourse, assuming you are a guy. If that's too hard or if you are our favorite gender, fill the short form below and We'll still respond when sober!</p>

<?php echo do_shortcode('[contact-form-7 id="323" title="Contact form 1"]'); ?>
		</div>

		<?php comments_template(); ?>
<!--
		<h1> Facebook Comments </h1>
		<div class="fb-comments" data-href="http://mycopie.com/reach-us/" data-numposts="5" data-colorscheme="light"></div>		
-->
	</div>
	</div>
  </div>
</div>
<?php endif; ?>
<?php get_footer(); ?>
</div>