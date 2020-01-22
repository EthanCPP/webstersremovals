$(document).ready(function() {
	$('#tab-new-testimonial').css('display', 'block');
	$('#tab-new-testimonial').slideUp(0);

	$('#btn-new-testimonial').click(function() {
		$('#btn-new-testimonial').hide();
		$('#tab-new-testimonial').slideDown(300);
	});

	$('#btn-cancel-testimonial').click(function() {
		$('#btn-new-testimonial').show();
		$('#tab-new-testimonial').hide();
	});
});