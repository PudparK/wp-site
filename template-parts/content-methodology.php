<?php
// ADVANCED CUSTOM FIELDS
	$why_3_natural_bionutrition_feature_image = get_field('why_3_natural_bionutrition_feature_image');
	$why_3_natural_bionutrition_title         = get_field('why_3_natural_bionutrition_title');
	$why_3_natural_bionutrition_description   = get_field('why_3_natural_bionutrition_description');
	$nutrition_title                          = get_field('nutrition_title');
	$nutrition_description                    = get_field('nutrition_description');
	$analytics_title                          = get_field('analytics_title');
	$analytics_description                    = get_field('analytics_description');
?>

    <!-- METHODS
    =========================================================== -->
    <section id="methodology">
				<div class="container">

						<div class="section-header">

							<!-- If user uploaded an image -->
							<?php if( !empty($why_3_natural_bionutrition_feature_image) ) : ?>
								<img src="<?php echo $why_3_natural_bionutrition_feature_image['url']; ?>" alt="<?php echo $why_3_natural_bionutrition_feature_image['alt']; ?>">
							<?php endif; ?>

							<h2><?php echo $why_3_natural_bionutrition_title; ?></h2>
						</div>
						<p class="lead no-bottom-margin"><?php echo $why_3_natural_bionutrition_description; ?></p>

					<div class="row">
						<div class="col-md-6">
							<h3 class="text-center"><?php echo $nutrition_title; ?></h3>
							<p><?php echo $nutrition_description; ?></p>
						</div><!-- col -->
						<div class="col-md-6">
							<h3 class="text-center"><?php echo $analytics_title; ?></h3>
							<p><?php echo $analytics_description; ?></p>
						</div><!-- col -->
					</div><!-- row --> 

				</div><!-- container -->
    </section>
