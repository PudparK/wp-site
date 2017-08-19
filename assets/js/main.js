$(function() {
	console.log("jQuery working...");
	// Cache the window object
	var $window = $(window);

	// Parallax background effect
	$('section[data-type="background"]').each(function(){
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

function openCompany(evt, companyName) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for(i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}

	tablinks = document.getElementsByClassName("tablinks");
	for(i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}

	document.getElementById(companyName).style.display = "block";

	evt.currentTarget.className += " active";
}