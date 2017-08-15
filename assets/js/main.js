jQuery(function() {
	console.log("jQuery is working...");
	// Cache the window object
	var $window = jQuery(window);

	// Parallax background effect
	jQuery('section[data-type="background"]').each(function(){
		var $bgObj = $(this);

		$window.scroll(function() {

				// scroll the background at var speed
				// the yPos is a negative value because we're scrolling it UP!
				var yPos = -($window.scrollTop() / $bgObj.data('speed'));

				// Put together our final backgound position
				var coords = '50% ' + yPos + 'px';

				// Move the background
				$bgObj.css({ backgroundPosition: coords });

		});
	});
});