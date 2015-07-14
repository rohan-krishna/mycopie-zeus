<?php 
$args = array ( 'post_type' => 'post',
				'category_name' => 'myteam');

$team = new WP_Query($args);
?>
<div class="container txt-center" id="team-slider">
<h1>MyCopie Bandits</h1>
<br>
<div class="team-slider" id="teamSlider">
	<?php if ( $team->have_posts() ) :  while ( $team->have_posts() ) : $team->the_post() ?>
	<div class="item">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail('thumbnail',array('class' => 'img-circle img-thumbnail' )); ?>
		<?php endif; ?>
		<h3><?php the_title(); ?></h3>
		<p><?php the_content(); ?>
	</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
</div>
<script type="text/javascript">
	$('#teamSlider').owlCarousel();
</script>


<?php 
$args = array ( 'post_type' => 'post',
				'category_name' => 'buddy');

$team = new WP_Query($args);
?>
<div class="container txt-center" id="team-slider">
<h1>MyCopie Buddies</h1>
<p>We also call them interns.</p>
<br>
<div class="team-slider" id="buddySlider">
	<?php if ( $team->have_posts() ) :  while ( $team->have_posts() ) : $team->the_post() ?>
	<div class="item">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail('thumbnail',array('class' => 'img-circle img-thumbnail' )); ?>
		<?php endif; ?>
		<h3><?php the_title(); ?></h3>
		<p><?php the_content(); ?>
	</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
</div>
<script type="text/javascript">
	$('#buddySlider').owlCarousel();
</script>