<?php
/*
Template Name: Where to buy
*/
?>
<?php get_header(); ?>
<?php include 'head.php'; ?>
<div class="page-wrapper">
<div class="container">
<div class="" id="team-slider">

<h1> MyCopie Notebooks available online @ </h1>

<a target="_blank" href="http://www.flipkart.com/search?q=mycopie"> <img src="http://mycopie.com/wp-content/uploads/2015/01/flipkart_logo.png" width="300px"></a>
<a target="_blank" href="http://www.amazon.in/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=mycopie"> <img src="http://mycopie.com/wp-content/uploads/2015/02/amazonIN_logo.jpg" width="300px"></a>

<h1>MyCopie is available in</h1>
<br>
<div id="map_wrapper">
    <div id="map_canvas" class="mapping"></div>
</div>

<br>


</div>
</div>
</div>
</div>

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
	['Pondicherry',11.9363067,79.8131617],
        ['Vellore',12.9202, 79.1333],
        ['Trichy',10.8050, 78.6856],
        ['Bengaluru',12.9667, 77.5667],
	['Hyderabad',17.4123487,78.4080455],
	['Visakapatnam',17.7385936,83.2625211],
	['Vijayawada',16.510252,80.6444612]
    ];
                        
    // Info Window Content
    var infoWindowContent = [
        ['<div class="info_content"><h3>Chennai</h3></div>'],
        ['<div class="info_content"><h3>Coimbatore</h3></div>'],
        ['<div class="info_content"><h3>Pondicherry</h3></div>'],
        ['<div class="info_content"><h3>Vellore</h3></div>'],
        ['<div class="info_content"><h3>Trichy</h3></div>'],
        ['<div class="info_content"><h3>Bengaluru</h3></div>'],
        ['<div class="info_content"><h3>Hyderabad</h3></div>'],
        ['<div class="info_content"><h3>Visakapatnam</h3></div>'],
        ['<div class="info_content"><h3>Vijayawada</h3></div>']
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
        this.setZoom(5);
        google.maps.event.removeListener(boundsListener);
    });
    
}
</script>
<?php get_footer(); ?>