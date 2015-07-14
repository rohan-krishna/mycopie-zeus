<?php
/*
Template Name: About Us(Normal)
*/
?>
<?php get_header(); ?>
<?php include 'head.php'; ?>
<div class="page-wrapper">
	<!-- <div class="mast-spl">
		<h1 class="txt-center"><?php the_title(); ?></h1>
	</div> -->
<?php include 'slider.php'; ?>
<div class="container white-bg">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ; ?> 
	<!--Icons Tile!-->
	<div class="row padding162 txt-center" id="hero">
		<div class="col-md-12">
				<div class="col-md-3">
					<div id="heroIcon" class="cu-flam">
						<a href="#top"  data-toggle="tooltip" data-placement="top" title="Our Mission" id="tool">
							<i class="fa fa-rocket fa-3x"></i>
						</a>
					</div>
					<h1>Our Mission</h1>
					<p>Making even the last benchers to take notes. Using MyCopie's Back benchers collection.</p>
				</div>
				<div class="col-md-3">
					<div id="heroIcon" class="cu-eucal">
						<a href="#team-slider"  data-toggle="tooltip" data-placement="top" title="Our Vision" id="tool2">
							<i class="fa fa-eye fa-3x"></i>
						</a>
					</div>
					<h1>Our Vision</h1>
					<p>To make every college kid go to school. Sorry, College.</p>
				</div>
				<div class="col-md-3">
					<div id="heroIcon" class="cu-purple">
						<a href="#heroheader"  data-toggle="tooltip" data-placement="top" title="Our Purpose" id="tool3">
							<i class="fa fa-road fa-3x"></i>
						</a>
					</div>
					<h1>Our Purpose</h1>
					<p>Love, Peace, no bunk, Only proxy, Einstein! Stuff like that. ;)</p>
				</div>
				<div class="col-md-3">
					<div id="heroIcon" class="cu-salem">
						<a href="#teamSlider"  data-toggle="tooltip" data-placement="top" title="Our Team" id="tool4">
							<i class="fa fa-users fa-3x"></i>
						</a>
					</div>
					<h1>Our Team</h1>
					<p class="txt-center">A bunch of kids who refuse to leave college many decades after they have passed out.</p>
				</div>
			</div>
	</div>

<p style="line-height: 2;">MyCopie is for kids who are grownup. It can be a little confusing. We'll clarify. See, there are two kinds of kids in colleges. Kids, who are actually kids. They whine about silly things - like there's so much to study but don't have time. They go to all kinds of tuition to improve their IQ. They are eternally trying to prove they are better. Their life is a pursuit in self-inflicted misery. And then there's another kind of kids in colleges. Kids who have grown up to level up with the real world. They are not afraid to be different. They don't succumb to peer pressure. They don't do things because they are 'supposed' to but because they love to. They might spend 10 hours contemplating deeper into a 1 mark question and might spend only a minute to understand a 10 mark question. They don't study for marks. They believe in life after studies. They meet real people. Not just hook up to their lousy PC in a dark room stalking people they secretly like. They like to disagree when something doesn't make sense. They are rebels of corrupt system. They bunk classes not because they are bad kids but because they don't feel the need to prove they are good. They are not toppers not because they are stupid but because they aren't afraid to be rated stupid by the world. They are geniuses waiting to burst into the world.</p>
	
	<div class="divider"></div>



