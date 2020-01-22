@extends('home.layout')

@section('page_title')
	Photo Gallery | Websters Removals & Storage
@endsection

@section('content')
	<h3>Photo Gallery</h3>
	<br /><br /><br />
	<!--
	<iframe class="pg-video" src="https://www.youtube.com/embed/qLjpDt7xfpk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	-->
	<?php
	for ($i = 1; $i <= 57; $i+=3) {
		?>
		<div class="row">
			<div class="col-sm view-fader">
				<img class="img-photo" src="/img/photo-gallery/pg{{$i}}.jpg" />
			</div>
			<div class="col-sm view-fader">
				<img class="img-photo" src="/img/photo-gallery/pg{{$i+1}}.jpg" />
			</div>
			<div class="col-sm view-fader">
				<img class="img-photo" src="/img/photo-gallery/pg{{$i+2}}.jpg" />
			</div>
		</div>
		<?php
	}
	?>
@endsection