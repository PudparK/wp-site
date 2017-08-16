<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package One_Three_Two
 */

 $assessment = 'health-assessment';

?>

<?php wp_footer(); ?>
    <!-- SURVEY
		=========================================================== -->

    <section id="survey" data-type="background" data-speed="10">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<h2>Take the First Step Towards <strong class="strong-text">Nutritional Health</strong>!</h2>
						<p><a href="<?php echo $assessment; ?>" class="btn btn-lg btn-block btn-success">Assess Your Health</a></p>
					</div>
				</div><!-- row -->
			</div><!-- container -->
    </section><!-- toSurvey -->

    <!-- FOOTER
    =========================================================== -->
    <footer>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<ul class="social-icons">
								<li><a href="http://www.facebook.com/3naturalBioNutrition" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
								<li><a href="https://twitter.com/3naturalN" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
								<li><a href="https://www.instagram.com/3naturalBioNutrition/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div><!-- col -->
					<div class="col-xs-12 text-center">
						<h3>3 Natural Bionutrition</h3>
						<ul class="address">
							<li>701 Palomar Airport Road</li>
							<li>Ste. 300</li>
							<li>Carlsbad, CA 92011</li>
							<li>1.833.3NATBIO office (toll-free)</li>
							<li>415.439.0882 mobile</li>
							<li>833.362.8246 fax</li>
						</ul>	
					</div>				
				</div><!-- row -->
			</div><!-- container -->
    </footer>

    <!-- MODAL
    =========================================================== -->
    <div id="myModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header">
						<button class="close" type="button" data-dismiss="modal"> <span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 id="myModalLabel" class="modal-title"><i class="fa fa-envelope"> Subscribe to your Mailing List</i></h4>
					</div><!--modal-header -->

					<div class="modal-body">
						<p>Simply enter your name and email!</p>
						<form action="" class="form-inline" role="form">
							<div class="form-group">
								<label for="subscribe-name" class="sr-only">Your first name</label>
								<input type="text" id="subscribe-name" class="form-control" placeholder="Your first name">
							</div><!-- form-group -->
							<div class="form-group">
								<label for="subscribe-email" class="sr-only">and your email</label>
								<input type="text" id="subscribe-email" class="form-control" placeholder="and your email">
							</div><!-- form-group -->

							<input type="submit" class="btn btn-danger" value="Subscribe!">
						</form>

						<hr>

						<p><small>
							By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.
						</small></p>
					</div><!-- modal-body -->

				</div><!-- modal-content -->
			</div><!-- modal-dialog -->
    </div><!-- modal -->

</body>
</html>