<br><br>

	<?php include 'team.php'; ?>

	<h1> Videos </h1>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<?= do_shortcode('[persoslider_w]
				[persoslider_c video="http://www.youtube.com/watch?v=P817hjSIF5E"]
				[persoslider_c video="http://www.youtube.com/watch?v=Z7Vw2MGm_XI"]
				[persoslider_c video="http://www.youtube.com/watch?v=kDoMZ4CICPI"]
				[persoslider_c video="http://www.youtube.com/watch?v=NWawdzgdu38"]
				[persoslider_c video="http://www.youtube.com/watch?v=E65Nb_HuzyM"]
				[persoslider_c video="http://www.youtube.com/watch?v=EAuyKD2Hqhg"]
			[/persoslider_w]') ?>
		</div>
	</div>

	<!-- <div class="row">
		<div class="col-md-6">
			<div class="videoWrapper">
				<iframe src="//www.youtube.com/embed/P817hjSIF5E" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
<div class="col-md-6">
			<div class="videoWrapper">
				<iframe src="//www.youtube.com/embed/Z7Vw2MGm_XI" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		
		

	</div>
	<div class="row" style="margin-top:30px">
		<div class="col-md-6">
			<div class="videoWrapper">
				<iframe src="//www.youtube.com/embed/kDoMZ4CICPI" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
<div class="col-md-6">
			<div class="videoWrapper">
				<iframe src="//www.youtube.com/embed/NWawdzgdu38" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		
		

	</div> -->
	




<br><br>

<div class="txt-center" id="team-slider">
<h1>MyCopie is available in :</h1>

<div id="map_wrapper">
    <div id="map_canvas" class="mapping"></div>
</div>

<br><br>
</div>
	<!--
	<div class="hero-career">
		<div class="container">
		<h1 class="txt-center">Career @ MyCopie</h1>
		<p>What makes you think we have job opportunities? If we had any serious job, don't you think we would be doing them already?
		   But, anyways, since you are here and also because you look like a very genuine person, mail us your CV along with your friend's picture to jobless@mycopie.com. Mind you, we don't like CVs. So, be very casual about the contents and make sure there are plenty of images customized for color blind. The moment we receive your CV, we will hire a Recruiter who will then call you to hire you. Once you are hired, you are not supposed to make us work. If you do, we will report to your parents. If you still make us work, We might have to reach your Principal or Correspondent who probably wouldn't know you exist. 
		   </p>
		 <p class="txt-center"><i class="fa fa-envelope-o"></i> jobless@mycopie.com</p>
		 <p class="txt-center">Wishing you the very best.</p>
		</div>

	</div>
	<div class="divider"></div>
	<div class="hero-career">
		<div class="container">
		<h1 class="txt-center">Privacy Policy</h1>
		<p>MyCopie is a very private notebook. All the contents of your MyCopie notebooks will be completely safe. But, 80% of the students who use it don't care about their privacy because they anyways are not taking notes properly, despite our continuous efforts. But, still, this is the MOST private notebooks you will find. Not even CIA can crack into our secured notebooks.This is unlike any other notebooks and the technology behind it will be a closely guarded secret till we actually find it ourselves.</p>
		<b class="txt-center">Peter Govind, Security outside MyCopie office, Chennai head Quarters.</b>
		</div>
	</div>
	!-->
</div>
</div>

<?php endwhile; ?>
<?php endif; ?>

<script type="text/javascript">
jQuery(function($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
    document.body.appendChild(script);
});

function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    map.setTilt(45);
        
    // Multiple Markers
    var markers = [
        ['Chennai', 13.028903, 80.206190],
        ['Coimbatore', 11.010521, 76.966937],
        ['Trichy',10.8050, 78.6856],
        ['Vellore',12.9202, 79.1333],
        ['Bengaluru',12.9667, 77.5667],
        ['Mangalore',12.8700, 74.8800],
        ['Manipal',13.3470, 74.7880]
        ['Hyderabad',17.3660, 78.4760],
        ['Goa',15.4989, 73.8278],
        ['Mumbai',18.9750, 72.8258]
    ];
                        
    // Info Window Content
    var infoWindowContent = [
        ['<div class="info_content"><h3>Chennai</h3></div>'],
        ['<div class="info_content"><h3>Coimbatore</h3></div>'],
        ['<div class="info_content"><h3>Trichy</h3></div>'],
        ['<div class="info_content"><h3>Vellore</h3></div>'],
        ['<div class="info_content"><h3>Bengaluru</h3></div>'],
        ['<div class="info_content"><h3>Mangalore</h3></div>'],
        ['<div class="info_content"><h3>Manipal</h3></div>'],
        ['<div class="info_content"><h3>Hyderabad</h3></div>'],
        ['<div class="info_content"><h3>Goa</h3></div>'],
        ['<div class="info_content"><h3>Mumbai</h3></div>']
    ];
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(6);
        google.maps.event.removeListener(boundsListener);
    });
    
}
</script>
<?php get_footer(); ?>