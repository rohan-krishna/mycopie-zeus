<div class="hero-owl" id="HeroOwl" style="width: 100%">
<div class="item">
	<img src="http://mycopie.com/wp-content/uploads/2015/01/Banners-for-website-02.jpg">
</div>
<div class="item">
	<img src="http://mycopie.com/wp-content/uploads/2015/01/Banners-for-website-01-2.jpg">
</div>
</div>
<script>
$(document).ready(function() {
  var owl = $("#HeroOwl");
    owl.owlCarousel({
    slideSpeed : 300,
    singleItem: true,
    pagination : false,
    responsive: true,
    autoHeight: true,
    autoPlay: true,
    navigation: false,
    transitionStyle: "fade"
  });
  $('.nav-prev').click(function() {
    owl.trigger('owl.prev');
  });
  $('.nav-next').click(function() {
    owl.trigger('owl.next');
  });
});
</script>