<?php
// ADVANCED CUSTOM FIELDS
	$who_should_feature_image = get_field('who_should_feature_image');
	$who_should_title         = get_field('who_should_title');
	$who_section_body         = get_field('who_section_body');
?>

		<!-- Who Benefits
		=========================================================== -->
		<section id="who-benefits">
			<div class="container">
				<div class="section-header">

						<!-- If user uploaded an image -->
						<?php if( !empty($who_should_feature_image) ) : ?>
							<img src="<?php echo $who_should_feature_image['url']; ?>" alt="<?php echo $who_should_feature_image['alt']; ?>">
						<?php endif; ?>

					<h2><?php echo $who_should_title; ?></h2>
				</div><!--  section-header -->
				<div class="row">
					<?php echo $who_section_body; ?>
				</div><!--  row -->
			</div><!--  container -->
		</section><!-- who-benefits  -->
