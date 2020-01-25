$(document).ready(function() {
	$('#nav-testimonials').click(function() {
		$('#tab-testimonials').show();
		$('#tab-requests').hide();
		$('#tab-stats').hide();
		$('#nav-testimonials').addClass('active');
		$('#nav-requests').removeClass('active');
		$('#nav-stats').removeClass('active');
	});

	$('#nav-requests').click(function() {
		$('#tab-testimonials').hide();
		$('#tab-requests').show();
		$('#tab-stats').hide();
		$('#nav-testimonials').removeClass('active');
		$('#nav-requests').addClass('active');
		$('#nav-stats').removeClass('active');
	});

	$('#nav-stats').click(function() {
		$('#tab-testimonials').hide();
		$('#tab-requests').hide();
		$('#tab-stats').show();
		$('#nav-testimonials').removeClass('active');
		$('#nav-requests').removeClass('active');
		$('#nav-stats').addClass('active');
	});
});