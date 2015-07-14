<?php get_header(); ?>
<div class="page-wrapper">
	<div class="mast-spl">
		<h1 class="text-center">MyCopie<sup>&trade;</sup> Notebooks</h1>
	</div>
<?php include 'head.php'; ?>
<div class="container white-bg">
	<div class="padding15 marginTop">


<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
    <ul id="myTab" class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">All Designs</a></li>
      <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Ruled</a></li>
	<li role="presentation"><a href="#dropdown1" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Unruled</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledBy="home-tab">
        <div class="col-md-12">

<br><br>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col-md-4 col-sm-4 col-lg-2">
			<?php  the_content(); ?>

<?php 
			$product_link = get_post_meta($post->ID,'_mcp_link',true);
		?>
		<br/>
		<center><a href="<?php echo $product_link; ?>" class="btn btn-success txt-center" target="_blank" <?php echo ($product_link!='')?'':'style="visibility:hidden"'; ?>><i class="fa fa-shopping-cart" ></i> Buy Now</a></center>
		<br/>
		</div>
	<?php endwhile; ?> 
	</div>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledBy="profile-tab">
        <?php include 'books-avail.php'; ?>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledBy="dropdown1-tab">
        <?php include 'books-unruled.php'; ?>
      </div>
    </div>


	</div>
<?php endif; ?>
</div>
</div>
<?php get_footer(); ?>
<script>
$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});
</script>

</body>