<?php 
	// CUSTOM FIELDS
	$schedule_button_url  = get_field('schedule_button_url');
	$schedule_button_text = get_field('schedule_button_text');
?>

    <!-- HERO
    =========================================================== -->
    <section id="hero" data-type="background" data-speed="8">
      <article>
        <div class="container clearfix">
          <div class="row">
            <div class="col-sm-5 hero-text">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="3 Natural Bionutrition Logo" class="logo img-responsive">
            </div><!-- col -->
            <div class="col-sm-7 hero-text">
              <h1><?php bloginfo('name'); ?></h1>
							<p class="lead"><?php bloginfo('description'); ?></p>
							<div class="action-buttons center-block">
								<a href="<?php echo $schedule_button_url ?>" class="btn btn-lg btn-success action-button center-inline"><?php echo $schedule_button_text; ?></a>
								<a href="#" class="btn btn-lg btn-danger action-button center-inline">Learn More</a>
							</div>
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- container -->
      </article>
    </section><!-- hero -->
