function resize_banner_image() {
	$('.banner-image').css('min-height', $(window).height() - $('.w-nav').height());
	$('.banner-text').css('top', 'calc(50% - ' + $('.w-nav').height() + 'px)');
	$('.banner-text').css('left', 'calc(50% - ' + ($('.banner-text').width() / 2) + 'px)');
}

function view_faders() {
	$('.view-fader').each(function(item) {
		if ($(window).scrollTop() + ($(window).height() - 100) >= $(this).offset().top) {
			$(this).animate({
				opacity: 1,
				top: '-20px'
			}, 600);
		}
	});
}

$(document).ready(function() {
	resize_banner_image();

	$(window).resize(function() {
		resize_banner_image();
	});

	$(window).scroll(function() {
		view_faders();
	});

	$('#padder').css('margin-top', $('.w-nav').outerHeight() + 'px');

	$('.view-fader').css('display', 'block');
	$('.view-fader').animate({ opacity: 0 }, 0);

	$('.banner-text h1').css('display', 'block');
	$('.banner-text h1').animate({ opacity: 0 }, 0);

	$('.banner-text p').css('display', 'block');
	$('.banner-text p').animate({ opacity: 0 }, 0);
	view_faders();

	$('.banner-image').css('-webkit-filter', 'blur(0px)');
	$('.banner-image').delay(300).animate({blurRadius: 2}, {
		duration: 500,
		step: function() {
			$('.banner-image').css({
				"-webkit-filter": "blur(" + this.blurRadius + "px)",
				"filter": "blur(" + this.blurRadius + "px)"
			});
		},

		complete: function() {
			$('.banner-text h1').animate({
				opacity: 1,
				top: '-20px'
			}, 600, function() {
				$('.banner-text p').animate({
					opacity: 1,
					top: '-20px'
				}, 600);
			});
		}
	});
});