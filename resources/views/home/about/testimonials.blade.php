@extends('home.layout')

@section('page_title')
	Testimonials | Websters Removals & Storage
@endsection

@section('content')
	<?php
	if (isset($status)) {
		if ($status == '1') {
			?>
			<div class="alert alert-success">
				Thank you for submitting your testimonial. To prevent spam, we approve testimonials manually before they appear on the site.
			</div>
			<?php
		}
	}
	?>
	@guest
	@else
		<?php
		if (isset($check_delete)) {
			if ($check_delete != 0) {
				?>
				<div class="alert alert-danger">
					Are you sure you want to delete this testimonial?
					<form action="" method="post">
						@csrf
						<input hidden type="text" name="delete_id" value="{{ $check_delete }}" />
						<input type="submit" name="delete" class="btn btn-danger btn-sm" value="Yes" />
						<a href="/about/testimonials" class="btn btn-primary btn-sm">Cancel</a>
					</form>
				</div>
				<?php
			}
		}

		if (isset($deleted)) {
			if ($deleted == '1') {
				?>
				<div class="alert alert-success">
					The testimonial was deleted
				</div>
				<?php
			}
		}
		?>
	@endguest
	<h3>Testimonials</h3>
	<a class="btn btn-primary" id="btn-new-testimonial">Submit Testimonial</a>
	<div id="tab-new-testimonial" style="padding: 10px; border: 1px solid rgba(0, 0, 0, 0.2); display: none;">
		<h4>New Testimonial</h4>
		<p>We appreciate your time in writing a testimonial on our website! Please enter your name (leave blank if you wish to remain anonymous), and a brief description of the work we carried out and how you found your experience with us to be.</p>
		<form action="" method="post">
			@csrf
			<input style="max-width: 300px;" class="form-control" type="text" name="name" placeholder="Your name" />
			<textarea style="margin-top: 5px; height: 200px;" class="form-control" name="description" placeholder="Please enter your testimonial here"></textarea><br />
			<input value="Submit" class="btn btn-primary" type="submit" />
			<a id="btn-cancel-testimonial" class="btn btn-secondary">Cancel</a>
		</form>
	</div><br /><br />
	<?php
	if (isset($data)) {
		foreach ($data as $testimonial) {
			?>
			<div class="view-fader testimonial-div">
				<h4 style="margin: 0;">{{ $testimonial['name'] }}</h4>
				<!--<small style="color: #777; margin-top: -6px;">{{ $testimonial['created_at'] }}</small>-->
				<p style="margin-top: 10px;">{{ $testimonial['description'] }}</p>
				@guest
				@else
					<a href="/about/testimonials/delete/{{ $testimonial['id'] }}" class="btn btn-danger btn-sm">Delete</a>
				@endguest
			</div>
			<?php
		}
	}
	?>
@endsection
