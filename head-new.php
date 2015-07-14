<?php
/*
New Header File
*/
?>
<div class="panel-wrapper">
	<div class="panel-content container">
		<div class="row">
			<div class="col-md-9 visible-xs">
				<?php
					$args = array('theme_location' => 'header-menu','container' => false,'menu_class' => 'responsive-nav');
					wp_nav_menu($args);
				?>
			</div>
			<div class="col-md-3 hidden-xs">
				<?php get_search_form(); ?>	
			</div>
		</div>
	</div>
</div>
<div class="header-wrapper">
	<div class="container">
		<div class="panel-pull pull-right visible-xs">
			<i class="fa fa-navicon"></i>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<a href="<?php bloginfo('home'); ?>">
					<div class="pull-left padding15">
						<img src="http://mycopie.com/wp-content/uploads/2015/03/logo-72.png" class="img-responsive" draggable="false" width="256"/>
					</div>
					</a>
				</div>
				<!--Responsive Navigaiton!-->

				<!--Navigation Wrapper!-->
				<div class="nav-wrapper hidden-xs">
					<div class="row">
						<div class="col-md-12">
							<nav class="primary-nav-wrapper clearfix">
								<?php
										$args = array('theme_location' => 'header-menu','container' => false,'menu_class' => 'primary-nav');
										wp_nav_menu($args);
								?>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
