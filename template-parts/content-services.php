<?php
// ADVANCED CUSTOM FIELDS
	$services_section_image = get_field('services_section_image');
	$services_section_title = get_field('services_section_title');
	$services_section_body  = get_field('services_section_body');
?>
		<!-- Services
		=========================================================== -->
		<section id="services-offered">
			<div class="container">

				<div class="section-header">

				<!-- If user uploaded an image -->
				<?php if( !empty($services_section_image) ) : ?>
					<img src="<?php echo $services_section_image['url']; ?>" alt="<?php echo $services_section_image['alt']; ?>">
				<?php endif; ?>
					
					<h2><?php echo $services_section_title; ?></h2>

					<!-- If user added body text -->
					<?php if( !empty($services_section_body) ) : ?>
						<p class="lead"><?php echo $services_section_body ?></p>
					<?php endif; ?>

				</div><!--  section-header -->

				<div class="row">
					
					<?php $loop = new WP_Query( array( 'post_type' => 'service', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

						<div class="col-sm-3">
							<i class="<?php the_field('service_icon'); ?>"></i>
							<h4><?php the_title(); ?></h4>
						</div>

					<?php endwhile;
						wp_reset_query();
					?>
					
				</div><!--  row -->

			</div><!--  container -->
		</section><!-- services-offered  -->
