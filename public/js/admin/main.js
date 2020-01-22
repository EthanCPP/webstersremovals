$(document).ready(function() {
	$('#nav-testimonials').click(function() {
		$('#tab-testimonials').show();
		$('#tab-requests').hide();
		$('#nav-testimonials').addClass('active');
		$('#nav-requests').removeClass('active');
	});

	$('#nav-requests').click(function() {
		$('#tab-testimonials').hide();
		$('#tab-requests').show();
		$('#nav-testimonials').removeClass('active');
		$('#nav-requests').addClass('active');
	});
});