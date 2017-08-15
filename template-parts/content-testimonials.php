    <!-- Testimonials
    =========================================================== -->
    <section id="testimonials">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">

						<h2>What People Are Saying</h2>

							<?php $loop = new WP_Query( array( 'post_type' => 'testimonial', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

							<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

								<!-- TESTIMONIAL -->
								<div class="row testimonial">
									<div class="col-sm-12">
										<i class="fa fa-quote-left fa-3x pull-left"></i>
										<blockquote><?php the_content(); ?>
											<i class="fa fa-quote-right"></i>
											<cite>&mdash; <?php the_title(); ?></cite>
										</blockquote>
									</div>
								</div><!-- row -->

							<?php endwhile;
								wp_reset_query();
							?>
					</div>
				</div>

			</div><!-- container -->
		</section>
