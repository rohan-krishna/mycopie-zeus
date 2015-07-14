<?php
/*
Template Name: About Us(Impress)
*/
?>
<?php get_header(); ?>
<div id="impress">
	<div id="intro" class="step slide" data-x="-1000" data-y="-1500" >
		<section class="intro">
			<h2>A Little Intro About Us</h2>
			<q>Has it ever bothered you to be using notebooks used by your grandmom? Its just freakin' unbelievable why no one would wanna take students seriously? We went everywhere in north India to discuss this but no one understood us. We later realized they don't dig Tamil.
			</q>
		</section>
	</div>
	<div id="why" class="step slide" data-x="0" data-y="-1500" >
		<div>
			<h2>Why Are We Still?</h2>
			<q> 
				Why are we putting up with those notebooks designed for the old? Aren't you the future?
				Aren't you the one to shape the lives of millions of People?
				Aren't you the one who's gonna bring class and elegance to the nation full of bad notebook designs? 
			</q>
		</div>
	</div>
	<div id="change" class="step slide" data-x="1000" data-y="-1500" >
		<div>
			<h2>Noticed A Little Change?</h2>
			<q> 
				Do you notice a little different thing about this page?
				Yes , we're different and what we're gonna offer you is also uniquely different.
				Dig a little deeper to know what we do to change this monotony of Book Designs.
			</q>
		</div>
	</div>
	 <div id="title" class="step title" data-x="0" data-y="0" data-scale="4">
        <figure class="about-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" /></figure>
        <h2>Notebooks For Youngsters</h2>
    </div>
	<div id="about-mycharge" class="step mycharge" data-x="850" data-y="3000" data-rotate="90" data-scale="5">
        <figure class="mycharge-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mycharge.png" /></figure>
		<q>
			Say Hello to MyCharge , no , literally say Hello!You can now recharge your mobile phone at just a click away.
			And it's secured by Juspay.So those who are paranoid about security , cut a slack.We're gonna tell you the most cheesiest line , Nobody is watching you.(If you know whatI mean :P )
		</q>
    </div>
	 <div id="about-myvoice" class="step myvoice" data-x="3500" data-y="2100" data-rotate="180" data-scale="6">
        <figure class="myvoice-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/myvoice.png" width="256"/></figure>
		<div class="loudvoice">LOUD</div>
		<h2>Say it Out</h2>
    </div>
	<div id="matters" class="step matters" data-x="3500" data-y="1800" data-z="-3000" data-rotate="300" data-scale="1">
        <q>Because Your Voice Do Matters.MyVoice is a Social Media Networking Platform.</q>
    </div>
	<div id="more" class="step more" data-x="3500" data-y="-850" data-rotate="270" data-scale="1">
        <p>Want to know more?</p>
        <q>Dig In Today!Visit All Pages.</q>
    </div>
	<div id="overview" class="step overview" data-x="15000" data-y="1500" data-z="-3000" data-scale="10">
		<h2>It's All For Today Folks!Now Designers @ MyCopie Do Leave me a Feedback about this Design!</h2>
    </div>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/impress.js"></script>
<script>
impress().init();
var api = impress();

</script>
</div>
<div class="hint">
    <div class="btn-group">
		<button type="button" class="btn btn-lg btn-default" id="next" onclick="api.prev()"><span class="glyphicon glyphicon-arrow-left"></span></button> 
		<button type="button" class="btn btn-lg btn-default" id="next" onclick="api.next()"><span class="glyphicon glyphicon-arrow-right"></span></button> 
	</div>
</div>
<?php wp_footer(); ?>

