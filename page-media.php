<?php
/*
Template Name: Press Coverage
*/
?>
<?php get_header(); ?>
<?php include 'head.php'; ?>
<div class="page-wrapper">
	
	<div class="mast-spl">
		<h1 class="txt-center">Media Broadcast</h1>
	</div>

<div class="container txt-center white-bg">

	<div class="row" style="margin-top: 30px; margin-bottom: 30px;">
		<h1 style="margin-bottom: 30px; padding: 10px; background-color: rgb(249, 245, 237);">Print Media</h1>
		<?php
			$args = array('category_name' => 'print_press','post_type' => 'post');
			$print = new WP_Query( $args );
		?>
		<?php if ( $print->have_posts() ) : while ( $print->have_posts() ) : $print->the_post(); ?>
			<div class="col-md-4">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
	</div>

<div class="row">
<h1 style="padding: 10px; background-color: rgb(249, 245, 237);"> Television </h1>

	<!-- Button trigger modal -->
<a href="javascript:;"  data-toggle="modal" data-target="#tv">
  	<center>
		<img src="http://mycopie.com/wp-content/uploads/2015/01/Puthiya-Thalaimurai-Tv-Online.png" style="padding-top: 10px;">
	</center>
</a>
</div>
<!-- Modal -->
<div class="modal fade" id="tv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 95px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Puthiya Thalaimurau</h4>
      </div>
      <div class="modal-body">
        <iframe  src="//www.youtube.com/embed/XByqbpOJkz8" frameborder="0" allowfullscreen style="width: 100%; height: 350px;"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

	<div class="row">
		<h1 style="padding: 10px; background-color: rgb(249, 245, 237);"> Online Media </h1>
		<?php
			$args = array('category_name' => 'online_press','post_type' => 'post');
			$online = new WP_Query( $args );
		?>
		<?php if ( $online->have_posts() ) : while ( $online->have_posts() ) : $online->the_post(); ?>
			<div class="col-md-4">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
	</div>
<br>


	<div class="row">
		<h1 style="padding: 10px; background-color: rgb(249, 245, 237);"> Radio </h1>
		<div class="col-md-5">
			<a target="_margin-top: 30px;arget="_blank"><img class="alignnone wp-image-519 size-medium" src="http://upload.wikimedia.org/wikipedia/en/a/a7/Radiomirchi.jpg" alt="" width="auto" height="150px" /></a>
		</div>
		<div class="col-md-4">
			<a target="_blank" href="#" target="_blank"><img class="alignnone wp-image-519 size-medium" src="http://www.shaastra.org/2009/site/themes/prince_hari/images/chennai_live_logo.jpg" alt="" width="auto" height="150px" /></a>
		</div>
		<div class="col-md-3">
			<a target="_blank" href="https://soundcloud.com/krithikad/mycopie-radio-talk" target="_blank"><img class="alignnone wp-image-519 size-medium" src="http://mycopie.com/wp-content/themes/Archive/images/media/ro.jpg" alt="" width="auto" height="150px" /></a>
		</div>
	</div>
		<br>

	</div>
	</div>
<br>
</div>
<?php get_footer(); ?>