<header class="mast-header" id="mastHead">
<?php 
    $args =  array( 'theme_location' => 'header-menu',
                    'container' => 'div',
                    'container_class' => 'nav-container',
                    'depth' => 2 );
?>
<div class="container">
  <section class="logo-wrap">
  <a href="<?php bloginfo('home'); ?>">
  <img src="http://mycopie.com/wp-content/uploads/2015/03/logo-72.png" class="img-responsive padding15" draggable="false" id="imgStick"/>
</a>
</section>
 <nav class="header-navigation">
    <?php wp_nav_menu($args); ?>
  </nav>
</div>
</header>