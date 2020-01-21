$(document).ready(function() {
	$('#services-menu').hide();
	$('#about-menu').hide();

	var menu_services = false;
	var menu_about = false;

	$('#btn-services-menu').click(function() {
		/*
		if (menu_services) {
			menu_services = false;
			$('#services-menu').slideUp(200);
		} else {
			menu_services = true;
			$('#about-menu').hide();
			$('#services-menu').show();
		}*/

			$('#services-menu').toggle();
	});
});